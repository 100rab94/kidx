<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "test") or die($link);
$query = "SELECT `users`.`firstname` ,`users`.`lastname`,`users`.`address1`,`users`.`address2`,`users`.`city`,`users`.`password`,`users`.`country`,`users`.`email`,`users`.`dob`,`student`.`sfirstname`,`student`.`slastname`,`student`.`parentcontact`,`student`.`parentemail`,`student`.`class` from `users` INNER JOIN `student` on `users`.`email`=`student`.`parentemail` where `users`.`email` = '{$_SESSION['email']}' ";
$result = mysqli_query($link,$query);
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
				<h2>My Account</h2>
				<table class="profiletable" style="border-width: 2px;">
				<?php
				while($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>

					<td> First Name: </td>

					<td class="editview"><input type="text" name="firstname" placeholder="First Name" id="firstname" value="<?php echo $row['firstname']; ?>"></td>

				</tr>
				<tr>

					<td> Last Name: </td>

					<td class="editview"><input type="text" name="firstname" placeholder="Last Name" id="lastname" value="<?php echo $row['lastname']; ?>"></td>

				</tr>
				<tr>

					<td>Address Line 1: </td>

					<td class="editview"><input type="text" name="address1" placeholder="Address Line 1" id="firstname" value="<?php echo $row['address1']; ?>"></td>

				</tr>
				<tr>

					<td>Address Line 2: </td>

					<td class="editview"><input type="text" name="address2" placeholder="Address Line 2" id="address2" value="<?php echo $row['address2']; ?>"></td>

				</tr>
				<tr>

					<td>City: </td>

					<td class="editview"><input type="text" name="city" placeholder="City" id="city" value="<?php echo $row['city']; ?>"></td>

				</tr>
				<tr>

					<td>Country: </td>

					<td class="editview"><input type="text" name="country" placeholder="Country" id="country" value="<?php echo $row['country']; ?>"></td>

				</tr>
				<tr>

					<td>Email: </td>

					<td class="editview"><input type="text" name="email" placeholder="Email" id="email" value="<?php echo $row['email']; ?>"></td>

				</tr>
				<tr>

					<td>Password: </td>

					<td class="editview"><input type="text" name="password" placeholder="Password" id="password" value="<?php echo $row['password']; ?>"></td>

				</tr>
				<tr>

					<td>DOB: </td>

					<td class="editview"><input type="text" name="dob" placeholder="DOB" id="dob" value="<?php echo $row['dob']; ?>"></td>

				</tr>
				<tr>

					<td>Contact: </td>

					<td class="editview"><input type="text" name="contact" placeholder="Contact" id="contact" value="<?php echo $row['parentcontact']; ?>"></td>

				</tr>
			</table>
			<h2>Child Info</h2>
			<table class="kidtable" style="border-width: 2px;">

				<tr>

					<td> Child First Name: </td>

					<td class="editview"><input type="text" name="kfname" placeholder="Child's First Name" id="kfname" value="<?php echo $row['sfirstname']; ?>"></td>

				</tr>
				<tr>

					<td> Child Last Name: </td>

					<td class="editview"><input type="text" name="klname" placeholder="Child's Last Name" id="klname" value="<?php echo $row['slastname']; ?>"></td>

				</tr>
				<tr>

					<td> Class: </td>

					<td class="editview"><input type="text" name="class" placeholder="Class" id="class" value="<?php echo $row['class']; ?>"></td>

				</tr>
				<?php
					}
					?>
			</table>
			<div>
				<input type=submit value=Update name=submit>
				</div>

			</div>
			<div class="col-sm-6 banner-image">
				<img src="kidx1.png" class="img-responsive">
			</div>
		</div>
	</div>
</body>
</html>>