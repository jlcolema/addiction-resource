<?php get_header();?>
  <div class="page-wrapper">
    <div class="pageIntro">
      <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="PageHero__content md-col-10">
          <?php if( get_field('page_snippet') ): ?>
            <?php the_field('page_snippet'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="mainContent">
      <div class="container">
        <div class="row content">
          <div class="col-md-8 col-md-push-4 col-sm-12">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php  if (have_posts()) :
                while (have_posts()) :
                  the_post();
                  the_content();
                endwhile;
              endif;?>
            </article>
          </div>
          <aside>
            <div class="col-md-4 col-md-pull-8 col-sm-12 col-xs-12">
              <?php get_sidebar(); ?>
            </div>
          </aside>
        </div>
      </div>
    </div>
<?php get_footer(); ?>