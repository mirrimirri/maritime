<?php /*Template Name: nettbutikk*/
/*get_header(); 
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
          <form class="cart" method="post" enctype="multipart/form-data">
     <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
     <button type="submit"> <?php echo $product->single_add_to_cart_text(); ?> </button>
		</form>
          </div>
          
          
     </li>
     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
     <?php else:  ?>
     <li>
          
     </li>
     <?php endif; ?>
</ul>

*/
?>
<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<p><?php
	/* translators: 1: user display name 2: logout url */
	printf(
		__( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url( wc_get_page_permalink( 'myaccount' ) ) )
	);
?></p>

<p><?php
	printf(
		__( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
?></p>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );
	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );
	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. *
 
?>
