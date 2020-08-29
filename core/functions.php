<?php require_once 'config.php';

class Auth{
	function isLogged() {
		if(!empty($_SESSION)) {
			if(isset($_SESSION['arc_auth'])) {
				return true;
			} else {
				return false;
			}
		}
		else {
			return false;
		}
	}

	function isAdmin() {
		if(isset($_SESSION['arc_is_admin'])) {
			return true;
		}
		else {
			return false;
		}
	}
	

}

class System {
	public $db;
}

?>

