<?php get_header(); 

$short_dir = get_stylesheet_directory() . '/custom-widgets/widgets';
$myfiles = array_diff(scandir($short_dir), array('.', '..'));
var_dump($myfiles);

?>

<main>
<?php the_content(); ?>
</main>

<?php get_footer(); ?>
