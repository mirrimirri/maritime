<!DOCTYPE html>
<html>

	<head>
	<?php wp_head();?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php if(basename($_SERVER['PHP_SELF']) == 'front-page.php'){ ?>
     <link href="/style.css" rel="stylesheet" media="all"/>
     <link rel="stylesheet" href="footer.css">
     <link rel="stylesheet" href="header.css">
	<?php }?>	
	</head>

<body <?php body_class();?>>

<header>

<div class="header-image">
	
	<?php echo get_header_image_tag(); ?>
	<div class="header-image-text">

		<?php echo get_bloginfo( 'name' );?>

	</div>

<div class="nav-container">	
		<nav class="main-nav">
		<?php 
			$args= array('theme_location'=>'primary');
		 	wp_nav_menu($args);
		 ?>
		</nav>
		
		<div class='hoyrenav'>
<a href='http://localhost/wordpress/handlekurv/'><img src="http://www.trygvevalbo.com/wp-content/uploads/2019/04/handlevogn-hvit.png" style="width:40px; height:40px" alt="tilkurv"/></a>
		</div>
		

</div>
</div>


		
	
	
</header>