<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\phpStudy\WWW\java/application/index\view\admin\page.html";i:1520989606;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $pagename; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="__CSS__/my.css">
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushBash.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushCpp.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushCSharp.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushCss.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushDelphi.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushDiff.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushGroovy.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushJava.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushPhp.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushPlain.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushPython.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushRuby.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushScala.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushSql.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushVb.js"></script>
<script type="text/javascript" src="__JS__/syntaxhighlighter/scripts/shBrushXml.js"></script>
<link type="text/css" rel="stylesheet" href="__JS__/syntaxhighlighter/styles/shCore.css"/>
<link type="text/css" rel="stylesheet" href="__JS__/syntaxhighlighter/styles/shThemeDefault.css"/>
<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="__JS__/function.js"></script>
<script type="text/javascript" charset="utf-8" src="__JS__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__JS__/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="__JS__/ueditor/lang/zh-cn/zh-cn.js"></script>
<link rel="stylesheet" href="__CSS__/viewer.min.css">
<script src="__JS__/viewer.min.js"></script>
<script type="text/javascript">
	SyntaxHighlighter.config.clipboardSwf = '__JS__/syntaxhighlighter/scripts/clipboard.swf';
	SyntaxHighlighter.all();
</script>
<body>
	<div name='title' class='top1'>
		<p class='title1'><?php echo $pagename; ?></p>
		<p class='line1'></p>
	</div>
<a href="javascript:scrollTo(0,0);" class='totop'>顶部↑</a>
<div class='acard'>
	<notempty name="info">
	<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
		<a href="#<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</notempty>
</div>
<!-- 按钮组 -->
<div class='pagebtn'>
	<input type="button" value='添加' id='showaddformbtn'/>
	<input type="button" value='修改' id='showchangeformbtn'/>
	<select hidden="hidden" name="selectchange" id='selectchange'>
			<option value="0">---请选择---</option>
		<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
			<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</select>
	<input type="button" value='删除' id='deletebtn'/>
	<form style='display: inline-block;' id='delform' action="del" method="post">
		<select hidden="hidden" name="selectdelete" id='selectdelete'>
				<option value="0">---请选择---</option>
			<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
				<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
	</form>
</div>
<!-- 按钮组结束 -->

<!-- 提交表单 -->
<form hidden="hidden" enctype="multipart/form-data" class='pageform1' action="confirm" method="post" onsubmit = "return form_submit()">
	<input type="hidden" id='id' name='id'>
	<input type="hidden" value='<?php echo $pageid; ?>' name='pageid'>
	<input type="hidden" value='<?php echo $action; ?>' name='action'>
	<div name='contentcard1' class='width1'>
		<div name='littletitle' class='title2'><input name='title' id='title' placeholder="标题" type="text"/></div>
		<div name='content' class='width2 content_div'>
			<input placeholder="注释" type="text" class='content-input1' name='content[0][]'>
			<textarea id="editor_id1" name="content[0][]" class='content_form' type="text/plain" style="width:100%;height:200px;margin-top: 10px;margin-bottom: 10px;"></textarea>
		</div>
		<input type="button" class='addcontent' value='增加'>
		<div class='content1'>解释说明：
			<div class='mark1'>
				<input class='width2' id='desc' type="text" placeholder="解释说明" name='desc'/>
			</div>
		</div>
		<input type="text" name='sort' id='sort' placeholder="排序"/>
		<p id='fileblock'>
			<input type="file" id='img1' name='img[]'>
			<input type="button" id='addimg' value='添加图片'/>
			<input type="button" id='delimg' value="选择删除">
			<select style='width: 50px;' name="" id='delimgselect'>
			</select>
		</p>
		<p id='imgblock'>
		</p>
	</div>
	<input type="submit" value='提交' />
<p class='line2'></p>
</form>
<!-- 提交表单结束 -->

<!-- 内容 -->
<notempty name="info">
<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
	<div id='<?php echo $vo['id']; ?>' name='contentcard1' class='width1'>
		<div name='littletitle' class='title2'><?php echo $vo['title']; ?></div>
		<div name='content' class='width2'>
