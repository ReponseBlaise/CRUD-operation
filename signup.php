<!DOCTYPE html>
<html>
<head>
	<title>Ecole primaire saint anne</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<div class="nav">
			<div class="logo">E.P Saint anne</div>
<form action="" method="POST">				
	<div class="form">
		<h1>Signup</h1>
		<input type="text" name="names" placeholder="Names"><br><br>
		<input type="text" name="phone" placeholder="Telephone number"><br><br>
		<input type="text" name="uname" placeholder="User name"><br><br>
		<input type="password" name="pass" placeholder="Password"><br><br>
		<input type="submit" name="sub" value="signup"><br><br><br>
		<p>Already have account?<a href="login.php">Login</a></p>
	</div>
	</form>
	</center>

</body>
</html>
<?php
$con=mysqli_connect( "localhost","root","","saintanne");
if (isset($_POST['sub'])) {
	$a=$_POST['names'];
	$b=$_POST['phone'];
	$c=$_POST['uname'];
	$d=$_POST['pass'];
	$insert="INSERT INTO `users`(`userid`, `names`, `phones`, `username`, `PASSWORD`) VALUES ('','$a','$b','$c','$d')";
	$query=mysqli_query($con,$insert);
	if ($query) {
		header("location:home.php");
		echo "<script> alert('Data inserted');</script>";
	}else{
		echo "Data not  inserted";
	}
}

  ?>