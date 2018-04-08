<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
    
class Cron extends Controller{

    public function hour(){
        error_log1('log1.txt',date('Y-m-d H:i:s',$_SERVER['REQUEST_TIME']));
    }
}
