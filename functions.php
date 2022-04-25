<?php

function fantasyreviews_register_styles() {

    wp_register_style(
        'Bootstrap_CSS',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style('Bootstrap_CSS');

    wp_enqueue_style('Theme_Styles', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('Popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array('jquery'), '', true);

    // enqueue Bootstrap JS
    wp_enqueue_script(
        'Bootstrap_JS',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
        array ( 'jquery' ),
        '5.1.3',
        true
    );

    // enqueue javascript
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);


}

add_action('wp_enqueue_scripts', 'fantasyreviews_register_styles');


// allows to set featured image/thumbnail in backend
function fantasyreviews_setup_theme() {
    add_theme_support('post-thumbnails');
    add_image_size('homepage-thumb', 200, 200);
}

add_action('after_setup_theme', 'fantasyreviews_setup_theme');


function reviews_excerpt_more( $more ) {
    return ' <a href="'.get_the_permalink().'" rel="nofollow"> read more...</a>';
}
add_filter( 'excerpt_more', 'reviews_excerpt_more' );



function add_get_val() {
    global $wp;
    $wp->add_query_var('category');
}

add_action('init','add_get_val');



function do_output_buffer() {
    ob_start();
}

add_action('init', 'do_output_buffer');

?>