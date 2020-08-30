$('.btn-show-log-form').click(function(){
	$('#form-register').hide();
	$('#form-loading').show();
	setTimeout(function(){
		$('#form-login').show();
		$('#form-loading').hide();
	}, 500);
});
$('.btn-show-reg-form').click(function(){
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

