<?php
	session_start();
	include("core/config.php");
	include('includes/languages/french.php'); // temporaire, voir le changement de langue par la suite.
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?=$_config['website-title']?></title>
<meta name="description" content="Gaming HTML Template based on Bootstrap">
<meta name="keywords" content="gaming, game, community, template, html, bootstrap, webpack">
<meta name="author" content="nK">
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
<li><a href="account.php">Mon compte</a></li>
<li class="active"><a href="characters.php">Characters</a></li>
<li><a href="#">Messages <span class="badge">0</span></a></li>
<li><a href="#">Settings</a></li>
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
<h2>Username</h2>
<div class="activity">
<div>
<div class="num">6</div>
<div class="title">Posts</div>
</div>
<div>
<div class="num">1</div>
<div class="title">Bug signaled</div>
</div>
<div>
<div class="num">9</div>
<div class="title">Followers</div>
</div>
</div>
</div>
</div>
<div class="container mt-20">
<a href="#" class="btn btn-sm btn-default ml-0">Add Friend</a>
<a href="#" class="btn btn-sm btn-default">Private Message</a>
</div>
</div>
</div>
</section>

<div class="container arc-news news-grid">

				<div class="container">
						<div class="col-md-12">
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
</div><div class="col-lg-3 col-md-3 col-sm-6">
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
</div><div class="col-lg-3 col-md-3 col-sm-6">
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
</div><div class="col-lg-3 col-md-3 col-sm-6">
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
</div><div class="col-lg-3 col-md-3 col-sm-6">
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