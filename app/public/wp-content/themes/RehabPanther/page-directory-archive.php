<?php
/*
Template Name: Directory Category Archive
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
              <div id="breadcrumbs">
              <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb();}?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if( have_rows('quick_jump') ): ?>
        <div class="table-contents-mobile no-desktop show-mobile" id="tableContents" role="tablist" aria-multiselectable="false">
          <a class="table-contents-trigger" data-toggle="collapse" data-parent="#articleSources" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">Table of Contents <i class="fa fa-angle-down rotate-icon contents-arrow"></i></a>
          <div id="collapseTwo2" class="collapse article-source-block" role="tabpanel" aria-labelledby="article-sources" data-parent="#tableContents">
            <div class="quick-jump-nav jump-block-mobile" id="quick-jump">
            <?php while ( have_rows('quick_jump') ) : the_row(); ?>
              <a class="quick-jump-mobile" href="#<?php the_sub_field('anchor_id'); ?>"><?php the_sub_field('anchor_text'); ?></a>
            <?php endwhile; ?>
          </div>
          </div>
        </div>
      <?php else : ?>
      <?php endif; ?>
      <div class="container">
        <div class="row content">
          <div class="col-md-8 col-12">
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
              
              <?php if( have_rows('article_sources') ): ?>
              
            <a class="collapsed article-source-trigger" data-toggle="collapse" data-parent="#articleSources" href="#collapseSources" aria-expanded="false" aria-controls="collapseSources">
                Article resources</i>
            </a>

            <div id="collapseSources" class="collapse article-source-block" role="tabpanel" aria-labelledby="article-sources" data-parent="#articleSources">
               <ul>
              <?php while ( have_rows('article_sources') ) : the_row(); ?>
                <li class="article-source-item"><?php the_sub_field('article_source_text');?><br><a href="<?php the_sub_field('article_source_url'); ?>" rel="nofollow" target="_blank"><?php the_sub_field('article_source_url'); ?></a></li>
              <?php endwhile; ?>
              </ul>
          </div>
        <?php else : ?>
        <?php endif; ?>
     
            </article>
          </div>
          <div class="col-md-4 col-12">
              <?php get_sidebar( 'directory' ); ?> 
          </div>
        </div>
      </div>
<?php get_footer(); ?>