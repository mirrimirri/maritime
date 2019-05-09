<!DOCTYPE html>
<html>
<style>
/*
Theme Name: maritime
Theme URI: trygvevalbo.com
Author: design
Author URI: https://trygvevalbo.com/
Description: laget for USN maritime linjeforening
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: usnmaritime
Tags: one-column, two-columns, right-sidebar, flexible-header, accessibility-ready, custom-colors, custom-header, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, post-formats, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/ 

html, body {
    max-width: 100%;
    overflow-x: hidden;
}

body{
  margin: 0px;
   background: #efefef;
}
h1. h2. h3.{
 font-family: 'Quattrocento', serif;
}
p.{
	font-family: 'Montserrat', sans-serif;
}
/* header/logo/title */
 header{
     display: flex;
     flex-direction:column;
     background: #D1D2F9;
     color: white;
     position: relative;
     z-index: -4;
}

.home,.blog,.locale-en-us,.woocommerce-js,.maritime{
  position: relative;
  z-index: -1;
}

.header-image img{
    display: block;
    width: 100%;
    height: 100%;
}

.header-image{
    position: relative;
    display: inline-block;
    z-index: -2;
}

.header-image::after {
    position: absolute;
    content:"";
    height:33vw;
    width:100vw;
    top:0;
    left:0;
    background: linear-gradient(to bottom,black, rgba(255,0,0,0));
    z-index: -1;
}

.image-gradient{
  float: left;
  position: absolute;
  left: 0px;
  top: 0px;
  background: linear-gradient(to bottom,black, rgba(255,0,0,0));
  width: 100vw;
  height:25vh;
}

.header-image-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate( -50%, -50% );
    text-align: center;
    color: white;
    font-weight: bold;
    font-size: 6vw;
    padding: 0.2em;
    background: rgba(255,255,255,0.2);
    border:0.1em solid white;
}
.nav-container{
    position: absolute;
    top: 0%;
    left: 0%;
    transform: translate( 0%, 30% );
    text-align: center;
    color: white;
    max-width: 100vw;
    padding: 1.5em;
    transform: translateY(-0.5vh);
}


.nav-container{
	display:flex;
	flex-direction: row;
  justify-content: space-evenly;
  flex-wrap: nowrap;
}

.main-nav{
  z-index: 2;
}

.main-nav ul {
  display: flex;
  justify-content: space-evenly;
  flex-wrap: nowrap;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  z-index: 9980;
  margin: 0 2vw;
}

.main-nav li {
  float: left;
  z-index: 9990;
}

#ajaxsearchlite1{
  z-index: -1;
  transform: translateY(10%);
  margin-right: 2vw;
}

img[alt="Norwegian"],img[alt="English"]{
  width:5vw;
  height: auto;
  margin-left: 2vw; 
  transform: translateY(60%);
}

@media only screen and (min-width: 600px)
{


  .main-nav li a {
    display: block;
    color: white;
    text-align: center;
    margin-left: 0.5em;
    padding: 1.5em;
    font-size: 1.5vw;
    text-decoration: none;
  }
}

.hoyrenav{
	display: flex;
}

/* Change the link color to #111 (black) on hover */
.main-nav li a:hover {
  color: #ffdb58;
}

  :root{
    --size-variable-kurv:3.5vw;    
  }

#handlekurv{
  background-image: url(../bilder/ikoner/handlevognhvit.png);
  background-size: var(--size-variable-kurv);
  background-repeat: no-repeat; 
  width: var(--size-variable-kurv);
  height: var(--size-variable-kurv);
  padding: 0 1vw;
  margin-right: 0.5vw;
  transform: translateY(50%);
}

#handlekurv:hover{
  background-image: url(../bilder/ikoner/handlevogngul.png);
  background-size: var(--size-variable-kurv);
  background-repeat: no-repeat;
  width: var(--size-variable-kurv);
  height: var(--size-variable-kurv);
  margin-right: 0.5vw;
}



@media only screen and (max-width: 600px)
{

  :root{
    --size-variable:7vw;    
  }

  #ajaxsearchlite1{
    transform: translateY(-15%);
  }

  #handlekurv{
    background-image: url(../bilder/ikoner/handlevognhvit.png);
    background-size: var(--size-variable);
    width: var(--size-variable);
    height: var(--size-variable);
    margin-left: 4vw;
    transform: translateY(0%);
  }

  #handlekurv:hover{
    background-image: url(../bilder/ikoner/handlevogngul.png);
    background-size: var(--size-variable);
    width: var(--size-variable);
    height: var(--size-variable);
  }

  .main-nav {
    color: white;
    font-size: 2.5vw;
    border: none;
    background-image: url(../bilder/ikoner/dropdownmenu.png);
    background-repeat: no-repeat;
    background-size: var(--size-variable);
    width: var(--size-variable);
    height: var(--size-variable);
  }

  .main-nav ul{
    justify-content: unset;
    flex-wrap: wrap;
    overflow: initial;
  }

  
  .main-nav:hover{
    background: url(../bilder/ikoner/dropdownmenuyella.png) no-repeat;
    background-size: var(--size-variable);
  }

  .nav-container{
    margin: 1vw 2vw 0 4vw;
    background-color: transparent;
    display:flex;
    flex-direction: row;
  }

  .menu {
    display: none;
    position: absolute;
    transform: translate(0, var(--size-variable));
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 10;
  }

  .menu a {
    font-size: 3vw;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  

  .menu.visible {

     display: block;
     position: relative; 

     z-index: 1000;  
  }

  .menu.visible a{
    color: black;
    z-index: 1001;   
  }

  .menu a{
    min-width: 160px;
    text-align: left;
  }

  .menu li:hover{
    background:#192733;
  }


}

.woocommerce-page img {

	display:none;
}




</style>
	<head>
	<?php wp_head();?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Quattrocento|Quattrocento+Sans" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Quattrocento|Quattrocento+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Quattrocento" rel="stylesheet">
	<?php if(basename($_SERVER['PHP_SELF']) == 'front-page.php'){ ?>
		<link href="/style.css" rel="stylesheet" media="all"/>
		<link rel="stylesheet" href="footer.css">
		<link rel="stylesheet" href="header.css">
	<?php }?>	
	</head>

<body <?php body_class();?>>

<header>

<div class="header-image">
	


	<?php 
	

		if(has_post_thumbnail())
		{
			echo the_post_thumbnail();
		}
		else
		{
		echo get_header_image_tag(); 
		}
		
		
	

	?>
	<div class="image-gradient"></div>

	<div class="header-image-text">

		<?php 

	    global $post;
	    $page_title=$post->post_title;
	    $page_title=ucfirst($page_title);


	    if(is_front_page())
	    {
			echo get_bloginfo( 'name' );
	    }
	    else
	    {
	    	echo $page_title;
		}

		?>

	</div>

	<div class="nav-container">	
			<nav class="main-nav" id="menu-icon">
			<?php 
				$args= array('theme_location'=>'primary');
			 	wp_nav_menu($args);
			 ?>
			</nav>
			
			<div class='hoyrenav'>
	<a href='http://localhost/wordpress/handlekurv/'><div id="handlekurv"></div></a>
	<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
	<?php echo do_shortcode('[gtranslate]'); ?>
			</div>
			

	</div>
</div>


		
	
	
</header>