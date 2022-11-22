<?php

namespace Elementor;

class widget_relacionado extends Widget_Base
{

    public function get_name()
    {
        return 'relacionado'; // nome para usar no código
    }

    public function get_title()
    {
        return 'Relacionado'; // nome para o usuario
    }

    public function get_icon()
    {
        return 'eicon-editor-external-link'; // https://elementor.github.io/elementor-icons/
    }

    public function get_categories()
    {
        return ['widgets-personalizados'];
    }

    protected function _register_controls()
    {
    }

    protected function render()
    {
?>
        <?php
        $existe = false;
        for ($i = 1; $i < 5; $i++) {
            if (isset(get_field("post_relacionado$i")->ID)) {
                $existe = true;
            }
        }
        if($existe){
            echo "<h2 class='text-center'>Conteudo Relacionado</h2>";
        }
        ?>
        <div class="d-flex justify-content-center relacionado">
            <?php
            for ($i = 1; $i < 5; $i++) {
                if (isset(get_field("post_relacionado$i")->ID)) {

                    $post_id = get_field("post_relacionado$i")->ID;
                    $post_link = get_permalink($post_id);
                    $titulo = get_the_title($post_id);
                    $thumbnailId = get_post_thumbnail_id($post_id);
                    $altImagem = get_post_meta($thumbnailId, '_wp_attachment_image_alt', true);
                    $thumbnail = get_the_post_thumbnail_url($post_id);
            ?>
                    <div class="bloco-relacionado ">
                        <img src="<?php echo $thumbnail; ?>" alt="<?php echo $altImagem; ?>">
                        <div class="d-flex titulo-relacionado">
                            <a class="texto" href="<?php echo $post_link ?>"><?php echo $titulo ?></a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>


            <?php
                }
            }
            ?>
        </div>
<?php
    }




    protected function _content_template()
    {
    }
}
