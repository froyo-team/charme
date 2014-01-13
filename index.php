<?php get_header(); ?>
<div id="content" role="main">
			<?php if ( have_posts() ) : ?>
			

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="blog-list-item">
				<div class="item-title">
					<h3>
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</h3>
				</div>
				<div class="item-content-sort">
					<?php if (has_post_thumbnail()):?>
						<?php the_post_thumbnail();?>
					<?php endif;?>
					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div>
					<p class="post-meta-data">
					by:
					<?php the_author(); ?>,
					分类：
					<?php the_category(',');?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

