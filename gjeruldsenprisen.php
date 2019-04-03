
<?php /*Template Name: gjeruldsenprisen */?>
<?php get_header();?>

<html>
  <head>
    <link rel="stylesheet" href="gjeruldsenprisen.css">
  </head>
</html>

<div class='omgjeruldsen'>
	<img src ="http://www.trygvevalbo.com/wp-content/uploads/2019/03/Gunnar.jpg" width="460" height="345">
   <?php if(have_posts()) : while(have_posts()): the_post();?>
	<div class='post'>
	<h1><?php the_title();?></h1>
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>
	</div>
	





<div class="gjeruldsen">
    <!-- <img src="../bilder/Nordbyen.jpg" width="460" height="345"> -->
</div>


<div class='gjeruldsenprisen'>
 <?php echo do_shortcode('[tc-team-members teamid="69"]')?>
</div>


<?php get_footer();?>



