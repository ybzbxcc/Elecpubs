<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>编写博文</title>
 	<link rel="shortcut icon" type="image/x-icon" href="/Public/images/icon.ico" />
 	<link rel="stylesheet" href="/Public/css/admin.css">
</head>
<body>
	<div class="container">
		<h3 class="text-center" style="color:#999;">
			Writting
		</h3>
		<form action="<?php echo U('sendBlog');?>" method="post" class="col-md-8 col-md-offset-2 form-inline">
			<input type="text" placeholder="标题" name="title" id="title" required>
			<input type="text" placeholder="标签" name="label" id="label" required>
			<textarea id="summary" name="summary" placeholder="写摘要"></textarea>
			<textarea name="editor1" id="editor1" rows="10" cols="80" class="ckeditor">
			This is my textarea to be replaced with CKEditor.
            </textarea>
	        <button type="submit" id="submit">Submit</button>
	        
		</form>
	</div>

	<script src="/Public/js/Admin/ckeditor.js" ></script>
	<script type="text/javascript">
	    CKEDITOR.replace( 'editor1' );
	</script>
</body>
</html>