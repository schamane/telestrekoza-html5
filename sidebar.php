<aside>
	<?php
		register_sidebar(array(
		  'name' => 'Sidebar',
		  'description' => 'Right widget sidebar',
		  'before_title' => '<h3>',
		  'after_title' => '</h3>'
		));
	?>

	<h3>Categories</h3>
	<nav>
		<ul>
			<?php wp_list_categories( 'title_li=' ); ?> 
		</ul>
	</nav>

	<h3>Links</h3>
	<nav>
		<ul>
			<?php wp_list_bookmarks( 'title_before=<h4>&title_after=</h4>') ?>
		</ul>
	</nav>

</aside>