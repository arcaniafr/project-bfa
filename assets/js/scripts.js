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