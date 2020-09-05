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
<body onload="initApps()">

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
				<div class="arc-store-search">
					<h4>Select server, character and category :</h4>
					<div class="col-md-4">
						<select class="form-control" onchange="loadCharacters(this.value);">
							<option value="0"><?=$lang['store-select-server']?></option>';
							<?php $server = $db->query('SELECT * FROM '.$_database['auth-db-name'].'.realmlist');
							while($servers = $server->fetch_object()){
								echo '<option value="'.$servers->id.'">'.$servers->name.'</option>';
							}?>
						</select>
					</div>
					<div class="col-md-4">
						<select class="form-control loadCharacters" onchange="loadCategories(this.value);">
							<option value="0"><?=$lang['store-select-character']?></option>
						</select>
					</div>
					<div class="col-md-4">
						<select class="form-control nk-store-select loadCategory" onchange="loadProducts(this.value);">
							<option value="0"><?=$lang['store-select-category']?></option>
						</select>
					</div>
					<input type="hidden" name="server" class="store_server" value=""/>
					<input type="hidden" name="character" class="store_character" value=""/>
					<input type="hidden" name="category" class="store_category" value=""/>
				</div>
				<div class="isotope-list loadProducts"></div>
			</div>
			<div class="col-md-3">
				<div class="side-block">
					<h4 class="block-title">Your cart</h4>
					<div class="block-content p-0 productsCart">
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