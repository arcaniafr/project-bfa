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

<div id="nav-registration" class="modal fade">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Register</h4>
</div>
<div class="modal-body">
<form action="#" method="post">
 <div>
<p>Username:</p>
<div class="arc-input">
<input type="text" name="user_login" />
</div>
<p>E-mail:</p>
<div class="arc-input">
<input type="text" name="user_email" />
</div>
<p>
<em>A password will be e-mailed to you.</em>
</p>
<button class="btn ml-3" name="submit">Register</button>
</div>
</form>
</div>
</div>
</div>
</div>

<div class="content-wrap">

<section class="arc-banner arc-banner-parallax">
<div class="image" data-speed="0.4">
<img src="assets/images/banner-bg.jpg" alt="" class="jarallax-img">
</div>
<div class="info">
<div class="container">
<div class="row">
<div class="content-wrap col-md-6">
<div class="col-md-12">
<h3>News</h3>
</div>

<img src="assets/images/wow-sl.jpg"/>
<div class="col-md-12">
<h4><a href="#">Sortie de la nouvelle extention le 27/10/2020.</a></h4>
</div>
<div class="col-md-8">
<h6>Ecrire un resumé de quelques mots. </h6>
</div>
<div class="col-md-4">
<a class="btn btn-primary pull-right btn-news">Lire l'article</a>
</div>
</div>
<div class="col-md-6">
<div id="form-loading" style="display:none;margin-top:120px">
  <center>
		<h4>Loading...</h4>
		<div class="mfp-preloader preloader"></div>
		</center>
  </div>
<div id="form-login">
<h3>Login</h3>

<div class="row">
<div class="col-md-12">
<p>Email:</p>
<div class="arc-input">
<input type="text" name="billing_email" placeholder="Email">
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p>Password:</p>
<div class="arc-input">
<input type="text" name="billing_city" placeholder="Password">
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="arc-checkbox">
<input type="checkbox" name="rememberme" value="forever" id="nav-rememberme"/>
<label for="nav-rememberme"><?=$lang["header-remember-me"]?></label>
</div>
</div>
</div>
<a href="#" class="btn btn-md btn-show-reg-form">Show reg form</a>
<a href="#" class="btn btn-md pull-right">Send login</a>

</div>
<div id="form-register" style="display:none">
<h3>Join us !</h3>

<div class="row">
<div class="col-md-6">
<p>First Name:</p>
<div class="arc-input">
<input type="text" name="billing_firstname" placeholder="First Name">
</div>
</div>
<div class="col-md-6">
<p>Last Name:</p>
<div class="arc-input">
<input type="text" name="billing_lastname" placeholder="Last Name">
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p>Email:</p>
<div class="arc-input">
<input type="text" name="billing_email" placeholder="Email">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<p>Password:</p>
<div class="arc-input">
<input type="text" name="billing_city" placeholder="Password">
</div>
</div>
<div class="col-md-6">
 <p>Confirm password:</p>
<div class="arc-input">
<input type="text" name="billing_country" placeholder="Confirm password">
</div>
</div>
</div>
<a href="#" class="btn btn-md btn-show-log-form">Show log form</a>
<a href="#" class="btn btn-md pull-right">Send register</a>
</div>

</div>
</div>
</div>
</section>

<div class="content-wrap no-banner">
<div class="container arc-store store-grid mt-0">

<div class="col-md-9 isotope">

<div class="isotope-list row vertical-gutter">

<div class="item col-lg-4 col-md-6 col-xs-12">
<a href="#" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<button class="btn btn-primary right"> Lire </button>
</div>
</a>
</div>

<div class="item col-lg-4 col-md-6 col-xs-12">
<a href="#" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<button class="btn btn-primary right"> Lire </button>
</div>
</a>
</div>

<div class="item col-lg-4 col-md-6 col-xs-12">
<a href="#" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<button class="btn btn-primary right"> Lire </button>
</div>
</a>
</div>

<div class="item col-lg-4 col-md-6 col-xs-12">
<a href="#" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<button class="btn btn-primary right"> Lire </button>
</div>
</a>
</div>

<div class="item col-lg-4 col-md-6 col-xs-12">
<a href="#" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<button class="btn btn-primary right"> Lire </button>
</div>
</a>
</div>

<div class="item col-lg-4 col-md-6 col-xs-12">
<a href="#" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<button class="btn btn-primary right"> Lire </button>
</div>
</a>
</div>

<div class="item col-lg-4 col-md-6 col-xs-12">
<a href="#" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<button class="btn btn-primary right"> Lire </button>
</div>
</a>
</div>

<div class="item col-lg-4 col-md-6 col-xs-12">
<a href="#" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<button class="btn btn-primary right"> Lire </button>
</div>
</a>
</div>

<div class="item col-lg-4 col-md-6 col-xs-12">
<a href="#" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<button class="btn btn-primary right"> Lire </button>
</div>
</a>
</div>


</div>
</div>


<div class="col-md-3">

<div class="side-block">
<p>Search by news:</p>
<form action="#">
<div class="arc-input">
<input type="text" name="search" placeholder="Search news">
</div>
</form>
</div>


<div class="side-block">
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