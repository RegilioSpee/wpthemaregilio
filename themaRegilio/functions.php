<?php 

function themaRegilio_bronnen() {

    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaRegilio_bronnen'); 


// registreer menu's van thema
register_nav_menus( array (
    'hoofd' => __('Hoofd menu'),
    'footer' => __('Menu in footer'),
));

?>