<?php
namespace app\index\controller;
use think\Db;
use think\Request;
    
class C extends Admin{

    public function menu(){
        parent::menu();
        return view('admin/menu');
    }

    public function used(){
    	return view('admin/page');
    }

    public function exception(){
    	return view('admin/page');
    }

    public function string1(){
    	return view('admin/page');
    }

    public function note(){
    	return view('admin/page');
    }

    public function project(){
        return view('admin/page');
    }

    public function win(){
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
