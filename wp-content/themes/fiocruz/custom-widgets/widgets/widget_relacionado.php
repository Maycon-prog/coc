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

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => esc_html__('Link', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'textdomain'),
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
?>
        <article class='card col-3' style='cursor: pointer'>
            <?php
            for ($i = 1; $i < 5; $i++) {
                if (isset(get_field("post_relacionado$i")->ID)) {
                    $post_id = get_field("post_relacionado$i")->ID;
                    $titulo = get_the_title($post_id);
                    $thumbnail = get_the_post_thumbnail_url($post_id);
            ?>
                    <div>
                        <div class="img-relacionado" style="background-image: url('<?php echo $thumbnail ?>')"></div>
                        <h2 class="titulo-relacionado"><?php echo $titulo ?></h2>
                    </div>
            <?php
                }
            }
            ?>
        </article>
        <?php

        ?>

<?php
    }

    protected function _content_template()
    {
    }
}