<?php if(is_array($vo['content']) || $vo['content'] instanceof \think\Collection || $vo['content'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$in): $mod = ($i % 2 );++$i;if(empty($in[0]) || (($in[0] instanceof \think\Collection || $in[0] instanceof \think\Paginator ) && $in[0]->isEmpty())): else: ?>

		<?php echo $in[0]; endif; ?>
<pre class="brush: c-sharp;">
<?php echo $in[1]; ?>
</pre>
<?php endforeach; endif; else: echo "" ;endif; ?>

			<div class='content1'>解释说明：
				<div class='mark1'>
					<?php echo $vo['desc']; ?>
				</div>
			</div>
			<div class='imgblock'>
				<?php if(!(empty($vo['img']) || (($vo['img'] instanceof \think\Collection || $vo['img'] instanceof \think\Paginator ) && $vo['img']->isEmpty()))): if(is_array($vo['img']) || $vo['img'] instanceof \think\Collection || $vo['img'] instanceof \think\Paginator): $k = 0; $__LIST__ = $vo['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($k % 2 );++$k;?>
						<img style='margin: 10px;height: 150px; ' id='viewer<?php echo $k; ?>' src="__UPLOAD__/<?php echo $val; ?>" data-original="" alt="">
					<?php endforeach; endif; else: echo "" ;endif; endif; ?>
			</div>
		</div>
	</div>
<p class='line2'></p>
<?php endforeach; endif; else: echo "" ;endif; ?>
</notempty>
<!-- 内容结束 -->

</body>
<script>
	var index = 1;
	var editorarr = [];
	$(function(){
		editorarr.push(UE.getEditor('editor_id'+index));
	});
	// 点击添加内容
	$('.addcontent').click(function(){
		$('.content_div:last').after("<div name='content' class='width2 content_div'><input placeholder='注释' type='text' class='content-input1' name='content["+index+"][]'><textarea id='editor_id"+(index+1)+"' name='content["+index+"][]' class='content_form' type='text/plain' style='width:100%;height:200px;margin-top: 10px;margin-bottom: 10px;'></textarea></div>");
		index++;
		editorarr.push(UE.getEditor('editor_id'+index));
	});

	// 表单验证
	function form_submit(){
		var title = $('#title').val();
		var l = 1;  // 控制表单提交
		if(title == '' || title == null || title == undifind){
			alert('请输入标题');
			return false;
		}
		return true;		
	}

	// 添加按钮事件
	$('#showaddformbtn').click(function(){
		if($(this).val() == '添加'){
			$('.pageform1').attr('id','addform');
			$('.pageform1').show();
			$(this).val('取消');
			$(this).unbind('click()');
			$(this).click(function(){
				$('#addform').hide();
			});

		}else if($(this).val() == '取消'){
			$('#addform').hide();
			$(this).val('添加');
			$(this).unbind('click()');
			$(this).click(function(){
				$('#addform').show();
			});
		}

	});

	// 修改按钮事件
	$('#showchangeformbtn').click(function(){
		if($(this).val() == '修改'){
			$('#selectchange').show();
			$(this).val('隐藏');
			$(this).unbind('click()');
			$(this).click(function(){
				$('#changeform').hide();
				$('#selectchange').hide();
			});
		}else if($(this).val() == '隐藏'){
			// $('#changeform').hide();
			$(this).val('修改');
			$(this).unbind('click()');
			$(this).click(function(){
				$('#selectchange').show();
			});
		}
	});

	// 修改下拉框改变事件
	$('#selectchange').change(function(){
		index = 1;
		// 销毁编辑器,删除数组
		if(editorarr.length > 1){
			for (var i = 0; i < editorarr.length; i++) {
				if(i > 0){
					// editorarr[i].destroy();
					UE.delEditor('editor_id2');
				}
			}
			editorarr.splice(1,editorarr.length-1);
		}
		var id = $(this).val();
		$('#id').val('');
		$('.pageform1').attr('id','changeform');
		$('.pageform1').show();
		$('.content_div:first').siblings('.content_div').remove();
		if(id == 0){
		  	$('#id').val('');
		  	$('#title').val('');
		  	$('#desc').val('');
		  	$('.content-input1').val('');
  			editorarr[0].setContent('');
			return ;
		}
		$.ajax({
			url: 'getchangedata',
			type: 'POST',
			data: {
				id : id
			},
			dataType:'json',
			success: function (data) {
			  if(data.state == 1){
			  	data = data.data;
			  	var content = data.baidu_content;
			  	$('#title').val(data.title);
			  	$('#desc').val(data.desc);
			  	$('#id').val(data.id);
			  	$('#sort').val(data.sort);
			  	if(data.img){
				  	for (var i = 0; i < data.img.length; i++) {
				  		// 将旧图片数据放上
				  		$('.pageform1').append("<input class='oldimg' type='hidden' value='"+data.img[i]+"' name='oldimg[]'>");
				  		// 在删除图片下拉框中添加数据
			  			$('#delimgselect').append("<option value='"+(i+1)+"'>"+(i+1)+"</option>");
			  			// 添加图片显示
			  			var index = parseInt((''+new Date().getTime()).slice(10)+Math.random()*1000);
			  			$('#imgblock').append("<img style='margin: 10px;height: 150px;' src='__UPLOAD__/"+data.img[i]+"' data-original='' alt=''>");
			  		}
			  		// 初始化图片查看器
				  	$('#imgblock img').viewer();
			  	}
			  	// 初始化所有百度编辑器
			  	for (var i = 0; i < content.length; i++) {  
			  		if(i > 0){
			  			var index = getindex();
						$('.content_div:last').after("<div name='content' class='width2 content_div'><input placeholder='注释' type='text' class='content-input1' name='content["+index+"][]'><textarea id='editor_id"+(index+1)+"' name='content["+index+"][]' class='content_form' type='text/plain' style='width:100%;height:200px;margin-top: 10px;margin-bottom: 10px;'></textarea></div>");
			  			changeindex();
						// setTimeout(function(){
						editorarr.push(UE.getEditor('editor_id'+(index+1)));
						// },1);
			  		}
			  	}
			  	// 添加百度编辑器内容
			  	editorarr[editorarr.length-1].ready(function() {
					setTimeout(function(){
				  		for (var i = 0; i < content.length; i++) {
			  				$($('.content-input1')[i]).val(content[i][0]);
	  						editorarr[i].setContent(content[i][1]);
				  		}
					},10);
			  	});
			  }else if(data.state == 0){
			  	alert(data.msg);
			  }
			}
		});

	});

	// 文章删除操作
	$('#deletebtn').click(function(event) {
		if($(this).val() == '取消'){
			$('#confirmbtn').remove();
			$(this).val('删除');
			$('#selectdelete').hide();
		}else if($(this).val() == '删除'){
			$('#selectdelete').show();
			$('#delform').after("<input type='button' value='确定' id='confirmbtn'/>");	
			$(this).val('取消');
			// 确定删除操作
			$('#confirmbtn').click(function(event) {
				if(!confirm('确定删除吗?')) return ;
				$('#delform').submit();
			});
		}
	});

	// 本地浏览上传图片
	$("#fileblock").on("change","input[type='file']", function() {
		var index = $('#delimgselect option:last').index();
		$('#delimgselect').append("<option value='"+(index+2)+"'>"+(index+2)+"</option>");
		var path = this.files[0];
	    var url = '';
	    if (window.createObjectURL!=undefined) { // basic
	        url = window.createObjectURL(path) ;
	    } else if (window.URL!=undefined) { // mozilla(firefox)
	        url = window.URL.createObjectURL(path) ;
	    } else if (window.webkitURL!=undefined) { // webkit or chrome
	        url = window.webkitURL.createObjectURL(path) ;
	    }
	    index = parseInt($(this).attr('id').slice(3));
	    $('#imgblock').append("<img style='margin: 10px;height: 150px; ' id='viewer"+index+"' src='' data-original='' alt=''>");
	    $('#viewer' + index).viewer();
	    $('#viewer' + index).attr('src',url);
	});

	// 添加图片上传
	$('#addimg').click(function(){
		var index = parseInt((''+new Date().getTime()).slice(10)+Math.random()*1000);
		$(this).before("<input type='file' id='img"+index+"' name='img[]'>");
		// $(this).before("<input type='file' id='img"+index+"' name='img[]'><input type='button' value='取消' class='cancelimg' id='"+index+"'/>");
	});

	$('.imgblock img').viewer();

	// 修改时删除已有图片
	$('#delimg').click(function(){
		if(confirm('确定删除此图片吗？')){
			// 获取删除下拉框的索引
			var index = $('#delimgselect').val();
			// 获取对应图片id
			var id = $('#imgblock img').eq(index-1).attr('id');
			// 若图片id存在,说明是新图片,不存在说明是旧图片
			if(id){
				var id = $('#imgblock img').eq(index-1).attr('id').slice(6);
				$('#imgblock img').eq(index-1).remove();
				$('#img'+id).remove();
			}else{
				$('#imgblock img').eq(index-1).remove();
				$('.oldimg').eq(index-1).remove();
			}
			$('#delimgselect option:last').remove();
		}
	});

	/*$("#fileblock").on("click",".cancelimg", function() {
		$('#img'+$(this).attr('id')).remove();
		$(this).remove();
	});*/

	function changeindex(){
		index++;
	}

	function getindex(){
		return index;
	}


</script>
</html>