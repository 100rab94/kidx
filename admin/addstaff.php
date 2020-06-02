<?php
session_start();
//include_once('connect.php');	 
$link = mysqli_connect("localhost", "root", "", "test") or die($link);
$query = "select * from activity";
$result = mysqli_query($link,$query);
$result=mysqli_query($link,"select * from staff") or die("Failed to query the Database".mysqli_error());
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
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="wrapper" autocomplete="off" enctype="multipart/form-data">
				<h1>Create Staff Login</h1> 
				<div class="inputs">
					<label>Staff Name:</label>
					<input type="text" id="sname " placeholder="Staff Name" name="sname" required>
				</div>
				<br>
				<div class="inputs">
					<label>Address:</label>
					<input type="textarea" id="saddr " placeholder="Address" name="saddr" required>
				</div>
				<br>
				<div class="inputs">
					<label>Email:</label>
					<input type="textarea" id="semail " placeholder="Email" name="semail" required>
				</div>
				<br>
				<div class="inputs">
					<label>Phone:</label>
					<input type="textarea" id="sphone " placeholder="Phone" name="sphone" required>
				</div>
				<br>
				<div>
				<label>Class:</label>
				<select name="class" id="class">
					<option value="Select" selected>Select</option>
					<?php
					$link = mysqli_connect("localhost", "root", "", "test") or die($link);
     				$records = mysqli_query($link,"SELECT DISTINCT class FROM staff") or die("Failed to query the Database".mysqli_error());
     				while ($row = mysqli_fetch_array($records)){
    				 echo "<option value=\"{$row['class']}\">" . $row['class'] . "</option>";
   					 }
					?>
				</select>
				</div>
				<br>
				<div>
				<label for="simg">Upload image:</label>
  				<input type="file" id="simg" name="simg" accept="image/*" required>
				</div>
				<br>
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
<?php

    if (isset($_POST['submit'])) 
    {
    	if (!empty($_POST['sname']) && !empty($_POST['semail'])) 
    	{
    		$link = mysqli_connect("localhost", "root", "", "test") or die($link);
        	$sname = $_POST['sname'];
        	$address = $_POST['saddr'];
        	$class = $_POST['class'];
        	$email = $_POST['semail'];
        	$phone = $_POST['sphone'];
        	$company_name = "Kidx Kidergarten";
        	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
        	$password = substr(str_shuffle($chars), 0, 8);
        	include('imgUpload.php');
        	$sql = "INSERT INTO `staff`( `name`, `address`,`email`, `password`, `class`,`phone`,`image`) VALUES ('$sname','$address','$email','$password','$class','$phone','$imgName')";
        	$run = mysqli_query($link,$sql);
			if ($run == true) 
				{
		$to = "coolsp502@gmail.com";
        $subject = 'your registration is completed';
        $message = 'Welcome' . $company_name . ''
                . 'Your email and password is following :'
                . 'Email:' . $email . ''
                . 'Your new password : ' . $password . ''
                . 'Now you can login with this email and password';
        $headers = 'From: Your name <'.$email .'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

        mail($to, $subject, $message, $headers);
    	}
				
				?>
				<script>
					alert("Data Updated Successfully");
				</script>
				<?php
				} else 
				{
				echo "Error : ".$sql."<br>". mysqli_error($link); 
				}
		
		} else {
				?>
				<script>
					alert("Please insert atleast First name and Email");
				</script>
				<?php
		}
?>