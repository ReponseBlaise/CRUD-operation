<?php
		 $con=mysqli_connect('localhost','root','','fc_games');
		 if (isset($_GET['delete'])) {
		 	$a=$_GET['delete'];
		 	$delete=" delete from adversaries where Ad_id='$a'";
		 	$query=mysqli_query($con,$delete);
		 	if ($query) {
		 		header('location:reportadversaries.php');
		 	}
		 	else{
		 		echo "delete query error";
		 	}
		 }


		 ?>