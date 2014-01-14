<?php get_header(); ?>

			<?php if ( have_posts() ) : ?>			

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					
				<?php endwhile; ?>
				<?php charme_content_nav( 'nav-below' ); ?>
			<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

