<!DOCTYPE html>
<html>

	<head>
	<?php wp_head();?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<div class='mellom'>
<style>
<?php include("style.css");?>
</style>
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
</div>
</div>


		
	
	
</header>