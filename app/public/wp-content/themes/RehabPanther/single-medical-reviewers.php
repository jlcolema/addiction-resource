<?php get_header();?>
  <div class="page-wrapper">
    
      <div class="pageIntro">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-12">
              <?php the_title( '<h1 class="subpageTitle" data-ix="fade-in-on-load" itemprop="headline">', '</h1>' ); ?>
              <?php if( have_rows('date_options') ): ?>
                <?php while( have_rows('date_options') ): the_row(); ?>
                  <?php if( get_sub_field('date_choice') == 'None' ): ?>
                  <?php endif; ?>
                  <?php if( get_sub_field('date_choice') == 'Date Published' ): ?>
                    <p class="pdt">Published on <span itemprop="datePublished"><?php the_sub_field('date_published'); ?></span></p>
                  <?php endif; ?>
                  <?php if( get_sub_field('date_choice') == 'Date Modified' ): ?>
                    <p class="pdt">Updated on <span itemprop="dateModified"><?php the_sub_field('date_edited'); ?></span></p>
                  <?php endif; ?>
                  <?php if( get_sub_field('date_choice') == 'Date Published & Modified' ): ?>
                    <p class="pdt">Updated on <span itemprop="dateModified"><?php the_sub_field('date_edited'); ?></span></p>
                  <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?>
              <div class="subpage-subtitle">
                <?php if( get_field('page_snippet') ): ?>
                  <?php the_field('page_snippet'); ?>
                <?php endif; ?>
              </div>
              <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( ' <div id="breadcrumbs">','</div>' );}?>
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
            <article class="main-article-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div class="mr-bio">
              <?php  if (have_posts()) :
                while (have_posts()) : ?>
                  <?php 
                if ( has_post_thumbnail() ) { ?>
                    <?php echo get_the_post_thumbnail( $post_id, $size, array('itemprop' => 'image', 'class' => 'featuredImage') ); ?>
                <?php }
                ?> 
                 <?php the_post(); ?>
                 <?php the_content(); ?>
               <?php endwhile; ?>
             <?php endif;?>
           </div>
            </article>
          </div>
          <div class="col-md-4 col-12">
              <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
<?php get_footer(); ?>