 <?php
 

 function load_stylesheets()
 {

	 
	 $slug = basename(get_permalink());
	 
	  
	 wp_enqueue_style( 'header', get_template_directory_uri() . '/stil/header.css' );
	 
	  
	  
		 wp_enqueue_style( 'aside', get_template_directory_uri() . '/stil/stil.css' );
		
	 
	 
	 wp_enqueue_style( 'footer', get_template_directory_uri() . '/stil/footer.css' );

	 
	
	 
	 
		 
	
	 if($slug=='events'){
	   wp_enqueue_style('events', get_template_directory_uri() . '/stil/events.css', array(), false, 'all'); //laster css events
	 }
	
	 
	 if($slug=='omoss'){
	  wp_enqueue_style( 'omoss', get_template_directory_uri() .'/stil/omoss.css');
	 
	 }
	 
	 
	  
	 if(get_the_title($slug=='minside')){
	  wp_enqueue_style('minside', get_template_directory_uri() . '/stil/minside.css', array(), false, 'all'); //laster css minside
	 }
	 
	  
	 if($slug=='nettbutikk'){
	   wp_enqueue_style('nettbutikk', get_template_directory_uri() . 'stil/nettbutikk.css', array(), false, 'all'); //laster css nettbutikk
	   
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
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );




add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
?>