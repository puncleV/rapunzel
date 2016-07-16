<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../bootstrap/js/jquery-1.11.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<title>Rapunzel</title>
</head>
<body>
	<div class="panel-body">
		<?php
			include("connect.php");
			include("components/header.php");
			if(isset($_SESSION['login'])){
				setHeader(true);
				include("news.php");
			}else{
				setHeader(false);
				include("login.php");
			}
		?>
	</div>
</body>
</html>