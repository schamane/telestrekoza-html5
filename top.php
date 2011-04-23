<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	     Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php wp_title('|',true,'right'); ?> <?php bloginfo( 'name' ); ?></title>
	  
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="<?php bloginfo('admin_email'); ?>">
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">


	<!-- Keeping the HTML5 Boilerplate directory structure, the root level style.css is here to satisfy wordpress only. -->
	<!-- CSS: implied media="all" -->  
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

	<!-- Wordpress functionality styled in this file. A lot of blank classes are defined therein. -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/wordpress.css">
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
	<!-- Uncomment if you are specifically targeting less enabled mobile browsers
	<link rel="stylesheet" media="handheld" href="<?php bloginfo('template_url'); ?>/css/handheld.css">  -->

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-1.7.min.js"></script>

</head>
<body>
  <div id="container">
    <nav id="breadcrumbs"></nav>

    <header>
		<div id='header-container'>
			<div id='left-header'>
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</div>
	
			<div id='right-header'>
		        <?php get_search_form(); ?>
			</div>

	 		<div class='clearfix'>
				<nav id="top-page-list">
					<ul><?php wp_list_pages('title_li='); ?></ul>
				</nav>
				<nav id="top-pagination">
					     <?php next_posts_link('&laquo; Previous Page') ?>
					     <?php previous_posts_link('Next Page &raquo;') ?>
				</nav>
			</div>
		</div>
    </header>


    <div id="main" role="main">
