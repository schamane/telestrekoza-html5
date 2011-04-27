<div id='comments-container'>
	<section>
		<header>
			<h1>Comments</h1>
		</header>

		<?php if ( have_comments() ) : ?>
			<?php
	        printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number() ),
	        number_format_i18n( get_comments_number() ), '<cite>' . get_the_title() . '</cite>' );
	        ?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div> <!-- .navigation -->
		<?php endif; // check for comment navigation ?>
		
		<ol class="commentlist">
			<?php
				wp_list_comments();
			?>
		</ol>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div><!-- .navigation -->
		<?php endif; // check for comment navigation ?>
		

		<?php else : // or, if we don't have comments:
			if ( ! comments_open() ) : ?>
			<p>Comments are closed.</p>
		<?php endif; // end ! comments_open() ?>
		
		<?php endif; // end have_comments() ?>
		
		<?php comment_form(); ?>
	</section>
</div>