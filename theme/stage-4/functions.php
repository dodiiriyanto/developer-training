<?php

// sidebars
add_action( 'widgets_init', 'my_widgets_init' );
function my_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Sidebar name' ),
		'id' => 'sidebar-1',
		'description' => '',
		'class' => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	) );

}

// theme features
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup() {
	global $content_width;
	$content_width = 960;

	// featured images
	add_theme_support( 'post-thumbnails' );

	// custom menus
	add_theme_support( 'menus' );

	// register a nav menu
	register_nav_menu( 'header', 'Main header menu' );


}


?>
