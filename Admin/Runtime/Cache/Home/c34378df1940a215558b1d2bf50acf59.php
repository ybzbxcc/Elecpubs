<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>编写博文</title>
 	<link rel="shortcut icon" type="image/x-icon" href="/Blog/Public/images/icon.ico" />
 	<link rel="stylesheet" href="/Blog/Public/css/admin.css">
 	<link rel="stylesheet" href="/Blog/Public/css/font-awesome.css">
</head>
<body>
	<div class="container-fluid" id="mainwrap">
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
				<form action="<?php echo U('sendBlog');?>" method="post" id="article_form" enctype="multipart/form-data">
					<div class="col-md-8 col-sm-8" id="wrapbody">
							<h1>Add New Post</h1>
							<div>
								<input type="text" placeholder="Type the title" name="title" id="title" required>
								<textarea name="content" id="editor1" rows="18" cols="80" class="ckeditor">
					            </textarea>
						        <input type="submit" id="submit" placeholder="Submit">
							</div>
					</div>
					<div class="col-md-4 col-sm-4" id="wrapside">
						<div class="widget" id="tag">
							<div class="widget-title">Categories</div>
							<div class="widget-body">
								<ul>
									<?php foreach ($tags as $key => $value): ?>
									<li>
										<label>
											<input type="radio" name="tag" value="<?php echo $value['id']; ?>" /> 
											<?php echo $value['tagname']; ?>
										</label>
									</li>
									<?php endforeach ?>
								</ul>
								<input type="button" value="Add New Tags"/>
							</div>
						</div>
						<div class="widget">
							<div class="widget-title">Excerpt Image</div>
							<div class="widget-body">
								<input type="file" name="img" id="img"/>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="http://libs.baidu.com/jquery/2.1.3/jquery.min.js"></script>
	<script src="/Blog/Public/js/Admin/ckeditor.js" ></script>
	<script src="/Blog/Public/js/Admin/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
	<script src="/Blog/Public/js/Admin/admin.js"></script>
</body>
</html>