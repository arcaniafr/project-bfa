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
<div>
<div class="container">
<h1 class="h1">Bugtracker post detail</h1>
</div>
</div>
</div>
</section>

<div class="container arc-content">
	<div class="col-md-12">
		<div class="clearfix"></div>
		<p class="mb-30">Viewing 4 replies - 1 through 4 (of 4 total)</p>
		<ul class="arc-forum mr-10">
			<li class="body">
				<div>
					<div class="top">
					<a class="author h5 pull-left" href="#">Kristen Bradley</a>
					<div class="date pull-right"><i class="glyphicon glyphicon-calendar"></i> December 17, 2020</div>
					</div>
					<div class="avatar pull-left">
					<img src="assets/images/no-avatar.png" alt="">
					</div>
					<div class="reply clearfix">
					<div class="text"> Suspicio? Bene ... tunc ibimus? Quis uh ... CONEXUS locus his diebus? Quisque semper aliquid videtur, in volutpat mauris. Nolo enim dicere. Vobis neque ab aliis. Ego feci memetipsum explicans. Gus mortuus est. Lorem opus habeo. <p> Jackson Isai? Tu quoque ... A te quidem a ante. Vos scitis quod blinking res Ive 'been vocans super vos? Et conteram illud, et conteram hoc. Maledicant druggie excors. Iam hoc tu facere conatus sum ad te in omni tempore? </p>
					</div>
					<a href="#" class="pull-right">Reply</a>
					</div>
				</div>
				<div>
					<div class="top">
					<a class="author h5 pull-left" href="#">Timmothy Stevens</a>
					<div class="date pull-right"><i class="glyphicon glyphicon-calendar"></i> December 23, 2020</div>
					</div>
					<div class="avatar pull-left">
					<img src="assets/images/no-avatar.png" alt="">
					</div>
					<div class="reply clearfix">
					<div class="text"> Qui nunc loqueris? Ecce qui cogitatis? Vos scitis quanta ego faciam annum Id est, ut ego dixi vobis non credunt. Scis quid si ne subito placuit ire in opus? </div>
					<a href="#" class="pull-right">Reply</a>
					</div>
				</div>
				<div>
					<div class="top">
					<a class="author h5 pull-left" href="#">Richard Lambert</a>
					<div class="date pull-right"><i class="glyphicon glyphicon-calendar"></i> January 30, 2020</div>
					</div>
					<div class="avatar pull-left">
					<img src="assets/images/no-avatar.png" alt="">
					</div>
					<div class="reply clearfix">
					<div class="text"> Suus satis. Quod etiam optime. Vos ite post eum, fistulae, nunquam vivum exire ab ea. Sed cum hoc ... excidit tibi in cibo aut in potu, aut: olefac Elegantioris non sit ... triginta sex horae post ... Poof. Vir aetatis operantes, dura sicut facit ... nemo mirabatur. Mike suspectas habere possunt, sed quod omnes illi eris. Obsecro, unum homicidam maniaco tempore. </div>
					<a href="#" class="pull-right">Reply</a>
					</div>
					</div>
				<div>
					<div class="top">
					<a class="author h5 pull-left" href="#">Scott Sutton</a>
					<div class="date pull-right"><i class="glyphicon glyphicon-calendar"></i> 25 minutes ago</div>
					</div>
					<div class="avatar pull-left">
					<img src="assets/images/no-avatar.png" alt="">
					</div>
					<div class="reply clearfix">
					<div class="text"> His duobus, sicariorum. Et orci aetate erat, sed nescio quo modo se gerendo levir meus aufert a me. Propter hoc 'interventu 'vivere me scito. Et tamen hoc quod multo altius est eget arcu. Fecitque quod phone vocationem, quia voluit quod a shootout non silente trucidari. </div>
					<a href="#" class="pull-right">Reply</a>
					</div>
				</div>
			</li>
		</ul>
		<div class="clearfix"></div>
	<p>Viewing 4 replies - 1 through 4 (of 4 total)</p>
	<div class="arc-form p-0">
								<h2 class="mt-0">Post response</h2>
								<form action="#" method="POST" role="form" class="arc-form-ajax" data-toggle="validator" novalidate="true">
									<div class="row">
										<div class="col-md-6">
											<div class="arc-input form-group">
												<input type="text" name="name" placeholder="Name" required="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="arc-input form-group">
												<input type="email" name="email" placeholder="Email" required="">
											</div>
										</div>
									</div>
									<div class="arc-textarea form-group">
										<textarea name="message" placeholder="Message" rows="5" required=""></textarea>
									</div>
									<button type="submit" class="btn btn-default">Submit</button>
								</form>
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