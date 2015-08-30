<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="copyright" content="xcc">
	<meta name="keywords" content="电子,个人博客,硬件,电子客栈">
	<meta name="description" content="电子客栈，是关注电子发展、专注电子技术的技术博客。提供硬件资料下载与技术知识的个人见解。">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
	<meta name="baidu-site-verification" content="Y6xohpjDZP" />
	<title>关于 – 电子客栈</title>
	<link rel="stylesheet" href="/Public/css/style.css">
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?5ed8e9247d144c649f6dfb98d9caafd9";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>
</head>
<body>
	<header>
	<div id="stripe"></div>
	<nav id="navigation">
		<div class="container">
			<div id="navbtn" onclick="showNav()"><i class="fa fa-align-justify"></i></div>
			<ul id="navul">
				<li><a href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a href="<?php echo U('Subject/index');?>">专题</a></li>
				<li><a href="<?php echo U('Guestbook/index');?>">留言板</a></li>
				<li><a href="<?php echo U('About/index');?>">关于</a></li>
				<li><a href="<?php echo U('Archive/index');?>">归档</a></li>
				<li><a href="<?php echo U('Download/index');?>">下载</a></li>
				<li class="clear"></li>
			</ul>
			<div id="searchform">
				<form action="" method="post">
					<input type="search" name="search">
					<button id="searchbtn" class="fa fa-search"></button>
				</form>
			</div>
		</div>
	</nav>
</header>

	<div class="container" id="content" onclick="hideNav()">
		<div class="col-md-9 col-sm-9">
			<div class="page">
				<div class="page-title">关于</div>
				<div class="page-body">
					<div class="page-img">
						<img src="/Public/images/scenery.jpg" alt="清新" width="100%">
					</div>
					<p>
						关于博客：这是一个专注于电子类技术的博客，希望大家多多来“临幸”。由于本人水平有限，如果有错还望大家多多指导。
					</p>
					<p>
						关于我：把生活学习中的感悟用博客的形式记录下来，希望多年以后回过头看看曾经自己的时候，能欣慰地一笑。
					</p>
					<p>:)</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-3">
			<div id="sidebar">
				<div class="panel" id="panelfixed">
				</div>
			</div>
		</div>
	</div>

	<footer>
	<div class="container">
	<p>©2015 Designed By XCC</p>
	<p>粤ICP备15047769号 | 访问量:<?php echo $info[0]['webview']; ?></p>
	<div id="scrolltop">^</div>
	</div>
</footer>
<script src="/Public/js/VQuery.js" type="text/javascript"></script>
<script src="/Public/js/index.js" type="text/javascript"></script>
</body>
</html>