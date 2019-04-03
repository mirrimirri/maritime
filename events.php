<?php /*Template Name: events*/?>
<?php get_header();?>
<div class='presentasjon'>
 <?php echo do_shortcode('[tmm name="maritime"]')?>
</div>

<div class='sdsfaas'>
	
</div>

<?php 


/*
Må lage følgende mapper for at dette skal fungere:

wp-content\uploads\public
wp-content\uploads\members
wp-content\uploads\admin

Kan lages med plugin: Media Library Folders for WordPress 
*/

//kode for å vise fram fillisten som er tilgjengelig for alle
echo do_shortcode('[MMFileList folder="../../public/" <ul class=”mmm-list”> /]');

//kode for å vise filliste som er tilgjengelig for registrerte brukere, må endre if-statement
if($_SESSION['loggetinn']==true)
{
	echo do_shortcode('[MMFileList folder="../../members/" <ul class=”mmm-list”> /]');

}

//kode for å vise filliste for admin, må endre if-statement
if($_SESSION['loggetinn']==true)
{
	echo do_shortcode('[MMFileList folder="../../admin/" <ul class=”mmm-list”> /]');

}

?>

<?php get_footer();?>