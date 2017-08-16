<?php 

namespace app\admin\controller;

use think\Controller;

class Tag extends Controller
{
	protected $db;
	public function _initialize()
	{
		parent::_initialize();
		$this->db = new \app\common\model\Tag();
	}
	public function index()
	{
		//获取首页数据
		// 查询状态为1的用户数据 并且每页显示10条数据
		//$list = Db::name('user')->where('status',1)->paginate(10);
		//查询所有标签，并且每页显示10条数据
		// 把分页数据赋值给模板变量list
		//$this->assign('list', $list);
		$field = db('tag')->paginate(5);
		$this->assign('field', $field);
		return $this->fetch();
	}
	//添加标签+编辑标签
	public function store()
	{
		$tag_id = input('param.tag_id');

		if(request()->isPost())//添加请求
		{
			$res = $this->db->store(input("post."));
			if($res['valid'])
			{
				//执行成功
				$this->success($res['msg'],'index');exit;
			}else{
				$this->error($res['msg']);exit;
				//执行失败
			}
		}
		if($tag_id)
		{
			//编辑请求
			$oldData = $this->db->find($tag_id);
		}else{
			//添加
			$oldData = ['tag_name'=>''];
		}
		$this->assign('oldData',$oldData);
		return $this->fetch();
	}
	//删除操作
	public function del()
	{
		$tag_id = input('get.tag_id');
		if(\app\common\model\Tag::destroy($tag_id))
		{
			//成功提示
			$this->success('操作成功','index');exit;
		}else{
			$this->error('操作失败');exit;
		}
	}
}