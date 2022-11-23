<?php

namespace Elementor;

class widget_slider_bootstrap extends Widget_Base
{

    public function get_name()
    {
        return 'slider_bootstrap'; // nome para usar no código
    }

    public function get_title()
    {
        return 'Slider Boostrap'; // nome para o usuario
    }

    public function get_icon()
    {
        return 'eicon-slides'; // https://elementor.github.io/elementor-icons/
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'list_title',
            [
                'label' => esc_html__('Title', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('List Title', 'elementor'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_content',
            [
                'label' => esc_html__('Content', 'elementor'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__('List Content', 'elementor'),
                'show_label' => false,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__('Repeater List', 'elementor'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => esc_html__('Slide #1', 'elementor'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'elementor'),
                    ],
                    [
                        'list_title' => esc_html__('Slide #2', 'elementor'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'elementor'),
                    ],
                    [
                        'list_title' => esc_html__('Slide #3', 'elementor'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'elementor'),
                    ]
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $id = uniqid("slider_");
        print_r($settings);
?>
        <div id="<?= $id ?>" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" data-bs-wrap="false">
            <ol class="carousel-indicators">
                <li data-target="#<?= $id ?>" data-slide-to="0" class="active"></li>
                <li data-target="#<?= $id ?>" data-slide-to="1"></li>
                <li data-target="#<?= $id ?>" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                for ($i = 0; $i < count($settings['list']); $i++) {
                ?>
                    <div class="carousel-item<?php $i == 1 ? 'active' : ''; ?>">
                        <div class="conteudo-carousel" tabindex="0">
                            <h2><?= $settings['list'][$i]['list_title'] ?></h2>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="<?= '#' . $id ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="<?= '#' . $id ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

<?php
    }

    protected function _content_template()
    {
    }
}
