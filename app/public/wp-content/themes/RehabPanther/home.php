<?php get_header();?>


      <div class="page-wrapper">

<div class="pageIntro white-intro">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-12">
              <h1 class="subpageTitle" data-ix="fade-in-on-load" itemprop="headline">Addiction Resource Blog</h1>
          
              <div class="subpage-subtitle">
              <p>Addiction Resource Blog reports on emerging research, new treatments, addictions, substances, and trending topics in addiction and recovery. All articles are written by our network of editors and contributors. Everything we publish is fact checked by our panel of experts.</p>
              </div>
              <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( ' <div id="breadcrumbs">','</div>' );}?>
            </div>
          </div>
        </div>
      </div>
    
      <div class="container">
  <div class="row content no-pad">
		<div class="col-md-9 col-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if (have_posts()) : ?>
					<ol class="ar-blog">
						<?php while (have_posts()) : the_post(); ?>
							<li class="br-list-item">
                    				<figure class="br-fig">
                                        <a href="<?php the_permalink(); ?>">
	                                        <picture>
	                                            <?php the_post_thumbnail('custom-blog'); ?>
	                                        </picture>
                                        </a>
                                    </figure>
                                	<div class="br-blck">
		                                <h2 class="br-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		                                <p class="br-sub-title"><a href="<?php the_permalink(); ?>"><?php echo excerpt('20');?></a></p>
		                                <a class="brarw"  href="<?php the_permalink(); ?>">READ MORE <i class="fal fa-arrow-right"></i></a>
		                            </div>
                            </li>
					<?php endwhile; ?>
				</ol>
				<?php endif; ?>
				<div class="clearfix pagination-wrap">
		            <ul class="pagination">
			          	<?php
			          global $wp_query;
				          $big = 999999999; // need an unlikely integer
				          echo paginate_links( array(
				            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				            'format' => '?paged=%#%',
				            'current' => max( 1, get_query_var('paged') ),
				            'total' => $wp_query->max_num_pages
				          ));
			        	?>
		      		</ul>
      			</div>
			</article>
		</div>
  </div>
</div>
<?php get_footer(); ?>