$(document).ready(function() {
	
	setTimeout(function(){
		$('.preloader-wrapp').hide();
	}, 500);

	$('.load-french-language').on('click',function(){
		$('.modalLoadLanguage').modal('show');
		setTimeout(function(){
			$.get('ajax/loadLanguage.php?languageChange=1');
			location.reload();
		}, 2000);
	});
	
	$('.load-english-language').on('click',function(){
		$('.modalLoadLanguage').modal('show');
		setTimeout(function(){
			$.get('ajax/loadLanguage.php?languageChange=0');
			location.reload();
		}, 2000);
	});
	
	$('.load-espagnol-language').on('click',function(){
		$('.modalLoadLanguage').modal('show');
		setTimeout(function(){
			$.get('ajax/loadLanguage.php?languageChange=2');
			location.reload();
		}, 2000);
	});
	
	$('.btn-show-modal-log-form').click(function(){
		$('.error-login-modal').hide();
		$('.modal-logRegLoading-title').html('Loading...');
		$('.modal-register-form').hide();
		$('.modal-logRegLoading').show();
		setTimeout(function(){
			$('.modal-login-form').show();
			$('.modal-logRegLoading').hide();
		}, 500);
	});

	$('.btn-show-modal-reg-form').click(function(){
		$('.error-register-modal').hide();
		$('.modal-logRegLoading-title').html('Loading...');
		$('.modal-login-form').hide();
		$('.modal-logRegLoading').show();
		setTimeout(function(){
			$('.modal-register-form').show();
			$('.modal-logRegLoading').hide();
		}, 500);
	});

	$('.sendModalLogin').click(function(){
		$('.error-login-modal').hide();
		$('.modal-login-form').hide();
		$('.modal-logRegLoading-title').html('Login in progress...');
		$('.modal-logRegLoading').show();
		setTimeout(function(){
			var logEmailUsername = $("#logModalEmailUsername").val();
			var logPassword = $("#logModalPassword").val();
			$.get('ajax/getRequest.php?sendLogin=true&logEmailUsername='+logEmailUsername+'&logPassword='+logPassword, function(response) {
				if(response == 0){
					window.location = 'account.php';
				}
				else{
					$('.modal-login-form').show();
					$('.error-login-modal').show();
					$('.error-modal-login-text').html(response);
				}
				$('.modal-logRegLoading').hide();
			});
		}, 1500);
	});

	$('.sendModalRegister').click(function(){
		$('.error-register-modal').hide();
		$('.modal-register-form').hide();
		$('.modal-logRegLoading-title').html('Register in progress...');
		$('.modal-logRegLoading').show();
		setTimeout(function(){
			var username = $("#regModalUsername").val();
			var email = $("#regModalEmail").val();
			var password = $("#regModalPassword").val();
			var repassword = $("#regModalRePassword").val();
			$.get('ajax/getRequest.php?sendRegister=true&regUsername='+username+'&regEmail='+email+'&regPassword='+password+'&regRePassword='+repassword, function(response) {
				if(response == 0){
					window.location = 'account.php';
				}
				else{
					$('.modal-register-form').show();
					$('.error-register-modal').show();
					$('.error-register-modal-text').html(response);
				}
				$('.modal-logRegLoading').hide();
			});
		}, 1500);
	});

	$('.sendDisconnect').on('click',function(){
		$('.modalDisconnect').modal('show');
		setTimeout(function(){
			$.get('ajax/sendDisconnect.php?isDisconnect=true', function(response){
				if(response == 1)
					window.location = "index.php?disconnected=success";
				else{
					$('.modalCoError').modal('show');
					$('.logErrorDesc').html(response);
				}
			});
		}, 2000);
		return false;
	});
	
	
	$('.loadAccountInfosClick').click(function(){
		$('#account-loading').show();
		$("[class^=load]").removeClass('active');
		$('.loadAccountLi').addClass('active');
		setTimeout(function(){
			$.get('ajax/load-account.php?loadAccountInfos=true&accountID=1', function(response) {
				$('#account-loading').hide();
				$('.loadAccountInfos').html(response);
			});
		}, 500);
	});

	$('.loadCharactersClick').click(function(){
		$('#account-loading').show();
		$("[class^=load]").removeClass('active');
		$('.loadCharactersLi').addClass('active');
		setTimeout(function(){
			$.get('ajax/load-account.php?loadCharacters=true&accountID=1', function(response) {
				$('#account-loading').hide();
				$('.loadAccountInfos').html(response);
			});
		}, 500);
	});

	$('.loadMessagesClick').click(function(){
		$('#account-loading').show();
		$("[class^=load]").removeClass('active');
		$('.loadMessagesLi').addClass('active');
		setTimeout(function(){
			$.get('ajax/load-account.php?loadMessagesInfos=true&accountID=1', function(response) {
				$('#account-loading').hide();
				$('.loadAccountInfos').html(response);
			});
		}, 500);
	});

	$('.loadMessagesInboxClick').click(function(){
		$('#account-loading').show();
		$("[class^=messages-]").hide();
		setTimeout(function(){
			$('.messages-inbox-loading').show();
		}, 500);
	});

	$('.loadMessagesComposeClick').click(function(){
		alert();
		$('#account-loading').show();
		$("[class^=messages-]").hide();
		$("[class^=messagerie]").removeClass('active');
		$('.messagerieComposeLi').addClass('active');
		setTimeout(function(){
			$('.messages-compose-loading').show();
		}, 500);
	});

});

function initApps(){
	$.get('ajax/getCart.php?initCart=true');
	getAllCartItems();
	return false;
}

function showProductDetail(id){
	$(".store-product-detail-"+id).toggle();
};

function deleteCart(){
	$.get('ajax/getCart.php?deleteCart=true');
	return false;
}

function loadProductSearch(){
	var server = 0;
	var character = 0;
	var category = 0;
	$.get('ajax/getProducts.php?server='+server+'&character='+character+'&category='+category, function(response) {
		$('.loadProducts').html(response);
	});
	return false;
}

function loadCharacters(server){
	$.get('ajax/getCharacters.php?server='+server, function(response) {
		$('.loadCharacters').html(response);
		$('.store_server').val(server);
		category = 0;
		loadProducts(category);
	});
	return false;
}

function loadCategories(character){
	$.get('ajax/getCategories.php?character='+character, function(response) {
		$('.loadCategory').html(response);
		$('.store_character').val(character);
		category = 0;
		loadProducts(category);
	});
	return false;
}

function loadProducts(category){
	server = $('.store_server').val();
	character = $('.store_character').val();
	
	$.get('ajax/getProducts.php?server='+server+'&character='+character+'&category='+category, function(response) {
		$('.loadProducts').html(response);
		$('.store_category').val(category);
	});
	return false;
}

function getAllCartItems(){
	$.get('ajax/getCart.php?getAllCartItems=true', function(response) {
		$('.productsCart').html(response);
	});
	return false;
}

function addProductCart(pID){
	$.get('ajax/getCart.php?addItem=true&itemID='+pID, function(response) {
		getAllCartItems();
	});
	return false;
}
	
function delProductCart(pID){
	$.get('ajax/getCart.php?delItem=true&itemID='+pID, function(response) {
		getAllCartItems();
	});
	return false;
}
