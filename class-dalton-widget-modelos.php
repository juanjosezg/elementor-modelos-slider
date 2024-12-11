<?php

namespace ElementorWidgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined("ABSPATH")) {
    exit();
} // Salir si se accede directamente

class Dalton_Widget_Modelos extends Widget_Base
{
    public function get_name()
    {
        return "slider_modelos";
    }

    public function get_title()
    {
        return __("Slider Modelos", "dalton-elementor-sliderModelos");
    }

    public function get_icon()
    {
        return "dalton_sliderModelos-icon";
    }

    public function get_categories()
    {
        return ["dalton_widgets"];
    }

    public function get_script_depends()
    {
        return ["widget-modelos"];
    }

    public function get_style_depends()
    {
        return ["widget-modelos"];
    }


    public function __construct($data = [], $args = null)
    {
        parent::__construct($data, $args);

        if (!wp_script_is("swiper", "registered")) {
            wp_register_script(
                "swiper",
                "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js",
                [],
                "11.0.0",
                true
            );
        }

        if (!wp_style_is("swiper", "registered")) {
            wp_register_style(
                "swiper",
                "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css",
                [],
                "11.0.0"
            );
        }

        wp_register_style(
            "widget-modelos",
            plugins_url("dist/css/styles.min.css", __FILE__)
        );
        wp_register_script(
            "widget-modelos",
            plugins_url("dist/js/main.min.js", __FILE__),
            ["swiper"],
            false,
            true
        );
    }

    protected function register_controls()
    {
        $this->start_controls_section("content_section", [
            "label" => __("Contenido", "dalton-elementor-sliderModelos"),
            "tab" => Controls_Manager::TAB_CONTENT,
        ]);

        // Slides Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control("modelo_image", [
            "label" => __("Modelo Imagen", "dalton-elementor-sliderModelos"),
            "type" => \Elementor\Controls_Manager::MEDIA,
            "default" => [
                "url" => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]);

        $repeater->add_control("modelo_titulo", [
            "label" => __("Modelo", "dalton-elementor-sliderModelos"),
            "type" => \Elementor\Controls_Manager::TEXT,
            "default" => __("Modelo", "dalton-elementor-sliderModelos"),
        ]);

        $repeater->add_control("modelo_precio", [
            "label" => __("Precio", "dalton-elementor-sliderModelos"),
            "type" => \Elementor\Controls_Manager::TEXT,
            "default" => __("Precio", "dalton-elementor-sliderModelos"),
        ]);

        // CTA Link Controls inside the Repeater (with Tabs)
        $repeater->start_controls_tabs("cta_links_tabs");

        // Tab 1 for CTA Link 1
        $repeater->start_controls_tab("cta_link_1_tab", [
            "label" => __("Enlace 1", "dalton-elementor-sliderModelos"),
        ]);

        $repeater->add_control("cta_link_1_text", [
            "label" => __(
                "Texto del Enlace 1",
                "dalton-elementor-sliderModelos"
            ),
            "type" => \Elementor\Controls_Manager::TEXT,
            "default" => __("Aparta tu Auto", "dalton-elementor-sliderModelos"),
            "placeholder" => __(
                "Texto del enlace",
                "dalton-elementor-sliderModelos"
            ),
        ]);

        $repeater->add_control("cta_link_1_type", [
            "label" => __("Tipo de Enlace 1", "dalton-elementor-sliderModelos"),
            "type" => \Elementor\Controls_Manager::SELECT,
            "default" => "link",
            "options" => [
                "link" => __(
                    "Enlace Externo",
                    "dalton-elementor-sliderModelos"
                )
            ],
        ]);

        $repeater->add_control("cta_link_1", [
            "label" => __("Enlace 1", "dalton-elementor-sliderModelos"),
            "type" => \Elementor\Controls_Manager::URL,
            "placeholder" => __(
                "https://tusitio.com",
                "dalton-elementor-sliderModelos"
            ),
            "default" => ["url" => "#"],
            "condition" => [
                "cta_link_1_type" => "link",
            ],
        ]);


        $repeater->end_controls_tab();

        // Tab 2 for CTA Link 2
        $repeater->start_controls_tab("cta_link_2_tab", [
            "label" => __("Enlace 2", "dalton-elementor-sliderModelos"),
        ]);

        $repeater->add_control("cta_link_2_text", [
            "label" => __(
                "Texto del Enlace 2",
                "dalton-elementor-sliderModelos"
            ),
            "type" => \Elementor\Controls_Manager::TEXT,
            "default" => __(
                "Asesoria Personalizada",
                "dalton-elementor-sliderModelos"
            ),
            "placeholder" => __(
                "Texto del enlace",
                "dalton-elementor-sliderModelos"
            ),
        ]);

        $repeater->add_control("cta_link_2_type", [
            "label" => __("Tipo de Enlace 2", "dalton-elementor-sliderModelos"),
            "type" => \Elementor\Controls_Manager::SELECT,
            "default" => "link",
            "options" => [
                "link" => __(
                    "Enlace Externo",
                    "dalton-elementor-sliderModelos"
                ),
            ],
        ]);

        $repeater->add_control("cta_link_2", [
            "label" => __("Enlace 2", "dalton-elementor-sliderModelos"),
            "type" => \Elementor\Controls_Manager::URL,
            "placeholder" => __(
                "https://tusitio.com",
                "dalton-elementor-sliderModelos"
            ),
            "default" => ["url" => "#"],
            "condition" => [
                "cta_link_2_type" => "link",
            ],
        ]);
        $repeater->add_control("cta_link_2_icon", [
            "label" => __("Icono", "dalton-elementor-sliderModelos"),
            "type" => \Elementor\Controls_Manager::SELECT,
            "default" => "link",
            "options" => [
                "whatsapp" => __("whatsapp", "dalton-elementor-sliderModelos"),
                "attachment" => __("attachment","dalton-elementor-sliderModelos"),
            ],
            "condition" => [
                "cta_link_2_type" => "link",
            ],
        ]);


        $repeater->end_controls_tab();

        $repeater->end_controls_tabs();

        $repeater->add_control("modelo_desc", [
            "label" => __("Descripción", "dalton-elementor-sliderModelos"),
            "type" => \Elementor\Controls_Manager::WYSIWYG,
            "default" => __(
                "Descripción del modelo...",
                "dalton-elementor-sliderModelos"
            ),
        ]);

        // Apply the repeater to the section
        $this->add_control("slides", [
            "label" => __("Slides", "dalton-elementor-sliderModelos"),
            "type" => \Elementor\Controls_Manager::REPEATER,
            "fields" => $repeater->get_controls(),
            "default" => [],
            "title_field" => "{{{ modelo_titulo }}}",
        ]);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include "includes/frontend.php";
    }
}
