<?php 

namespace app\admin\controller;

use think\Controller;

class Article extends Controller
{
	protected $db;
	protected function _initialize()
	{
		parent::_initialize();
		$this->db = new \app\common\model\Article();
	}
	public function index()
	{
		$field = db('article')->select();
		$this->assign('article',$field);
		return $this->fetch();
	}
	//添加文章
	public function store()
	{
		if(request()->isPost())
		{
			//halt(input('post.'));
			$res = $this->db->store(input('post.'));
			if($res['valid'])
			{
				//操作成功
				$this->success($res['msg'],'index');exit;
			}else{
				$this->error($res['msg']);exit;
			}
		}
		return $this->fetch();
	}
	public function del()
	{
		$res = $this->db->del(input('get.arc_id'));
		if($res['valid'])
		{
			$this->success($res['msg'],'index');exit;
		}else{
			$this->error($res['msg']);exit;
		}
	}
}