
<?php /*Template Name: gjeruldsenprisen */?>
<?php get_header();?>



<div class='omgjeruldsen'>
	<img src ="http://www.trygvevalbo.com/wp-content/uploads/2019/03/Gunnar.jpg" width="460" height="345">
   <?php if(have_posts()) : while(have_posts()): the_post();?>
	<div class='posts' style="display:block;">
	<h1><?php the_title();?></h1>
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>
	</div>
	





<div class="gjeruldsen">
   
</div>


<div class='gjeruldsenprisen'>
 <?php echo do_shortcode('[tc-team-members teamid="69"]')?>
</div>


<?php get_footer();?>



