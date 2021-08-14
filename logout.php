<?php 
session_start();
unset($_SESSION['last_active']);
unset($_SESSION['is_login']);
	header("location:auto_logout.php");
	die();


echo "<h1>Well come to dashbord</h1>";

?>
<a href="dashbord1.php">dashbord1</a>
<a href="auto_logout.php">logout</a>