<?php while (have_posts()){ the_post(); ?>
    <article>
	    <header>
	    <h3><a href="<?php the_permalink() ?>" 
		   rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	    </header>

	     <section class='post-content'>
		      <?php the_content(); ?>
	     </section>

	     <footer>
		     <?php if ( is_home() ): ?>
		     <p><a href="<?php comments_link(); ?>">
			   <?php comments_number('no comments','one comment','% comments'); ?>
		     </a></p>
		     <?php endif; ?>

		     <p><small>Categories: <?php the_category(', '); ?></small></p>
		     <p><small><?php the_tags(); ?></small></p>
		     <p><small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small></p>
	    </footer>
    </article>
<?php } ?>