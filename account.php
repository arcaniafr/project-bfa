<?php
	session_start();
	include("core/functions.php");
	$auth = new Auth;
	if(!$auth->isLogged()){
		header('Location: index.php?notConnected=true');
		exit();
	}
	if(!isset($_SESSION['langID'])){
		$_SESSION['langID'] = 0;
	}
	
	if(isset($_SESSION['langID']) && ($_SESSION['langID']==1)){
		require_once 'includes/languages/french.php';
	}
	elseif(isset($_SESSION['langID']) && ($_SESSION['langID']==2)){
		require_once 'includes/languages/spanish.php';
	}
	else{
		require_once 'includes/languages/english.php';
	}
	$accs = $db->query('SELECT * FROM '.$_database['website-db-name'].'.account WHERE auth_account="'.$_SESSION['arc_userID'].'"');
	$acc = $accs->fetch_object();
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?=$_config['website-title']?></title>
<meta name="description" content="Gaming HTML Template based on Bootstrap">
<meta name="keywords" content="gaming, game, community, template, html, bootstrap, webpack">
<meta name="author" content="arcaniaFr">
<link rel="icon" type="image/png" href="<?=$_config["website-icon"]?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

<div class="preloader-wrapp">
<h2><?=$_config['website-title']?></h2>
<div class="preloader"></div>
</div>

<?php require_once("includes/header.php");?>

<div class="content-wrap">

<section class="arc-banner arc-banner-parallax">
<div class="image" data-speed="0.4">
<img src="assets/images/banner-bg.jpg" alt="" class="jarallax-img">
</div>
<div class="arc-user-navigation">
<div class="container">
<ul>
<li class="loadAccountLi active"><a href="#" class="loadAccountInfosClick"><?=$lang['account-link-account']?></a></li>
<li class="loadCharactersLi"><a href="#" class="loadCharactersClick"><?=$lang['account-link-characters']?></a></li>
<li class="loadMessagesLi"><a href="#" class="loadMessagesClick"><?=$lang['account-link-messages']?> <span class="badge">0</span></a></li>
<li><a href="#"><?=$lang['account-link-settings']?></a></li>
</ul>
</div>
</div>
<div class="info">
<div>
<div class="container arc-user">
<div class="angled-img img">
<img src="assets/images/default-user-image.png" alt="">
</div>
<div class="user-data">
<h2><?=$acc->username?></h2>
<div class="activity">
<div>
<div class="num">6</div>
<div class="title"><?=$lang['account-count-posts']?></div>
</div>
<div>
<div class="num">1</div>
<div class="title"><?=$lang['account-count-bugs']?></div>
</div>
<div>
<div class="num">9</div>
<div class="title"><?=$lang['account-count-followers']?></div>
</div>
</div>
</div>
</div>
<div class="container mt-20">
<a href="#" class="btn btn-sm btn-primary ml-0"><?=$lang['account-add-friend']?></a>
<a href="#" class="btn btn-sm btn-success"><?=$lang['account-send-message']?></a>
</div>
</div>
</div>
</section>

<div class="container arc-content">
<div class="row">
<div class="col-md-9 loadAccountInfos">
	<div id="account-loading" style="display:none">
		<div class="arc-news-box">
			<div class="arc-news-box-each-info">
				<div class="nano">
					<div class="nano-content" style="margin-top:20px">
						<center>
							<h4><?=$lang['account-loading']?>...</h4>
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
				<h5><?=$lang['account-pseudo-title']?> : <?=$acc->username?></h5>
				<h5><?=$lang['account-email-title']?> : <?=$acc->email?></h5>
				<h5><?=$lang['account-register-date-title']?> : <?=date('d/m/Y',$acc->register_date)?></h5>
				<h5><?=$lang['account-credit-title']?> : <?=$acc->credit?> <img src="assets/images/jtn.png" width="20px"></h5>
				<h5><?=$lang['account-last-ip-title']?> : <?=$acc->lastIP?></h5>
				<h5><?=$lang['account-last-connect-title']?> : <?=date('d/m/Y',$acc->lastConnect)?></h5>
				<?php if($acc->rank == 0)
					echo '<h5>'.$lang['account-rank-title'].' : <span class="glyphicon glyphicon-star" style="color:#21abd4">'.$lang['account-rank-0'].'</span></h5>';
				else if($acc->rank == 1)
					echo '<h5>'.$lang['account-rank-title'].' : <span class="glyphicon glyphicon-star" style="color:#a5d421">'.$lang['account-rank-1'].'</span></h5>';
				else if($acc->rank == 2)
					echo '<h5>'.$lang['account-rank-title'].' : <span class="glyphicon glyphicon-star" style="color:#21d499">'.$lang['account-rank-2'].'</span></h5>';
				else if($acc->rank == 3)
					echo '<h5>'.$lang['account-rank-title'].' : <span class="glyphicon glyphicon-star" style="color:#9c21d4">'.$lang['account-rank-3'].'</span></h5>';
				else if($acc->rank == 4)
					echo '<h5>'.$lang['account-rank-title'].' : <span class="glyphicon glyphicon-star" style="color:#d42121">'.$lang['account-rank-4'].'</span></h5>';
				
				echo '<div class="nk-gap-1"></div>
				<button class="btn btn-warning btn-block">'.$lang['account-btn-mod-account'].'</button>';
				?>
		</div>
	</div>
</div>

<div class="col-md-3">
<div class="side-block arc-container-box">
	<h4 class="block-title"><?=$lang['account-link-account']?></h4>
	<div class="arc-widget-content">
		<h5><a href="#" class="loadAccountInfosClick"><span class="glyphicon glyphicon-home"></span> Afficher/modifier mon profil</a></h5>
		<h5><a href="#" class="loadCharactersClick"><span class="glyphicon glyphicon-user"></span> Gérer mes personnages</a></h5>
		<h5><a href="store.php"><span class="glyphicon glyphicon-fire"></span> Accéder à la boutique</a></h5>
		<h5><a href="#"><span class="glyphicon glyphicon-download"></span> Télécharger le Launcher</a></h5>
		<div class="nk-gap-1"></div>
		<button type="button" class="btn btn-primary sendDisconnect">Me déconnecter</button>
	</div>
</div>
<div class="side-block arc-container-box">
<h4 class="block-title">Server informations</h4>
<div class="block-content content-wrap">
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
<span>Online</span>
</div>
56/1500 players
</div>
</div>

</div>

</div>
</div>


<?php require_once("includes/footer.php");?>

</div>

<div class="modal" tabindex="-1" role="dialog" id="loading-modal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
	  <center>
			<h4>Loading...</h4>
			<div class="mfp-preloader preloader"></div>
			</center>
      </div>
    </div>
  </div>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>