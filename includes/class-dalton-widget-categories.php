<?php

function add_elementor_widget_categories( $elements_manager ) {
    $categories = [];
    $categories['dalton_widgets'] =
        [
            'title' => __('Dalton Widgets', 'dalton-elementor-sliderModelos'),
            'icon'  => 'eicon-folder',
        ];
    $old_categories = $elements_manager->get_categories();
    $categories = array_merge($categories, $old_categories);
    $set_categories = function ( $categories ) {
        $this->categories = $categories;
    };
    $set_categories->call( $elements_manager, $categories );
}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories');