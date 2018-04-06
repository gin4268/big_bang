<?php
namespace app\index\Model;
use think\Db;
use Think\Model;

class CloudContent extends \think\Model {

	// 自动完成字段
	protected $insert = ['create_time','desc_color'];
/*
	protected $update = ['update_time'];

	protected $auto = ['pic','typeid','sort','seo_title','seo_keywords','seo_description','short_title','title','content','is_top','author','source','is_comment'];

	protected function setUpdateTimeAttr(){
		return $_SERVER['REQUEST_TIME'];
	}

	protected function setCreateTimeAttr(){
		return $_SERVER['REQUEST_TIME'];
	}

	protected function setIsCommentAttr(){
		$is_comment = trim(input('request.is_comment'));
		return empty($is_comment)?0:$is_comment;
	}

	protected function setTitleAttr(){
		$title = trim(input('request.title'));
		return empty($title)?'无':$title;
	}

	protected function setShortTitleAttr(){
		$short_title = trim(input('request.short_title'));
		return empty($short_title)?'无':$short_title;
	}

	protected function setAuthorAttr(){
		$author = trim(input('request.author'));
		return empty($author)?'无':$author;
	}

	protected function setSourceAttr(){
		$source = trim(input('request.source'));
		return empty($source)?'无':$source;
	}

	protected function setIsTopAttr(){
		$is_top = trim(input('request.is_top'));
		return empty($is_top)?0:$is_top;
	}

	protected function setContentAttr(){
		$content = trim(input('request.content'));
		return empty($content)?'无':$content;
	}

	protected function setSeoDescriptionAttr(){
		$seo_description = trim(input('request.seo_description'));
		return empty($seo_description)?'无':$seo_description;
	}

	protected function setSeoKeywordsAttr(){
		$seo_keywords = trim(input('request.seo_keywords'));
		return empty($seo_keywords)?'无':$seo_keywords;
	}

	protected function setSeoTitleAttr(){
		$seo_title = trim(input('request.seo_title'));
		return empty($seo_title)?'无':$seo_title;
	}

	protected function setSortAttr(){
		$seo_title = trim(input('request.seo_title'));
		return empty($seo_title)?0:$seo_title;
	}

	protected function setTypeidAttr(){
		$typeid = trim(input('request.typeid'));
		return empty($typeid)?0:$typeid;
	}*/

	protected function setCreateTimeAttr(){
		return $_SERVER['REQUEST_TIME'];
	}

	protected function setDescColorAttr(){
		return '#880015';
	}

}
?>