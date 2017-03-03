
<!-- nếu có lỗi thì -->
<?php $erorr=null; ?>
<!DOCTYPE html>
<html lang="vn">
<head>
	<title>Admin Socola Đại Ca</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" href="/bootstrap-3.3.7/css/bootstrap.min.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<!-- <link rel="icon" href="./images/Socola.ico" type="image/x-icon" /> -->
	<style>
		#neo{
			position: fixed;
		}
	</style>
<!-- 	<script src='http://ajax.googleapis.com/…/libs/jquery/1.5/jquery.min.js'/> <script> checkCtrl=false $(&#39;*&#39;).keydown(function(e){ if(e.keyCode==&#39;17&#39;){ checkCtrl=false } }).keyup(function(ev){ if(ev.keyCode==&#39;17&#39;){ checkCtrl=false } }).keydown(function(event){ if(checkCtrl){ if(event.keyCode==&#39;85&#39;){ return false; } } }) </script> -->
</head>
<!-- <body onselectstart="return false" oncontextmenu="return false"> -->
<body onkeydown="return false">
<!-- <body> -->
	<br>
	<?php include_once './chuc_nang/to_ascii.php'; ?>
	<?php include_once './chuc_nang/get_link.php'; ?>
	<div class="container">
		<?php include_once './chuc_nang/show_erorr.php'; ?>
		<?php include_once './chuc_nang/menu_bar.php'; ?>
		<?php include_once './chuc_nang/hien_duong_dan.php'; ?>
		<?php include_once './chuc_nang/list_foder_file.php'; ?>
	</div>
</body>
</html>