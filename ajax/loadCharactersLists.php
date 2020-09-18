<?php session_start();
include_once("../core/functions.php");
$auth = new Auth;
$system = new System;
$system->db = $db;

	if(isset($_SESSION['langID']) && ($_SESSION['langID']==1)){
		require_once '../includes/languages/french.php';
	}
	else{
		require_once '../includes/languages/english.php';
	}
	
if($auth->isLogged()){
	if(isset($_GET['charsActives'])){
		$chars = $db->query('SELECT * FROM characters.characters WHERE account= '.$_SESSION['arc_user_id'].' ORDER BY level ASC');
		echo '<div class="nk-gap-1"></div>';
		if($chars->num_rows >= 1){
			while ($char = $chars->fetch_object()){
				echo '<ul class="nk-chars col-md-3">
					<li>
						<h3>'.$char->name.'</h3>
						<div class="col-md-6">
							<h5>Race :</h5>
							<h5>Classe : </h5>
							<h5>Niveau : </h5>
						</div>
						<div class="col-md-6">';
							///// START RACE /////
							if($char->race == 1 && $char->gender == 0){ //Humain male
								echo '<img src="assets/images/races/race_human_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 1 && $char->gender == 1){ //Humain femelle
								echo '<img src="assets/images/races/race_human_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 2 && $char->gender == 0){ //orc male
								echo '<img src="assets/images/races/race_orc_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 2 && $char->gender == 1){ //orc femelle
								echo '<img src="assets/images/races/race_orc_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 3 && $char->gender == 0){ //Nain male
								echo '<img src="assets/images/races/race_dwarf_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 3 && $char->gender == 1){ //Nain femelle
								echo '<img src="assets/images/races/race_dwarf_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 4 && $char->gender == 0){ //Elf de la nuit male
								echo '<img src="assets/images/races/race_nightelf_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 4 && $char->gender == 1){ //Elf de la nuit femelle
								echo '<img src="assets/images/races/race_nightelf_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 5 && $char->gender == 0){ //Mort vivant male
								echo '<img src="assets/images/races/race_scourge_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 5 && $char->gender == 1){ //Mort vivant femelle
								echo '<img src="assets/images/races/race_scourge_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 6 && $char->gender == 0){ //Tauren male
								echo '<img src="assets/images/races/race_tauren_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 6 && $char->gender == 1){ //Tauren femelle
								echo '<img src="assets/images/races/race_tauren_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 7 && $char->gender == 0){ //Gnome male
								echo '<img src="assets/images/races/race_gnome_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 7 && $char->gender == 1){ //Gnome femelle
								echo '<img src="assets/images/races/race_gnome_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 8 && $char->gender == 0){ //Troll male
								echo '<img src="assets/images/races/race_troll_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 8 && $char->gender == 1){ //Troll femelle
								echo '<img src="assets/images/races/race_troll_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 9 && $char->gender == 0){ //Goblin male
								echo '<img src="assets/images/races/race_goblin_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 9 && $char->gender == 1){ //Goblin femelle
								echo '<img src="assets/images/races/race_goblin_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 10 && $char->gender == 0){ //Elf de sang male
								echo '<img src="assets/images/races/race_bloodelf_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 10 && $char->gender == 1){ //Elf de sang femelle
								echo '<img src="assets/images/races/race_bloodelf_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 11 && $char->gender == 0){ //Draeneï male
								echo '<img src="assets/images/races/race_draenei_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 11 && $char->gender == 1){ //Draeneï femelle
								echo '<img src="assets/images/races/race_draenei_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 22 && $char->gender == 0){ //Worgen male
								echo '<img src="assets/images/races/race_worgen_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 22 && $char->gender == 1){ //Worgen femelle
								echo '<img src="assets/images/races/race_worgen_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 24 && $char->gender == 0){ //Pandaren male
								echo '<img src="assets/images/races/race_pandaren_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 24 && $char->gender == 1){ //Pandaren femelle
								echo '<img src="assets/images/races/race_pandaren_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 25 && $char->gender == 0){ //Pandaren male
								echo '<img src="assets/images/races/race_pandaren_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 25 && $char->gender == 1){ //Pandaren femelle
								echo '<img src="assets/images/races/race_pandaren_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 26 && $char->gender == 0){ //Pandaren male
								echo '<img src="assets/images/races/race_pandaren_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							elseif($char->race == 26 && $char->gender == 1){ //Pandaren femelle
								echo '<img src="assets/images/races/race_pandaren_female.jpg" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							}
							else
								echo '<img src="assets/images/races/race_no.png" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							///// END RACE /////
							///// START CLASS /////
							if($char->class == 1){ //Guerrier
								echo '<img src="assets/images/class/class_warrior.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 2){ //Paladin
								echo '<img src="assets/images/class/class_paladin.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 3){ //Chasseur
								echo '<img src="assets/images/class/class_hunter.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 4){ //Voleur
								echo '<img src="assets/images/class/class_rogue.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 5){ //Pretre
								echo '<img src="assets/images/class/class_priest.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 6){ //Chevalier de la mort
								echo '<img src="assets/images/class/class_deathknight.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 7){ //Shaman
								echo '<img src="assets/images/class/class_shaman.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 8){ //Mage
								echo '<img src="assets/images/class/class_mage.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 9){ //Demoniste
								echo '<img src="assets/images/class/class_warlock.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 10){ //Moine
								echo '<img src="assets/images/class/class_monk.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 11){ //Druide
								echo '<img src="assets/images/class/class_druid.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							elseif($char->class == 12){ //Chasseur de demon
								echo '<img src="assets/images/class/class_demonhunter.jpg" style="width:30px;margin-top:5px;border-radius:10px"/>';
							}
							else
								echo '<img src="assets/images/class/class_no.png" style="width:30px;margin-top:5px;border-radius:10px"/></br>';
							///// END CLASS /////
							
							echo '<h5 style="margin-top:12px;">'.$char->level.'</h5>
						</div>
						<div class="col-md-12">
							<button class="btn btn-danger btn-block" onclick="startUnblockCharacter();">'.$site['charUnlockBtn'].'</button>
							<input type="hidden" value="'.$char->guid.'" id="unlockCharID"/>
						</div>
					</li>
				</ul>';
			}
		}
		else{
			echo '<ul class="nk-chars col-md-12">
				<li>
					<h5>Vous n\'avez aucun personnage !</h3>
				</li>
			</ul>';
		}
		echo '<div class="nk-gap-4"></div>';
	}
}
else{
	echo '<ul class="nk-chars col-md-12">
		<li>
			<h5>Vous n\'êtes pas connecté !</h3>
		</li>
	</ul>
	<div class="nk-gap-4"></div>';
}
	?>