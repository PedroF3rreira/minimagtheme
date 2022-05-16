<?php 
/**
* Arquivo funçoes para os hooks 
**/

function pm_theme_styles()
{
	wp_enqueue_style( 'theme_css', get_template_directory_uri().'/assets/css/theme.css' );
	wp_enqueue_script( 'script_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'),false, true);
}

function pm_theme_setup()
{
	add_theme_support( 'title-tag' );

	register_nav_menu( 'primary', __( 'Primary Menu', 'minimag' ) );

	register_nav_menu( 'secundary', __( 'Top Menu', 'minimag' ) );

	add_theme_support( 'custom-logo' );
}

function pm_init_widgets()
{
	/**
	 * Creates a sidebar
	 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	 */
	$args = array(
		'name'          => __( 'Sidebar rigth', 'minimag' ),
		'id'            => 'pm_sidebar_rigth',
		'description'   => 'Um sidebar lateral com posts populares',
		'class'         => 'sidebar-rigth',
		'before_widget' => '<div id="%1s" class="widget %2s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => '</h5>',
	);
	
	register_sidebar( $args );
	
}