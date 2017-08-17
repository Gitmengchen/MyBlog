<?php 

namespace app\common\model;

use think\Model;

class article extends Model 
{
	protected $pk = 'article_id';
	protected $table = 'blog_article';
	public function store($data)
	{
		//执行验证
		$result = $this->validate(true)->save($data);
		if(false === $result)
		{
			//验证失败 输出错误信息
			return ['valid'=>0, 'msg'=>$this->getError()];
		}else{
			return ['valid'=>1,'msg'=>'添加成功'];
		}
		//执行添加
	}
}