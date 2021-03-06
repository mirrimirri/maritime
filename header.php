<!DOCTYPE html>
<html>

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
	

			if(!is_front_page())
			{
				if(has_post_thumbnail())
				{
					
					if (!get_the_post_thumbnail()) {
						echo get_header_image_tag();		
					}else{
						echo the_post_thumbnail();

					}
				 
				}
				else
				{
					echo get_header_image_tag(); 
				}
			}else{
				echo get_header_image_tag();
			}


 //se videre om de fungerer

		
	


	?>
	<div class="image-gradient">
	<div class='hoyrenav'>
	<!--<a href='http://localhost/wordpress/handlekurv/'><div id="handlekurv"></div></a> stygg?-->
	<?php echo do_shortcode('[gtranslate]'); ?>
			</div>
			
	</div>

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
			<a href="<?php print get_home_url(); ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/bilder/ikoner/logoliten.png" class="menu-hjem" alt="Tilbake til forsiden">	
			</a>
			<nav class="main-nav" id="menu-icon">
			<?php 
				$args= array('theme_location'=>'primary');
			 	wp_nav_menu($args);
			 ?>
			</nav>
			
			
	</div>
	
</div>




	
	
</header>