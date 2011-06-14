<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	     Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php wp_title('|',true,'right'); ?> <?php bloginfo( 'name' ); ?></title>
	  
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="<?php bloginfo('admin_email'); ?>">
	
	<!-- The Open Graph protocol enables any web page to become a rich object in a social graph. http://ogp.me/ -->
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/apple-touch-icon.png" />

	<!-- Consult this list of types: http://ogp.me/#types -->
	<meta property="og:type" content="blog" /> 
	
	<?php 
		$options = get_option('theme_options'); 
		$facebookProfileId =  $options['facebook_profile_id']; 
		if (!is_null($facebookProfileId) && !empty($facebookProfileId)) { 
	?>
		<meta property="fb:admins" content="<?php echo $facebookProfileId; ?>" />
	<?php } ?>

	
	<?php if (is_single()) { ?> 
		<meta property="og:title" content="<?php the_title(); ?>" />
		<meta property="og:url" content="<?php the_permalink() ?>" />
	<?php } ?>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<!-- CSS: implied media="all" -->  
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skeleton.css">

	<?php
		// You can disable the included style quickly from the settings page,
		$options = get_option('theme_options');
		if ($options['disable_layout'] == false)	{
	?>
		<style>
			html, body, div, span, object, iframe,
			h1, h2, h3, h4, h5, h6, p, blockquote, pre,
			abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp,
			small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li,
			fieldset, form, label, legend,
			table, caption, tbody, tfoot, thead, tr, th, td,
			article, aside, canvas, details, figcaption, figure,
			footer, header, hgroup, menu, nav, section, summary,
			time, mark, audio, video  
			{ 
		    	font-family: 
				<?php 
					$options = get_option('theme_options');
					$optionValue =  $options['css_font_stack'];
					
					if ($optionValue == "Microsoft") {
						?>"Segoe UI", Segoe, Tahoma, Geneva, sans-serif;<?php 
					} elseif ($optionValue == "Yahoo") {
						?>Arial, sans-serif;<?php 
					} elseif ($optionValue == "I Love Typography") {
						?>Cambria, Georgia, serif;<?php 
					} elseif ($optionValue == "Jon Tangerine") {
						?>Baskerville, Garamond, Palatino, "Palatino Linotype", "Hoefler Text", "Times New Roman", serif;<?php 
					} elseif ($optionValue == "Sushi & Robots") {
						?>"Hoefler Text", Garamond, Baskerville, "Baskerville Old Face", "Times New Roman", serif;<?php 
					} else {
						?>"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, Tahoma, sans-serif;<?php 
					}
				?> 
			}
		</style>
	
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/wordpress.css">
	<?php } ?>	

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
	<!-- All JavaScript at the bottom, except for Modernizr and Respond.
		 Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-1.7.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/respond.min.js"></script>

	<!-- Always have wp_head() just before the closing </head> tag of your theme, or you will break many plugins. -->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div id="container">
		<section>
		    <nav id="breadcrumbs"></nav>

			<div id="header-container">
				<div id="left-header">
					<hgroup role="banner">
						<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
						<h2><?php bloginfo('description'); ?></h2>
					</hgroup>
				</div>
		
				<div id="right-header">
					<section role="search">
			        	<?php get_search_form(); ?>
					</section>
				</div>
				
		 		<div id="top-nav-container" class="clearfix">
					<section role="menubar">
						<div id="nav-menu">
						  <?php wp_nav_menu(); ?>
						</div>	
					</section>	
					<nav role="navigation">
						<div id="top-pagination">
						    <?php next_posts_link('&laquo; Previous Page') ?>
						    <?php previous_posts_link('Next Page &raquo;') ?>
						</div>
					</nav>
				</div>
			</div>
		</section>

    	<div id="main" role="main">
