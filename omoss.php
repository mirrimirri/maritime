<?php /*Template Name: omoss*/?>
<?php get_header();?>
<div class='mellom'>

<div class='hoved'>

   <?php if(have_posts()) : while(have_posts()): the_post();?>
	<div class='posts' style="display:block;">
	<h1><?php the_title();?></h1>
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>
	</div>

	</div>





<div class='presentasjon'>
<h1> Medlemmer </h1>

 <?php 

echo do_shortcode('	[tc-team-members teamid="124"]');	
 ?>
	

</div>

<div class='samarbeidspartnere'>
<h1> Samarbeidspartnere </h1>

	<?php echo do_shortcode('[sponsors description=yes title=yes]')?>

</div>

<div class='kontaktoss'>
	

<?php 
print("<h1> Kontakt oss </h1>");
echo do_shortcode('[CONTACT_FORM_TO_EMAIL id="1"]')?>

</div>
</div>
<?php get_footer();?>
