<?php
/*
Template Name: White Page
Template Post Type: post, page
*/
get_header();?>
  <div class="page-wrapper white-t">
      <div class="pageIntro white-intro">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-12">
              <div class="page_info_block">
                <a href="#" data-toggle="modal" data-target="#evidenceModal" class="medical-documented"><i class="fas fa-check"></i> Evidence Based</a>
              </div>
              <?php the_title( '<h1 class="subpageTitle" data-ix="fade-in-on-load" itemprop="headline">', '</h1>' ); ?>
              <div class="review-block show-mobile">
                <div class="medical-reviewer">
                  <?php $post_object = get_field('medical_reviewer'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                    <div class="mr-headshot-block">
                      <div class="mr-headshot">    
                        <?php 
                        if ( has_post_thumbnail() ) {
                          
							echo get_the_post_thumbnail( $post_id, $size, array('itemprop' => 'image', 'class' => 'headshotImage') );                          
                        }
                        ?> 
                      </div>
                    </div>
                    <div class="mr-text">Medically Reviewed by <a class="mr-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                      <?php if( have_rows('date_options') ): ?>
                        <?php while( have_rows('date_options') ): the_row(); ?>
                          <?php if( get_sub_field('date_choice') == 'None' ): ?>
                          <?php endif; ?>
                          <?php if( get_sub_field('date_choice') == 'Date Published' ): ?>
                            <span>on <span itemprop="datePublished"><?php the_sub_field('date_published'); ?></span></span>
                          <?php endif; ?>
                          <?php if( get_sub_field('date_choice') == 'Date Modified' ): ?>
                            <span>on <span itemprop="dateModified"><?php the_sub_field('date_edited'); ?></span></span>
                          <?php endif; ?>
                          <?php if( get_sub_field('date_choice') == 'Date Published & Modified' ): ?>
                            <span>on <span itemprop="dateModified"><?php the_sub_field('date_edited'); ?></span></span>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  </div>
              </div>
              <?php if( have_rows('quick_jump') ): ?>
                <ul class="jt-list" id="quick-jump">
                  <?php while ( have_rows('quick_jump') ) : the_row(); ?>
                    <li class="list-inline-item jt-item"><a href="#<?php the_sub_field('anchor_id'); ?>"><?php the_sub_field('anchor_text'); ?></a></li>
                  <?php  endwhile; ?>
                  <?php $faq_title = get_field('faq_title');if( !empty($faq_title) ): ?>
                    <li class="list-inline-item jt-item"><a href="#faqs">FAQ</a></li>
                  <?php endif; ?>         
                </ul>
              <?php endif; ?>
              <div class="subpage-subtitle">
                <?php if( get_field('page_snippet') ): ?>
                  <?php the_field('page_snippet'); ?>
                <?php endif; ?>
              </div>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php  if (have_posts()) :
                while (have_posts()) : ?>
                  <?php 
                if ( has_post_thumbnail() ) { ?>
                    <?php echo get_the_post_thumbnail( $post_id, $size, array('itemprop' => 'image', 'class' => 'featuredImage') ); ?>
                <?php }
                ?> 
                 <?php the_post();?>
                  <?php the_content();?>
                <?php endwhile;?>
             <?php endif;?>
             <p class="article-author">Written by the <i>Addiction Resource Editorial Staff</i></p>
          <div class="c_disclaimer">This page does not provide medical advice. <span class="mdisclaimer" data-toggle="tooltip" data-placement="bottom" title="The information provided here is advisory / informative, it does not take into account the individual's individual history and individual characteristics and in no way substitutes for the clinical medical examination, diagnosis and treatment of your doctor because you have read something at AddictionResource.net. If you notice an urgent or strange symptom, call your doctor immediately or 911.">See more</span></div>
              <?php get_template_part('article-sources'); ?>
     <?php echo do_shortcode('[was-this-helpful]');?>
           <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( ' <div id="breadcrumbs">','</div>' );}?>

            </article>
          </div>
          <div class="col-md-4 col-12">
            <div class="subpage-sidebar">
            <div class="review-block show-desktop">
              <div class="medical-reviewer">
                <?php $post_object = get_field('medical_reviewer'); if( $post_object ): 
                          $post = $post_object;
                          setup_postdata( $post ); ?>
                <div class="mr-headshot-block">
                  <div class="mr-headshot">
                    <?php echo get_the_post_thumbnail( $post_id, $size, array('itemprop' => 'image') ); ?>
                  </div>
                </div>
                  <div class="mr-text">Medically Reviewed by<br> <a class="mr-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                    <?php if( have_rows('date_options') ): ?>
                          <?php while( have_rows('date_options') ): the_row(); ?>
                            <?php if( get_sub_field('date_choice') == 'None' ): ?>
                            <?php endif; ?>
                            <?php if( get_sub_field('date_choice') == 'Date Published' ): ?>
                              <span>on <span itemprop="datePublished"><?php the_sub_field('date_published'); ?></span></span>
                            <?php endif; ?>
                            <?php if( get_sub_field('date_choice') == 'Date Modified' ): ?>
                              <span>on <span itemprop="dateModified"><?php the_sub_field('date_edited'); ?></span></span>
                            <?php endif; ?>
                            <?php if( get_sub_field('date_choice') == 'Date Published & Modified' ): ?>
                             <span>on <span itemprop="dateModified"><?php the_sub_field('date_edited'); ?></span></span>
                            <?php endif; ?>
                          <?php endwhile; ?>
                        <?php endif; ?>
                  </div>
              </div>
            </div>
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>