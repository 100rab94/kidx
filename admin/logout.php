<?php
session_start();
if(isset($_Session['user'])){
	session_destroy();
	echo"<script>location.href='adminlogin.php'</script>";
}
else
{
	echo"<script>location.href='adminlogin.php'</script>";
}
?>