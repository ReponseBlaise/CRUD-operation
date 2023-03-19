

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
		
		<div class="navb">
			<div class="logo">Kaine FC</div><br>
			<p><b>President:</b>Jeff MUHINYUZA</p>
			<p><b>Manager:</b>Dreck Gato</p>
			<p><b>Secretary:</b>Jeanne Kayitera</p>
			<p><b>President:</b>RICO Pie</p>
			<p><b>President:</b>Monday Chrito</p>

			
		</div>
		<div class="navc">
			<div class="logo">TFU</div>

			
		</div>


		<div class="navg">
		<p><br><a href="https://www.ferwafa.rw">Ferwafa</a></p><br>
		<p><a href="https://www.fifa.com">FIFA</a></p><br>
		<p><a href="https://www.moh.gov.rwa">MINISANTE</a></p><br>
		
		</div><br><br>
		<a href="reportmatch.php">Matches</a>
		<a href="reportadversaries.php">Adversaries</a>
		<a href="reportreferees.php">Referees</a>
		<h1> New match</h1>
		
	<form action="" method="POST">
	<br><br><br>

	<div class="form">
		<br>
			<input type="number" name="rid" placeholder="Mactch id"><br><br>
			<input type="date" name="fname" placeholder="Date"><br><br>
			<input type="text" name="lname" placeholder="Play ground"><br><br>
			<input type="number" name="age" placeholder="Referee id"><br><br>
			<input type="number" name="sex" placeholder="adversary id"><br><br>
			<input type="number" name="tel" placeholder="User id"><br><br>
			<input type="submit" name="sub" value="INSERT">

			 </div>
		</form>
		
	</center>

</body>
</html>
<?php

$con=mysqli_connect('localhost','root','','fc_games');
if (isset($_POST['sub'])) {
	$a=$_POST['rid'];
	$b=$_POST['fname'];
	$c=$_POST['lname'];
	$d=$_POST['age'];
	$e=$_POST['sex'];
	$f=$_POST['tel'];
	$insert="INSERT INTO `matches`(`Mt_id`, `Date`, `Play_ground`, `Ref_id`, `Ad_id`, `user_id`) VALUES ('$a','$b','$c','$d','$e','$f')";
	
	$query=mysqli_query($con, $insert);
	if ($query) {
		echo "<script>  alert('Data inserted')</script>";
		header("location:reportmatch.php");
	}else{
echo "Data not inserted'";
	
}
}
?>