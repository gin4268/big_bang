<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
    
class Login extends Controller{
    
    // 登录页面
    function login(){
        return view();
    }

    // 登录操作
    function loginin(){
        $request=Request::instance()->param();
        $where['username'] = dealinputval($request['username']);
        $where['password'] = md5(dealinputval($request['password']));
        $res = Db::table('cloud_user')->where($where)->find();
        if($res){
            session('username',$request['username']);
            $this->redirect('index/index');
        }else{
            $this->error('用户名或密码错误');
        }
    }
}
