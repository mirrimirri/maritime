<?php /*Template Name: nettbutikk*/
get_header(); 
?>
<?php /*Template Name: nettbutikk*/

$args = array( 'post_type' => 'product');
$list_tags = array()
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    $terms = get_the_terms( $post->ID, 'product_tag' );;
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
        foreach ( $terms as $term ) {
            $list_tags = $term->slug;
            array_push($list_tags, $terms );
        }
    }
endwhile;
return $list_tags;


var_dump($list_tags);

?>




 <?php /*Template Name: nettbutikk*/
get_header(); 
?>

 <?php /*Template Name: nettbutikk*/?>
 

