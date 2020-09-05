<?php
	session_start();
	include("core/functions.php");
	include('includes/languages/french.php'); // temporaire, voir le changement de langue par la suite.
	include_once("../core/functions.php");
	$auth = new Auth;
	if(!$auth->isLogged()){
		header('Location: index.php?notConnected=true');
		exit();
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

<section class="arc-banner banner-top arc-banner-parallax bigsmall">
<div class="image" data-speed="0.4">
<img src="assets/images/banner-bg.jpg" alt="" class="jarallax-img">
</div>
<div class="info">
<div>
<div class="container">
<h1 class="h1">Cart</h1>
</div>
</div>
</div>
</section>

	<div class="content-wrap arc-content">
		<div class="container arc-store">
			<div class="col-md-9 isotope">
				<ul class="pagination isotope-options">
					<li id="all" class="active"><span>All</span></li>
					<li id="Golds"><span>Golds</span></li>
					<li id="popular"><span>Characters</span></li>
					<li id="news"><span>Chests</span></li>
					<li id="news"><span>Mounts</span></li>
				</ul>
				<div class="isotope-list">
					<a href="#" class="item angled-bg">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-xs-4">
								<div class="angled-img">
									<div class="img">
										<img src="assets/images/store/money.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-10 col-md-10 col-xs-8">
								<div class="row">
									<div class="col-xs-6 col-md-9">
										<h4 onclick="showProductDetail(1);return false;">10000 gold coins <span class="caret"></span></h4>
										<h6 class="store-product-detail-1 " style="display:none">details 1 details</br>details details details</br>details details details</br>details details details</h6>
									</div>
									<div class="col-xs-6 col-md-3 align-right">
										<div class="price">2 <img src="assets/images/jtn.png" width="20px"/></div>
										<button class="btn btn-xs btn-primary">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#" class="item angled-bg" data-filters="popular">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-xs-4">
								<div class="angled-img">
									<div class="img">
										<img src="assets/images/store/money.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-10 col-md-10 col-xs-8">
								<div class="row">
									<div class="col-xs-6 col-md-9">
										<h4 onclick="showProductDetail(2);return false;">10000 gold coins <span class="caret"></span></h4>
										<h6 class="store-product-detail-2" style="display:none">details 2 details</br>details details details</br>details details details</br>details details details</h6>
									</div>
									<div class="col-xs-6 col-md-3 align-right">
										<div class="price">2 <img src="assets/images/jtn.png" width="20px"/></div>
										<button class="btn btn-xs btn-primary">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#" class="item angled-bg" data-filters="popular">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-xs-4">
								<div class="angled-img">
									<div class="img">
										<img src="assets/images/store/money.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-10 col-md-10 col-xs-8">
								<div class="row">
									<div class="col-xs-6 col-md-9">
										<h4 onclick="showProductDetail(3);return false;">10000 gold coins <span class="caret"></span></h4>
										<h6 class="store-product-detail-3" style="display:none">details 3 details</br>details details details</br>details details details</br>details details details</h6>
									</div>
									<div class="col-xs-6 col-md-3 align-right">
										<div class="price">2 <img src="assets/images/jtn.png" width="20px"/></div>
										<button class="btn btn-xs btn-primary">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#" class="item angled-bg" data-filters="popular">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-xs-4">
								<div class="angled-img">
									<div class="img">
										<img src="assets/images/store/money.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-10 col-md-10 col-xs-8">
								<div class="row">
									<div class="col-xs-6 col-md-9">
										<h4 onclick="showProductDetail(4);return false;">10000 gold coins <span class="caret"></span></h4>
										<h6 class="store-product-detail-4" style="display:none">details 3 details</br>details details details</br>details details details</br>details details details</h6>
									</div>
									<div class="col-xs-6 col-md-3 align-right">
										<div class="price">2 <img src="assets/images/jtn.png" width="20px"/></div>
										<button class="btn btn-xs btn-primary">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#" class="item angled-bg" data-filters="popular">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-xs-4">
								<div class="angled-img">
									<div class="img">
										<img src="assets/images/store/money.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-10 col-md-10 col-xs-8">
								<div class="row">
									<div class="col-xs-6 col-md-8">
										<h4 onclick="showProductDetail(5);return false;">10000 gold coins <span class="caret"></span></h4>
										<h6 class="store-product-detail-5" style="display:none">details 3 details</br>details details details</br>details details details</br>details details details</h6>
									</div>
									<div class="col-xs-6 col-md-4 align-right">
										<div class="price">2 <img src="assets/images/jtn.png" width="20px"/></div>
										<button class="btn btn-xs btn-primary">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="side-block">
					<h4 class="block-title">Your cart</h4>
					<div class="block-content p-0">
						<div class="row arc-side-news">
							<div class="col-xs-3 col-md-3">
								<a href="#" class="angled-img-small">
									<div class="img">
										<img src="assets/images/store/money.jpg" alt="">
									</div>
								</a>
							</div>
							<div class="col-xs-9 col-md-9">
								<h5 class="ellipsis">10000 gold coins<a href="" title="Remove this item"><span class="pull-right glyphicon glyphicon-remove"></span></a></h5>
								<span class="price">2 <img src="assets/images/jtn.png" width="20px"/></span>
							</div>
						</div>
						<div class="row arc-side-news">
							<div class="col-xs-3 col-md-3">
								<a href="#" class="angled-img-small">
									<div class="img">
										<img src="assets/images/store/money.jpg" alt="">
									</div>
								</a>
							</div>
							<div class="col-xs-9 col-md-9">
								<h5 class="ellipsis">50000 gold coins<a href="" title="Remove this item"><span class="pull-right glyphicon glyphicon-remove"></span></a></h5>
								<span class="price">5 <img src="assets/images/jtn.png" width="20px"/></span>
							</div>
						</div>
						<div class="row arc-side-news">
							<div class="col-xs-3 col-md-3">
								<a href="#" class="angled-img-small">
									<div class="img">
										<img src="assets/images/store/money.jpg" alt="">
									</div>
								</a>
							</div>
							<div class="col-xs-9 col-md-9">
								<h5 class="ellipsis">500000 gold coins<a href="" title="Remove this item"><span class="pull-right glyphicon glyphicon-remove"></span></a></h5>
								<span class="price">20 <img src="assets/images/jtn.png" width="20px"/></span>
							</div>
						</div>
						<div class="row arc-side-news">
							<div class="col-xs-3 col-md-3">
								<a href="#" class="angled-img-small">
									<div class="img">
										<img src="assets/images/store/book_06.jpg" alt="">
									</div>
								</a>
							</div>
							<div class="col-xs-9 col-md-9">
								<h5 class="ellipsis">Flight in draenor<a href="" title="Remove this item"><span class="pull-right glyphicon glyphicon-remove"></span></a></h5>
								<span class="price">5 <img src="assets/images/jtn.png" width="20px"/></span>
							</div>
						</div>
					</div>
					<h5 class="block-bottom">TOTAL: 5 <img src="assets/images/jtn.png" width="20px"/><button class="btn btn-xs btn-primary pull-right">Payer</button></h5>
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