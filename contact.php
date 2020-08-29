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

<section class="arc-banner banner-top arc-banner-parallax small">
<div class="image" data-speed="0.4">
<img src="assets/images/banner-bg.jpg" alt="" class="jarallax-img">
</div>
<div class="info">
<div>
<div class="container">
<div class="col-md-6">
<h2>Contact Us</h2>
</div>
<div class="col-md-6">
<form action="#" method="POST" role="form" class="arc-form-ajax">
<div class="row">
<div class="col-md-6">
<div class="arc-input form-group">
<input type="text" name="name" placeholder="Firstname" required>
</div>
</div>
<div class="col-md-6">
<div class="arc-input form-group">
<input type="text" name="name" placeholder="Lastname" required>
</div>
</div>
<div class="col-md-12">
<div class="arc-input form-group">
<input type="email" name="email" placeholder="Email" required>
</div>
</div>
</div>
<div class="arc-textarea form-group">
<textarea name="message" placeholder="Message" rows="5" required></textarea>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</section>

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