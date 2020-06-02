<? php
$link = mysqli_connect("localhost", "root", "", "test");
//check connection to DB
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
?>