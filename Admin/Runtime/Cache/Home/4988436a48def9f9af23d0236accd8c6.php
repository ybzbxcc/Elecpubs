<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>Setting | </title>
 	<link rel="stylesheet" href="/blog/Public/css/admin.css">
 	<link rel="stylesheet" href="/blog/Public/css/font-awesome.css">
</head>
<body>
	<div id="mainwrap" class="container-fluid">
		<div class="col-md-2 col-sm-2 hidden-xs" id="sidebar">
			<ul id="menu">
	<li id="profile">
		<img src="/blog/Public/images/girl.jpg" />
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
		<li><a href="/Blog"><i class="fa fa-home"></i> Home</a></li>
	</ul>
</header>

			<div id="maincontent">
				<h1>Settings</h1>
				<div class="page">
					<div class="page-title">
						General Settings
					</div>
					<div class="page-body">
						<form action="" class="form-table">
							<table>
								<tbody>
									<tr>
										<th><label for="blogname">Site Title</label></th>
										<td><input type="text" name="blogname" value="Elegence"></td>
									</tr>
									<tr>
										<th><label>Tagline</label></th>
										<td><input type="text" value="To be or not to be?"></td>
									</tr>
								</tbody>
							</table>
							<input type="submit" placeholder="Save Changes" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>