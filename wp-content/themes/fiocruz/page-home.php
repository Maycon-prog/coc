<?php get_header(); 
		$short_dir = './custom-widgets/widgets';
        echo $short_dir;
        $myfiles = array_diff(scandir($short_dir), array('.', '..'));

        foreach ($myfiles as $file) {
            $name = str_replace(['.php'], '', $file);
			print_r($name);
		}?>

<main>
<?php the_content(); ?>
</main>

<?php get_footer(); ?>
