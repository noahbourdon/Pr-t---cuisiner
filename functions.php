<?php

function bala_enqueue_styles() {

    $parent_style = 'parent-style'; // variable pour le style parent : Twenty twenty pour ce projet

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    // On fait entrer dans la queue le thème enfant
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

}


add_action( 'wp_enqueue_scripts', 'bala_enqueue_styles');


?>
