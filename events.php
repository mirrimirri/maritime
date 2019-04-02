<?php /*Template Name: events*/?>
<?php get_header();?>
<div class='presentasjon'>
 <?php echo do_shortcode('[tmm name="maritime"]')?>
</div>

<div class='events'>
<?php echo do_shortcode('[facebook_events col=”2″ posts_per_page=”12″ category=”cat1,cat2″ past_events=”yes” order=”desc” orderby=”post_title” start_date=”2017-12-25″ end_date=”2018-12-25″ ]')?>	
</div>
<?php get_footer();?>