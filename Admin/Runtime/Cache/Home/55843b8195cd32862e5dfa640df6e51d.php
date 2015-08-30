<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
	<title>Admin</title>
 	<link rel="stylesheet" href="/Blog/Public/css/admin.css">
 	<link rel="stylesheet" href="/Blog/Public/css/font-awesome.css">
</head>
<body>
	<div id="mainwrap" class="container-fluid">
		<div class="col-md-2 col-sm-2 hidden-xs" id="sidebar">
			<ul id="menu">
	<li id="profile">
		<img src="/Blog/Public/images/girl.jpg" />
	</li>
	<li><a href="<?php echo U('Index/index');?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
	<li><a href="<?php echo U('Post/index');?>"><i class="fa fa-pencil-square-o "></i>Posts</a></li>
	<li><a href="<?php echo U('Setting/index');?>"><i class="fa fa-cog"></i>Settings</a></li>
</ul>
		</div> 
		<div class="col-md-10 col-sm-10 col-md-offset-2 col-sm-offset-2" id="content">
			<header id="header" class="">
	<ul id="headernav">
		<li id="shownav"><a><i class="fa fa-th"></i></a></li>
		<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
	</ul>
</header>
			<div id="maincontent">
				<h1>Dashboard</h1>
				<div class="page"></div>
				<div class="col-md-7" style="padding-left:0;">
					<div class="widget">
						<div class="widget-title">At a glance</div>
						<div class="widget-body">
						<ul id="glance">
							<li><i class="fa fa-comment"></i> 2 Comments</li>
							<li><i class="fa fa-edit"></i> 4 posts</li>
							<li><i class="fa fa-tags"> 5 categories</i></li>
						</ul>
					</div>
					</div>

				</div>
				<div class="col-md-5" style="padding:0;">
					<div class="card"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>