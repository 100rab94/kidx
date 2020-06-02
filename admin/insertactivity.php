<?php
session_start();
$_SESSION['message'] = '';
$activityname=$_POST['acname'];
$description=$_POST['dsc'];
$date=$_POST['acdate'];
$location=$_POST['location'];
$staff=$_POST['staff'];

$activityname=stripcslashes($activityname);
$description=stripcslashes($description);
$date=stripcslashes($date);
$location=stripcslashes($location);
$staff=stripcslashes($staff);

$link = mysqli_connect("localhost", "root", "", "test") or die($link);

$activityname=mysqli_real_escape_string($link,$activityname);
$description=mysqli_real_escape_string($link,$description);
$date=mysqli_real_escape_string($link,$date);
$location=mysqli_real_escape_string($link,$location);
$staff=mysqli_real_escape_string($link,$staff);

$msg=mysqli_query($link,"insert into activities(acname,description,date,location,staff) values('$activityname','$description','$date','$location','$staff')");
if($msg)
{
	echo "<script>alert('Activity added successfully');</script>";
}

?>