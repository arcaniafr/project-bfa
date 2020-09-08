<?php session_start();
	include_once("../core/functions.php");
	$auth = new Auth;
	$system = new System;
	$system->db = $db;
	$_response = "";

	if(!isset($_SESSION['langID'])){
		$_SESSION['langID'] = 1;
	}
	
	if(isset($_SESSION['langID']) && ($_SESSION['langID']==1)){
		require_once '../includes/languages/french.php';
	}
	else{
		require_once '../includes/languages/english.php';
	}
	
if(isset($_GET['loadAccountInfos']) && isset($_GET['accountID'])){
	/* Temporaire, Attente de la liaison en base de donnée */
	$_response .= '
	<div id="account-loading" style="display:none">
		<div class="arc-news-box">
			<div class="arc-news-box-each-info">
				<div class="nano">
					<div class="nano-content" style="margin-top:20px">
						<center>
							<h4>Loading...</h4>
							<div class="mfp-preloader preloader"></div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 ">
		<div class="col-md-2">
			<img src="assets/images/no-avatar.png" style="padding-top:10px">
		</div>
		<div class="col-md-10">
			<h5>Pseudo : arcaniafr</h5>
			<h5>Email : arcaniafr@gmail.com</h5>
			<h5>Inscrit le : 26/11/2017</h5>
			<h5>Mes personnages : 9</h5>
			<h5>Mes jetons : 7<img src="assets/images/jtn.png" width="30px"></h5>
			<h5>Dernière IP : 127.0.0.1</h5>
			<h5>Dernière connexion : 30/08/2020</h5>
			<h5>Rang : <span class="glyphicon glyphicon-star" style="color:#d42121">Développeur</span></h5>
			<div class="nk-gap-1"></div>
			<button class="btn btn-theme btn-block">Modifier mes informations</button>
		</div>
	</div>';

}

