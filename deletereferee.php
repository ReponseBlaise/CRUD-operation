<?php
		 $con=mysqli_connect('localhost','root','','fc_games');
		 if (isset($_GET['delete'])) {
		 	$a=$_GET['delete'];
		 	$delete=" delete from referees where Ref_id='$a'";
		 	$query=mysqli_query($con,$delete);
		 	if ($query) {
		 		header('location:reportreferees.php');
		 	}
		 	else{
		 		echo "delete query error";
		 	}
		 }


		 ?>