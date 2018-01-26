<?php
namespace app\index\controller;
use think\Db;

class Html extends Admin{

    public function menu(){
    	return view();
    }

    public function used(){
    	return view('use');
    }

    public function used(){
    	return view('ui');
    }
}
