<?php

// Widgetized sidebar:
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<aside><section>',
        'after_widget' => '</section></aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
	






// Theme options:
require_once ( get_stylesheet_directory() . '/options.php' );	
	
?>