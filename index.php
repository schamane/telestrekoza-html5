<?php get_template_part( 'top' ); ?>
<?php wp_head(); ?>

<div id='content-container'>
	<div id='left-column'>
	     <?php get_template_part( 'loop', 'index' ); ?>
	</div>
	<div id='right-column'>
	     <?php get_sidebar( $name ); ?> 
	</div>
</div>
<?php wp_footer(); ?>
<?php get_template_part( 'bottom' ); ?>
