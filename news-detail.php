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
			<div class="info">
			<div>
			<div class="container">
			<div class="pt-40 pb-40">
			<div class="row">
			<div class="col-xs-12 text-center">
			<h1>Title of news</h1>
			<div class="h5 mnt-10 mb-40">19 Mai 2020, 16h00</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
		</section>

	<div class="container">
	<div class="row" style="margin-top:50px">
	<div class="col-md-3">

	<div class="side-block arc-container-box">
	<h4 class="arc-decorated-h-1">Search by news:</h4>
	<form action="#">
	<div class="arc-input">
	<input type="text" name="search" placeholder="Search news">
	</div>
	</form>
	</div>


	<div class="side-block arc-container-box">
	<h4 class="arc-decorated-h-1">Server informations</h4>
	<div class="block-content content-wrap">
	<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	<span>Online</span>
	</div>
	<center><small>56/1500 players</small></center>
	</div>
	</div>

	</div>
	<div class="col-md-9">
		<div class="col-md-3">
		<img src="assets/images/wow-sl.jpg">
		</div>
		<div class="col-md-9">
			<p>zety esg seesgfse ffesfesf hzqodhqizhd zqihd ziqhd izqh dihqzdi hzqihd zqih dpzqdkz qd pzqodzqd ojqojdpozjqpodj zoqjdpozqjpdo jzpqodj pozqjdojzpqjdpozqj </br></br>pdjzpqjpodz. Izqdzpqodzp qpdjpzqodpojzpqj pzoqjdzqdkqlhhzldkhdl zkqjdlkj zqjdl dkzjqlkjdlzkqjd lkjzqlkjdlkzqjldk zjlzkjqldk jqlkdj lkzjqd . </p>
		</div>
		<div class="col-md-12">
			<div class="comments-block">
				<h3>Comments <small>(1)</small></h3>
				<form action="#" class="comment-form">
					<div class="comment-avatar pull-left">
						<img src="assets/images/dark/avatar.png" alt="">
					</div>
					<div class="comment-cont clearfix">
						<div class="arc-input">
							<input type="text" name="username" placeholder="Your Name *">
						</div>
						<div class="arc-input">
							<input type="email" name="email" placeholder="Your Email *">
						</div>
						<div class="arc-textarea">
							<textarea name="message" rows="5" placeholder="Your Comment..."></textarea>
						</div>
						<button class="btn btn-default pull-right">Submit</button>
					</div>
				</form>
				<ul class="comments-list">
					<li>
						<article>
							<div class="clearfix">
								<h4 class="comment-author h4" href="#">TestName</h4>
								<div class="date"><i class="glyphicon glyphicon-calendar"></i> 14/04/2020</div>
								<div class="comment-text"> Test text ojqhf iqefj oqefmqjmfqemlm ljeqmljfmqljfmqefeqml meqjfmlqjefmleqmljfmlj qmlefmeljfmljqemljfmqle mleqjmfljqemf qzz zqzf. </div>
							<button class="btn btn-primary pull-right">Reply</button>
							</div>
						</article>
					</li>
				</ul>
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