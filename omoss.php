<?php /*Template Name: omoss*/?>
<?php get_header();?>


<div class='ommaritime'>
   <?php if(have_posts()) : while(have_posts()): the_post();?>
	<div class='post'>
	<h1><?php the_title();?></h1>
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>
	</div>
	




<div class='presentasjon'>

 <?php 
 		

 	for ($i=0; $i <=1000 ; $i++) { 
 		$postType=get_post_type($i);
 		if ($postType=="tcmembers") {
 			break;
 		}
 	}

	$tcmembers = '[tc-team-members teamid='.$i.']';
	echo do_shortcode($tcmembers);


 ?>


</div>

<div class='samarbeidspartnere'>
	<?php echo do_shortcode('[sponsors description=yes title=yes]')?>
</div>

<div class='kontaktoss'
	<?php echo do_shortcode("[gdfrm_form id='1']"); ?>
</div>
<?php get_footer();?>