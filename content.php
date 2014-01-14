<?php
/**
*the artical list content
 */
?>
<article id="post_<?php the_ID();?>" <?php post_class(); ?>>

	<!-- 文章列表头部信息，标题 -->
	<header class="entry-header">
		<?php if(is_single()): ?>
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>

		<? else: ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h1>
		<?php endif; // is_single() ?>

		<?php if ( comments_open() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>
	</header>

	<!-- 文章摘要，标题 -->
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php if (is_single() or is_page()) 
				{the_content('阅读全文');} 
			else {the_excerpt();} ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php edit_post_link('Edit', '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' )); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( "about%s", get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( "view all post by %s", get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
		<!-- #post -->
</article>