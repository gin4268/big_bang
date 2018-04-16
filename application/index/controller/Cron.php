<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
    
class Cron extends Controller{

    // 每小时执行
    public function hour(){
        error_log1('log1.txt',date('Y-m-d H:i:s',$_SERVER['REQUEST_TIME']).'  hour');
    }

    // 每分钟执行
    public function min(){
        error_log1('log1.txt',date('Y-m-d H:i:s',$_SERVER['REQUEST_TIME']).'  min');
    }

    // 每天执行
    public function day(){
        error_log1('log1.txt',date('Y-m-d H:i:s',$_SERVER['REQUEST_TIME']).'  day');
    }
}
