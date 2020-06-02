<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kidx Kidergarten</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<header class="header">
	<nav class="navbar navbar-style">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href=""><img class="logo" src="logo.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="micon">
			<ul class="nav navbar-nav">
				<li><a href="">Home</a></li>
				<li><a href="">Manage users</a></li>
				<li><a href="activity.php">Activities</a></li>
				<li><a href="">Enroll Kid</a></li>
				<li><a href="">Calendar</a></li>
				<li><a href='logout.php'><input type=button value=logout name=logout></a></li>
			</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 banner-info">
				<h1>Welcome to  </h1>
				<p class="big-text">Admins Panel of Kidx Kindergarten</p>
				<p>Manage users and enhance the profile accessibilities</p>
				<a href="addstudent.php" class="btn btn-info btn-lg">Create Staff Profile</a><a href="enrollkid.php" class="btn btn-info btn-lg">Create Admin</a>
                <a href="updatestudent.php" class="btn btn-info btn-lg">Add Activities</a><a href="deletestudent.php" class="btn btn-info btn-lg">Edit Kid Info </a>
			</div>
			<div class="col-sm-6 banner-image">
				<img src="kidx1.png" class="img-responsive">
			</div>
		</div>
	</div>
</body>
</html>>