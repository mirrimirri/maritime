<?php get_header();?>
<div class='mellom'>

<div class='events'>

</div> 

	<div class='hoved'>
	
	
	
	<?php if(have_posts()) : while(have_posts()): the_post();?>
	<div class='post'>
	<h1><?php the_title();?></h1>
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>
	</div>
	
	
	
	
	
<div class='hoyreside'>
<div class='facebook'>
<h1>Nyheter fra oss<h1>
<?php echo do_shortcode('[facebook-page href="https://www.facebook.com/USNMaritime/" tabs="timeline"  width="5000" height="500"]
'); ?>
</div>

<div class='instagram'>
<?php echo do_shortcode('[wdi_feed id="1"]'); ?>
</div>


<div class='gcaptain'>
<h1>Nyheter fra gccaptain</h1>
<?php RSSImport(10, 'http://feeds.feedburner.com/gcaptain'); ?>
</div><br/>
<div class='sysla'>
<h1>Nyheter fra sysla</h1>
<?php RSSImport(10, 'http://rss.acast.com/sysla123'); ?>
</div></div>
</div>
<?php get_footer();?>