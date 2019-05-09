<?php /*Template Name: omoss*/?>
<?php get_header();?>
<div class='mellom'>

<div class='hoved'>

   <?php if(have_posts()) : while(have_posts()): the_post();?>
	<div class='post'>
	<h1><?php the_title();?></h1>
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>
	





<div class='presentasjon'>

 <?php 

		$args = array(
		    'post_type'=> 'tcmembers',  
		    'order'    => 'ASC'
		 );              

		$the_query = new WP_Query( $args );

		if($the_query->have_posts() ) {	 
				 while ( $the_query->have_posts() ) {

				 	$the_query->the_post();
				 	$post = get_post($post_id);
					$title = $post->post_title;
					if (strstr($title,'Team')) {
						echo "<h1 class='team-overskrift'>".$title."</h1>";
					 	echo do_shortcode('[tc-team-members teamid="'.get_the_ID().'"]');	 	

						
					}

			 	}


		}
		wp_reset_postdata();

 ?>
	
</div>
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
