<?php 
//验证器

namespace app\admin\validate;

use think\Validate;

class Article extends Validate
{
	protected $rule = [
		'arc_author'=>'require',
		'arc_title'=>'require',
		'arc_content'=>'require',

	];
	protected $message = [
		'arc_author.require'=>'作者不能为空',
		'arc_title.require'=>'文章标题不能为空',
		'arc_content.require'=>'文章正文不能为空',
	];
}