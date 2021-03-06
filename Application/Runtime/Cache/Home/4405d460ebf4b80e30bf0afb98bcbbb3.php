<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="copyright" content="xcc">
	<meta name="keywords" content="电子,个人博客,硬件,电子客栈">
	<meta name="description" content="电子客栈，是关注电子发展、专注电子技术的技术博客。提供硬件资料下载与技术知识的个人见解。">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
	<meta name="baidu-site-verification" content="Y6xohpjDZP" />
	<title>下载 - 电子客栈</title>
	<link rel="stylesheet" href="/Blog/Public/css/style.css">
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
		<div class="col-md-9 col-sm-9">
			<div class="page">
				<div class="page-title">下载</div>
				<blockquote>
					本站提供51单片机、stm32、电子设计或学习等常用软件、资料的下载，以及一些本人觉得有用的软件的下载。如果大家还希望下载些其他资料，可在留言板那留言说明一下。<br>
					由于博主挺穷，网站流量不太，故一些大的文件就把他放在百度云上，一般小的文件还是提供直接下载的。望谅解。:)
				</blockquote>
				<div class="page-body" id="sort">
					<h3>
						<span id="sort-title">STC系列</span>
						<span id="sort-line"></span>
					</h3>
					<ul>
						<li>
							<a href="STC/12C5A60S2_CN" target="_blank">stc12c60s2中文手册</a>
						</li>
						<li>
							<a href="stc/12C5A60S2_EN" target="_blank">stc12c60s2英文手册</a>	
						</li>		
					</ul>
				</div>
				<div class="page-body" id="sort">
					<h3>
						<span id="sort-title">单片机视频</span>
						<span id="sort-line"></span>
					</h3>
					<ul>
						<li>
							<a href="http://pan.baidu.com/s/1hqvUuk0" target="_blank">杜洋视频</a>
							<span class="sort-view">密码:7p72</span>
						</li>
						
					</ul>
				</div>
				<div class="page-body" id="sort">
					<h3>
						<span id="sort-title">STM32系列</span>
						<span id="sort-line"></span>
					</h3>
					<ul>
						<li>
							<a href="http://pan.baidu.com/s/1dDqAKF3" target="_blank">JLINK驱动</a>
							<span class="sort-view">密码:s4vd</span>
						</li>
						<li>
							<a href="http://pan.baidu.com/s/1pJl6JGZ" target="_blank">MDK4.70A</a>
							<span class="sort-view">密码:rsa1</span>
						</li>
						<li>
							<a href="http://pan.baidu.com/s/1qWzHMHI" target="_blank">STMISP下载器MCUISP</a>
							<span class="sort-view">密码:srv1</span>
						</li>
						<li>
							<a href="http://pan.baidu.com/s/1hqxqnD6" target="_blank">串口调试助手</a>
							<span class="sort-view">密码:xqp9</span>
						</li>
						<li>
							<a href="http://pan.baidu.com/s/1sjA5jlz" target="_blank">串口监视软件</a>
							<span class="sort-view">密码:tj6p</span>
						</li>
					</ul>
				</div>
				<div class="page-body" id="sort">
					<h3>
						<span id="sort-title">STM32视频</span>
						<span id="sort-line"></span>
					</h3>
					<ul>
						<li>
							<a href="http://pan.baidu.com/s/1qWC9cWc" target="_blank">李想STM32视频</a>
							<span class="sort-view">密码:p1qj</span>
						</li>
						<li>
							<a href="http://pan.baidu.com/s/1bnk9plP" target="_blank">零死角玩转STM32视频</a>	
							<span class="sort-view">密码:sm2n</span>
						</li>	
						<li>
							<a href="http://pan.baidu.com/s/1jGq0GoI" target="_blank">野火STM32视频</a>	
							<span class="sort-view">密码:u1tr</span>
						</li>	
					</ul>
				</div>
			</div>

			<div class="page">
				<div class="page-title">一起分享吧</div>
				<div class="page-body">
					<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到一键分享" href="#" class="bds_mshare" data-cmd="mshare"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到百度贴吧" href="#" class="bds_tieba" data-cmd="tieba"></a><a title="分享到QQ好友" href="#" class="bds_sqq" data-cmd="sqq"></a></div>
					<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
				</div>
			</div>
		</div>
		<div class="col-md-3 hidden-xs col-sm-3">
			<div id="sidebar">
				
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