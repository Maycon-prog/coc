<?php get_header(); ?>

<?php the_content(); ?>

<?php
$pasta = 'custom-widgets/';

if (is_dir($pasta)) {
    $diretorio = dir($pasta);

    while (($arquivo = $diretorio->read()) !== false) {
        echo '<a href=' . $pasta . $arquivo . '>' . $arquivo . '</a><br />';
    }

    $diretorio->close();
} else {
    echo 'A pasta não existe.';
}
?>

<?php get_footer(); ?>
