<?php /*Template Name: events*/?>
<?php get_header();?>
<div class='presentasjon'>
 <?php echo do_shortcode('[tmm name="maritime"]')?>
</div>

<div class='sdsfaas'>
	
</div>

<?php 

echo do_shortcode('[MMFileList <ul class=”mmm-list”> /../../members/]');


if($_SESSION['loggetinn']==true)
{
	//echo do_shortcode('[MMFileList <ul class=”mmm-list”> /]');

}

?>

<?php get_footer();?>