<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="copyright" content="xcc">
	<meta name="keywords" content="电子,个人博客,硬件,电子客栈">
	<meta name="description" content="电子客栈，是关注电子发展、专注电子技术的技术博客。提供硬件资料下载与技术知识的个人见解。">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
	<meta name="baidu-site-verification" content="Y6xohpjDZP" />
	<title>留言板 – 电子客栈</title>
	<link rel="stylesheet" href="/Public/css/style.css">
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?5ed8e9247d144c649f6dfb98d9caafd9";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();

		var commentUrl = '<?php echo U('comment');?>';
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
				<div class="page-title">留言板</div>
				<div class="page-body">
					<div class="page-img">
						<img src="/Public/images/sea.jpeg" alt="看海" style="width:100%">
					</div>
					<p style="float:right;margin-bottom:38px;">不是花还没有开，只是你还没有来。</p>
					<div class="clear"></div>
				</div>
				<div class="page-title" style="font-size:18px;">(<?php echo $comnums; ?>) Comments</div>
				<div class="page-body" id="commentwrap">
					<?php foreach ($comment as $key => $value): ?>
						<div class="comment" id="<?php echo "comment_".$key; ?>" >
							<div class="comment-left">
								<div class="comment-img">
									<img src="/Public/images/c.jpg" alt=":)">
								</div>
							</div>
							<div class="comment-right">
								<div class="comment-title">
									<span class="comment-name">
										<?php echo $value['username']; ?>
									</span>
									<span class="comment-time">
										•<?php echo formatTime($value['time']); ?>
									</span>
								</div>
								<div class="comment-body">
									<div class="comment-content">
										<?php echo $value['content']; ?>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
				<div class="page-body">
					<form method="post" id="commentform">
						<input type="hidden" value="<?php echo $article[0]['id'] ?>" name="articleid" id="articleid"/>
						<textarea name="comment" id="comment" placeholder="畅所欲言吧"></textarea>
						<input type="text" name="username" id="username" placeholder="匿名"/>
						<button onclick="ajaxComment();return false;">提交评论</button>
						<div class="clear"></div>
					</form>
				</div>
				

			</div>

		</div>
		<div class="col-md-3 hidden-xs col-sm-3">
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