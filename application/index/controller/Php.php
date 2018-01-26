<?php
namespace app\index\controller;
use think\Db;
use think\Request;

class Php extends Admin{

    public function menu(){
    	$request=Request::instance();
    	$control = $request->controller();
    	$res = Db::table('cloud_menu')->where('pid',0)->where('control',$control)->find();
    	$info = Db::table('cloud_menu')->where('pid',$res['id'])->where('control',$control)->select();
    	$this->assign('info',$info);
    	return view();
    }

    public function used(){
    	return view('use');
    }

    public function string(){
    	return view('string');
    }

    public function func(){
    	return view('function');
    }

    public function exception(){
    	return view('exception');
    }
}
