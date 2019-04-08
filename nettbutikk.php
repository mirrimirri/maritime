<?php /*Template Name: nettbutikk*/
get_header(); 
$x=1;
while ($x<1000){
 echo do_shortcode("[product_page id='$x']"); 
 $x++;	
}
get_footer();
?>

 
