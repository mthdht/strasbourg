<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/css/admin-style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function add_search_box($items, $args) {
    ob_start();
    get_search_form();
    $searchform = ob_get_contents();
    ob_end_clean();

    $items .= '<li>' . $searchform . '</li>';
    return $items;
}
add_filter('wp_nav_menu_items','add_search_box', 10, 2);