<?php 
// incluide this file in every inside dashboard files 
session_start();
if(isset($_POST['type']) && $_POST['type']=='ajax'){
if((time()-$_SESSION['last_active']) > 3600){
	echo "logout";
	
}
}else{
if(isset($_SESSION['last_active'])){

if((time()-$_SESSION['last_active']) > 3600){
	header("location:logout.php");
	die();
	
}
}
$_SESSION['last_active']=time();
if(!isset($_SESSION['is_login'])){
	header("location:auto_logout.php");
	die();

}

}
?>
