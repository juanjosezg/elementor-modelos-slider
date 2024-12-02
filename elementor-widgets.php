<?php
/**
 * Plugin Name: Dalton - Elementor Widget - Slider Modelos 
 * Description: Un plugin de ejemplo para añadir widgets personalizados a Elementor.
 * Version: 1.1
 * Author: Juan José Zermeño
 * Text Domain: dalton-elementor-sliderModelos
 */

if (!defined('ABSPATH')) exit; // Salir si se accede directamente

// Cargar archivos de la carpeta includes
require_once(__DIR__ . '/includes/class-dalton-widget-categories.php');


// Autocargar el archivo del widget
function daltonSliderModelos_register_widgets($widgets_manager) {
    require_once(__DIR__ . '/class-dalton-widget-modelos.php');
    $widgets_manager->register(new \ElementorWidgets\Dalton_Widget_Modelos());
}
add_action('elementor/widgets/register', 'daltonSliderModelos_register_widgets');


// Encolar estilos y recursos
function custom_dalton_slider_icon_css() {
    $icon_url = plugin_dir_url(__FILE__) . 'dist/img/icon.svg';
    echo '<style>
        .dalton_sliderModelos-icon {
            display: inline-block;
            width: 60px;
            height: 60px;
            background-image: url("'.$icon_url.'");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>';
}
add_action('elementor/editor/after_enqueue_scripts', 'custom_dalton_slider_icon_css');