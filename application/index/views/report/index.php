<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>配件宝项目进度</title>
	<script src="<?php echo base_url('common/js/jquery.js'); ?>"></script>
	<script src="<?php echo base_url('common/js/jquery.js'); ?>"></script>
	<style>
		body{
			background: #eee;
			font-family: "微软雅黑";
			font-size: 14px;
		}
		#container{
			background: #fff;
			width:1000px;
			margin:0 auto;
			padding:20px;
			border:1px solid #ccc;
			border-radius: 10px;
		}
		input{
			border:1px solid #ccc;
			line-height: 25px;
		}
		#submit{
			display: block;
			background: #0065B8;
			text-align: center;
			width:100px;
			line-height: 30px;
			color:#fff;
			margin:0 auto;
			margin-top: 20px;
			border:none;
			border-radius: 3px;
		}
	</style>
</head>
<body>
	<div id="container">
		<form action="<?php echo site_url('report/add_info');  ?>" method="post">
			<p>标题 <input type="text" name="post[title]" size="100"></p>
			<script id="content" name="post[content]" type="text/plain">
       			
    		</script>
    		<script type="text/javascript" src="<?php echo base_url('common/js/ueditor/ueditor.config.js'); ?>"></script>
    		<script type="text/javascript" src="<?php echo base_url('common/js/ueditor/ueditor.all.js'); ?>"></script>
    	    <!-- 实例化编辑器 -->
    	    <script type="text/javascript">
    	        var ue = UE.getEditor('content',{'initialFrameHeight':300});
    	    </script>
    	    <input type="submit" name="submit" value="提 交" id="submit">
		</form>
	</div>
</body>
</html>