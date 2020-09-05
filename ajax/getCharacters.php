<?php session_start();
include_once("../core/functions.php");
$system = new System;
$system->db = $db;

if(isset($_SESSION['langID']) && ($_SESSION['langID']==1)){
	require_once '../includes/languages/french.php';
}
elseif(isset($_SESSION['langID']) && ($_SESSION['langID']==2)){
	require_once '../includes/languages/spanish.php';
}
else{
	require_once '../includes/languages/english.php';
}

if(isset($_GET['server'])){
	$server = $_GET['server'];
	if($server == 0){
		echo '<option value="0">'.$lang['store-select-server'].'</option>';
	}
	else{
		echo '<option value="0">'.$lang['store-select-character'].'</option>';
		$char = $db->query('SELECT * FROM '.$_database['characters-db-name'].'.characters WHERE account="'.$_SESSION['arc_userID'].'"');
		if($char->num_rows == 0){
			echo '<option value="0">'.$lang['store-no-characters'].'</option>';
		}
		else{
			while($chars = $char->fetch_object()){
				echo '<option value="'.$chars->guid.'"><img src="assets/images/alliance.png"/> '.$chars->name.' - lvl : '.$chars->level.'</option>';
			}
		}
	}
}


?>