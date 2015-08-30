<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>个人博客-关注于电子世界的蚂蚁</title>
	<link rel="stylesheet" href="/Public/css/style.css">
	<link rel="stylesheet" href="/Public/css/index.css">
</head>
<body>
	<header>
	<div id="masthead">
		<div class="container">
			<div id="profile">
				<img src="/Public/images/girl.jpg" alt="头像">
			</div>
			<h1>电子客栈</h1>
			<p>我们不停的翻弄着回忆  却再也找不回那时的自己红尘一梦，不再追寻</p>
		</div>
	</div>
	<nav id="navigation">
		<div class="container">
			<ul>
				<li class="navactive"><a href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a href="">留言板</a></li>
				<li><a href="">关于我</a></li>
				<li class="clear"></li>
			</ul>
		</div>
	</nav>
</header>
	<div class="container" id="content">
		<div class="col-md-8">
			<?php foreach ($article as $key => $value): ?>
				<article class="card">
					<div class="card-title"><a href="<?php echo U('article/stm32'.'/'.$value['id']);?>"><?php echo $value['title']; ?></a></div>
					<div class="card-time"><?php echo FormatTime($value['time']); ?></div>
					<div class="card-body">
						<div class="card-content">
							<?php echo $value['summary']; ?>
						</div>
						<div class="card-img hidden-xs">
							<?php if ($value['label']==1): ?>
								<img src="/Public/images/altium.jpg" alt="altium">
							<?php endif ?>
						</div>
						<div class="clear"></div>
					</div>
					<div class="card-footer">	
						<ul>
							<li>
								<?php if ($value['label']==1): ?>
									嵌入式
								<?php endif ?>
							</li>
							<li>浏览 <?php echo $value['pageview']; ?></li>
							<li>回复 <?php echo $value['reply']; ?></li>
							<div class="clear"></div>
						</ul>
					</div>
				</article>		
			<?php endforeach ?>
		</div>
		<div class="col-md-3 hidden-xs">
			<div class="panel">
				<div class="panel-title">热门文章</div>
				<div class="panel-body">
					
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<footer>
	<div class="container">
	<p>
		©2015 粤ICP备15047769号 Designed By 一封信
	</p>
	<div id="totop"><a onclick="PageScroll()">^</a></div>
	</div>
</footer>
	<script src="/Public/js/index.js"></script>
</body>
</html>