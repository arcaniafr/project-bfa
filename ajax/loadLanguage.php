<?php session_start();

if(isset($_GET['languageChange'])){
	$_SESSION['langID'] = $_GET['languageChange'];
}
else{
	$_SESSION['langID'] = 0;
}
?>