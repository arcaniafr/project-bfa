<?php
$_response = "";



if(isset($_GET['sendRegister']) && isset($_GET['regUsername']) && isset($_GET['regEmail']) && isset($_GET['regPassword']) && isset($_GET['regRePassword'])){
	$regUsername = $_GET['regUsername'];
	$regEmail = $_GET['regEmail'];
	$regPassword = $_GET['regPassword'];
	$regRePassword = $_GET['regRePassword'];
	if($regUsername == '' or $regEmail == '' or $regPassword == '' or $regRePassword == ''){
		$_response .= "Warning : All fields are mandatory.";
	}
	else if($regPassword != $regRePassword){
		$_response .= "Warning : The password does not match with the confirmation password.";
	}
	else{
		/* Temporaire, Attente de la liaison en base de donnée */
		$_response .= 0;
	}
}

else if(isset($_GET['sendLogin']) && isset($_GET['logEmailUsername']) && isset($_GET['logPassword'])){
	$logEmailUsername = $_GET['logEmailUsername'];
	$logPassword = $_GET['logPassword'];
	
	if($logEmailUsername == '' or $logPassword == ''){
		$_response .= "Warning : All fields are mandatory.";
	}
	else{
		/* Temporaire, Attente de la liaison en base de donnée */
		$_response .= 0;
	}
}

echo $_response;
?>