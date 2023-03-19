

<?php
$con=mysqli_connect('localhost','root','','fc_games');
if (isset($_GET['update'])) {
	$select="SELECT * FROM adversaries where Ad_id=".$_GET['update'] ;
	$query=mysqli_query($con,$select);
	mysqli_num_rows($query);
		while ($row=mysqli_fetch_array($query)) {
			$d=$row['Ad_id'];
			$e=$row['Name'];
		
		}
		}
		
	
	if (isset($_POST['subm'])) {
		$a=$_POST['aid'];
	$b=$_POST['name'];
	
	$update=" UPDATE adversaries SET Ad_id='$a',Name='$b' where Ad_id='$a'";
	$result=mysqli_query($con,$update);
	if ($result) {
		header('location:reportadversaries.php');
	}
	}

?>


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
			<h2>Annoucement</h2>
			<p><b>1<sup>st</sup>September 2022</b></p><br>
			<p>Kaine fc VS Gasabo veterans</p>
			<p><b> <font color="green"> At Nyamirambo Playground</font></b></p>

			
		</div>


		<div class="navg">
		<p><br><a href="https://www.ferwafa.rw">Ferwafa</a></p><br>
		<p><a href="https://www.fifa.com">FIFA</a></p><br>
		<p><a href="https://www.moh.gov.rwa">MINISANTE</a></p><br>
		
		</div><br><br>
		<a href="reportmatch.php">Matches</a>
		<a href="reportadversaries.php">Adversaries</a>
		<a href="reportreferees.php">Referees</a><br><br>
		<div class="form"><br>
			<h1>Update adversary</h1>
			<form action="" method="POST">
			<input type="number" name="aid" value="<?php echo"$d" ;?>"><br><br>
			<input type="text" name="name" value="<?php echo"$e" ;?>"><br><br>
			<br>
			<input type="submit" name="subm" value="update">

		</form>
		</div>
		
	</center>

</body>
</html>