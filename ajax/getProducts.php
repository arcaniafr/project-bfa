<?php session_start();
include_once("../core/functions.php");
$system = new System;
$system->db = $db;

if(isset($_GET['server']) && isset($_GET['character']) && isset($_GET['category'])){
	if($_GET['category'] == 100 || $_GET['category'] == 0){
		$item = $db->query('SELECT * FROM '.$_database['website-db-name'].'.products');
	}
	else{
		$item = $db->query('SELECT * FROM '.$_database['website-db-name'].'.products WHERE categoryID="'.$_GET['category'].'"');
	}
	if($item->num_rows >= 1){
		while($items = $item->fetch_object()){
			
			if(isset($_SESSION['langID']) && ($_SESSION['langID']==1)){
				$title = $items->title_fr;
				$content_description = $items->item_description_fr;
			}
			elseif(isset($_SESSION['langID']) && ($_SESSION['langID']==2)){
				$title = $items->title_es;
				$content_description = $items->item_description_es;
			}
			else{
				$title = $items->title_en;
				$content_description = $items->item_description_en;
			}
			
			echo '<a href="#" class="item angled-bg">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-xs-4">
						<div class="angled-img">
							<div class="img">
								<img src="assets/images/store/'.$items->image.'" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-xs-8">
						<div class="row">
							<div class="col-xs-6 col-md-9">
								<h4 onclick="showProductDetail('.$items->id.');return false;">'.$title.' <span class="caret"></span></h4>
								<h6 class="store-product-detail-'.$items->id.' " style="display:none">'.$content_description.'</h6>
							</div>
							<div class="col-xs-6 col-md-3 align-right">
								<div class="price">'.$items->price.' <img src="assets/images/jtn.png" width="20px"/></div>
								<button class="btn btn-xs btn-primary" onclick="addProductCart('.$items->id.')">Ajouter au panier</button>
							</div>
						</div>
					</div>
				</div>
			</a>';
		}
	}
	else{
		echo '<a href="#" class="item angled-bg">
					<div class="row">
				<div class="col-md-12">
					<center><h5>'.$lang['store-search-result-zero'].' !</h5></center>
				</div>
			</div>
		</a>';
	}
}
?>