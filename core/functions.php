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
	
	public function getProductInfo($id) {
		$items = $this->db->query('SELECT * FROM '.$_database['website-db-name'].'.products WHERE id="'.$id.'"');
		$item = $items->fetch_object();
		return $item;
	}


	public function addItemCart($productID,$productImage,$productTitle,$productQuantity,$productPrice){
		if(isset($_SESSION['mCart']['productID'])){
			//Si le produit existe déjà on ajoute seulement la quantité
			$positionProduit = array_search($productID, $_SESSION['mCart']['productID']);

			if ($positionProduit !== false){
				$_SESSION['mCart']['productQuantity'][$positionProduit] += $productQuantity ;
				return 'true';
			}
			else{
				//Sinon on ajoute le produit
				array_push($_SESSION['mCart']['productID'],$productID);
				array_push($_SESSION['mCart']['productImage'],$productImage);
				array_push($_SESSION['mCart']['productTitle'],$productTitle);
				array_push($_SESSION['mCart']['productQuantity'],$productQuantity);
				array_push($_SESSION['mCart']['productPrice'],$productPrice);
				return 'true';
			}
		}
		else
			return 'false';
	}

	public function delProductCart($productID){
		//Nous allons passer par un panier temporaire
		$tmp=array();
		$tmp['productID'] = array();
		$tmp['productImage'] = array();
		$tmp['productTitle'] = array();
		$tmp['productQuantity'] = array();
		$tmp['productPrice'] = array();
		$tmp['locked'] = $_SESSION['mCart']['locked'];

		for($i = 0; $i < count($_SESSION['mCart']['productID']); $i++){
			if ($_SESSION['mCart']['productID'][$i] !== $productID){
				array_push($tmp['productID'],$_SESSION['mCart']['productID'][$i]);
				array_push($tmp['productImage'],$_SESSION['mCart']['productImage'][$i]);
				array_push($tmp['productTitle'],$_SESSION['mCart']['productTitle'][$i]);
				array_push($tmp['productQuantity'],$_SESSION['mCart']['productQuantity'][$i]);
				array_push($tmp['productPrice'],$_SESSION['mCart']['productPrice'][$i]);
			}
		}
		//On remplace le panier en session par notre panier temporaire à jour
		$_SESSION['mCart'] =  $tmp;
		//On efface notre panier temporaire
		unset($tmp);
	}
	
	function updCartQuantity($productID,$productQuantity){
		//Si la quantité est positive on modifie sinon on supprime l'article
		if($productQuantity > 0){
			//Recherche du produit dans le panier
			$positionProduit = array_search($productID,  $_SESSION['mCart']['productID']);
			 
			if($positionProduit !== false){
				$_SESSION['mCart']['productQuantity'][$positionProduit] = $productQuantity ;
			}
		}
	}
	
	public function totalCart(){
		$total=0;
		for($i = 0; $i < count($_SESSION['mCart']['productID']); $i++){
			$total += $_SESSION['mCart']['productQuantity'][$i] * $_SESSION['mCart']['productPrice'][$i];
		}
		return $total;
	}
	
	function totalCount($pID){
		$positionProduit = array_search($pID,  $_SESSION['mCart']['productID']);
		 
		if($positionProduit !== false){
			return $_SESSION['mCart']['productQuantity'][$positionProduit] ;
		}
	}
	
	public function itemTotal($qty,$price){
		$total=0;
		if($_SESSION['mCart']['productID'] == $id){
			$total = $qty * $price;
		}
		return $total;
	}
	
	public function timeAgo($ptime) {
		$etime = time() - $ptime;
		if ($etime < 1)
		{
			return 'maintenant';
		}
		$a = array(
			365 * 24 * 60 * 60	=> 'année',
			30 * 24 * 60 * 60	=> 'mois',
			24 * 60 * 60		=> 'jour',
			60 * 60				=> 'heure',
			60					=> 'minute',
			1					=> 'seconde'
		);
		$a_plural = array(
			'année'		=> 'ans',
			'mois'		=> 'mois',
			'jour'		=> 'jours',
			'heure'		=> 'heures',
			'minute'	=> 'minutes',
			'seconde'	=> 'secondes'
			);

		foreach ($a as $secs => $str){
			$d = $etime / $secs;
			if ($d >= 1){
				$r = round($d);
				return 'Envoyé il y a '. $r.' '.($r > 1 ? $a_plural[$str] : $str);
			}
		}
	}

}

?>

