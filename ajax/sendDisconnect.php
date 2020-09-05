<?php 
if(isset($_GET['isDisconnect'])){
	session_start();
	session_destroy();
	if(isset($_SESSION['arc_auth'])){
		echo 1;
	}
	else{
		echo 'Une erreur c\'est produite pendant la déconnexion !';
	}
}



?>