<?php
session_start();
$_SESSION['message'] = '';
$username=$_POST['user'];
$password=$_POST['pass'];

$username=stripcslashes($username);
$password=stripcslashes($password);

$link = mysqli_connect("localhost", "root", "", "test") or die($link);

$username=mysqli_real_escape_string($link,$username);
$password=mysqli_real_escape_string($link,$password);

$result=mysqli_query($link,"select * from user where username='$username' and password='$password'") or die("Failed to query the Database".mysqli_error());


$row=mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password){
	echo"Login successful to the table".$row['username'];
} else{
	echo"Failed try again!!";
}
if (isset($_SESSION['user'])){
	echo "<h1> Welcome to admins portal ".$_SESSION['user']."</h1>";
		echo "<script>location.href='adminindex2.php'</script>";
	
	echo "<br> <a href='logout.php'><input type=button value=logout name=logout></a>";
}
else{
	if($_POST['user']==$username &&  $_POST['pass']==$password)
	{
		$_SESSION['user']=$username;
		echo "<script> alert('Login successful')</script>";
		echo "<script>location.href='adminindex2.php'</script>";
	}
	else{
		echo "<script> alert('username or password is incorrect!')</script>";
		echo "<script>location.href='login.php'</script>";
	}
}
?>
