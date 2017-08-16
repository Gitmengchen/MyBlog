<?php 

namespace app\common\model;

use think\Model;

class Tag extends Model
{
	protected $pk = "tag_id";//主键
	protected $table = "blog_tag";//操作的数据表
	//添加标签
	public function store($data)
	{
		//1.验证
		$result = $this->validate(true)->save($data,$data['tag_id']);
		//2.执行添加
		if($result)
		{
			//执行成功
			return ['valid'=>1,'msg'=>'操作成功'];
		}else{
			return ['valid'=>0,'msg'=>$this->getError()];
		}	
	}
}