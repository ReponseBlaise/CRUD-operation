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
		
		<h1>Login</h1>
		
	<form action="" method="POST">		
	<div class="form">
		<h1>Login</h1>
		<input type="text" name="uname" placeholder="User name" required><br><br>
		<input type="password" name="pass" placeholder="Password" required><br><br>
		<center><input type="submit" name="sub" value="Login" ><br></center><br><br>
		<p>You don't have account?<a href="create.php">Create account</a></p>
	</div>
	</form>
	</center>

</body>
</html>
<?php 
$con=mysqli_connect( "localhost","root","","fc_games");

  session_start();
  if (isset($_POST['sub'])) {
	$name=$_POST['uname'];
	$pass=$_POST['pass'];
	$select="select * from users where u_Name='$name' and u_Password='$pass'";
	if ($check=mysqli_query($con,$select)) {
		if (mysqli_num_rows($check)>0) {
			while(mysqli_fetch_assoc($check)){
          $_SESSION['hey']=$_GET['u_Name'];
          $_SESSION['hey']=$_GET['u_Password'];
        echo "<script>alert('WELCOME!!');</script>";
			header("location:index.php");
		}
	}
		else{
			echo "incorerrect username and password";
		}
	}else 
		{
		echo "selecting query error";
		}

}
?>