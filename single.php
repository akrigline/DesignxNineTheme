<?php
/**
 * The template for displaying all single posts.
 *
 * @package designxnine
 */

get_header(); ?>
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div>
<?php get_footer(); ?>
