<?php
namespace app\index\controller;
use think\Db;
use think\Request;
    
class Menu extends Admin{

    public function menu(){
        parent::menu();
        return view('admin/menu');
    }

    // 查看当前目录项
    public function show(){
        $info = Db::table('cloud_menu')->order('id')->select();
        foreach ($info as $key => $value) {
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
        $this->assign('info',$arr);
        $this->assign('info2',$info);
    	return view();
    }

    // 添加操作
    public function add(){
        $request=Request::instance()->param();
        $controlpath = ROOT_PATH.'application/index/controller/';
        $viewpath = ROOT_PATH.'application/index/view/';
        if(empty($request['addtext'])){
            $this->error('请输入内容');
            return;
        }
        $data['pid'] = $request['selectadd'];
        $data['name'] = $request['addtext'];
        $data['is_show'] = 1;
        if(empty($request['selectadd'])){
            $data['action'] = 'menu';
            $data['control'] = $request['control'];
        }else{
            $data['action'] = $request['action'];
            $res2 = Db::table('cloud_menu')->where('id',$request['selectadd'])->find();
            if($res2){
                $data['control'] = $res2['control'];
            }else{
                $this->error('参数错误');
                return;
            }
        }
        
        // 新增控制器,初始化新接口文件,不然新增方法
        if(empty($request['selectadd'])){
            if(file_exists($controlpath.'Model.php')){
                copy($controlpath.'Model.php', $controlpath.$request['control'].'.php');
                $file = file_get_contents($controlpath.$request['control'].'.php');
                $update_str = str_replace('pleaseinputfilename', $request['control'], $file);
                file_put_contents($controlpath.$request['control'].'.php', $update_str);
            }else{
                $this->error('模板文件Model.php不存在');
                return ;
            }
        }else{
            $file = file_get_contents($controlpath.$res2['control'].'.php');
            if(strpos($file,'function '.$request['action']) > 0 ){
                $this->error('此方法已存在');
                return ;
            }
            for ($i=1; $i <= 10; $i++) {
                if(strpos($file,'pleaseinputpagename'.$i) > 0){
                    $update_str = str_replace('function pleaseinputpagename'.$i, 'function '.$request['action'], $file);
                    file_put_contents($controlpath.$res2['control'].'.php', $update_str);
                    break;
                }
            }
        }

        $res = Db::table('cloud_menu')->insert($data);
        if($res){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }

    // 删除操作
    public function del(){
        $request=Request::instance()->param();
        if(empty($request['selectdelete'])){
            $this->error('请输入内容');
        }
        $res = Db::table('cloud_menu')->where('id',$request['selectdelete'])->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    public function sort(){
        return view('admin/page');
    }

    public function pleaseinputpagename2(){
        return view('admin/page');
    }

    public function pleaseinputpagename3(){
        return view('admin/page');
    }

    public function pleaseinputpagename4(){
        return view('admin/page');
    }

    public function pleaseinputpagename5(){
        return view('admin/page');
    }

    public function pleaseinputpagename6(){
        return view('admin/page');
    }

    public function pleaseinputpagename7(){
        return view('admin/page');
    }

    public function pleaseinputpagename8(){
        return view('admin/page');
    }

    public function pleaseinputpagename9(){
        return view('admin/page');
    }

    public function sort0(){
        return view('admin/page');
    }

}
