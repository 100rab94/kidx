<!DOCTYPE html>
<html>
<head>
	<title>Kindergarten-Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id='frm1'>
	<form action="process1.php" method="POST" class="wrapper" autocomplete="off">
		<h1 align="center">Parent Registration</h1>
		<div class="inputs">
			<label>First Name:</label>
			<input type="text" id="fname " placeholder="First Name" name="fname" required>
		</div>
		<div class="inputs">
			<label>Last Name:</label>
			<input type="text" id="lname " placeholder="Last Name" name="lname" required>
		</div>
		<div class="inputs">
			<label>Address line1:</label>
			<input type="text" id="add1 " placeholder="Address Line1" name="add1" required>
		</div>
		<div class="inputs">
			<label>Address line 2:</label>
			<input type="text" id="add2 " placeholder="Address Line 2" name="add2" required>
		</div>
		<div class="inputs">
			<label>City:</label>
			<input type="text" id="City " placeholder="City" name="City" required>
		</div>
		<div class="inputs">
			<label>Country:</label>
			<input type="text" id="county " placeholder="Country" name="county" required>
		</div>
		<div class="inputs">
			<label>Email:</label>
			<input type="text" id="Email " placeholder="Email" name="Email" required>
		</div>
		<div class="inputs">
			<label>Password:</label>
			<input type="text" id="pass" placeholder="Password" name="pass" required>
		</div>
		<div class="inputs">
			<label>Confirm Password:</label>
			<input type="text" id="pass2 " placeholder="Confirm Password" name="pass2" required>
		</div>
     <!-- <div>
			<input type="radio" id="male" name="gender" value="male">
			<label for="male">Male</label>
			<input type="radio" id="female" name="gender" value="female">
			<label for="female">Female</label>
			<input type="radio" id="other" name="gender" value="other">
			<label for="other">Other's</label>
		</div> -->

		<div>
			<label for="birthday">DOB:</label>
  			<input type="date" id="DOB" name="DOB">
		</div>
		<div>
			<input type="submit" align="center" id="btn1 "value="Register">
	   </div>
	</form>	
</div>
</body>
</html>