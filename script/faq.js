
jQuery(document).ready(function(){
    $('li').hide();
	
	$('h3').click(function(){
		$('li').hide();
		$(this).next('li').slideToggle(3000);
	});
	$('li').hover(
	function(){$('li').css ({'background':'#0d4e4a','color':'#c2cbcb'});},
	function(){$('li').css ({'background':'#c2cbcb','color':'#0d4e4a'});});
	
});
