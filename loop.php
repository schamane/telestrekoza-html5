<?php while (have_posts()){ the_post(); ?>
    <article id='post-<?php the_ID(); ?>'>
		<div class='post'>
		    <header>
				<div class='post-header'>
				    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		    	</div>
			</header>
	
		     <section>
				<div class='post-content'>
			      <?php the_content(); ?>
				</div>
		     </section>
	
		     <footer>
				<div class='post-footer'>
				     <?php if ( is_home() ): ?>
				     <p><a href="<?php comments_link(); ?>">
					   <?php comments_number('no comments','one comment','% comments'); ?>
				     </a></p>
				     <?php endif; ?>
		
				     <p><small>Categories: <?php the_category(', '); ?></small></p>
				     <p><small><?php the_tags(); ?></small></p>
				     <p><small><time><?php the_time('F jS, Y') ?></time> by <?php the_author_posts_link() ?></small></p>
				</div>
		    </footer>
		</div>
    </article>
<?php } ?>