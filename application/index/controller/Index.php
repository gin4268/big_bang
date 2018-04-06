<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Admin{

	public function _initialize(){
        parent::_initialize();
    }

    public function index(){
        return view();
    }

    public function menu(){
    	$info = Db::table('cloud_menu')->where('pid',0)->select();
    	$this->assign('info',$info);
    	return view();
    }
}
