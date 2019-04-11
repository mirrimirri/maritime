<!DOCTYPE html>
<html>

	<head>
	<?php wp_head();?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php if(basename($_SERVER['PHP_SELF']) == 'front-page.php'){ ?>
		<link href="/style.css" rel="stylesheet" media="all"/>
		<link rel="stylesheet" href="footer.css">
		<link rel="stylesheet" href="header.css">
		<link href="https://fonts.googleapis.com/css?family=Quattrocento|Quattrocento+Sans" rel="stylesheet">
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