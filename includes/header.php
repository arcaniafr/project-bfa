
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
				<a href="account.php"><?=$lang["header-account"]?></a>
			</li>
			<li>
				<a href="#"><?=$lang["header-help"]?></a>
			</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			
			<li>
			<a class="search-toggle" href="#">
				<i class="glyphicon glyphicon-search"></i>
			 </a>
			</li>
			<?php if(isset($_SESSION['gamesite_userID'])){
				echo '<li class="dropdown dropdown-hover dropdown-cart">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="glyphicon glyphicon-shopping-cart"></i>
			</a>
			<div class="dropdown-menu">
			<div class="row arc-side-news">
			<div class="col-xs-3 col-md-4">
			<a href="#" class="angled-img">
			<div class="img">
			<img src="assets/images/game-bloodborne-500x375.jpg" alt="">
			</div>
			</a>
			</div>
			<div class="col-xs-9 col-md-8">
			<a href="#" class="pull-right mr-10"><i class="glyphicon glyphicon-times"></i></a>
			<h4 class="ellipsis"><a href="#">Bloodborne</a></h4>
			<span class="quantity">1 × <span class="amount">$50.00</span></span>
			</div>
			</div>
			<div class="ml-20 mr-20 pull-right"><strong><?=$lang["header-total-cart"]?> : </strong> <span class="amount">$50.00</span></div>
			<div class="btn-group pull-right m-15">
			<a href="#" class="btn btn-default btn-sm"><?=$lang["header-view-cart"]?></a>
			</div>
			</div>
			</li>
			
			<li class=" dropdown dropdown-hover">
					<a href="user-activity.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> '.$_SESSION['gamesite_username'].' <span class="badge bg-default">8</span>
						<span class="caret"></span>
					</a>
					<div class="dropdown-menu">
						<ul role="menu">
							<li>
								<a href="user-profile.html"> Profile </a>
							</li>
						</ul>
					</div>
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

