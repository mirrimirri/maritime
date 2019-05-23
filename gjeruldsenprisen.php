
<?php /*Template Name: gjeruldsenprisen */?>
<?php get_header();?>



<div class='omgjeruldsen'>
	<h1 class="egendefinert-header"><?php the_title();?></h1>
   <?php if(have_posts()) : while(have_posts()): the_post();?>
	<div class='posts' style="display:block;">
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>
	</div>
	


<div class='vinnere'>
 <h1> Vinnere </h1>
 <?php echo do_shortcode('[tmm name="Tidligere-vinnere"]')?>
</div>


<?php get_footer();?>



