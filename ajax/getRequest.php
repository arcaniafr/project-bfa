<?php session_start();
include_once("../core/functions.php");
$system = new System;
$system->db = $db;
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
		$getEmail = $db->query("SELECT * FROM ".$_database['auth-db-name'].".account WHERE email='".$regEmail."'");
		if($getEmail->num_rows == 0){
			$getUsername = $db->query("SELECT * FROM ".$_database['auth-db-name'].".account WHERE username='".$_GET['regUsername']."'");
			if($getUsername->num_rows == 0){
				$encrypt_password = strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash("sha256",strtoupper(hash("sha256", strtoupper($regEmail)).":".strtoupper($regPassword))))))));
				$createBnetAccount = $db->query("INSERT INTO ".$_database['auth-db-name'].".battlenet_accounts (email, sha_pass_hash) VALUES ('".$regEmail."','".$encrypt_password."')");
				if($createBnetAccount){
					$battlenet = $db->query("SELECT * FROM ".$_database['auth-db-name'].".battlenet_accounts WHERE email='".$regEmail."'");
					$bNet = $battlenet->fetch_object();
					$bNetID = $bNet->id;
					$createAccount = $db->query("INSERT INTO ".$_database['auth-db-name'].".account (username, sha_pass_hash, email, reg_mail, battlenet_account, battlenet_index) VALUES ('".$_regUsername."','".$encrypt_password."','".$_GET['regEmail']."','".$_GET['regEmail']."','".$bNetID."','1')");
					if($createAccount){
						$getUserAccount = $db->query("SELECT * FROM ".$_database['auth-db-name'].".account WHERE email='".$regEmail."'");
						$getUserInfos = $getUserAccount->fetch_object();
						$userAccID = $getUserInfos->id;
						$regIP = $_SERVER['REMOTE_ADDR'];
						$createWebsiteAccount = $db->query("INSERT INTO ".$_database['website-db-name'].".account (username, password, email, avatar, battlenet_account, auth_account, register_date, lastIP) VALUES
						('".$regUsername."','".$encrypt_password."','".$regEmail."','no-avatar.png','".$bNetID."','".$userAccID."','".time()."','".$regIP."')");
						if($createWebsiteAccount){
							$_SESSION['arc_auth'] = true;
							$_SESSION['arc_email'] = $regEmail;
							$_SESSION['arc_username'] = $regUsername;
							$_SESSION['arc_userID'] = $userAccID;
							$_response .= 0;
						}
						else{
							$_response .= "An account error occurred, contact admin!";
						}
					}
					else{
						$_response .= "An account error occurred, contact admin!";
					}
				}
				else{
					$_response .= "An Bnet account error occurred, contact admin!";
				}
			}
			else{
				$_response .= "The Username is already in use!";
			}
		}
	}
}

else if(isset($_GET['sendLogin']) && isset($_GET['logEmailUsername']) && isset($_GET['logPassword'])){
	$logEmailUsername = $_GET['logEmailUsername'];
	$logPassword = $_GET['logPassword'];
	
	if($logEmailUsername == '' or $logPassword == ''){
		$_response .= "Warning : All fields are mandatory.";
	}
	else{
		$getEmail = $db->query("SELECT * FROM ".$_database['website-db-name'].".account WHERE email='".$logEmailUsername."'");
		if($getEmail->num_rows == 0){
			$getEmailByUsername = $db->query("SELECT * FROM ".$_database['website-db-name'].".account WHERE username='".$logEmailUsername."'");
			if($getEmailByUsername->num_rows == 1){
				$setEmail = $getEmailByUsername->fetch_object();
				$email = $setEmail->email;
			}
		}
		else{
			$email = $logEmailUsername;
		}
		$encrypt_password = strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash("sha256",strtoupper(hash("sha256", strtoupper($email)).":".strtoupper($logPassword))))))));
		$getAccount = $db->query("SELECT * FROM ".$_database['website-db-name'].".account WHERE email='".$email."'");
		$getAccountInfo = $getAccount->fetch_object();
		if($encrypt_password == $getAccountInfo->password){
			$_SESSION['arc_auth'] = true;
			$_SESSION['arc_email'] = $getAccountInfo->email;
			$_SESSION['arc_username'] = $getAccountInfo->username;
			$_SESSION['arc_userID'] = $getAccountInfo->auth_account;
			$db->query("UPDATE ".$_database['website-db-name'].".account SET lastIP='".$_SERVER['REMOTE_ADDR']."', lastConnect=".time()." WHERE email='".$email."'");
			$_response .= 0;
		}
		else{
			$_response .= "Le mot de passe est incorrect !".$email;
		}
	}
}
echo $_response;
?>