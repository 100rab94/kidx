<?php
session_start();
$_SESSION['message'] = '';
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$address1=$_POST['add1'];
$address2=$_POST['add2'];
$city=$_POST['City'];
$country=$_POST['county'];
$email=$_POST['Email'];
$password=$_POST['pass'];
$password2=$_POST['pass2'];
$dob=$_POST['DOB'];


$firstname=stripcslashes($firstname);
$lastname=stripcslashes($lastname);
$address1=stripcslashes($address1);
$address2=stripcslashes($address2);
$city=stripcslashes($city);
$email=stripcslashes($email);
$password=stripcslashes($password);
$password2=stripcslashes($password2);
$dob=stripcslashes($dob);

$link = mysqli_connect("localhost", "root", "", "test") or die($link);

$firstname=mysqli_real_escape_string($link,$firstname);
$lastname=mysqli_real_escape_string($link,$lastname);
$address1=mysqli_real_escape_string($link,$address1);
$address2=mysqli_real_escape_string($link,$address2);
$city=mysqli_real_escape_string($link,$city);
$country=mysqli_real_escape_string($link,$country);
$email=mysqli_real_escape_string($link,$email);
$password=mysqli_real_escape_string($link,$password);
$password2=mysqli_real_escape_string($link,$password2);
$dob=mysqli_real_escape_string($link,$dob);

$sql=mysqli_query($link,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
	echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
	$msg=mysqli_query($link,"insert into users(firstname,lastname,address1,address2,city,country,email,password,dob) values('$firstname','$lastname','$address1','$address2','$city','$country','$email','$password','$dob')");

if($msg)
{
	echo "<script>alert('Register successfully');</script>";
}
}

header("location: index.html");

?>