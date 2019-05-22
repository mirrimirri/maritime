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
echo"<h2> Filnedlastninger </h2>";
//kode for å vise fram fillisten som er tilgjengelig for alle
echo do_shortcode('[MMFileList folder="../../public/" format="li"]<div class="mmm-list"><a href="{url}"">{name} </a></div>[/MMFileList]');


//kode for å vise filliste som er tilgjengelig for registrerte brukere, må endre if-statement
$user = wp_get_current_user();


if ( in_array( 'Participant', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) ) 

{
	echo "<h2>Medlemsfiler</h2>";
	echo do_shortcode('[MMFileList folder="../../members/" format="li"]<div class="mmm-list"><a href="{url}"">{name} </a></div>[/MMFileList]');
}

//kode for å vise filliste for admin, må endre if-statement
$user = wp_get_current_user();

if ( in_array( 'administrator', (array) $user->roles ) ) 
{
	echo "<h2>Administratorfiler</h2>";
echo do_shortcode('[MMFileList folder="../../admin/" format="li"]<div class="mmm-list"><a href="{url}"">{name} </a></div>[/MMFileList]');

}
echo"</div>";
echo"</div>";
?>

<?php get_footer();?>