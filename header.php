<!DOCTYPE html>
<html>

	<head>
	<?php wp_head();?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php if(basename($_SERVER['PHP_SELF']) == 'front-page.php'){ ?>
     <link href="/style.css" rel="stylesheet" media="all"/>
	<?php }?>	
	</head>

<body <?php body_class();?>>

<header>


<div class="header-image">
	
	<?php echo get_header_image_tag() ?>
	<div class="header-image-text">
		
		<?php 
			$myTitle = the_title('','',false); 
			if (!$myTitle) {
				echo get_bloginfo( 'name' );
			}else{
				the_title();
			}
		?>
	</div>

</div>


<div class="container">	
		<nav class="main-nav">
		
		<?php
		$args= array('theme_location'=>'primary');
		?>
		
						<?php wp_nav_menu($args);
?>
		
		</nav>
		
	
	
</header>