 <?php


 function load_stylesheets()
 {

	 
	 $slug = basename(get_permalink());
	 
	  
	 wp_enqueue_style( 'header', get_template_directory_uri() . '/style/header.css' );
	 wp_enqueue_style( 'footer', get_template_directory_uri() . '/style/footer.css' );
	 wp_enqueue_style( 'enkelevent', get_template_directory_uri() . '/style/enkelevent.css' );
	

	 
	 if(is_front_page()){
		 wp_enqueue_style( 'global', get_stylesheet_uri() );//framside
	 }
	 
	 
		 
	  if($slug=='events'){
	   wp_enqueue_style('style', get_template_directory_uri() . '/style/events.css', array(), false, 'all'); //laster css events
	 }
	
	 
	 if($slug=='omoss'){
	  wp_enqueue_style('style', get_template_directory_uri() . '/style/omoss.css', array(), false, 'all'); //laster css omoss
	 }
	 
	 
	  if($slug=='minside'){
	  wp_enqueue_style('style', get_template_directory_uri() . '/style/minside.css', array(), false, 'all'); //laster css minside
	 }
	 
	  if($slug=='nettbutikk'){
	   wp_enqueue_style('style', get_template_directory_uri() . '/style/nettbutikk.css', array(), false, 'all'); //laster css nettbutikk
	 }

	  
	  if($slug=='min-konto'){
	   wp_enqueue_style('style', get_template_directory_uri() . '/style/minside.css', array(), false, 'all'); //laster css nettbutikk

    }

 	  if(is_front_page()){
	   wp_enqueue_style('style', get_template_directory_uri() . '/style/rss.css', array(), false, 'all'); //laster rss.css
	  }

	 if($slug=='gjeruldsenprisen'){
	   wp_enqueue_style('style', get_template_directory_uri() . '/style/gjeruldsenprisen.css', array(), false, 'all'); //laster css gjeruldsenprisen
	 }
	  

	 if($slug=='nettbutikk'){
	   wp_enqueue_style('style', get_template_directory_uri() . '/style/nettbutikk.css', array(), false, 'all'); 
	 }
	 
	 if($slug=='handlekurv'){
	   wp_enqueue_style('style', get_template_directory_uri() . '/style/handlekurv.css', array(), false, 'all'); 
	 }

	if($slug=='kassen'){
	   wp_enqueue_style('style', get_template_directory_uri() . '/style/kassen.css', array(), false, 'all'); 
	 }

	 if($slug=='cookie-policy'){
	   wp_enqueue_style('style', get_template_directory_uri() . '/style/cookie-policy.css', array(), false, 'all'); //laster css gjeruldsenprisen
	 }

 }
 add_action('wp_enqueue_scripts', 'load_stylesheets');
 
 
 function include_jquery(){
	 wp_deregister_script('jquery');
	 
	 wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.1.3.min.js','', 1, true);
	  add_action('wp_enqueue_scripts', 'jquery');
 }
  add_action('wp_enqueue_scripts', 'include_jquery');
 
 
 function loadjs() {
	 wp_enqueue_script('customjs', get_template_directory_uri(). '/js/scripts.js', '', 1, true);
	 wp_enqueue_script('customjs');
 }
 
 
 
 
  add_action('wp_enqueue_scripts', 'loadjs');
  
  add_theme_support('menus');

  add_theme_support('post-thumbnails');
  
register_nav_menus(
	array
	(
	'primary' => __('Top Menu')
	)
	);

function themename_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/images/headers/default.jpg',
        // Display the header text along with the image
        'header-text'           => true,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1920,
        // Header image height (in pixels)
        'height'            => 1080,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => true,
        'flex-width'         => true,
        'flex-height'        => true,
        );

    add_theme_support( 'custom-header', $defaults );
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );


//Kan vi få denne inn i customize theme meny?
add_theme_support( 'post-thumbnails', array( 'page' ) );



function redirect_to_custom_login_page(){
	wp_redirect(site_url() . "/login");
	exit();
	
}
add_action("wp_logout","redirect_to_custom_login_page");


add_action("init","fn_redirect_wp_admin");

function fn_redirect_wp_admin(){
	global $pagenow;
	if($pagenow=="wp_login.php" && $_GET['action'] != "logout"){
		wp_redirect(site_url() . "/login");
		exit();
	}
}

function wooc_extra_register_fields() {?>
       <p class="form-row form-row-wide">
       <label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?></label>
       <input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php esc_attr_e( $_POST['billing_phone'] ); ?>" />
       </p>
       <p class="form-row form-row-first">
       <label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><span class="required">*</span></label>
       <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
       </p>
       <p class="form-row form-row-last">
       <label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span></label>
       <input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
       </p>
       <div class="clear"></div>
       <?php
 }
 add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );
 
 add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
 



//når man logger ut blir du sendt til hjemmesiden !!!!!!!!!!hvorfor funker dette ikke??


//last inn themplate for single product
function bizroot_check_custom_header_status( $input ) {

		global $post;

		// Slider status.
		$featured_slider_status = bizroot_get_option( 'featured_slider_status' );

		if ( is_front_page() && 'posts' === get_option( 'show_on_front' ) ) {
			$input = true;
		}
		else if ( is_front_page() && 'page' === get_option( 'show_on_front' ) && 'home-page' == $featured_slider_status ) {
			$input = false;
		}

		else if ( is_home() && ( $blog_page_id = bizroot_get_index_page_id( 'blog' ) ) > 0 ) {
			$values = get_post_meta( $blog_page_id, 'bizroot_theme_settings', true );
			$disable_banner_area = isset( $values['disable_banner_area'] ) ? absint( $values['disable_banner_area'] ) : 0;
			if ( 1 === $disable_banner_area ) {
				$input = false;
			}
		}
		else if ( $post ) {
			if ( is_singular() ) {
				$values = get_post_meta( $post->ID, 'bizroot_theme_settings', true );
				$disable_banner_area = isset( $values['disable_banner_area'] ) ? absint( $values['disable_banner_area'] ) : 0;
				if ( 1 === $disable_banner_area ) {
					$input = false;
				}
			}
		}

		else{$input = true;}

		return $input;

	}


 

//sideattribut på sider
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
?>