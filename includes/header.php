
<nav class="navbar-arc navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">
				<img src="<?=$_config["website-logo-light"]?>" title="<?=$_config['website-title']?>">
			</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="index.php"><?=$lang["header-index"]?></a>
				</li>
				<li>
					<a href="#"><?=$lang["header-forum"]?></a>
				</li>
				<li>
					<a href="#"><?=$lang["header-bugtracker"]?></a>
				</li>
				<li>
					<a href="contact.php"><?=$lang["header-contact"]?></a>
				</li>
			</ul>
				<ul class="nav navbar-nav navbar-right">
			<?php if(isset($_SESSION['arc_userID'])){
				echo '
			<li class=" dropdown dropdown-hover">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> '.$_SESSION['arc_username'].' <span class="badge bg-default">0</span></a>
				<div class="dropdown-menu">
					<ul role="menu">
						<li>
							<a href="account.php"> '.$lang["header-viewAccount"].' </a>
						</li>
						<li>
							<a href="#" class="sendDisconnect"> '.$lang["header-disconnect"].' </a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#">'.$lang["header-store"].'</a>
			</li>
			<li class="dropdown dropdown-hover dropdown-cart">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="glyphicon glyphicon-shopping-cart"></i>
			</a>
			<div class="dropdown-menu">
			<div class="row arc-side-news">
			<div class="col-xs-3 col-md-4">
			<a href="#" class="angled-img">
			<div class="img">
			<img src="assets/images/no_image_available.png" alt="">
			</div>
			</a>
			</div>
			<div class="col-xs-9 col-md-8">
			<a href="#" class="pull-right mr-10"><i class="glyphicon glyphicon-times"></i></a>
			<h4 class="ellipsis"><a href="#">Bloodborne</a></h4>
			<span class="quantity">1 × <span class="amount">$50.00</span></span>
			</div>
			</div>
			<div class="ml-20 mr-20 pull-right"><strong>'.$lang["header-total-cart"].' : </strong> <span class="amount">$50.00</span></div>
			<div class="btn-group pull-right m-15">
			<a href="#" class="btn btn-default btn-sm">'.$lang["header-view-cart"].'</a>
			</div>
			</div>
			</li>';
			}
			else{
				echo '<li>
				<a href="#" data-toggle="modal" data-target="#logRegModal">'.$lang["header-connect"].'</a>
			</li>';
			}
			?>
				<li class="dropdown dropdown-hover dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
						<img src="assets/images/<?php if(isset($_SESSION['langID'])){ if($_SESSION['langID']=='1') echo 'flag-fr.jpg'; if($_SESSION['langID']=='0') echo 'flag-en.jpg'; } else echo 'flag-fr.jpg';?>" width="20px"/> <span class="caret"></span>
					</a>
					<div class="dropdown-menu">
						<h5 style="margin-top:-10px;"><center><?=$site['languages']?></center></h5>
						<h6 class="lang-style"><a href="#" class="load-french-language"><img src="assets/images/flag-fr.jpg" width="20px"/> Français</a></h6>
						<h6 class="lang-style"><a href="#" class="load-english-language"><img src="assets/images/flag-en.jpg" width="20px"/> English</a></h6>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Start login/Register Modal -->
<div class="modal fade" id="logRegModal" tabindex="-1" role="dialog" aria-labelledby="logRegModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-logRegLoading" style="display:none">
			<div class="modal-body">
				<center>
					<h4 class="modal-logRegLoading-title">Loading...</h4>
					<div class="mfp-preloader preloader"></div>
				</center>
			</div>
		</div>
		<div class="modal-content modal-login-form">
			<div class="modal-header">
				<h3 class="modal-title" id="logRegModalLabel"><?=$lang["modalLogin-Title"]?></h3>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 error-login-modal" style="margin-bottom:-45px;display:none">
						<div class="alert alert-danger error-modal-login-text" role="alert"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p><?=$lang["modalLogReg-FormLog-UsernameEmail"]?> : </p>
						<div class="arc-input">
							<input type="text" id="logModalEmailUsername" name="logModalEmailUsername" placeholder="<?=$lang["modalLogReg-FormLog-UsernameEmail"]?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p><?=$lang["modalLogReg-FormLog-Password"]?> : </p>
						<div class="arc-input">
							<input type="password" id="logModalPassword" name="logModalPassword" placeholder="<?=$lang["modalLogReg-FormLog-Password"]?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="arc-checkbox">
							<input type="checkbox" id="Modalrememberme" name="Modalrememberme" value="forever" id="nav-rememberme"/>
							<label for="nav-rememberme"><?=$lang["modalLogReg-FormLog-Remember"]?></label>
							<a href="forgotPass.php" class="pull-right"><?=$lang["modalLogReg-FormLog-Password-Forgot"]?></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button type="button" class="btn btn-primary pull-right sendModalLogin"><?=$lang["modalLogReg-BtnLogin"]?></button>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary pull-left" data-dismiss="modal"><?=$lang["modalLogReg-BtnCancel"]?></button>
				<button class="btn btn-show-modal-reg-form"><?=$lang["modalLogReg-BtnRegister"]?></button>
			</div>
		</div>
		<div class="modal-content modal-register-form" style="display:none">
			<div class="modal-header">
				<h3 class="modal-title" id="logRegModalLabel"><?=$lang["modalRegister-Title"]?></h3>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 error-register-modal" style="margin-bottom:-45px;display:none">
						<div class="alert alert-danger error-register-modal-text" role="alert"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p><?=$lang["modalLogReg-FormReg-Username"]?> :</p>
						<div class="arc-input">
							<input type="text" id="regModalUsername" name="regModalUsername" placeholder="<?=$lang["modalLogReg-FormReg-Username"]?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p><?=$lang["modalLogReg-FormReg-Email"]?> :</p>
						<div class="arc-input">
							<input type="text" id="regModalEmail" name="regModalEmail" placeholder="<?=$lang["modalLogReg-FormReg-Email"]?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p><?=$lang["modalLogReg-FormReg-Password"]?> :</p>
						<div class="arc-input">
							<input type="password" id="regModalPassword" name="regModalPassword" placeholder="<?=$lang["modalLogReg-FormReg-Password"]?>">
						</div>
					</div>
					<div class="col-md-6">
						<p><?=$lang["modalLogReg-FormReg-RePassword"]?> :</p>
						<div class="arc-input">
							<input type="password" id="regModalRePassword" name="regModalRePassword" placeholder="<?=$lang["modalLogReg-FormReg-RePassword"]?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="button" class="btn btn-primary pull-right sendModalRegister"><?=$lang["modalLogReg-BtnRegister"]?></button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary pull-left" data-dismiss="modal"><?=$lang["modalLogReg-BtnCancel"]?></button>
				<button class="btn btn-show-modal-log-form"><?=$lang["modalLogReg-BtnLogin"]?></button>
			</div>
		</div>
	</div>
</div>
<!-- End login/Register Modal -->

<!-- Start disconnect Modal -->
<div class="modal fade modalDisconnect" tabindex="-1" role="dialog" aria-labelledby="modalDisconnectLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
					<h4><?=$lang["modal-disconnect-text"]?></h4>
					<div class="mfp-preloader preloader"></div>
				</center>
			</div>
		</div>
	</div>
</div>
<!-- End disconnect Modal -->
