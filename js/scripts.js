 $(document).ready(function(){
	 
	
 });


$(document).ready(function() {
	$('#menu-icon').click(function() {
		$('.menu').toggleClass('visible');
	});
});






$("p").wrap("<div class='paragraf'></div>");

$(".mmm-warning").hide();

$(".post").hide();



$( ".visMer" ).click(function(visMer) {
	var id = $(this).attr('id');
	var post = 'post-'+id;
	var postExcerpt = 'postExcerpt-'+id;
  $("#"+post).toggle("slow");
  $("#"+postExcerpt).toggle();
});

$( ".visMindre" ).click(function(visMindre) {
	var id = $(this).attr('id');
	var post = 'post-'+id;
	var postExcerpt = 'postExcerpt-'+id;
  $("#"+post).toggle("slow");
  $("#"+postExcerpt).toggle();
});

