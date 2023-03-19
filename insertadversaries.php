

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
	<br>
	<div class="form">
		<h1>New adversary</h1>

		<br><br>
			<input type="number" name="aid" placeholder="Adversary id"><br><br>
			<input type="text" name="name" placeholder="Adversary"><br><br>
		
			<input type="submit" name="sub" value="INSERT">
		</div>
		</form>
		
	</center>

</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','fc_games');
if (isset($_POST['sub'])) {
	$c=$_POST['aid'];
	
	$b=$_POST['name'];
	$insert="INSERT INTO adversaries VALUES ('$c','$b')";
	
	$query=mysqli_query($con, $insert);
	if ($query) {
		echo 'Data inserted';
		header("location:reportadversaries.php");
	}else{
echo "Data not inserted'";
	
}
}
?>