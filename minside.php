  <?php 
	 session_start();
  /*Template Name: minside*/
get_header();
  
   
		echo do_shortcode("[woocommerce_my_account]"); 	 


	echo do_shortcode("[woocommerce_order_tracking]"); 
	
	 


  get_footer();?>