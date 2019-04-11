<?php /*Template Name: nettbutikk*/
get_header();
?>
<div class='produkt'> 
<?php
$x=1;
while ($x<1000){
 echo do_shortcode("[product_page id='$x']"); 
 $x++;	
}
echo"</div>";
get_footer();
?>

 
