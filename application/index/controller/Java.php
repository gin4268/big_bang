<?php
namespace app\index\controller;
use think\Db;
use think\Request;
    
class Java extends Admin{

    public function menu(){
        parent::menu();
        return view('admin/menu');
    }

    public function Use(){
    	return view('admin/page');
    }

    public function SpringBoot(){
    	return view('admin/page');
    }

    public function IntelliJ(){
    	return view('admin/page');
    }

    public function answer(){
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
