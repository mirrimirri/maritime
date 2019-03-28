<?php /*Template Name: omoss*/?>
<?php get_header();?>
<style>
<?php include("stil/omoss.css")?>
</style>

<div class='ommaritime'>
   <?php if(have_posts()) : while(have_posts()): the_post();?>
	<div class='post'>
	<h1><?php the_title();?></h1>
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>
	</div>
	</div>

</div>
<div>

<div class='presentasjon'>
 <?php echo do_shortcode('[tc-team-members teamid="203"]')?>
</div>

<div class='samarbeidspartnere'>
	<?php echo do_shortcode('[sponsors description=yes title=yes]')?>
</div>


<?php get_footer();?>