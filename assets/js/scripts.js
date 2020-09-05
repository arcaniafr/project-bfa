$(document).ready(function() {
	
	setTimeout(function(){
		$('.preloader-wrapp').hide();
	}, 500);

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