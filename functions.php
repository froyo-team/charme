<?php
register_nav_menus(  
array(  
'header-menu' => __( '导航菜单' ),  
)  
); 

if ( ! function_exists( 'charme_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since charme 1.0
 */
function charme_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'charme' ); ?></h3>
			<div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'charme' ) ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'charme' ) ); ?></div>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php endif;
}
endif;
add_action( 'after_setup_theme', 'charme_setup' );

function charme_setup(){
		load_theme_textdomain( 'charme', get_template_directory() . '/languages' );
}

?>