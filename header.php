<!DOCTYPE html>
<html>

	<head>
	test
	<?php wp_head();?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php if(basename($_SERVER['PHP_SELF']) == 'front-page.php'){ ?>
     <link href="/style.css" rel="stylesheet" media="all"/>
	<?php }?>	
	</head>

<body <?php body_class();?>>

<header>


<img src="https://cdn1.iconfinder.com/data/icons/online-wireframes/32/Wireframe_Two_Column_Website-512.png" class="img-fluid" alt="Responsive image">

<div class="container">	
		<nav class="main-nav">
		
		<?php
		$args= array('theme_location'=>'primary');
		?>
		
						<?php wp_nav_menu($args);
?>
		
		</nav>
		
	
	
</header>