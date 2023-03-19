
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
		<a href="reportreferees.php">Referees</a>
		
	<div class="add"><a href="insertadversaries.php">+add  new adversary</a></div>
		<h1> List Adversaries</h1>
			<table border="1">
			<th>Adversary id</th>
            <th>Names of adversary</th>
			<th>action</th>
		<?php
		 $con=mysqli_connect('localhost','root','','fc_games');					
		 $select=" select * from adversaries";
		 $query=mysqli_query($con,$select);
		 if ($query) {
		 	if (mysqli_num_rows($query)>0) {
		 	while ($row=mysqli_fetch_array($query)) {
		 		$a=$row['Ad_id'];
			$b=$row['Name'];
			

			echo "<tr>";
			
echo"<td>$a</td>";
echo"<td>$b</td>";
?>
<td><a href="deleteadversary.php?delete=<?php echo $row['Ad_id'] ; ?>">Delete</a>
<a href="updateadversary.php?update=<?php echo $row['Ad_id'] ;?>">update</a>
</td><?php
echo "</tr>";

		 	}
		 	}
		 }





		 ?>

	</table>	
	</center>

</body>
</html>
