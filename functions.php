<?php 
/**
* Requisita funçoes ppara utilizar na ações wordpress
* */
require get_template_directory().'/inc/setup.php';


/**
* Declaração dos actions hooks para o tema
**/
add_action( 'wp_enqueue_scripts', 'pm_theme_styles' );

add_action( 'after_setup_theme', 'pm_theme_setup' );

add_action( 'widgets_init', 'pm_init_widgets' );