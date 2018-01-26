<?php
namespace app\index\controller;
use think\Db;

class Css extends Admin{

    public function menu(){
    	return view();
    }

    public function used(){
    	return view('use');
    }
}
