<?php get_template_part( 'top' ); ?>

<div id="content-container">
	<div id="left-column">
	     <?php get_template_part( 'loop', 'index' ); ?>
	</div>
	<div id="right-column">
	     <?php get_sidebar( $name ); ?> 
	</div>
</div>

<?php get_template_part( 'bottom' ); ?>
