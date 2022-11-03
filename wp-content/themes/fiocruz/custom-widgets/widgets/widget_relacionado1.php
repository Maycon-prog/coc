<?php

namespace Elementor;

class widget_relacionado1 extends Widget_Base
{

    public function get_name()
    {
        return 'relacionado1'; // nome para usar no código
    }

    public function get_title()
    {
        return 'Relacionado 1'; // nome para o usuario
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
        <div class="d-flex">
            <?php
            for ($i = 1; $i < 5; $i++) {
                if (isset(get_field("post_relacionado$i")->ID)) {

                    $post_id = get_field("post_relacionado$i")->ID;
                    $post_link = get_permalink($post_id);
                    $titulo = get_the_title($post_id);
                    $thumbnail = get_the_post_thumbnail_url($post_id);
            ?>
                    <div class="bloco-relacionado">
                        <div class="img-relacionado" style="background-image: url('<?php echo $thumbnail ?>')"></div>
                        <div class="d-flex titulo-relacionado">
                            <a href="<?php print_r($post_link) ?>"><?php echo $titulo ?></a>
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
