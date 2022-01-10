<?php
/**
** activation theme
**/

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

function custom_enqueue_scripts() {
        wp_enqueue_script('scripts', '/wp-content/themes/twentytwenty-child//scriptjs.js', array( 'jquery' ),  NULL, true);
    //Ajout des CSS
		wp_enqueue_style( 'style-mobile-single-experiment',  '/wp-content/themes/twentytwenty-child/style-mobile-single-experiment.css', array(), NULL, NULL);
        wp_enqueue_style( 'style-experiment',  '/wp-content/themes/twentytwenty-child/style-experiment.css', array(), NULL, NULL);
        wp_enqueue_style( 'style-mobile',  '/wp-content/themes/twentytwenty-child/style-mobile.css', array(), NULL, NULL);
        wp_enqueue_style( 'style-single-domain',  '/wp-content/themes/twentytwenty-child/style-single-domain.css', array(), NULL, NULL);
        wp_enqueue_style( 'style-mobile-single-domain',  '/wp-content/themes/twentytwenty-child/style-mobile-single-domain.css', array(), NULL, NULL);
        wp_enqueue_style( 'style-single-experiment',  '/wp-content/themes/twentytwenty-child/style-single-experiment.css', array(), NULL, NULL);

}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts', 101);
