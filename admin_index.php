<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
	<title>Tausif | Admin</title>
	<style type="text/css">
		#span1,#span2{
			position: relative;top: 15px;
			padding:20px;
			margin: 10px;
			font-size: 20px;
			background-color: #E0FFFF;
		}
		#a1,#a2{
			text-decoration: none;
			color: black;
		}
		a span:hover{
			background-color: white;
			color: blue;
		}

	</style>
</head>
<body style="background-color:#FFF8DC;">
<div style="text-align: center;position: relative;padding: 50px;border:1px solid #dcdcdc">
	<p style="text-align: left;margin: -20px;"><a href="index.php"><< back to homepage</a></p>
	<h1>Admin Panel</h1><hr>
	<div>
	<a href="admin_index.php?data=admin_info" id="a1"><span id="span1">Information</span></a>
	<a href="admin_index.php?data=admin_cert" id="a2"><span id="span2">Certificates</span></a>
	</div>
	<br><br><hr>
	<div style="border:1px solid brown">
			<?php
						if(isset($_REQUEST['data'])){
							$page=$_REQUEST['data'].".php";
							include_once($page);
						}
						else{
				echo "<h3>This is an Admin panel where we can Create/Read/Update/Delete information from database table.</h3>";
			}
			?>
			</div>
</div>
</body>
</html>