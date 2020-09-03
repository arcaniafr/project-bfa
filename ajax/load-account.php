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

else if(isset($_GET['loadCharacters']) && isset($_GET['accountID'])){
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