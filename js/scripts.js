 $(document).ready(function(){
	 
	
 });

 $(document).ready(function() {
	$('#menu-icon').click(function() {
		$('.menu').toggleClass('visible');
	});
});
// rename the JS to use the id/class for my script

$("p").wrap("<div class='paragraf'></div>");


$(".post").hide();

$( "#visMer" ).click(function() {
  $( ".post" ).toggle("slow");
  $(".postExcerpt").toggle();
});

$( "#visMindre" ).click(function() {
  $( ".post" ).toggle("slow");
  $(".postExcerpt").toggle();
});
