<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<nav>',
        'after_widget' => '</nav>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
?>