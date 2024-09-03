<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Panther
 */

?>

<div class="row facility-block">
	<header class="entry-header main-facility-title">
		
		<?php 
		if ( has_post_thumbnail() ) { ?>
			<figure class="featured-image">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php the_post_thumbnail(); ?>
				</a>
			</figure>
		<?php }
		?>
		<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title('<h2 class="entry-title">', '</h2>');?></a>

		<?php if ( 'post' === get_post_type() ) : ?>		
		<div class="index-entry-meta">
			<?php pantherdesign_index_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content index-excerpt">
		<?php the_content('', false ); ?>
	</div><!-- .entry-content -->

	<div class="continue-reading-archive">
		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">View all information on this facility </a>
	</div>

</div><!-- #post-## -->
