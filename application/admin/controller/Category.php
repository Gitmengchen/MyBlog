<?php

namespace app\admin\controller;

use think\Controller;
//栏目管理
class Category extends Controller
{
	protected $db;
	protected function _initialize()
	{
		parent::_initialize();
		$this->db = new \app\common\model\Category();
	}
	//主页
	public function index()
	{
		//获取栏目数据
		$field = db('cate')->select();
		$this->assign('field', $field);
		return $this->fetch();
	}
	//添加
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
	//添加子集
	public function addSon()
	{
		if(request()->isPost())
		{
			$res = $this->db->store(input('post.'));
			if($res['valid'])
			{
				//操作成功
				$this->success($res['msg'],'index');exit;
			}else{
				$this->error($res['msg']);exit;
			}
		}
		$cate_id = input('param.cate_id');//get不能用来获取
		$data = $this->db->where('cate_id', $cate_id)->find();
		$this->assign('data',$data);
		return $this->fetch();
	}
	//编辑栏目
	public function edit()
	{
		//接受cate_id
		if(request()->isPost())
		{
			//halt($_POST);
			$res = $this->db->edit(input('post.'));
			if($res['valid'])
			{
				//执行成功
				$this->success($res['msg'],'index');exit;
			}else{
				$this->error($res['msg']);exit;
			}
		}
		$cate_id = input('param.cate_id');
		//获取旧数据
		$oldData = $this->db->find($cate_id);
		$this->assign('oldData',$oldData);
		//处理所属分类（不能包含自己和自己的子集数据）
		$cateData = $this->db->getCateData($cate_id);
		$this->assign('cateData',$cateData);
		return $this->fetch();
	}
	public function del()
	{
		$res = $this->db->del(input('get.cate_id'));
		if($res['valid'])
		{
			$this->success($res['msg'],'index');exit;
		}else{
			$this->error($res['msg']);exit;
		}
	}

}