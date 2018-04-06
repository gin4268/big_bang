<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
    
class File extends Admin{

    public function menu(){
        parent::menu();
        return view('admin/menu');
    }

    // 文件管理页面
    public function filemanager(){
        $res = Db::table('cloud_file')->select();
        $this->assign('content',$res);
    	return view('filemanager');
    }

    // 上传操作
    public function fileup(){
        $request=Request::instance()->param();
        $file = request()->file('file');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'file',$request['filename']);
        if($info){
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            $data['create_time'] = $_SERVER['REQUEST_TIME'];
            $data['filename'] = $request['filename'];
            $data['path'] = $request['filename'].'.'.$info->getExtension();
            $res = Db::table('cloud_file')->insert($data);
            if($res){
                $this->redirect('file/filemanager');
            }
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
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

    // 获取修改项数据
    public function getchangedata(){
        return parent::getchangedata();
    }

    // 删除操作
    public function del(){
        return parent::del();
    }
}
