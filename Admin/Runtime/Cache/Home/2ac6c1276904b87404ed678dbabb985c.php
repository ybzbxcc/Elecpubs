<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
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
				<article class="page">
					<div class="page-title">
						<?php echo $value['title'] ?>
					</div>
					<div class="page-time">
						<?php echo FormatTime($value['time']); ?>
					</div>
					<blockquote>
						<?php echo $value['summary']; ?>
					</blockquote>
					<div class="page-body">
						<p>
							ST官方提供了一套操作STM32各种外围设备的库，使用该库可以快速的搭建STM32工程，简化工作。
						</p>
						<h4>一、安装STM32库</h4>
						<p>
						    将下载后的stm32f10x_stdperiph_lib.zip解压后得到三个文件夹分别是："Libraries"、"Project"、"Utilities"将这3个目录复制到"Keil uVision4"的安装目录，和目录中的文件覆盖合并。
						</p>
						<h4>二、新建工程</h4>
						<p>
							1、打开"Keil uVision4",在Project菜单中选择新建工程，选择工程要保存的位置，在弹出的“Select Device for target”的对话框中选择使用的STM32单片机的型号如“STM32F103C8”，点确定，然后在弹出的“Copy startup code”的对话框中点选"NO".
						</p>
						<p>2、在Project“Target 1”上点选右键菜单“Option for target target1中设置相关参数”在[Output]选项卡中点选“Create HEX file”，点"Select folder forobjects"设置临时生成的obj文件的存放目录，当然也可以不选择；
						</p>
						<p>3、在[C/C++]选项卡的"Preprocessor Sysmbols"的Define框中做如下定义：USE_STDPERIPH_DRIVER,STM32F10X_MD
						</p>
						<p>其中USE_STDPERIPH_DRIVER表明要使用ST提供的库，在"system_stm32f10x.c"文件中包含的"stm32f10x.h"文件中有如下定义：
						</p>
						<p>其中USE_STDPERIPH_DRIVER表明要使用ST提供的库，在"system_stm32f10x.c"文件中包含的"stm32f10x.h"文件中有如下定义：
						</p>
						<p class="bg-success">
							#ifdef USE_STDPERIPH_DRIVER<br>
  							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include "stm32f10x_conf.h"<br>
							#endif
						</p>
					</div>
					<blockquote>
						本博客所有文章如无特别注明均为原创。<br/>
						复制或转载请以超链接形式注明转自有爱，原文地址《默 – 那英》 
					</blockquote>
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
	
</body>
</html>