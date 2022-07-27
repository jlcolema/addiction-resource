<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Panther
 */

?>
	<div class="entry-content">
		<div class="single-facility-title" typeof="schema:BlogPosting" itemprop="text">
			<?php 
                if ( has_post_thumbnail() ) { ?>
                    <?php echo get_the_post_thumbnail( $post_id, $size, array('itemprop' => 'image') ); ?>
                <?php }
            ?>
            <div class="rehabNumber">
            	<a href="tel:888-940-0758">Call Now: (888) 940-0758</a>
            </div>
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pantherdesign' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'pantherdesign' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->