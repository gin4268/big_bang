<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\phpStudy\WWW\java/application/index\view\index\index.html";i:1522918697;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<frameset cols="20%,80%" border="1" framespacing="0">
	<frameset rows="30%,70%" border="1" framespacing="0">
		<frame src="<?php echo url('index/menu'); ?>" name="frame1" >
		<frame src="<?php echo url('php/menu'); ?>" name="frame2">
	</frameset>
	<frame scrolling='yes' src="<?php echo url('php/used'); ?>" name="frame3">
</frameset>

</iframe>
</html>
