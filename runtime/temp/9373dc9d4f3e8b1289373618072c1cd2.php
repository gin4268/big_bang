<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"D:\phpStudy\WWW\java/application/index\view\menu\show.html";i:1520304338;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $pagename; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="__CSS__/my.css">

<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="__JS__/function.js"></script>

<body>
	<div name='title' class='top1'>
		<p class='title1'><?php echo $pagename; ?></p>
		<p class='line1'></p>
	</div>
<a href="javascript:scrollTo(0,0);" class='totop'>顶部↑</a>
<!-- 按钮组 -->
<div class='pagebtn'>

	<input type="button" value='添加' id='addbtn'/>
	<form style='display: none;' id='addform' action="add" method="post">
		<select name="selectadd" id='selectadd'>
				<option value="0">---请选择父级---</option>
			<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
				<option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<input type="hidden" id='type' name="type">
		<input type="text" placeholder="内容" name='addtext'>
		<input type="text" placeholder="控制器" name='control'>
		<input type="text" placeholder="方法" name='action'>
	</form>

	<input type="button" value='修改' id='edit'/>
	<input type="button" value='删除' id='delbtn'/>
	<form style='display: none;' id='delform' action="del" method="post">
		<select name="selectdelete" id='selectdelete'>
				<option value="0">---请选择---</option>
			<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
				<option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
				<?php if(!(empty($vo['data']) || (($vo['data'] instanceof \think\Collection || $vo['data'] instanceof \think\Paginator ) && $vo['data']->isEmpty()))): if(is_array($vo['data']) || $vo['data'] instanceof \think\Collection || $vo['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$io): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $io['id']; ?>">----<?php echo $io['name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
		</select>
	</form>

	<input type="button" value='保存当前设置状态' id='save'/>

</div>
<!-- 按钮组结束 -->

<!-- 目录结构 -->
<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
<dl class='menu_dl'>
<?php if(($vo['is_show'] == 1)): ?>
	<input checked="checked" type="checkbox" value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; else: ?>
	<input type="checkbox" value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; endif; if(!(empty($vo['data']) || (($vo['data'] instanceof \think\Collection || $vo['data'] instanceof \think\Paginator ) && $vo['data']->isEmpty()))): if(is_array($vo['data']) || $vo['data'] instanceof \think\Collection || $vo['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$io): $mod = ($i % 2 );++$i;if(($io['is_show'] == 1)): ?>
				<dt>&nbsp;&nbsp;&nbsp;&nbsp;<input checked="checked" type="checkbox" value="<?php echo $io['id']; ?>"><?php echo $io['name']; ?></dt>
			<?php else: ?>
				<dt>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="<?php echo $io['id']; ?>"><?php echo $io['name']; ?></dt>
			<?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
</dl>
<?php endforeach; endif; else: echo "" ;endif; ?>
<!-- 目录结构结束 -->


</body>
<script>

	// 删除按钮
	$('#delbtn').click(function(){
		if($(this).val() == '确定'){
			if(confirm('确定删除吗?')){
				$('#delform').submit();
				return;
			}
		}else{
			$('#delform').css('display','inline-block');
			$(this).val('确定');
		}
	});

	// 添加按钮
	$('#addbtn').click(function(){
		if($(this).val() == '确定'){
			if(confirm('确定添加吗?')){
				$('#addform').submit();
				return;
			}
		}else{
			$('#addform').css('display','inline-block');
			$('#type').val('add');
			$(this).val('确定');
		}
	});

	// 保存当前状态
	$('#save').click(function(){
		if(confirm('确定保存当前状态吗?')){
			
		}
	});

	// 修改操作
	$('#edit').click(function(){
		if($(this).val() == '确定'){
			if(confirm('确定修改吗?')){
				$('#addform').submit();
				return;
			}
		}else{
			$('#addform').css('display','inline-block');
			$('#type').val('edit');
			$(this).val('确定');
		}
	});

</script>
</html>
