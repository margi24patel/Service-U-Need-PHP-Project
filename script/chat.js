function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


jQuery(document).ready(function() {
/*$("p").hide();	
	
$("h3").click(function(){
	$("p").hide();
	$(this).next('p').slideToggle(3000);
		
});

$("p").hover(
	function(){$('p').css({'background':'#d7f7f5', 'color':'#000'});},
	function(){$('p').css({'background':'#2a6171', 'color':'#d7f7f5'});},
);*/




$('p').hide();
	
	$("p").hover(
		function(){$('p').css({'background':'#2a6171', 'color':'#d7f7f5'});},
		function(){$('p').css({'background':'#d7f7f5', 'color':'#000'});},
	);
	
	$('h3').click(function(){
		$('p').hide();
		$(this).next('p').show();
	});
	



});
