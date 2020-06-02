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
				<li><a href="index.php">Home</a></li>
				<li><a href="activity.php">Activities</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="enrollkid.php">Regiter my kid</a></li>
				<li><a href="myaccount.php">My Account</a></li>
				<li><a href='logout.php'><input type=button value=logout name=logout></a></li>
			</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 banner-info">
				<h1>Welcome to</h1>
				<p class="big-text">Kidx Kindergarten</p>
				<p>Make your childs dream come true by learning with us</p>

			</div>
			<div class="col-sm-6 banner-image">
				<img src="kidx1.png" class="img-responsive">
			</div>
		</div>
	</div>
</body>
</html>>