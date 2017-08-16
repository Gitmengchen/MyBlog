<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Admin;

class Login extends Controller
{
	public function login()
	{
		//测试数据库连接
		//$data = db('admin')->find(1);
		//dump($data);
		if(request()->isPost())
		{	
			$res = (new Admin())->login(input('post.'));
			if($res['valid'])
			{
				//登陆成功
				$this->success($res['msg'], 'admin/entry/index');exit;
			}
			else
			{
				//登录失败
				$this->error($res['msg']);exit;
			}
		}
		//加载登录页面
		return $this->fetch();
	}
}