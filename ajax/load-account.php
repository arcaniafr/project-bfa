<?php
$_response = "";



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

if(isset($_GET['loadCharacters']) && isset($_GET['accountID'])){
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
			<div class="arc-character-box">
				<h3 class="arc-site-title">My characters</h3>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6">
						<ul class="arc-chars">
							<li>
								<h3>Qzdr</h3>
								<div class="col-md-6">
									<h5>Race :</h5>
									<h5>Classe : </h5>
									<h5>Niveau : </h5>
								</div>
								<div class="col-md-6"><img src="assets/images/races/race_bloodelf_male.jpg" style="width:30px;margin-top:5px;border-radius:10px"><br><img src="assets/images/class/class_demonhunter.jpg" style="width:30px;margin-top:5px;border-radius:10px"><h5 style="margin-top:12px;">98</h5>
								</div>
								<div class="col-md-12">
									<button class="btn btn-danger btn-block" onclick="startUnblockCharacter();">Débloquer</button>
									<input type="hidden" value="18" id="unlockCharID">
								</div>
							</li>
						</ul>
					</div>
				</div>
	</div>';

}

echo $_response;
?>