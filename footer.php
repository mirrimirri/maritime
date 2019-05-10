<?php wp_footer();?>
<footer>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/footer.css">
</head>
<body>

<h3>Følg oss</h3>
<!-- Add font awesome icons -->
<div class="footer-container">
    <a href="https://www.facebook.com/USNMaritime/"><div class="facebook-icon"></div></a>
    <a href="https://www.instagram.com/usnmaritime/"><div class="instagram-icon"></div></a>
    <a href="https://www.snapchat.com/add/usnmaritime"><div class="snapchat-ghost"></div></a> <!-- USN må lage en URL kode til å adde de på snapchat -->
	<a href="https://www.norsk-tipping.no/grasrotandelen#search=919965002"><div class="grasrotandel-icon"></div></a>
</div>

	<div>
	<h3>Copyright © 2019 Design</h3>
	</div>


<!-- Navigasjon for mobiler -->
	<?php 
				$args= array('theme_location'=>'primary');
			 	wp_nav_menu($args);
			 ?>


</footer>
</div>
</body>
</html>