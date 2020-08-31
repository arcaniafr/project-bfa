$('.btn-show-log-form').click(function(){
	$('.error-login').hide();
	$('.error-register').hide();
	$('#titleLoader').html('Loading...');
	$('#form-register').hide();
	$('#form-loading').show();
	setTimeout(function(){
		$('#form-login').show();
		$('#form-loading').hide();
	}, 500);
});
$('.btn-show-reg-form').click(function(){
	$('.error-login').hide();
	$('.error-register').hide();
	$('#titleLoader').html('Loading...');
	$('#form-login').hide();
	$('#form-loading').show();
	setTimeout(function(){
		$('#form-login').hide();
		$('#form-register').show();
		$('#form-loading').hide();
	}, 500);
});


setTimeout(function(){
	$('.preloader-wrapp').hide();
}, 500);

$('.loadCharactersClick').click(function(){
	$('#account-loading').show();
	$('.loadAccountLi').removeClass('active');
	$('.loadCharactersLi').addClass('active');
	setTimeout(function(){
		$.get('ajax/load-account.php?loadCharacters=true&accountID=1', function(response) {
			$('#account-loading').hide();
			$('.loadAccountInfos').html(response);
		});
	}, 500);
});

$('.loadAccountInfosClick').click(function(){
	$('#account-loading').show();
	$('.loadAccountLi').addClass('active');
	$('.loadCharactersLi').removeClass('active');
	setTimeout(function(){
		$.get('ajax/load-account.php?loadAccountInfos=true&accountID=1', function(response) {
			$('#account-loading').hide();
			$('.loadAccountInfos').html(response);
		});
	}, 500);
});

$('.sendLogin').click(function(){
	$('.error-login').hide();
	$('#form-login').hide();
	$('#titleLoader').html('Login in progress...');
	$('#form-loading').show();
	setTimeout(function(){
		var logEmailUsername = $("#logEmailUsername").val();
		var logPassword = $("#logPassword").val();
		$.get('ajax/getRequest.php?sendLogin=true&logEmailUsername='+logEmailUsername+'&logPassword='+logPassword, function(response) {
			if(response == 0){
				window.location = 'account.php';
			}
			else{
				$('#form-login').show();
				$('.error-login').show();
				$('.error-login-text').html(response);
			}
			$('#form-loading').hide();
		});
	}, 1500);
});


$('.sendRegister').click(function(){
	$('.error-register').hide();
	$('#form-register').hide();
	$('#titleLoader').html('Register in progress...');
	$('#form-loading').show();
	setTimeout(function(){
		var username = $("#regUsername").val();
		var email = $("#regEmail").val();
		var password = $("#regPassword").val();
		var repassword = $("#regRePassword").val();
		$.get('ajax/getRequest.php?sendRegister=true&regUsername='+username+'&regEmail='+email+'&regPassword='+password+'&regRePassword='+repassword, function(response) {
			if(response == 0){
				window.location = 'account.php';
			}
			else{
				$('#form-register').show();
				$('.error-register').show();
				$('.error-register-text').html(response);
			}
			$('#form-loading').hide();
		});
	}, 1500);
});
