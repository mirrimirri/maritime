 <?php
 

 function load_stylesheets()
 {
	/*
 wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	 wp_enqueue_style('bootstrap');
	 */
	 
	 $slug = basename(get_permalink());
	 wp_enqueue_style( 'global', get_stylesheet_uri() ); //framside
	 wp_register_style('style', get_template_directory_uri() . '/events.css', array(), false, 'all'); // laster ned header
	 wp_register_style('style', get_template_directory_uri() . '/events.css', array(), false, 'all'); //lastern ned footer
	 
	  if(is_page($slug=='events')){
	  wp_register_style('style', get_template_directory_uri() . '/events.css', array(), false, 'all'); //laster css events
	 }
	 
	 if(is_page($slug=='omoss')){
	  wp_register_style('style', get_template_directory_uri() . '/omoss.css', array(), false, 'all'); //laster css omoss
	 }
	 wp_enqueue_style('style');
	 
	  if(is_page($slug=='minside')){
	  wp_register_style('style', get_template_directory_uri() . '/minside.css', array(), false, 'all'); //laster css minside
	 }
	 
	  if(is_page($slug=='nettbutikk')){
	  wp_register_style('style', get_template_directory_uri() . '/nettbutikk.css', array(), false, 'all'); //laster css nettbutikk
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
array(
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
        'width'             => 1000,
        // Header image height (in pixels)
        'height'            => 198,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => true,
        'flex-width'         => true,
        'flex-height'        => true,
        );

    add_theme_support( 'custom-header', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );



add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
?>