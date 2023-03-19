<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<title></title>
</head>
<body>


	<center>
		
		
		
	<form action="" method="POST">		
	<div class="form">
		<h1>Manager account creation</h1>
<input type="number" name="id" placeholder="User id" required><br><br>
		<input type="text" name="uname" placeholder="User name" required><br><br>
		<input type="password" name="pass" placeholder="Password" required><br><br>
		<center><input type="submit" name="sub" value="create" ><br></center><br><br>
		<p>You don't have account?<a href="login.php">login</a></p>
	</div>
	</form>
	</center>

</body>
</html>
<?php
$con=mysqli_connect( "localhost","root","","fc_games");
if (isset($_POST['sub'])) {
	$c=$_POST['id'];
	$a=$_POST['uname'];
	$b=$_POST['pass'];
	
	$insert="INSERT INTO `users`(`user_id`, `u_Name`, `u_Password`) VALUES ('$c','$a','$b')";
	if (!$insert) {
	echo" query error";
	}
	$query=mysqli_query($con,$insert);
	if ($query) {
		header("location:index.php");
		echo "<script> alert('Successifully account created');</script>";
	}else{
		echo "<script> alert('account not created');</script>";
	}
}

  ?>