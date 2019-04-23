<?php /*Template Name: kassen*/
get_header();
?>
<div class='kassen'>
<?php
  echo do_shortcode(" [woocommerce_checkout]"); 
  ?>
 </div>
<?php get_footer();?>
