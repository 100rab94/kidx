<?php
session_start();
//include_once('connect.php');	 
$link = mysqli_connect("localhost", "root", "", "test") or die($link);
$query = "select * from activity";
$result = mysqli_query($link,$query);
$result=mysqli_query($link,"select * from activity") or die("Failed to query the Database".mysqli_error());
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
				<li><a href="">Activities</a></li>
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
				<form action="insertactivity.php" method="POST" class="wrapper" autocomplete="off">
				<h1>Add Activity</h1> 
				<div class="inputs">
					<label>Activity Name:</label>
					<input type="text" id="acname " placeholder="Activity Name" name="acname" required>
				</div>
				<br>
				<div class="inputs">
					<label>Description:</label>
					<input type="textarea" id="dsc " placeholder="Description" name="dsc" required>
				</div>
				<br>
				<div class="inputs">
					<label>Date:</label>
					<input type="datetime-local" id="acdate " placeholder="Date" name="acdate" required>
				</div>
				<br>
				<div>
				<label>Location:</label>
				<input type="text" id="location" placeholder="Location" name="location" required>
				</div>
				<br>
				<div>
				<label for="img">Upload image:</label>
  				<input type="file" id="img" name="img" accept="image/*">
				</div>
				<br>
				<div>	
				<label>Staff: </label>
				<select name="staff" id="staff">
					<option value="Select" selected>Select</option>
					<?php
     				$records = mysqli_query($link,"SELECT name FROM staff") or die("Failed to query the Database".mysqli_error());
     				while ($row = mysqli_fetch_array($records)){
    				echo "<option value=\"{$row['name']}\">" . $row['name'] . "</option>";
   					 }
					?>
				</select>
				</div>
				<div>
				<input type=submit value=Submit name=submit>
				</div>
			</div>
		</form>
			<div class="col-sm-6 banner-image">
				<img src="kidx1.png" class="img-responsive">
			</div>
		</div>
	</div>
</body>
</html>