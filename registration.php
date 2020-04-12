<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "", "register");
$firstname=$mysqli->real_escape_string($_POST['firstname']);
$lastname=$mysqli->real_escape_string($_POST['lastname']);
$address1=$mysqli->real_escape_string($_POST['address1']);
$address2=$mysqli->real_escape_string($_POST['address2']);
$city=$mysqli->real_escape_string($_POST['city']);
$country=$mysqli->real_escape_string($_POST['country']);
$email=$mysqli->real_escape_string($_POST['email']);
$password=$mysqli->real_escape_string($_POST['password']);
$password2=$mysqli->real_escape_string($_POST['password2']);
$dob=$mysqli->real_escape_string($_POST['dob']);

$sql = "INSERT INTO users (firstname,lastname,address1,address2,city,country,email,password,dob)"."values('$firstname','$lastname','$address1','$address2','$city','$country','$email','$password','$password2','$dob')";
if ($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Registration succesful! Added $firstname to the database!";
                        $_SESSION['firstname']= $firstname;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kindergarten-Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id='frm1'>
	<form action="registration.php" method="POST" class="wrapper" autocomplete="off">
		<h1 align="center">Registration</h1>
		<div class="inputs">
			<label>First Name:</label>
			<input type="text" id="firstname " placeholder="First Name" name="firstname" required>
		</div>
		<div class="inputs">
			<label>Last Name:</label>
			<input type="text" id="lastname " placeholder="Last Name" name="lastname" required>
		</div>
		<div class="inputs">
			<label>Address line1:</label>
			<input type="text" id="address1 " placeholder="Address Line1" name="address1" required>
		</div>
		<div class="inputs">
			<label>Address line 2:</label>
			<input type="text" id="address2 " placeholder="Address Line 2" name="address2" required>
		</div>
		<div class="inputs">
			<label>City:</label>
			<input type="text" id="city " placeholder="City" name="city" required>
		</div>
		<div class="inputs">
			<label>Country:</label>
			<input type="text" id="country " placeholder="Country" name="country" required>
		</div>
		<div class="inputs">
			<label>Email:</label>
			<input type="text" id="email " placeholder="Email" name="email" required>
		</div>
		<div class="inputs">
			<label>Password:</label>
			<input type="text" id="password " placeholder="Password" name="password" required>
		</div>
		<div class="inputs">
			<label>Confirm Password:</label>
			<input type="text" id="password2 " placeholder="Confirm Password" name="password2" required>
		</div>
		<div>
			<input type="radio" id="male" name="gender" value="male">
			<label for="male">Male</label>
			<input type="radio" id="female" name="gender" value="female">
			<label for="female">Female</label>
			<input type="radio" id="other" name="gender" value="other">
			<label for="other">Other's</label>
		</div>
		<div>
			<label for="birthday">DOB:</label>
  			<input type="date" id="dob" name="dob">
		</div>
		<div>
			<input type="submit" align="center" id="btn1 "value="Register">
	   </div>
	</form>	
</div>
</body>
</html>