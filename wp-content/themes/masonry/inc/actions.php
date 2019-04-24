<?php
function addScripts() {
    wp_register_style('desctop_css', DIRECT . 'scss/desktop.css');
    wp_register_style('style_css', DIRECT . 'scss/style.css');

    wp_register_script('desctop_js', DIRECT . 'js/desktop.js');
    wp_register_script('scripts_js', DIRECT . 'js/scripts.js');

    wp_enqueue_script( 'scripts_js');
    wp_enqueue_script('desctop_js');

    wp_enqueue_style('style_css');
    wp_enqueue_style('desctop_css');


}

add_action( 'wp_enqueue_scripts', 'addScripts' );

//<?php  echo get_theme_mod( "mytheme_company-name1" );?>