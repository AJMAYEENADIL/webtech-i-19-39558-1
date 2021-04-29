<?php 

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:../homepage.php");
	
}

else{
	header("location:../homepage.php");
}

 ?>