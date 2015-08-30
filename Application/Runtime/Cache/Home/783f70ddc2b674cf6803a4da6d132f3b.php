<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="copyright" content="xcc">
	<meta name="keywords" content="电子,个人博客,硬件,电子客栈">
	<meta name="description" content="电子客栈，是关注电子发展、专注电子技术的技术博客。提供硬件资料下载与技术知识的个人见解。">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
	<meta name="baidu-site-verification" content="Y6xohpjDZP" />
	<meta name="baidu-site-verification" content="GjvMGHGZ1p" />
	<title>专题 – 电子客栈</title>
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
	<div id="headerbg">
	</div>
	<div id="masthead" onclick="hideNav()">
		<div class="container">
			<div id="profile">
				<img src="/Public/images/girl.jpg" alt="头像">
			</div>
			<h2>电子客栈</h2>
			<p>拿得起放不下的或许只有筷子了</p>
		</div>
	</div>
	<nav id="navigation" style="z-index:10;">
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
				<div class="page-title">专题</div>
					<div class="page-body" id="sort">
						<h3>
							<span id="sort-title">电子世界</span>
							<span id="sort-line"></span>
							<div class="clear"></div>	
						</h3>
						<ul>
							<?php foreach ($electronic as $key => $value): ?>
								<li>
									<a href="<?php echo U('article/stm32'.'/'.$value['id']);?>">
										<?php echo $value['title']; ?>
									</a> 	
									<span class="sort-view">
										<?php echo $value['pageview']; ?> views
									</span>
								</li>
							<?php endforeach ?>
						</ul>
					</div>
					<div class="page-body" id="sort">
							<h3>
								<span id="sort-title">C语言“书法”艺术</span>
								<span id="sort-line"></span>
							</h3>
							<ul>
								<?php foreach ($clang as $key => $value): ?>
									<li>
										<a href="<?php echo U('article/clang'.'/'.$value['id']);?>">
											<?php echo $value['title']; ?>
										</a> 	
										<span class="sort-view">
											<?php echo $value['pageview']; ?> views
										</span>
									</li>
								<?php endforeach ?>
							</ul>
					</div>
					<div class="page-body" id="sort">
							<h3>
								<span id="sort-title">stm32入门</span>
								<span id="sort-line"></span>
							</h3>
							<ul>
								<?php foreach ($stm as $key => $value): ?>
									<li>
										<a href="<?php echo U('article/stm32'.'/'.$value['id']);?>">
											<?php echo $value['title']; ?>
										</a> 	
										<span class="sort-view">
											<?php echo $value['pageview']; ?> views
										</span>
									</li>
								<?php endforeach ?>
							</ul>
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

	<footer onclick="hideNav()">
	<div class="container">
	<p>©2015 Designed By XCC</p>
	<p>粤ICP备15047769号 | 访问量:<?php echo $info[0]['webview']; ?></p>
	<div id="scrolltop" onclick="pageScroll()"></div>
	</div>
</footer>
<script src="/Public/js/VQuery.js" type="text/javascript"></script>
<script src="/Public/js/index.js" type="text/javascript"></script>
<!-- <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1255957443'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1255957443' type='text/javascript'%3E%3C/script%3E"));</script>-->
</body>
</html>