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
<li class="active"><a href="user-profile.html">Characters</a></li>
<li><a href="user-messages.html">Messages <span class="badge">0</span></a></li>
<li><a href="user-settings.html">Settings</a></li>
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

<div class="container arc-content">
<div class="row">
<div class="col-md-9">
<h3 class="mt-40 mb-20">Characters</h3>
<table class="table table-bordered">
<tbody>
<tr>
<td style="width: 200px;">
<p>CharName</p>
</td>
<td>
<p>Race/Specialisation/level</p>
</td>
</tr>
</tbody>
</table>
</div>

<div class="col-md-3">
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