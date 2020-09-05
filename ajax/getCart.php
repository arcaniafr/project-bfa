<?php session_start();
include_once("../core/functions.php");
$system = new System;
$system->db = $db;

$response = '';

if(isset($_GET['initCart'])){
	if(!isset($_SESSION['mCart'])){
		$_SESSION['mCart']=array();
		$_SESSION['mCart']['productID'] = array();
		$_SESSION['mCart']['productImage'] = array();
		$_SESSION['mCart']['productTitle'] = array();
		$_SESSION['mCart']['productQuantity'] = array();
		$_SESSION['mCart']['productPrice'] = array();
		$_SESSION['mCart']['locked'] = false;
	}
	return true;
}

if(isset($_GET['deleteCart'])){
	if(isset($_SESSION['mCart'])){
		$_SESSION['mCart']=array();
		$_SESSION['mCart']['productID'] = array();
		$_SESSION['mCart']['productImage'] = array();
		$_SESSION['mCart']['productTitle'] = array();
		$_SESSION['mCart']['productQuantity'] = array();
		$_SESSION['mCart']['productPrice'] = array();
		$_SESSION['mCart']['locked'] = false;
	}
	return true;
}

if(isset($_GET['updCartCounter'])){
	$response .= count($_SESSION['mCart']['productID']);
}

if(isset($_GET['addItem']) && isset($_GET['itemID'])){
	$items = $db->query('SELECT * FROM '.$_database['website-db-name'].'.products WHERE id="'.$_GET['itemID'].'"');
	$item = $items->fetch_object();
	$system->addItemCart($item->id,$item->image,$item->title,'1',$item->price);
}

if(isset($_GET['delItem']) && isset($_GET['itemID'])){
	$item = $system->delProductCart($_GET['itemID']);
}

if(isset($_GET['getAllCartItems'])){
	$nbArticles=count($_SESSION['mCart']['productID']);
	$response .= '<div class="block-content p-0">';
	if($nbArticles <= 0)
		$response .= '<div class="row arc-side-news"><center>Votre panier est vide ! </center></div>';
	else{
		for($i=0;$i<$nbArticles;$i++){
			$items = $db->query('SELECT * FROM '.$_database['website-db-name'].'.products WHERE id="'.rawurlencode($_SESSION['mCart']['productID'][$i]).'"');
			$item = $items->fetch_object();
			if(isset($_SESSION['langID']) && ($_SESSION['langID']==1))
				$title = $item->title_fr;
			elseif(isset($_SESSION['langID']) && ($_SESSION['langID']==2))
				$title = $item->title_es;
			else
				$title = $item->title_en;
			
			$response .= '<div class="row arc-side-news">
				<div class="col-xs-3 col-md-3">
					<a href="#" class="angled-img-small">
						<div class="img">
							<img src="assets/images/store/'.$item->image.'" alt="">
						</div>
					</a>
				</div>
				<div class="col-xs-9 col-md-9">
					<h5 class="ellipsis">'.$title.'<a href="" title="Remove this item" onclick="delProductCart('.$item->id.'); return false;"><span class="pull-right glyphicon glyphicon-remove"></span></a></h5>
					<span class="price">'.$item->price.' <img src="assets/images/jtn.png" width="20px"/> X '.$system->totalCount($item->id).'</span>
				</div>
			</div>';
		}
		$response .= '</div>
			<h5 class="block-bottom">TOTAL : '.$system->totalCart().' <img src="assets/images/jtn.png" width="20px"/><button class="btn btn-xs btn-primary pull-right" onclick="checkout();">Payer</button></h5>';
	}
}

