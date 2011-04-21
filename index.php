<?php get_template_part( 'top' ); ?>
<?php wp_head(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<!-- THE LOOP STARTS HERE -->
		<article>
			<!-- Display the Title as a link to the Post's permalink. -->
			<section class='post_title'>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			</section>
			 
			 <!-- Display the Post's Content in a div box. -->
			 <section class='post_content'>
				<?php the_content(); ?>
			 </section>

			 <section class='post_meta'>
				 <!-- Display a comma separated list of the Post's Categories. -->
				 <p class="postmetadata">Posted in <?php the_category(', '); ?></p>

				 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
				 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
			</section>
		</article>
		<!-- THE LOOP ENDS HERE -->
	<?php endwhile; ?>

<?php wp_footer(); ?>