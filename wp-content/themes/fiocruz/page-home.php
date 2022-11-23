<?php get_header(); 
		$short_dir = get_template_directory() . '/custom-widgets/my-widgets.php';
        $myfiles = array_diff(scandir($short_dir), array('.', '..'));

        foreach ($myfiles as $file) {
            $name = str_replace(['.php'], '', $file);
			print_r($name);
		}?>

<main>
<?php the_content(); ?>
</main>

<?php get_footer(); ?>
