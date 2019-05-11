 $(document).ready(function(){
	 
	
 });

$('#menu-menu-2').hide();


 		if (window.matchMedia('(max-width: 600px)').matches) {  

			$(document).ready(function() {
				$('#menu-icon').click(function() {
					$('#menu-menu-2').toggleClass('visible');
			/*Laster class visible på #menu-menu-2*/
				});
			});
              // is mobile device

       }     








$("p").wrap("<div class='paragraf'></div>");

$(".mmm-warning").hide();

$(".post").hide();



$( ".visMer" ).click(function(visMer) {
	var id = $(this).attr('id');
	var post = 'post-'+id;
	var postExcerpt = 'postExcerpt-'+id;
  $("#"+post).slideToggle();
  $("#"+postExcerpt).toggle('fast');
});

$( ".visMindre" ).click(function(visMindre) {
	var id = $(this).attr('id');
	var post = 'post-'+id;
	var postExcerpt = 'postExcerpt-'+id;
  $("#"+post).slideToggle();
  $("#"+postExcerpt).toggle('fast');
});



