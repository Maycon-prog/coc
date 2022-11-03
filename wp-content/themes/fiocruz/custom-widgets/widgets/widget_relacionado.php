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
        if (isset(get_field("post_relacionado1")->ID)) {
            $post_id = get_field("post_relacionado$i")->ID;
            $titulo = get_the_title($post_id);
            $thumbnail = get_the_post_thumbnail_url($post_id);
?>
            <div class="img-relacionado" style="background-image: url('<?php echo $thumbnail ?>')"></div>
            <h2 class="titulo-relacionado"><?php echo $titulo ?></h2>
        <?php
        }
        ?>

<?php
    }

    protected function _content_template()
    {
    }
}