if(isset($_GET['checkout']) && isset($_GET['activeCharacter'])){
	$accounts = $db->query('SELECT * FROM '.$_database['website-db-name'].'.account WHERE auth_account="'.$_SESSION['arc_user_id'].'"');
	$account = $accounts->fetch_object();
	if($account->online == 1){
		$response .= 3;
	}
	else{
		if($_GET['activeCharacter'] == 0){
			$response .= 2;
		}
		else{
			$character = $_GET['activeCharacter'];
			$chars = $db->query('SELECT * FROM '.$_database['characters-db-name'].'.characters WHERE guid="'.$character.'"');
			$char = $chars->fetch_object();
			if($char->online == 1){
				$response .= 1;
			}
			else{
				$nbArticles=count($_SESSION['mCart']['productID']);
				if($nbArticles <= 0)
					$response .= 0;
				else{
					$total=0;
					$response .= '<div class="modal-header">
						<h4 class="modal-title">Confirmation</h4>
						<div class="nk-gap-2"></div>
						<h6 class="modal-title">Êtes-vous sûr de vouloir valider votre panier ?</h6>
						<div class="nk-gap-1"></div>';
					for($i = 0; $i < count($_SESSION['mCart']['productID']); $i++){
						$item = $system->getProductInfo(rawurlencode($_SESSION['mCart']['productID'][$i]));
						$total += $_SESSION['mCart']['productPrice'][$i];
						$response .= '<div>
							<h6>- <img src="assets/images/'.$item->image.'" width="15px" style="border-radius:5px;"/> '.$item->title.' '.$item->price.'<img src="assets/images/jtn.png" width="20px"/></h6>
						</div>';
					}
					if($account->credit != null){
						$credit = $account->credit;
					}
					else{
						$credit = '0';
					}
					if($credit > $total){
						$checkBuy = 0;
					}
					else{
						$checkBuy = 1;
					}
					$response .= '<div class="nk-gap-1"></div>
						<h5>Vous avez '.$credit.' <img src="assets/images/jtn.png" width="20px"/>.</h5>';
						if($credit > $total){
							$response .= '<div class="col-md-12">
									<div class="col-md-6">
										<button class="btn btn-theme btn-block" onclick="sendOrder();">Oui</button>
										<small>Votre compte sera débité de '.$total.' <img src="assets/images/jtn.png" width="20px"/>.</small>
									</div>
									<div class="col-md-6">
										<button class="btn btn-danger btn-block" onclick="cancelOrder(); return false;">Non</button>
										<small>Votre compte ne sera pas débité et la transaction sera annulée.</small>
									</div>
								</div>
							</div>';
						}
						else{
							$response .= '<div class="col-md-6">
								<button class="btn btn-theme btn-block" onclick="showModalBuyJeton(); return false;">Acheter des <img src="assets/images/jtn.png" width="20px"/></button>
								<small>Vous n\'avez pas assez de crédits. Veuillez recharger votre compte!</small>
							</div>
							<div class="col-md-6">
								<button class="btn btn-danger btn-block" onclick="cancelOrder(); return false;">Annuler</button>
								<small>Vous annulez la transaction.</small>
							</div>';
						}
				}
			}
		}
	}
}

if(isset($_GET['updateCredit'])){
	for($i = 0; $i < count($_SESSION['mCart']['productID']); $i++){
		$item = $system->getProductInfo(rawurlencode($_SESSION['mCart']['productID'][$i]));
		$total += $_SESSION['mCart']['productPrice'][$i];
	}
	$auths = $db->query('SELECT * FROM '.$_database['website-db-name'].'.account WHERE auth_account="'.$_SESSION['arc_user_id'].'"');
	$auth = $auths->fetch_object();
	$credit = $auth->credit - $total;
	$updCredit = $db->query('UPDATE '.$_database['website-db-name'].'.account SET credit="'.$credit.'" WHERE auth_account="'.$_SESSION['arc_user_id'].'"');
	if($updCredit)
		$response .= 1;
	else
		$response .= 0;
}

