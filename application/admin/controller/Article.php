<?php 

namespace app\admin\controller;

use think\Controller;

class Article extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
	//添加文章
	public function store()
	{
		return $this->fetch();
	}
}