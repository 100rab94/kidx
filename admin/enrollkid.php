</!DOCTYPE html>
<html>
<head>
	<title>Kindergarten-Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id='kidfrm'>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="wrapper" autocomplete="off" enctype="multipart/form-data">
		<h1 align="center">Create Admin Profile</h1>
				  <div class="form-group">
				    
				    Name:<input type="text" class="form-control" name="email" placeholder="Name" required>
				  </div>
				   <div class="form-group">
				    
				    Password:<input type="text" class="form-control" name="password" placeholder="Password" required>
				  </div>
				   <div class="form-group">
				    
				    Address:<input type="text" class="form-control" name="addr" placeholder="Address" required>
				  </div>
				  <div class="form-group">
				    City: <input type="text" class="form-control" name="city" placeholder="Enter City" required>
				  </div>
				  <div class="form-group">
				    
				    Phone No.:<input type="text" class="form-control" name="pphone" placeholder="Enter Parent Phone No." required>
				  </div>
				   <div class="form-group">
				    
				    Email*:<input type="text" class="form-control" name="pemail" placeholder="Enter Parent Email" required>
				  </div>
				  <div class="form-group">	
				<label>Class: </label>
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

				   <div class="form-group">
			
				    Image:<input type="file" class="form-control" name="simg" required>
				  </div>

				  <button type="submit" name="submit" class="btn btn-success btn-lg">INSERT</button>
	</form>
</div>
</body>
</html>
<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['firstname']) && !empty($_POST['pemail'])) {
			$link = mysqli_connect("localhost", "root", "", "test") or die($link);
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$address=$_POST['addr'];
			$city=$_POST['city'];
			$pphone=$_POST['pphone'];
			$pemail=$_POST['pemail'];
			$class=$_POST['class'];
			include('imgUpload.php');
			$sql1 = "INSERT INTO `student`( `sfirstname`, `slastname`,`address`, `city`, `parentcontact`,`parentemail`, `class`,`image`) VALUES ('$firstname','$lastname','$address','$city','$pphone','$pemail','$class','$imgName')";

			$run = mysqli_query($link,$sql1);
			if ($run == true) {
				
				?>
				<script>
					alert("Data Inserted Successfully");
				</script>
				<?php
			} else {
				echo "Error : ".$sql1."<br>". mysqli_error($link); 
			}
		} else {
				?>
				<script>
					alert("Please insert atleast First name and Email");
				</script>
				<?php
		}


	}

 ?>