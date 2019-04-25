<?php
define( 'TEMPLATEINC', TEMPLATEPATH . '/inc' );
define( 'TEMPLATEURI', get_template_directory_uri() );
define( 'DIRECT', TEMPLATEURI.'/assets/' );
define( 'HOME', 7);

//init Menu
register_nav_menus(array(
    'menu_header'=> 'menu_header',
    'menu_footer'=>'menu_footer',
) );

include ('inc/actions.php');
include ('inc/cpt.php');
include ('inc/menu.php');
include ('inc/customizer.php');

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
show_admin_bar( false );

if( function_exists('acf_add_options_page') ) {

//    acf_add_options_page();

    // add parent
    $parent = acf_add_options_page(array(
        'page_title' => 'options',
        'menu_title' => 'option',
        'redirect' => false
    ));
    // add sub page
    acf_add_options_sub_page(array(
        'page_title' => 'Social links',
        'menu_title' => 'Social links',
        'parent_slug' => $parent['menu_slug'],
    ));


    // add sub page
    acf_add_options_sub_page(array(
        'page_title' => 'Instagram',
        'menu_title' => 'Instagram',
        'parent_slug' => $parent['menu_slug'],
    ));
}
