<?php /*Template Name: omoss*/?>
<?php get_header();?>
<div class='mellom'>
<div class='hoved'>


<div class='boks'>
<div class='ommaritime'>
  	<?php if(have_posts()) : while(have_posts()): the_post();?>

   <?php if(have_posts()) : while(have_posts()): the_post();?>

	<div class='post'>
	<div class="postTitle"><h1><?php the_title();?></h1></div>
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>


	</div>


<br>

</div>



<div class='presentasjon'>

 <?php 
	print("<h1> Samarbeidspartnere </h1>");
 		

		$args = array(
		    'post_type'=> 'tcmembers',    
		    'order'    => 'ASC'
		 );              

		$the_query = new WP_Query( $args );

		if($the_query->have_posts() ) {	 
			 while ( $the_query->have_posts() ) {	 
			 	$the_query->the_post();
			 	echo do_shortcode('[tc-team-members teamid="'.get_the_ID().'"]');	 	
			 }

		}
		wp_reset_postdata();

 ?>
</div>

	
</div>

<div class='samarbeidspartnere'>
	<?php echo do_shortcode('[sponsors description=yes title=yes]')?>
</div>

<div class='kontaktoss'>
	

<?php 
print("<h1> Kontakt oss </h1>");
echo do_shortcode('[CONTACT_FORM_TO_EMAIL id="1"]')?>


<form action="">
<h3> Kontakt oss</h3>
  E-mail <input type="email" name="emailaddress" ><br/>
  Overskrift <input type="overskrift" name="overskrift"><br/>
  Melding <input type="melding" name="melding"><br/>
  <input type="submit" value="Send" id="send" name="send">
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
	<?php
if (isset($_REQUEST['send'])){
$to = "s662404@nwytg.net";
$subject = $_REQUEST['overskrift'];
$txt = $_REQUEST['melding'];
$headers = "From:". $_REQUEST['emailadress'] . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);	

header("Location: index.php?mailsend");
}	
?>

</div>
</div>
<?php get_footer();?>
