<?php if (!defined('THINK_PATH')) exit();?>
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
		<article class="page">
			<div class="page-title">归档</div>
			<?php foreach ($archive as $year => $yvalue): ?>
				<?php foreach ($yvalue as $month => $mvalue): ?>
					<?php foreach ($mvalue as $day => $dvalue): ?>
						<div class="page-body" id="sort">
							<h3>
								<span id="sort-title">
									<?php echo $year.'年'.' '.$month.'月'.' '.$day.'日'; ?>
								</span>
								<span id="sort-line"></span>
							</h3>
							<ul>
								<?php foreach ($dvalue as $key => $value): ?>
									<li>
										<a href="<?php echo U(setHref($value['label'], $value['id']));?>">
											<?php echo $value['title']; ?>
										</a>
										<span class="sort-view">
											<?php echo $value['pageview'] ?> views
										</span>
									</li>
								<?php endforeach ?>
							</ul>
						</div>	
					<?php endforeach ?>
				<?php endforeach ?>
			<?php endforeach ?>
			
		</article>
	</div>
	<div class="col-md-3 hidden-xs col-sm-3">
		<div id="sidebar">
			<div class="panel" id="panelfixed">
				<div class="panel-title"><i class="icon icon-fire"></i> 热门文章</div>
				<div class="panel-body">
					<?php foreach ($bloglist as $key => $value): ?>
						<div class="panel-list">
							<a href="<?php echo U(setHref($value['label'],$value['id']));?>" target="_blank">
								<?php echo $value['title']; ?>
							</a> 
						</div>
					<?php endforeach ?>
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
<script src="/Public/js/VQuery.js" type="text/javascript"></script>
<script src="/Public/js/index.js" type="text/javascript"></script>
</body>
</html>