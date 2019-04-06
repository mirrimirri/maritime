<?php /*Template Name: nettbutikk*/
get_header(); 
?>

<?php
$params = array('posts_per_page' => 5, 'post_type' => 'product');
$wc_query = new WP_Query($params);
?>
<ul>
     <?php if ($wc_query->have_posts()) : ?>
     <?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
     <li>
     		<div class='varenavn'>
          <h3>
               <a href="<?php the_permalink(); ?>">
               <?php the_title(); ?>
               </a>
          </h3>
     		</div>
          <div class='thumbnail'>
          <?php the_post_thumbnail(); ?>
             <?php the_excerpt(); ?>
          </div>
          
          <div class='beskrivelse'>
         <?php echo   the_content()?>
          </div>
          
          <div class='pris'>
          <?php echo $product->get_price_html();//pris?>
          </div>
         
          <div class='kjop'>
       <?php if($product->has_child()) : ?>
<a href="<?php the_permalink(); ?>">
<?php _e('Zobacz dostępne warianty', 'my-theme'); ?>
</a>
<?php elseif($product->is_in_stock()) : ?>
<form class="cart" action="http://localhost/wordpress/handlekurv/" method="post" enctype="multipart/form-data">
     <div class="quantity">
          <input type="number" step="1" min="1" max="9" name="quantity" value="1" title="<?php _e('Szt.', 'my-theme'); ?>" class="input-text qty text" size="4">
     </div>
     <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
     <button type="submit"><?php echo $product->single_add_to_cart_text(); ?></button>
</form>
<?php endif; ?>

          </div>
          
          
     </li>
     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
     <?php else:  ?>
     <li>
          
     </li>
     <?php endif; ?>
</ul>


?>