if(isset($_GET['sendOrder']) && isset($_GET['activeCharacter'])){
	$character = $_GET['activeCharacter'];
	$nbArticles=count($_SESSION['mCart']['productID']);
	$chars = $db->query('SELECT * FROM '.$_database['characters-db-name'].'.characters WHERE guid="'.$character.'"');
	$char = $chars->fetch_object();
	if($char->online == 1){
		$response .= 0;
	}
	else{
		if($nbArticles <= 0)
			$response .= '0';
		else{
			for($i = 0; $i < count($_SESSION['mCart']['productID']); $i++){
				$item = $system->getProductInfo(rawurlencode($_SESSION['mCart']['productID'][$i]));
				if($item->categoryID == 1){ // coffres
					
				}
				if($item->categoryID == 2){ // pièces d'or
					
					if($item->subCategoryID==5000){
						$db->query('INSERT INTO '.$_database['characters-db-name'].'.mail (messageType, stationery, sender, receiver, subject, body, has_items, expire_time, deliver_time, money) VALUES
						("3", "61", "2", "'.$character.'", "Votre achat sur Arcania", "Merci pour votre commande, bon jeu !", "0", "1513873342", "1511281342","50000000")');
					}
					if($item->subCategoryID==10000){
						$db->query('INSERT INTO '.$_database['characters-db-name'].'.mail (messageType, stationery, sender, receiver, subject, body, has_items, expire_time, deliver_time, money) VALUES
						("3", "61", "2", "'.$character.'", "Votre achat sur Arcania", "Merci pour votre commande, bon jeu !", "0", "1513873342", "1511281342","100000000")');
					}
					if($item->subCategoryID==20000){
						$db->query('INSERT INTO '.$_database['characters-db-name'].'.mail (messageType, stationery, sender, receiver, subject, body, has_items, expire_time, deliver_time, money) VALUES
						("3", "61", "2", "'.$character.'", "Votre achat sur Arcania", "Merci pour votre commande, bon jeu !", "0", "1513873342", "1511281342","200000000")');
					}
					if($item->subCategoryID==50000){
						$db->query('INSERT INTO '.$_database['characters-db-name'].'.mail (messageType, stationery, sender, receiver, subject, body, has_items, expire_time, deliver_time, money) VALUES
						("3", "61", "2", "'.$character.'", "Votre achat sur Arcania", "Merci pour votre commande, bon jeu !", "0", "1513873342", "1511281342","500000000")');
					}
					if($item->subCategoryID==100000){
						$db->query('INSERT INTO '.$_database['characters-db-name'].'.mail (messageType, stationery, sender, receiver, subject, body, has_items, expire_time, deliver_time, money) VALUES
						("3", "61", "2", "'.$character.'", "Votre achat sur Arcania", "Merci pour votre commande, bon jeu !", "0", "1513873342", "1511281342","1000000000")');
					}
					if($item->subCategoryID==250000){
						$db->query('INSERT INTO '.$_database['characters-db-name'].'.mail (messageType, stationery, sender, receiver, subject, body, has_items, expire_time, deliver_time, money) VALUES
						("3", "61", "2", "'.$character.'", "Votre achat sur Arcania", "Merci pour votre commande, bon jeu !", "0", "1513873342", "1511281342","2500000000")');
					}
					if($item->subCategoryID==500000){
						$db->query('INSERT INTO '.$_database['characters-db-name'].'.mail (messageType, stationery, sender, receiver, subject, body, has_items, expire_time, deliver_time, money) VALUES
						("3", "61", "2", "'.$character.'", "Votre achat sur Arcania", "Merci pour votre commande, bon jeu !", "0", "1513873342", "1511281342","5000000000")');
					}
				}
				if($item->categoryID == 3){ // Sorts de vols
					if($item->subCategoryID == 1){ // Vol en draenor
						$db->query('INSERT IGNORE INTO '.$_database['characters-db-name'].'.character_spell (guid, spell, active, disabled) VALUES
						("'.$character.'", "191645", "1", "0")');
						$db->query('INSERT IGNORE INTO '.$_database['characters-db-name'].'.character_spell (guid, spell, active, disabled) VALUES
						("'.$character.'", "33388", "1", "0")');
						$insertMail = $db->query('INSERT INTO '.$_database['characters-db-name'].'.mail (messageType, stationery, sender, receiver, subject, body, has_items) VALUES
						("3", "61", "2", "'.$character.'", "Votre achat sur Arcania", "Merci pour votre commande, bon jeu !", "1")');
						if($insertMail){
							$mails = $db->query('SELECT * FROM '.$_database['characters-db-name'].'.mail WHERE receiver="'.$character.'" ORDER BY id DESC LIMIT 1');
							$mail = $mails->fetch_object();
							$createItem = $db->query('INSERT INTO '.$_database['characters-db-name'].'.item_instance (itemEntry, owner_guid, charges, enchantments) VALUES
							("128706", "'.$character.'","-1 0","0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 ")');
							if($createItem){
								$items = $db->query('SELECT * FROM '.$_database['characters-db-name'].'.item_instance WHERE owner_guid="'.$character.'" ORDER BY guid DESC LIMIT 1');
								$item = $items->fetch_object();
								$db->query('INSERT INTO '.$_database['characters-db-name'].'.mail_items (mail_id, item_guid, receiver) VALUES
								("'.$mail->id.'", "'.$item->guid.'", "'.$character.'")');
							}
						}
					}
					if($item->subCategoryID == 1){ // Vol en draenor
						$db->query('INSERT IGNORE INTO '.$_database['characters-db-name'].'.character_spell (guid, spell, active, disabled) VALUES
						("'.$character.'", "233368", "1", "0")');
						$db->query('INSERT IGNORE INTO '.$_database['characters-db-name'].'.character_spell (guid, spell, active, disabled) VALUES
						("'.$character.'", "226342", "1", "0")');
						$db->query('INSERT IGNORE INTO '.$_database['characters-db-name'].'.character_spell (guid, spell, active, disabled) VALUES
						("'.$character.'", "33388", "1", "0")');
						$insertMail = $db->query('INSERT INTO '.$_database['characters-db-name'].'.mail (messageType, stationery, sender, receiver, subject, body, has_items) VALUES
						("3", "61", "2", "'.$character.'", "Votre achat sur Arcania", "Merci pour votre commande, Vous avez débloqué le vol sur les îles brisées ! Bon jeu !", "0")');
					}
				}
				if($item->categoryID == 4){ // Montures
					
				}
				if($item->categoryID == 5){ // Equipements
					
				}
				if($item->categoryID == 6){ // Leveling
					if($item->subCategoryID==20){
						$db->query('UPDATE '.$_database['characters-db-name'].'.characters SET level="20" WHERE guid="'.$character.'"');
					}
					if($item->subCategoryID==30){
						$db->query('UPDATE '.$_database['characters-db-name'].'.characters SET level="30" WHERE guid="'.$character.'"');
					}
					if($item->subCategoryID==40){
						$db->query('UPDATE '.$_database['characters-db-name'].'.characters SET level="40" WHERE guid="'.$character.'"');
					}
					if($item->subCategoryID==50){
						$db->query('UPDATE '.$_database['characters-db-name'].'.characters SET level="50" WHERE guid="'.$character.'"');
					}
					if($item->subCategoryID==60){
						$db->query('UPDATE '.$_database['characters-db-name'].'.characters SET level="60" WHERE guid="'.$character.'"');
					}
					if($item->subCategoryID==70){
						$db->query('UPDATE '.$_database['characters-db-name'].'.characters SET level="70" WHERE guid="'.$character.'"');
					}
					if($item->subCategoryID==80){
						$db->query('UPDATE '.$_database['characters-db-name'].'.characters SET level="80" WHERE guid="'.$character.'"');
					}
					if($item->subCategoryID==90){
						$db->query('UPDATE '.$_database['characters-db-name'].'.characters SET level="90" WHERE guid="'.$character.'"');
					}
					if($item->subCategoryID==100){
						$db->query('UPDATE '.$_database['characters-db-name'].'.characters SET level="100" WHERE guid="'.$character.'"');
					}
					if($item->subCategoryID==110){
						$db->query('UPDATE '.$_database['characters-db-name'].'.characters SET level="110" WHERE guid="'.$character.'"');
					}
				}
				if($item->categoryID == 7){ // Services
					
				}
				if($item->categoryID == 8){ // Divers					
					if($item->subCategoryID==1){
						// item prodigieux = 138782:100pts || 139413:200pts || 140247:350pts || 141313:500pts || 139506:1000pts || 140305:2000pts || 140307:4000pts
						$insertMail = $db->query('INSERT INTO '.$_database['characters-db-name'].'.mail (messageType, stationery, sender, receiver, subject, body, has_items) VALUES
						("3", "61", "2", "'.$character.'", "Votre achat sur Arcania", "Merci pour votre commande, bon jeu !", "1")');
						if($insertMail){
							$mails = $db->query('SELECT * FROM '.$_database['characters-db-name'].'.mail WHERE receiver="'.$character.'" ORDER BY id DESC LIMIT 1');
							$mail = $mails->fetch_object();
							$createItem = $db->query('INSERT INTO '.$_database['characters-db-name'].'.item_instance (itemEntry, owner_guid, charges, enchantments) VALUES
							("139506", "'.$character.'","-1 0","0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 ")');
							if($createItem){
								$items = $db->query('SELECT * FROM '.$_database['characters-db-name'].'.item_instance WHERE owner_guid="'.$character.'" ORDER BY guid DESC LIMIT 1');
								$item = $items->fetch_object();
								$db->query('INSERT INTO '.$_database['characters-db-name'].'.mail_items (mail_id, item_guid, receiver) VALUES
								("'.$mail->id.'", "'.$item->guid.'", "'.$character.'")');
							}
						}
					}
				}
			}
			$response .= '<div class="modal-body"><h4 class="modal-title">Votre commande à été traité</h4>
				<div class="nk-gap-2"></div>
				<center>
					<img src="assets/images/check-success.png" width="80px"/>
					<h5>Vous pouvez vous reconnecter au jeux et profiter de votre commande !</h5>
				</center></div>';
			
		}
	}
}

echo $response;
?>