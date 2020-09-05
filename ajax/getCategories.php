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

if(isset($_GET['character'])){
	$character = $_GET['character'];
	if($character == 0){
		echo '<option value="0">'.$lang['store-select-character'].'</option>';
	}
	else{
		echo'<option value="0">'.$lang['store-filter-title-category'].'</option>
		<option value="100">'.$lang['store-filter-all-category'].'</option>
		<option value="1">'.$lang['store-filter-chests'].'</option>
		<option value="2">'.$lang['store-filter-golds'].'</option>
		<option value="3">'.$lang['store-filter-flying'].'</option>
		<option value="4">'.$lang['store-filter-mounts'].'</option>
		<option value="5">'.$lang['store-filter-equipments'].'</option>
		<option value="6">'.$lang['store-filter-leveling'].'</option>
		<option value="7">'.$lang['store-filter-services'].'</option>
		<option value="8">'.$lang['store-filter-divers'].'</option>';
	}
}


?>