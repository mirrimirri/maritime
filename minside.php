  <?php 
	 
  /*Template Name: minside*/
 get_header();
  ?>
  <div class='minside'>
  <?php 
	echo do_shortcode("[woocommerce_my_account]"); 	 



	echo do_shortcode("[woocommerce_order_tracking]"); 
	?>
   </div>

  <?php get_footer();?>