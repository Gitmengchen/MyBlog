<?php //标签验证器

namespace app\admin\validate;

use think\Validate;

class Tag extends Validate
{
	protected $rule = [
		'tag_name'=>'require',
	];
	protected $message = [
		'tag_name.require' => '标签不能为空',
	];
}