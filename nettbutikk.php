<?php /*Template Name: nettbutikk*/

get_header();
?>

<?php

get_header(); 
echo "<div class='mellom'>";
echo "<div class='boks'>";
echo "<h1 class='nettbutikk-header'>Nettbutikk</h1>";

/*$x=1;
echo "<div class='produkt'>";
while ($x<1000){
 echo do_shortcode("[products ids='$x']"); 
 $x++;	
}*/

echo "<div class='produkt'>";
		$args = array(
		    'post_type'=> 'product',  
		    'order'    => 'ASC'
		 );              

		$the_query = new WP_Query( $args );

		if($the_query->have_posts() ) {	 
			 while ( $the_query->have_posts() ) {	 
			 	$the_query->the_post();
			 	echo do_shortcode('[products columns="1" ids="'.get_the_ID().'"]');	 	
			 }
		}

echo"</div>";
echo "</div>";
echo "</div>";


get_footer();
?>

 
