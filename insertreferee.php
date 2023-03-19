

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
		
	</center>

</body>
</html>

<form action="" method="POST">
	<br><br><br>

	<div class="form">
			<input type="number" name="rid" placeholder="referee id"><br><br>
			<input type="text" name="fname" placeholder="First name"><br><br>
			<input type="text" name="lname" placeholder="Last name"><br><br>
			<input type="number" name="age" placeholder="age"><br><br>
			<input type="text" name="sex" placeholder="Sex (M or F)"><br><br>
			<input type="text" name="tel" placeholder="telephone"><br><br>
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
	$insert="INSERT INTO `referees`(`Ref_id`, `F_Name`, `L_Name`, `Age`, `Sex`, `Telephone`) VALUES ('$a','$b','$c','$d','$e','$f')";
	
	$query=mysqli_query($con, $insert);
	if ($query) {
		echo "<script>  alert('Data inserted')</script>";
		header("location:reportreferee.php");
	}else{
echo "Data not inserted'";
	
}
}
?>