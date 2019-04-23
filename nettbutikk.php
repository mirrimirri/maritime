<?php /*Template Name: nettbutikk*/

get_header();
?>

<?php

get_header(); 
echo "<div class='mellom'>";
echo "<h1>Nettbutikk</h1>";

$x=1;
echo "<div class='produkt'>";
while ($x<1000){
 echo do_shortcode("[products ids='$x']"); 
 $x++;	
}

echo"</div>";
echo "</div>";


get_footer();
?>

 
