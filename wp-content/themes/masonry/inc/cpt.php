<?php
function post_type_portfolio() {
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' ),
                'add_new' => 'add portfolio'
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

add_action( 'init', 'post_type_portfolio' );