else if(isset($_GET['loadCharacters']) && isset($_GET['accountID'])){
	$_response .= '
			<div id="account-loading" style="display:none">
				<div class="arc-news-box">
					<div class="arc-news-box-each-info">
						<div class="nano">
							<div class="nano-content" style="margin-top:20px">
								<center>
									<h4>Loading...</h4>
									<div class="mfp-preloader preloader"></div>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="arc-character-box">
				<h3 class="arc-site-title">'.$lang['account-link-characters'].'</h3>
				<div class="row">';				
				$chars = $db->query('SELECT * FROM '.$_database['characters-db-name'].'.characters WHERE account= '.$_SESSION['arc_userID'].' ORDER BY level ASC');
				if($chars->num_rows >= 1){
					while ($char = $chars->fetch_object()){
						$_response .= '<div class="col-lg-4 col-md-4 col-sm-6">
							<ul class="arc-chars">
								<li>
									<h3>'.$char->name.'</h3>
									<div class="col-md-6">
										<h5 style="margin-top:15px;">Race :</h5>
										<h5 style="margin-top:15px;">Classe : </h5>
										<h5 style="margin-top:22px;">Niveau : </h5>
									</div>
									<div class="col-md-6">';
										///// START RACE /////
										if($char->race == 1 && $char->gender == 0){ //Humain male
											$_response .= '<img src="assets/images/races/race_human_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 1 && $char->gender == 1){ //Humain femelle
											$_response .= '<img src="assets/images/races/race_human_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 2 && $char->gender == 0){ //orc male
											$_response .= '<img src="assets/images/races/race_orc_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 2 && $char->gender == 1){ //orc femelle
											$_response .= '<img src="assets/images/races/race_orc_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 3 && $char->gender == 0){ //Nain male
											$_response .= '<img src="assets/images/races/race_dwarf_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 3 && $char->gender == 1){ //Nain femelle
											$_response .= '<img src="assets/images/races/race_dwarf_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 4 && $char->gender == 0){ //Elf de la nuit male
											$_response .= '<img src="assets/images/races/race_nightelf_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 4 && $char->gender == 1){ //Elf de la nuit femelle
											$_response .= '<img src="assets/images/races/race_nightelf_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 5 && $char->gender == 0){ //Mort vivant male
											$_response .= '<img src="assets/images/races/race_scourge_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 5 && $char->gender == 1){ //Mort vivant femelle
											$_response .= '<img src="assets/images/races/race_scourge_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 6 && $char->gender == 0){ //Tauren male
											$_response .= '<img src="assets/images/races/race_tauren_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 6 && $char->gender == 1){ //Tauren femelle
											$_response .= '<img src="assets/images/races/race_tauren_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 7 && $char->gender == 0){ //Gnome male
											$_response .= '<img src="assets/images/races/race_gnome_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 7 && $char->gender == 1){ //Gnome femelle
											$_response .= '<img src="assets/images/races/race_gnome_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 8 && $char->gender == 0){ //Troll male
											$_response .= '<img src="assets/images/races/race_troll_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 8 && $char->gender == 1){ //Troll femelle
											$_response .= '<img src="assets/images/races/race_troll_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 9 && $char->gender == 0){ //Goblin male
											$_response .= '<img src="assets/images/races/race_goblin_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 9 && $char->gender == 1){ //Goblin femelle
											$_response .= '<img src="assets/images/races/race_goblin_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 10 && $char->gender == 0){ //Elf de sang male
											$_response .= '<img src="assets/images/races/race_bloodelf_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 10 && $char->gender == 1){ //Elf de sang femelle
											$_response .= '<img src="assets/images/races/race_bloodelf_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 11 && $char->gender == 0){ //Draeneï male
											$_response .= '<img src="assets/images/races/race_draenei_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 11 && $char->gender == 1){ //Draeneï femelle
											$_response .= '<img src="assets/images/races/race_draenei_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 22 && $char->gender == 0){ //Worgen male
											$_response .= '<img src="assets/images/races/race_worgen_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 22 && $char->gender == 1){ //Worgen femelle
											$_response .= '<img src="assets/images/races/race_worgen_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 24 && $char->gender == 0){ //Pandaren male
											$_response .= '<img src="assets/images/races/race_pandaren_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 24 && $char->gender == 1){ //Pandaren femelle
											$_response .= '<img src="assets/images/races/race_pandaren_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 25 && $char->gender == 0){ //Pandaren male
											$_response .= '<img src="assets/images/races/race_pandaren_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 25 && $char->gender == 1){ //Pandaren femelle
											$_response .= '<img src="assets/images/races/race_pandaren_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 26 && $char->gender == 0){ //Pandaren male
											$_response .= '<img src="assets/images/races/race_pandaren_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										elseif($char->race == 26 && $char->gender == 1){ //Pandaren femelle
											$_response .= '<img src="assets/images/races/race_pandaren_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										}
										else
											$_response .= '<img src="assets/images/races/race_no.png" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										///// END RACE /////
										///// START CLASS /////
										if($char->class == 1){ //Guerrier
											$_response .= '<img src="assets/images/class/class_warrior.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 2){ //Paladin
											$_response .= '<img src="assets/images/class/class_paladin.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 3){ //Chasseur
											$_response .= '<img src="assets/images/class/class_hunter.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 4){ //Voleur
											$_response .= '<img src="assets/images/class/class_rogue.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 5){ //Pretre
											$_response .= '<img src="assets/images/class/class_priest.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 6){ //Chevalier de la mort
											$_response .= '<img src="assets/images/class/class_deathknight.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 7){ //Shaman
											$_response .= '<img src="assets/images/class/class_shaman.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 8){ //Mage
											$_response .= '<img src="assets/images/class/class_mage.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 9){ //Demoniste
											$_response .= '<img src="assets/images/class/class_warlock.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 10){ //Moine
											$_response .= '<img src="assets/images/class/class_monk.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 11){ //Druide
											$_response .= '<img src="assets/images/class/class_druid.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										elseif($char->class == 12){ //Chasseur de demon
											$_response .= '<img src="assets/images/class/class_demonhunter.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
										}
										else
											$_response .= '<img src="assets/images/class/class_no.png" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
										///// END CLASS /////
										
										$_response .= '<h5 style="margin-top:12px;">'.$char->level.'</h5>
									</div>
									<div class="col-md-12">
										<button class="btn btn-danger btn-block" onclick="startUnlockCharacter(); return false;">'.$lang['account-btn-character-unlock'].'</button>
										<input type="hidden" value="'.$char->guid.'" id="unlockCharID"/>
									</div>
								</li>
							</ul>
						</div>';
					}
				}
		else{
			$_response .= '<div class="col-lg-12 col-md-12 col-sm-6">
						<center><h5>Vous n\'avez aucun personnage !</h5></center>
			</div>';
		}
		$_response .= '</div>
	</div>';
}

if(isset($_GET['unlockCharacter']) && isset($_GET['charSelected']) && ($_GET['charSelected'] != 0)){
	$character = $_GET['character'];
	$selChars = $db->query('SELECT * FROM '.$_database['characters-db-name'].'.character_homebind WHERE guid="'.$_GET['charSelected'].'"');
	$selChar = $selChars->fetch_object();
	$updChar = $db->query('UPDATE '.$_database['characters-db-name'].'.characters SET map="'.$selChar->mapId.'", position_x="'.$selChar->posX.'", position_y="'.$selChar->posY.'", position_z="'.$selChar->posZ.'" WHERE guid="'.$_GET['charSelected'].'"');
	if($updChar){
		echo 1;
	}
	else{
		echo 0;
	}
}

else if(isset($_GET['loadMessagesInfos']) && isset($_GET['accountID'])){
	/* Temporaire, Attente de la liaison en base de donnée */
	$_response .= '
			<div id="account-loading" style="display:none">
				<div class="arc-news-box">
					<div class="arc-news-box-each-info">
						<div class="nano">
							<div class="nano-content" style="margin-top:20px">
								<center>
									<h4>Loading...</h4>
									<div class="mfp-preloader preloader"></div>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<ul class="pagination pagination-sm mt-0">
					<li class="messagerieInboxLi active">
						<a href="#" class="loadMessagesInboxClick">Inbox</a>
					</li>
					<li class="messagerieComposeLi">
						<a href="#" class="loadMessagesComposeClick">Compose</a>
					</li>
				</ul>
			</div>
			<div id="messages-inbox-loading">
				<table class="arc-messages table table-hover">
					<tbody>
					<tr>
						<td class="message-from">
							<a href="#" class="message-from-name" title="Test Tester">Test Tester</a>
							<div><span class="date">03th Dec 2019 at 8:29 am</span></div>
						</td>
						<td class="message-description">
							<a href="#" class="message-description-name" title="View Message">Test test test test</a>
							<div class="message-excerpt">Test test test test test test test test test ...</div>
						</td>
						<td class="message-action">
							<a class="message-delete" href="#" title="Remove"><i class="glyphicon glyphicon-remove"></i></a>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
			<div id="messages-compose-loading" style="display:none">
				<form action="">
					<div class="arc-input">
						<input type="text" placeholder="Send To" name="message-to">
					</div>
					<div class="arc-input">
						<input type="text" placeholder="Subject" name="message-subject">
					</div>
					<div class="arc-textarea">
						<textarea placeholder="Message" name="message" rows="5"></textarea>
					</div>
					<button class="btn btn-default">Send</button>
				</form>
			</div>
		</div>
	</div>';
}

echo $_response;
?>