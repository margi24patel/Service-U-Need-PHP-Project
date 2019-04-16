function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


jQuery(document).ready(function() {
//alert();
$("p").hide();	
	
$("h2").click(function(){
	//alert();
	$("p").hide();
	$(this).next('p').slideToggle(3000);
		
});

$("p").hover(
	function(){$('p').css({'background':'#d7f7f5', 'color':'#000'});},
	function(){$('p').css({'background':'#2a6171', 'color':'#d7f7f5'});},
);

});
