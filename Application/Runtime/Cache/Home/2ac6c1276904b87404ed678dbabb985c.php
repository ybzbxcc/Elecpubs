<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="copyright" content="xcc">
	<meta name="keywords" content="电子,个人博客,硬件">
	<meta name="description" content="电子客栈，是关注电子发展、专注电子技术的技术博客。提供硬件资料下载与技术知识的个人见解。">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
	<title><?php echo $article[0]['title']; ?> – 电子客栈</title>
	<link rel="stylesheet" href="/Blog/Public/css/style.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/styles/school_book.min.css">
	<script>
		var commentUrl = '<?php echo U(comment);?>';	//评论提交异步地址
		var praiseUrl = '<?php echo U(praise);?>';	//评论提交异步地址
		var ctrlname = <?php echo "'".CONTROLLER_NAME."'"; ?>;
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
	<div class="container" id="content">
		<div class="col-md-9 col-sm-9">
			<?php foreach ($article as $key => $value): ?>
				<article class="page">
					<div class="page-title">
						<?php echo $value['title'] ?>
					</div>
					<ul class="page-info">
						<li>
							<?php echo formatTime($value['time']); ?>
						</li>
						<li class="page-tag">
							<a href="">
								<?php echo setLabel($value['type']); ?>
							</a>
						</li>
					</ul>
					<div class="page-body" id="article-content">
						<?php echo $value['content']; ?>
						<div id="page-copyright">
							欢迎分享本文，转载请保留出处，原文地址:
							<a href="<?php echo U(setHref($value['label'], $value['id']));?>" target="_blank"> 
							<?php echo $value['title']; ?> 
							</a>
						</div>
					</div>
					<div id="relative">
						<div class="page-title text-center">相关阅读</div>
						<div class="page-body">
							<div id="relative-wrap">
								<ul>
								<?php foreach ($relative as $key => $value): ?>
									<li>
										<div class="relative-img">
											<a href="<?php echo U( setHref($value['label'], $value['id']) );?>" >
											<img src="<?php echo $value['img']; ?>" alt="<?php echo $value['title']; ?>">
											</a>
										</div>
										<div class="relative-title">
											<a href="<?php echo U( setHref($value['label'], $value['id']) );?>" >
												<?php echo $value['title']; ?>
											</a>
										</div>
										
									</li>
								<?php endforeach ?>
							</ul>
							</div>
						</div>
					</div>
				</article>
			<?php endforeach ?>
			
			<div class="bar">
				<div class="bar-left">
					<a href="">
						<i class="fa fa-arrow-left"></i> 
						<?php if (empty($previous)): ?>
							没有上一篇
						<?php else: ?>
							<?php echo $previous[0]['title']; ?>
						<?php endif ?>
					</a>
				</div>
				<div class="bar-right">
					<a href="">
						<?php if (empty($next)): ?>
							没有下一篇
						<?php else: ?>
							<?php echo $next[0]['title'] ?> 
						<?php endif ?>
						<i class="fa fa-arrow-right"></i>
					</a>
				</div>
			</div>
			<div class="page">
				<div class="page-title" style="font-size:18px;">(<?php echo $comnums; ?>) Comments</div>
				<div class="page-body" id="commentwrap">
					<?php foreach ($comment as $key => $value): ?>
						<div class="comment" id="<?php echo "comment_".$key; ?>" >
							<div class="comment-left">
								<div class="comment-img">
									<img src="/Blog/Public/images/c.jpg" alt=":)">
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
						<?php if (isset($_SESSION['openid'])): ?>
							<div id="userinfo">
								<img src="<?php echo $_SESSION['figureUrl']; ?>" class="user-avatar">
								<span class="user-name"><?php echo $_SESSION['nickname'] ?></span>
							</div>
						<?php elseif(isset($userinfo)): ?>
							<div id="userinfo">
								<img src="<?php echo $userinfo[0]['figureurl']; ?>" class="user-avatar">
								<span class="user-name"><?php echo $userinfo[0]['nickname']; ?></span>
							</div>
						<?php else: ?>
							<div id="login">
								<a id="alogin">登录</a><span>后留言</span>
							</div>
						<?php endif ?>
						<button onclick="return false;" id="comment-btn">提交评论</button>
						<div class="clear"></div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3 hidden-xs col-sm-3">
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
<!-- connecting dialog -->
	<div id="dlogin" class="hidden">
		<i class="fa fa-times" id="exit"></i>
		<div id="login-way">
			<a href="javascript:void(0)" id="connectqq" data-src="qq"><i class="fa fa-qq"></i></a>
			<a href="javascript:void(0)" id="connectwechat" data-src="sina"><i class="fa fa-wechat"></i></a>
			<a href="" id="connectwechat"><i class="fa fa-weibo"></i></a>
		</div>
	</div>
<!-- connecting dialog -->
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