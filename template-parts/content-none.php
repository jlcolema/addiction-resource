<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Panther
 */
?>

<section class="<?php if ( is_404() ) { echo 'error-404'; } else { echo 'no-results'; } ?> not-found">

	
	<?php
    if ( is_404() || is_search() ) {
    ?>
		<h2 class="page-title secondary-title"><?php esc_html_e( 'Most recent posts:', 'pantherdesign' ); ?></h2>
		<?php
		// Get the 6 latest posts
		$args = array(
			'posts_per_page' => 6
		);
		$latest_posts_query = new WP_Query( $args );
		// The Loop
		if ( $latest_posts_query->have_posts() ) { ?>
			<ol class="ar-blog">
				<?php while ( $latest_posts_query->have_posts() ) {
					$latest_posts_query->the_post();
					// Get the standard index page content
					get_template_part( 'template-parts/content', get_post_format() );
				} ?>
				</ol>
		<?php }
		/* Restore original Post Data */
		wp_reset_postdata();
	} // endif	
	?>
</section><!-- .no-results -->