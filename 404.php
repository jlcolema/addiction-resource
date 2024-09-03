<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Panther
 */
get_header(); ?>
  <div class="page-wrapper">
    <div class="pageIntro white-intro">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-12">
              <h1 class="subpageTitle" data-ix="fade-in-on-load" itemprop="headline">
             
      <?php 
      if ( is_404() ) { esc_html_e( 'Page not available', 'pantherdesign' );
      } else if ( is_search() ) {
        /* translators: %s = search query */
        printf( esc_html__( 'Nothing found for &ldquo;%s&rdquo;', 'pantherdesign'), '<em>' . get_search_query() . '</em>' );
      } else {
        esc_html_e( 'Nothing Found', 'pantherdesign' );
      }
      ?>
    </h1>
              <div class="subpage-subtitle">
              <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

      <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pantherdesign' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

    <?php elseif ( is_search() ) : ?>

      <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pantherdesign' ); ?></p>
      <?php get_search_form(); ?>
    
    <?php elseif ( is_404() ) : ?>

      <p><?php esc_html_e( 'You seem to be lost. To find what you are looking for check out the most recent articles below or try a search:', 'pantherdesign' ); ?></p>
      <?php get_search_form(); ?>
      
    <?php else : ?>

      <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pantherdesign' ); ?></p>
      <?php get_search_form(); ?>

    <?php endif; ?>
              </div>
              <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( ' <div id="breadcrumbs">','</div>' );}?>
            </div>
          </div>
        </div>
      </div>
 <div class="container">
  <div class="row content no-pad">
    <div class="col-md-8 col-12">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <?php get_template_part('template-parts/content', 'none'); ?>

          </article>
        </div>
    </div>
  </div>
<?php get_footer(); ?>