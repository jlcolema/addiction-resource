<?php
/*
Template Name: Contact Us V2
*/
get_header();?>
 <div class="page-wrapper">
    <div class="pageIntro contactUs">
      <div class="contactOverlay">
        <div class="container">
          <h1 class="hero-title"><?php the_title(); ?></h1>
          <div class="PageHero__content col-md-7 col-center">
            <?php if( get_field('page_snippet') ): ?>
              <?php the_field('page_snippet'); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <section class="section tint">
      <div class="container">
        <div class="contactContainer">
          <div class="row">
            
              <div class="col-md-5 col-sm-12 col-xs-12">
                <aside class="contactSide">
                <h4 class="contact-block-title">Contact Us</h4>
                <p class="contact-block-title subtitle">For more information or immediate help, simply fill out the form or give us a call.</p>
                <div class="contact-information-block">
                  <i class="fas fa-phone fa-flip-horizontal contact-block-icon"></i>
                  <a class="contact-block-text link" href="tel:1-844-616-3400 ">+1 (844) 616-3400</a>
                </div>
                <div class="contact-information-block">
                  <i class="far fa-envelope-open contact-block-icon"></i>
                  <a class="contact-block-text link" href="mailto:info@addictionresource.net">info@addictionresource.net</a>
                </div>

            </aside>
              </div>
            <div class="col-md-7 col-sm-12">
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
                <?php  if (have_posts()) :
                  while (have_posts()) :
                    the_post();
                    the_content();
                  endwhile;
                endif;?>
                <h2 class="contact-form-title">Are You Ready For Help?</h2>
                <p class="contact-form-title subtitle">Fill Out The Form Below</p>
                <?php echo do_shortcode('[contact-form-7 id="275" title="Sidebar"]'); ?>
              </article>       
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>