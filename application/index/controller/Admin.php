<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;

class Admin extends Controller{

	// 初始化方法
    function _initialize(){
        if(!Session::has('username')){
            $this->redirect('Login/login');
            return ;
        }

    	$request=Request::instance();
    	$request->module();
    	// 获取当前页面id
		$res = Db::table('cloud_menu')->where([
    		'control' => $request->controller(),
    		'action' => $request->action()
    	])->find();
    	$info = Db::table('cloud_content')->where('menu_id',$res['id'])->order('id,sort')->select();
        foreach ($info as $key => $value) {
            $info[$key]['content'] = json_decode(str_replace('&nbsp;',' ',$value['content']));
            // $info[$key]['content'] = json_decode($value['content']);
            if(!empty($value['img'])){
                $info[$key]['img'] = explode(',', $value['img']);
            }
        }

        // 获取目录数据
        $menu = Db::table('cloud_menu')->order('id')->select();
        foreach ($menu as $key => $value) {
            if($value['pid'] == 0){
                $arr[] = $value;
            }else{
                foreach ($arr as $key2 => $value2) {
                    if($value2['id'] == $value['pid']){
                        $arr[$key2]['data'][] = $value;
                    }
                }
            }
        }
        $this->assign('menu',$arr);

    	$this->assign('action',$request->action());
        $this->assign('info',$info);
        $this->assign('pagename',$res['name']);
    	if($res){
    		$this->assign('pageid',$res['id']);
    	}
    }

    // 提交表单
    function confirm(){
        $request=Request::instance()->param();
        // 判断数据
        if(!checkinput($request)){
            $this->error('无请求数据');  return ;
        }
        if(!checkinput($request['title'])){
            $this->error('标题错误');  return ;
        }
        if(!checkinput($request['content'])){
            $this->error('内容错误');  return ;
        }
        if(!checkinput($request['action'])){
            $this->error('参数错误');  return ;
        }

        
        // 拼接存储数据
        $data['title'] = dealinputval($request['title']);
        $data['menu_id'] = dealinputval($request['pageid']);
        $data['content'] = dealinputval(strip_tags(str_replace(array('<\/p>','<br\/>'), '\r\n', json_encode($request['content']))));
        $data['baidu_content'] = dealinputval(json_encode($request['content']));
        if(checkinput($request['desc'])){
            $data['desc'] = dealinputval($request['desc']);
        }
        $data['sort'] = dealinputval($request['sort']);

        $data['img'] = '';

        // 修改时拼接旧图片路径
        if(!empty($request['oldimg'])){
            $oldimg = input('post.oldimg/a');
            foreach ($oldimg as $value) {
                $data['img'] .= $value.',';
            }
        }
        
        // 拼接新图片路径
        $files = request()->file('img');
        if(!empty($files)){
            foreach($files as $file){
                if(!empty($file)){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'upload');
                    if($info){
                        $data['img'] .= $info->getSaveName().',';
                    }else{
                        $this->error($file->getError());  return ;
                    }
                }
            }
        }

        $data['img'] = rtrim($data['img'],',');

        $table = model('cloud_content');

        if(empty($request['id'])){  // 添加数据操作
            $res = $table->save($data);
            if($res){
                 $this->success('添加成功',$request['action']);
            }else{
                 $this->error('添加失败');
            }
        }else{  // 修改数据操作
            $res = $table->where('id',$request['id'])->update($data);
            if($res){
                 $this->success('修改成功',$request['action']);
            }else{
                 $this->error('添加失败');
            }
        }
    }

    // 获取修改项数据
    public function getchangedata(){
        $request=Request::instance()->param();
        if(empty($request['id'])){
            return returnajax(0,'参数错误1');
        }
        $info = Db::table('cloud_content')->where('id',$request['id'])->find();
        if(empty($info)){
            return returnajax(0,'参数错误2');
        }
        $info['baidu_content'] = json_decode($info['baidu_content']);
        if(!empty($info['img'])){
            $info['img'] = explode(',', $info['img']);
        }
        return returnajax(1,'返回成功',$info);
    }

    // 删除操作
    public function del(){
        $request=Request::instance()->param();
        if(empty($request['selectdelete'])){
            $this->error('参数错误1');
        }
        $res = Db::table('cloud_content')->where('id',$request['selectdelete'])->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    // 移动操作
    public function move(){
        $request=Request::instance()->param();
        if(empty($request['selectmove'])){
            $this->error('参数错误1');
        }
        if(empty($request['tomove'])){
            $this->error('参数错误2');
        }
        // 不能移动到第一层目录
        $res = Db::table('cloud_menu')->where('id',$request['tomove'])->find();
        if($res['pid'] == 0){
            $this->error('不能移动到第一层目录');
        }
        $data['menu_id'] = $request['tomove'];

        $res = Db::table('cloud_content')->where('id',$request['selectmove'])->update($data);
        if($res){
            $this->success('移动成功');
        }else{
            $this->error('移动失败');
        }
    }

    public function menu(){
        $request=Request::instance();
        $control = $request->controller();
        $res = Db::table('cloud_menu')->where('pid',0)->where('control',$control)->find();
        $info = Db::table('cloud_menu')->where('pid',$res['id'])->where('control',$control)->select();
        $this->assign('info',$info);
    }


}
