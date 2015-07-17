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
		h3{
			font-size: 17px;
			text-align: center;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div id="container">
		<h3>配件宝项目进度</h3>
		<?php
			if($list){
		?>
		<ul>
			<?php foreach ($list as $k => $v) {
				echo "<li><a href=#>".$v['title']."</a></li>";
			} ?>
		</ul>		
		<?php 
			}else{
		 ?>
		暂无数据
		<?php 
			}
		?>
	</div>
</body>
</html>