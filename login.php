</!DOCTYPE html>
<html>
<head>
	<title>Kindergarten-Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id='frm'>
	<form action="process.php" method="POST" class="wrapper" autocomplete="off">
		<h1 align="center">Login</h1>
		<div class="inputs">
			<label>Email:</label>
			<input type="text" id="user " placeholder="Enter Email" name="user" required>
		</div>
		<div class="inputs">
			<label>Password:</label>
			<input type="Password" id="pass " placeholder="Enter Password" name="pass" required>
		</div>
		<div>
			<a href="#"> Forgot Password </a>
		</div>
		<div>
			<input type="submit" align="center" id="btn "value="Login" >
	   </div>
	</form>
</div>
</body>
</html>