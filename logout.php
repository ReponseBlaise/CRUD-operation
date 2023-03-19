


<?php
session_start();
if(isset($_GET['kongwe'])){
	session_destroy();
	header("location:login.php");
}
?>