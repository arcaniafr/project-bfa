<?php
	session_start();
	include("core/config.php");
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
		<section class="arc-banner banner-top arc-banner-parallax xsmall">
			<div class="image" data-speed="0.4">
				<img src="assets/images/banner-bg.jpg" alt="" class="jarallax-img">
			</div>
			<div class="info">
				<div class="container">
					<h1 class="h1">Forum topics</h1>
				</div>
			</div>
		</section>
		<div class="container arc-content">
			<div class="col-md-12">
				<ul class="arc-forum mr-10">
					<li class="header">
						<ul>
							<li class="cell-icon"></li>
							<li class="cell-info">Topic</li>
							<li class="cell-topic-count">Voices</li>
							<li class="cell-reply-count">Posts</li>
							<li class="cell-freshness">Freshness</li>
						</ul>
					</li>
					<li class="body">
						<ul class="sticky">
							<li class="cell-icon">
								<i class="glyphicon glyphicon-folder-open"></i>
							</li>
							<li class="cell-info">
								<a href="forum-topic-details.php" class="title h4">Sticky Topic</a>
								<div class="description"> Started by: <a href="#">
									<img alt="" src="assets/images/no-avatar.png" height="15" width="15"> John Doe </a>
								</div>
							</li>
							<li class="cell-topic-count">7</li>
							<li class="cell-reply-count">21</li>
							<li class="cell-freshness">
								<a href="#">2 year, 9 months ago</a>
								<p>
									<a href="#">
									<img alt="" src="assets/images/no-avatar.png" height="25" width="25"> Kristen Bradley </a>
								</p>
							</li>
						</ul>
						 <ul>
						<li class="cell-icon">
						<i class="glyphicon glyphicon-folder-open"></i>
						</li>
						<li class="cell-info">
						<a href="forum-topic-details.php" class="title h4">Normal Topic</a>
						<div class="description"> Started by: <a href="#">
						<img alt="" src="assets/images/no-avatar.png" height="15" width="15"> John Doe </a>
						</div>
						</li>
						<li class="cell-topic-count">7</li>
						<li class="cell-reply-count">21</li>
						<li class="cell-freshness">
						<a href="#">2 year, 9 months ago</a>
						<p>
						<a href="#">
						<img alt="" src="assets/images/no-avatar.png" height="25" width="25"> Kristen Bradley </a>
						</p>
						</li>
						</ul>
						<ul>
						<li class="cell-icon">
						<i class="glyphicon glyphicon-folder-open"></i>
						</li>
						<li class="cell-info">
						<a href="forum-topic-details.php" class="title h4">Normal Topic</a>
						<div class="description"> Started by: <a href="#">
						<img alt="" src="assets/images/no-avatar.png" height="15" width="15"> John Doe </a>
						</div>
						</li>
						<li class="cell-topic-count">7</li>
						<li class="cell-reply-count">21</li>
						<li class="cell-freshness">
						<a href="#">2 year, 9 months ago</a>
						<p>
						<a href="#">
						<img alt="" src="assets/images/no-avatar.png" height="25" width="25"> Kristen Bradley </a>
						</p>
						</li>
						</ul>
						<ul>
						<li class="cell-icon">
						<i class="glyphicon glyphicon-folder-open"></i>
						</li>
						<li class="cell-info">
						<a href="forum-topic-details.php" class="title h4">Normal Topic</a>
						<div class="description"> Started by: <a href="#">
						<img alt="" src="assets/images/no-avatar.png" height="15" width="15"> John Doe </a>
						</div>
						</li>
						<li class="cell-topic-count">7</li>
						<li class="cell-reply-count">21</li>
						<li class="cell-freshness">
						<a href="#">2 year, 9 months ago</a>
						<p>
						<a href="#">
						<img alt="" src="assets/images/no-avatar.png" height="25" width="25"> Kristen Bradley </a>
						</p>
						</li>
						</ul>
						<ul class="closed">
						<li class="cell-icon">
						<i class="fa fa-lock"></i>
						</li>
						<li class="cell-info">
						<a href="forum-topic-details.php" class="title h4">Closed Topic</a>
						 <div class="description"> Started by: <a href="#">
						<img alt="" src="assets/images/no-avatar.png" height="15" width="15"> John Doe </a>
						</div>
						</li>
						<li class="cell-topic-count">7</li>
						<li class="cell-reply-count">21</li>
						<li class="cell-freshness">
						<a href="#">2 year, 9 months ago</a>
						<p>
						<a href="#">
						<img alt="" src="assets/images/no-avatar.png" height="25" width="25"> Kristen Bradley </a>
						</p>
						</li>
						</ul>
					</li>
				</ul>

				<div class="clearfix"></div>
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