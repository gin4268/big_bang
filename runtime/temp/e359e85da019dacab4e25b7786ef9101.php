<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\phpStudy\WWW\java/application/index\view\index\menu.html";i:1516932489;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
<ul>
	<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
		<li><a target='frame2' href="<?php echo url($vo['control'].'/'.$vo['action']); ?>"><?php echo $vo['name']; ?></a></li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</body>
</html>
