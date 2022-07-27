<?php

/*

Template Name: Contact Us

*/

get_header();?>

  <div class="page-wrapper">

    



      <div class="pageIntro">

        <div class="container">

          <div class="row">

            <div class="col-md-8 col-12">

              <?php the_title( '<h1 class="subpageTitle" data-ix="fade-in-on-load" itemprop="headline">', '</h1>' ); ?>

              <div class="subpage-subtitle">

                <?php if( get_field('page_snippet') ): ?>

                  <?php the_field('page_snippet'); ?>

                <?php endif; ?>

              </div>

              <div class="page_info_block">

               <!-- <a class="medical-documented" href="tel:1-844-616-3400"><i class="fa fa-phone fa-flip-horizontal"></i> Call (844) 616-3400</a> -->

              </div>

              <div id="breadcrumbs">

              <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb();}?>

              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="container">

        <div class="row content">

          <div class="col-md-8 col-12">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

              <?php  if (have_posts()) :

                while (have_posts()) :

                  the_post_thumbnail($post_id, $size, array('class' => 'featured-images'), array('itemprop' => 'image'));

                  the_post();

                  the_content();

                endwhile;

              endif;?>

            </article>

          </div>

          <div class="col-md-4 col-12">

              <?php get_sidebar(); ?>

          </div>

        </div>

      </div>

<?php get_footer(); ?>