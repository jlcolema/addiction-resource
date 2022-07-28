<?php

/*
Template Name: Guide Library
*/

get_header();?>

<div class="page-wrapper">

	<!-- Intro -->

	<div class="pageIntro white-intro text-center gp__intro">

		<div class="container">

			<div class="row justify-content-md-center">
			
				<div class="col-md-8 col-12">
		  
					<h1 class="subpageTitle" data-ix="fade-in-on-load" itemprop="headline"><?php the_title(); ?></h1>
		  
					<div class="subpage-subtitle">

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci quam morbi sagittis non amet, metus, curabitur. Sed placerat in elementum curabitur consequat tellus venenatis venenatis. Consectetur eget iaculis amet, cras leo eget. Egestas molestie proin egestas rhoncus ac nibh sit dignissim adipiscing.</p>

					</div>
			
					<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( ' <div id="breadcrumbs">','</div>' );}?>
			
				</div>

				<!-- / Individual Entry -->
		
			</div>
		
		</div>
	
	</div>
	
	<!-- Listing -->

	<div class="container gp__listing">

		<div class="row content no-pad">
	
			<div class="col">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- Settings for displaying posts that have the category name of "Guide Page." -->

					<?php

						$guide_page_settings = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'category_name' => 'guide-page',
							'posts_per_page' => 9,
						);

						$guide_page_posts = new WP_Query( $guide_page_settings );

					?>

					<?php if ( $guide_page_posts->have_posts()) : ?>

						<div class="container gp__container">

							<div class="row">

								<?php while ( $guide_page_posts->have_posts() ) : ?>

									<?php $guide_page_posts->the_post(); ?>

									<div class="col col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch">
										
										<div class="card">

											<?php the_post_thumbnail( 'guide-page', array( 'class' => 'card-img-top' ) ); ?>

											<div class="card-body">

												<h2 class="card-title"><?php the_title(); ?></h2>

												<p class="card-text"><?php echo excerpt('20');?></p>

												<div class="">
													<?php the_date(); ?>
												</div>

											</div>

										</div>

									</div>

									<?php /* Original markup from Blog

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

									*/ ?>

								<?php endwhile; ?>

							</div>

						</div>

					<?php endif; ?>

					<?php /* Temporarily hidden

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

					*/ ?>

				</article>
		
			</div>

		</div>

	</div>

<?php get_footer(); ?>
