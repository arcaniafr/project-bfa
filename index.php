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
			<div class="info">
				<div class="container">
					<?php if(isset($_GET['notConnected'])){
						echo '<div class="col-md-12">
							<div class="alert alert-danger" role="alert">You have been redirected because you are not logged in!</div>
						</div>';
					}
					else if(isset($_GET['disconnected']) && $_GET['disconnected'] == "success"){
						echo '<div class="col-md-12">
							<div class="alert alert-success" role="alert">Success : Disconnected!</div>
						</div>';
					}?>
					<div class="row">
						<div class="col-md-6">
							<div class="arc-news-box">
								<h3 class="arc-decorated-h-2"><span>Latest News</span></h3>
								<div class="arc-news-box-each-info">
									<div class="nano">
										<div class="nano-content loadLastNew">
											<div class="arc-news-box-item-image" style="background-image: url('assets/images/wow-sl.jpg');">
												<span class="arc-news-box-item-categories">
													<span class="bg-main-3">logotext</span>
												</span>
											</div>
											<h3 class="arc-news-box-item-title">Sortie de la nouvelle extention le 27/10/2020.</h3>
											<div class="arc-news-box-item-text">
												<p>Ecrire un resumé de quelques mots.</p>
											</div>
											<a href="#" class="arc-news-box-item-more">Lire l'article</a>
											<div class="arc-news-box-item-date">
												<span class="glyphicon glyphicon-calendar"></span> date
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="arc-news-box">
								<h3 class="arc-decorated-h-2"><span>Latest updates</span></h3>
								<div class="arc-news-box-each-info">
									<div class="nano">
										<div class="row">
											<div class="nano-content loadLastUpdate">
												<a href="" class="arc-news-box-item-title">Fix mistake in quest 1234.</a>
												<div class="arc-news-box-item-text">
													<p>Ecrire un resumé de quelques mots.</p>
												</div>
												<a href="#" class="arc-news-box-item-more">Lire la mise à jour</a>
												<div class="arc-news-box-item-date">
													<span class="glyphicon glyphicon-calendar"></span> date
												</div>
											</div>
										</div>
										<div class="row">
											<div class="nano-content loadLastUpdate">
												<a href="" class="arc-news-box-item-title">Fix mistake in quest 1234.</a>
												<div class="arc-news-box-item-text">
													<p>Ecrire un resumé de quelques mots.</p>
												</div>
												<a href="#" class="arc-news-box-item-more">Lire la mise à jour</a>
												<div class="arc-news-box-item-date">
													<span class="glyphicon glyphicon-calendar"></span> date
												</div>
											</div>
										</div>
										<div class="row">
											<div class="nano-content loadLastUpdate">
												<a href="" class="arc-news-box-item-title">Fix mistake in quest 1234.</a>
												<div class="arc-news-box-item-text">
													<p>Ecrire un resumé de quelques mots.</p>
												</div>
												<a href="#" class="arc-news-box-item-more">Lire la mise à jour</a>
												<div class="arc-news-box-item-date">
													<span class="glyphicon glyphicon-calendar"></span> date
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<div class="">
<div class="container">

<div class="col-md-3 ">

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

<div class="col-md-9 isotope">

<div class="isotope-list row ">

<div class="item col-lg-12 col-md-12 col-xs-12 arc-container-box">
<a href="news-detail.php" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<a href="news-detail.php" class="btn btn-primary pull-right"> Lire </a>
</div>
</a>
</div>

<div class="item col-lg-12 col-md-12 col-xs-12 arc-container-box">
<a href="news-detail.php" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<a href="news-detail.php" class="btn btn-primary pull-right"> Lire </a>
</div>
</a>
</div>

<div class="item col-lg-12 col-md-12 col-xs-12 arc-container-box">
<a href="news-detail.php" class="angled-img">
<div class="img img-offset">
<img src="assets/images/wow-sl.jpg" alt="">
</div>
<div class="bottom-info">
<h4>Test News</h4>
<a href="news-detail.php" class="btn btn-primary pull-right"> Lire </a>
</div>
</a>
</div>

</div>
</div>


</div>
</div>

<?php require_once("includes/footer.php");?>

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