<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

// 输出日志
function error_log1($path='/big_bang.log',$content){
	// 创建文件
	if(!file_exists($path)){
		fopen($path, "w");
	}
	$file = file_get_contents($path);
	$update_str = $file.PHP_EOL.date('Y-m-d H:i:s',$_SERVER['REQUEST_TIME']).'：  '.$content;
	file_put_contents($path, $update_str);
}

// 检查是否为空
function checkinput($input){
	if(!empty($input)){
		return true ;
	}else{
		return false;
	}
}

// ajax返回格式
function returnajax($state=0,$msg='',$data=''){
	$return['state'] = $state;
    $return['msg'] = $msg;
    $return['data'] = $data;
    return $return ;
}

// 去除首尾空格
function dealinputval($input){
	return trim($input);
}


