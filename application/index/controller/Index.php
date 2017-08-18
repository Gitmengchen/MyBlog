<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
	protected $article_db;
	protected function _initialize()
	{
		parent::_initialize();
		$this->article_db = new \app\common\model\Article();
	}
	public function index()
	{
		$article = db('article')->select();
		$this->assign('article', $article);
		return $this->fetch();
	}
	public function arclist()
	{
		return $this->fetch();
	}
}
