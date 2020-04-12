<?php
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
?>
