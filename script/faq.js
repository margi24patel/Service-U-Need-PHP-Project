
jQuery(document).ready(function(){
    $('b').hide();
	
	$('h2').click(function(){
		$('b').hide();
		$(this).next('b').slideToggle(3000);
	});
	$('b').hover(
	function(){$('b').css ({'background':'#0d4e4a','color':'#c2cbcb'});},
	function(){$('b').css ({'background':'#c2cbcb','color':'#0d4e4a'});});
	
});
