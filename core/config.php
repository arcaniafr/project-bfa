<?php
    // Database Configuration
    $_database['host'] = '127.0.0.1';
    $_database['user'] = 'root';
    $_database['pass'] = '';
	
	$_database['website-db-name'] = "db_arcania";
	$_database['auth-db-name'] = "auth";
	$_database['characters-db-name'] = "characters";
    
    $db = new mysqli($_database['host'], $_database['user'], $_database['pass']) or die('MySQL Error');

    error_reporting(1);
	
    // Website Configuration
	$_config['website-logo-light'] = "assets/images/logo-light.png";
	$_config['website-icon'] = "assets/images/icon.png";
	$_config['website-title'] = "website title";
	
?>
