<!DOCTYPE html>
<html ng-app="">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">	
<title>Tausif Ahmad</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
<script type="text/javascript" src="JS/script.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<style type="text/css">
	#img{
		height: 280px;
		width: 90%;
		border-radius:20px 30% 30% 20px;
		position: relative;
		top: -20px;
		box-shadow: 10px 10px 8px #dcdcdc;

	}
	body{
		height: 100%;
		background-image: url(Images/bg.jpg);
		background-size: cover;
		background-position: center;
	}
	ul li{
		font-family: Cursive;
		font-weight: bold;
	}
	#m1{
		transition: transform .8s;
	}
	#m1:hover{
		transform: scale(1.2); 
	}
</style>	
</head>
<body oncontextmenu="return false">
	<div class="container-fluid">
	<div div class="row"><p style="padding-right: 20px; font-size:20px" class="text-right"><a href="admin.php" class="glyphicon glyphicon-user">Admin</a></p>
		<div class="container-fluid col-md-3">
				<a href="index.php"><img src="Tausif_pic.jpg" id="img" ></a><br><br>
				<div style="position: relative;padding-left: 30px;border-right: 3px solid #dcdcdc">
					<ul> 
						<li><a href="index.php?data=personal">Personal Details</a></li>
						<li id="edu">Educations</li>
						<ul id="edu1">
							<li><a href="index.php?data=Graduation">Graduation</a></li>
							<li><a href="index.php?data=Intermediate">Intermediate</a></li>
							<li><a href="index.php?data=Matriculation">Matriculation</a></li>
						</ul>
						<li><a href="index.php?data=skill">Key Skills</a></li>
						<li><a href="index.php?data=training">Online Trainings</a></li><li><a href="index.php?data=project">Personal Projects</a></li>
						<li><a href="index.php?data=certificate">Certificates</a></li>
					</ul>
				</div>
		</div>
				<div class="col-md-offset-1" style="background-color: #dcdcdc"></div>
		<div class="container-fluid col-md-8">
				<div style="position: relative;top: 80px;text-align:center;" id>
					<h1><em><a href="index.php" style="text-decoration: none;">Tausif Ahmad</a></em></h1>
					
						<a href="mailto:wavetausif38@gamil.com"><em class="glyphicon glyphicon-envelope"> :wavetausif38@gamil.com </em> </a>|| 
						<a href="tel:+919572112409"><span class="glyphicon glyphicon-phone"> :9572112409 </span></a>
						<br><a href="https://github.com/ahmadtausif38" target="_blank">GitHub: ++</a> || <a href="http://www.linkedin.com/in/wave-tausif" target="_blank">LinkedIn: ++</a> || <a href="https://leetcode.com/Tausif_Ahmad/" target="_blank">LeetCode: ++</a> || <a href="https://www.hackerrank.com/ahmadtausif38" target="_blank">HackerRank: ++ </a>
						<br>
						<hr><div style="padding-bottom: 80px;"></div>
					</div>