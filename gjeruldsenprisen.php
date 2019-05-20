
<?php /*Template Name: gjeruldsenprisen */?>
<?php get_header();?>



<div class='omgjeruldsen'>
	<h1><?php the_title();?></h1>
	<img src ="http://www.trygvevalbo.com/wp-content/uploads/2019/03/Gunnar.jpg">
   <?php if(have_posts()) : while(have_posts()): the_post();?>
	<div class='posts' style="display:block;">
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>
	</div>
	


<div class='vinnere'>
 <h1> Vinnere </h1>
 <?php echo do_shortcode('[tmm name="tidligere-vinnere"]')?>
</div>


<?php get_footer();?>



