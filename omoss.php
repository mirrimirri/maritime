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

<div class='samarbeidspartnere'>
	<?php echo do_shortcode('[sponsors description=yes title=yes]')?>
</div>

<div class='kontaktoss'>

<form action="">
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
<?php get_footer();?>
