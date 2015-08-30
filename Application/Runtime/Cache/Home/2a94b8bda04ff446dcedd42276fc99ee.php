<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="copyright" content="xcc">
	<meta name="keywords" content="电子,个人博客,硬件,电子客栈">
	<meta name="description" content="电子客栈，是关注电子发展、专注电子技术的技术博客。提供硬件资料下载与技术知识的个人见解。">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
	<meta name="baidu-site-verification" content="GjvMGHGZ1p" />
	<meta name="baidu_union_verify" content="508f6e771293cc0d5abb0b6820878783">
	<meta name="360_union_verify" content="443a85d46738ae4b2d5e83aa43307407">
	<meta name="360-site-verification" content="3c104b3517e8c5195e4b42c762015985" />
	<meta name="sogou_site_verification" content="DT23DZ05Hz"/>
	<meta property="qc:admins" content="25021110276545305236375" />
	<title>电子客栈 | 渴望成为个专注电子技术的技术博客</title>
	<link rel="shortcut icon" href="/Blog/Public/images/logo2.ico">
	<link rel="stylesheet" href="/Blog/Public/css/style.css">
	<script>
		var ctrlname = <?php echo "'".CONTROLLER_NAME."'"; ?>;; // obtain the controller name
	</script>
</head>
<body>
<header>
	<div id="stripe"></div>
	<nav id="navigation">
		<div class="container">
			<div id="navbtn" onclick="showNav()"><i class="fa fa-align-justify"></i></div>
			<ul id="navul">
				<li><a href="<?php echo U('Index/index');?>" data-nav="Index">首页</a></li>
				<li><a href="<?php echo U('Guestbook/index');?>" data-nav="Guestbook">留言板</a></li>
				<li><a href="<?php echo U('Archive/index');?>" data-nav="Archive">归档</a></li>
				<li><a href="<?php echo U('Download/index');?>" data-nav="Download">下载</a></li>
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
		<div class="col-md-8-5 col-sm-8-5">
			<?php foreach ($article as $key => $value): ?>
				<article class="card">
					<div class="card-title">
						<a href="<?php echo U(setHref($value['type'], $value['id']));?>">
							<?php echo $value['title']; ?>
						</a>
					</div>
					
					<div class="card-body">
						<div class="card-img ">
							<a href="<?php echo U(setHref($value['type'], $value['id']));?>">
								<img src=<?php echo $value['img']; ?> alt="">
							</a>
						</div>
						<ul class="card-info">
							<li class="card-tag">
								<a href=""><?php echo setLabel($value['type']); ?></a>
							</li>
							<li>
								<i class="fa fa-clock-o"></i>
								<?php echo formatTime($value['time']); ?>
							</li>
							<li class="hidden-xs">
								<i class="fa fa-eye"></i>
								浏览 <?php echo $value['pageview']; ?> 次
							</li>
							<li class="hidden-xs">
								<i class="fa fa-comments-o"></i> <?php echo $value['reply']; ?>
							</li>
						</ul>
						<div class="card-content">
							<?php echo $value['excerpt']; ?>
						</div>
					</div>
					
				</article>		
			<?php endforeach ?>
			<div id="page"><?php echo $page; ?></div>
		</div>
		<div class="col-md-3-5 col-sm-3-5 hidden-xs">
			<div id="sidebar">
	<div class="panel" id="panelfixed"> 
			<div class="panel-title"> 热门文章</div>
			<div class="panel-body">
				<?php foreach ($bloglist as $key => $value): ?>
					<div class="panel-list">
						<a href="<?php echo U(setHref($value['label'], $value['id']));?>">
							<span class="panel-listleft">
								<img src="<?php echo $value['img'] ?>">
							</span>
							<span class="panel-listright">
								<?php echo $value['title']; ?>
							</span>
						</a>
					</div>
				<?php endforeach ?>
			</div>
	</div>

	<div class="panel bg-elegence">
		<div class="panel-title">
			 标签
		</div>
		<div class="panel-body">
			<div class="panel-tag">
				<?php foreach ($tags as $key => $value): ?>
					<a href="<?php echo U(setHref($value['label'], $value['id']));?>">
						<?php echo $value['tagname']; ?>
					</a>
				<?php endforeach ?>
			</div>
		</div>
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

<?php echo getJS(CONTROLLER_NAME); ?>

</body>
</html>