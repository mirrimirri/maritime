<?php /*Template Name: events*/?>
<?php get_header();?>

<div class='mellom'>

<div class='events'>
	<h1> Kommende events</h1>
<?php echo do_shortcode("[events_list]"); ?>
</div>

<?php 


/*
Må lage følgende mapper for at dette skal fungere:

wp-content\uploads\public
wp-content\uploads\members
wp-content\uploads\admin

Kan lages med plugin: Media Library Folders for WordPress 
*/
echo" <div class='filopplasting'>";
echo"<h2> fil nedlastninger </h2>";
//kode for å vise fram fillisten som er tilgjengelig for alle
echo do_shortcode('[MMFileList folder="../../public/" <ul class=”mmm-list”> /]');


//kode for å vise filliste som er tilgjengelig for registrerte brukere, må endre if-statement
$user = wp_get_current_user();
if ( in_array( 'author', (array) $user->roles ) ) 

{
	echo do_shortcode('[MMFileList folder="../../members/" <ul class=”mmm-list”> /]');

}

//kode for å vise filliste for admin, må endre if-statement
$user = wp_get_current_user();
if ( in_array( 'admin', (array) $user->roles ) ) {
    //The user has the "author" role
}
{
	echo do_shortcode('[MMFileList folder="../../admin/" <ul class=”mmm-list”> /]');

}
echo"</div>";
echo"</div>";
?>

<?php get_footer();?>