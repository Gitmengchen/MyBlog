<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"F:\phpstudy\WWW\MyBlog\public/../application/index\view\index\arclist.html";i:1503045245;s:65:"F:\phpstudy\WWW\MyBlog\public/../application/index\view\base.html";i:1503017479;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>MengChen's Blog-首页</title>
		<!--描述和摘要-->
		<meta name="Description" content=""/>
		<meta name="Keywords" content=""/>
		<!--载入公共模板-->
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/index/org/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
		<script src="__STATIC__/index/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/index/org/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" type="text/css" href="__STATIC__/index/css/index.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/index/css/backTop.css"/>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>欢迎来到MengChen's Blog</h1>
					</div>
				</div>
			</div>
		</header>
		<nav role="navigation" class="navbar navbar-default">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" >
					
						<div class="navbar-header">
							
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
							
								<span class="sr-only">切换导航</span>
								
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						
						<div class="collapse navbar-collapse" id="example-navbar-collapse">
							<ul class="_menu" >
								<li class="_active"><a href="index.html">首页</a></li>
								<li><a href=<?php echo url('admin/Entry/index'); ?>>后台</a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<section>
			<div class="container">
				<div class="row">
					<!--标签规定文档的主要内容main-->
					<!--模板继承-->
<!--标签规定文档的主要内容main-->
<main class="col-md-8">
	<article>
		<div class="_head category_title">
			<h2>
					标签：
					<!--分类：-->
				分类或者标签名称
			</h2>
			<span>
				共 22 篇文章 
			</span>
		</div>
	</article>
	<article>
		<div class="_head">
			<h1>标题</h1>
			<span>
			作者：
			admin
			</span>
			•
			<!--pubdate表⽰示发布⽇日期-->
			<time pubdate="pubdate" datetime="">2015年11月06日11:34:39</time>
			•
			分类：
			<a href="">新闻</a>
		</div>
		<div class="_digest">
		<img src="./images/1.jpg"  class="img-responsive"/>
			<p>
				摘要
			</p>
		</div>
		<div class="_more">
			<a href="" class="btn btn-default">阅读全文</a>
		</div>
		<div class="_footer">
			<i class="glyphicon glyphicon-tags"></i>
			<a href="">php</a>、
			<a href="">php</a>、
			<a href="">php</a>、
		</div>
	</article>
</main>

						<aside class="col-md-4 hidden-sm hidden-xs">
						<div class="_widget">
							<h4>关于本站</h4>
							<div class="_info">
								<p>ThinkPHP5练手小项目</p>
							</div>
						</div>
						<div class="_widget">
							<h4>分类列表</h4>
							<div>
								<a href="">娱乐</a>
							</div>
						</div>
						<div class="_widget">
							<h4>标签云</h4>
							<div class="_tag">
								<a href="">PHP</a>
								<a href="">PHP</a>
								<a href="">PHP</a>
							</div>
						</div>
						
					</aside>
				</div>
			</div>
		</section>
			<footer class="hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="_title">最新文章</h4>
						<div id="" class="_single">
							<p><a href="">标题</a></p>
							<time>2010年11月06日11:24:16</time>
						</div>
							<div id="" class="_single">
							<p><a href="">标题</a></p>
							<time>2010年11月06日11:24:16</time>
						</div>
					</div>
					<div class="col-sm-4 footer_tag">
						<div id="">
							<h4 class="_title">标签云</h4>
							<a href="">PHP</a>
							<a href="">PHP</a>
							<a href="">PHP</a>
						</div>
					</div>
					<div class="col-sm-4">
						<h4 class="_title">友情链接</h4>
						<div id="" class="_single">
							<p><a href="www.iwenhu.cn" target="_blank">MengChen's Blog</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="footer_bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<a href="">网站名称</a>
						 | 
						<a href="">版权信息</a>
						 |
						<a href="">admin@163.com</a>
					</div>
				</div>
			</div>
		</div>
		<!--返回顶部自己写的插件-->
		<script src="__STATIC__/index/js/backTop.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
				//插件使用
				$('.back_top').backTop({right:30});
			})
		</script>
		<div class="back_top hidden-xs hidden-md">
			<i class="glyphicon glyphicon-menu-up"></i>
		</div>
	</body>
</html>