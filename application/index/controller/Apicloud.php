<?php
namespace app\index\controller;
use think\Db;

class Apicloud extends Admin{

    public function menu(){
    	return view();
    }

    public function used(){
    	return view('use');
    }

    public function aMap(){
    	return view();
    }

    public function bMap(){
    	return view();
    }

    public function exception(){
    	return view();
    }

    public function note(){
    	return view();
    }
}
