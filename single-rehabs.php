<?php get_header();?>
  <div class="page-wrapper">
    
      <div class="pageIntro white-intro">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-12">
              <?php the_title( '<h1 class="subpageTitle" data-ix="fade-in-on-load" itemprop="headline">', '</h1>' ); ?>
              
              <div class="facility-external-links">
                <ul class="list-inline">
                  <?php if( get_field('facility_twitter') ): ?>
                    <li class="list-inline-item"><a href="<?php the_field('facility_twitter');?>"><i class="fab fa-twitter-square"></i></a></li>
                  <?php endif; ?>
                  <?php if( get_field('facility_facebook') ): ?>
                    <li class="list-inline-item"><a href="<?php the_field('facility_facebook');?>"><i class="fab fa-facebook-square"></i></a></li>
                  <?php endif; ?>
                  <?php if( get_field('facility_pinterest') ): ?>
                    <li class="list-inline-item"><a href="<?php the_field('facility_pinterest');?>"><i class="fab fa-pinterest-square"></i></a></li>
                  <?php endif; ?>
                  <?php if( get_field('facility_youtube') ): ?>
                    <li class="list-inline-item"><a href="<?php the_field('facility_youtube');?>"><i class="fab fa-youtube-square"></i></a></li>
                  <?php endif; ?>
                  <?php if( get_field('facility_instagram') ): ?>
                    <li class="list-inline-item"><a href="<?php the_field('facility_instagram');?>"><i class="fab fa-instagram"></i></a></li>
                  <?php endif; ?>
                </ul>
              </div>

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

        <div class="table-contents-mobile facility-table no-desktop show-mobile" id="tableContents" role="tablist" aria-multiselectable="false">
          <a class="table-contents-trigger" data-toggle="collapse" data-parent="#articleSources" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">Facility Information <i class="fa fa-angle-down rotate-icon contents-arrow"></i></a>
          <div id="collapseTwo2" class="collapse article-source-block" role="tabpanel" aria-labelledby="article-sources" data-parent="#tableContents">
            <div class="quick-jump-nav jump-block-mobile" id="quick-jump">
              <a class="quick-jump-mobile" href="#Level-of-Care">Level of Care</a>
              <a class="quick-jump-mobile" href="#Admissions">Admissions</a>
              <a class="quick-jump-mobile" href="#Payment">Payment Options</a>
              <a class="quick-jump-mobile" href="#Additional-Information">Additional Information</a>
              <a class="quick-jump-mobile" href="#Therapy-Programs">Therapy Programs</a>
              <a class="quick-jump-mobile" href="#Amenitities">Amenitities</a>
              <a class="quick-jump-mobile" href="#Accreditation">Accreditation</a>
          </div>
          </div>
        </div>

      <div class="container">
        <div class="row content">
          <div class="col-md-8 col-12">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if( have_rows('facility_images') ): ?>
  <?php $count = 0 ?>
  <div class="col-md-10 mx-auto facility-carousel">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php while ( have_rows('facility_images') ) : the_row(); ?>
      <?php $countMarks = 0 ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="<?php if ( !$count ) { echo ' active'; } ?>"></li>
    <?php endwhile; ?>
  </ol>
  <div class="carousel-inner">
    <?php while ( have_rows('facility_images') ) : the_row(); ?>
    <div class="carousel-item <?php if ( !$count ) { echo ' active'; } ?>">
      <img class="d-block w-100" src="<?php the_sub_field('facility_photo'); ?>" alt="First slide">
    </div>
     <?php $count++; ?>
    <?php endwhile; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php else : ?>
<?php endif; ?>
   







              <?php  if (have_posts()) :
                while (have_posts()) :
                  the_post_thumbnail($post_id, $size, array('class' => 'featured-images'), array('itemprop' => 'image'));
                  the_post();
                  the_content();
                endwhile;
              endif;?>
              <h2 id="Level-of-Care">Level of Care</h2>
              <?php $care = get_field('facility_level_of_care'); if( $care ): ?>
                <ul>
                  <?php foreach( $care as $care ): ?>
                    <li><?php echo $care; ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
               <h2 id="Admissions">Admissions</h2>
              <?php $admissions = get_field('facility_admissions'); if( $admissions ): ?>
                <ul>
                  <?php foreach( $admissions as $admissions ): ?>
                    <li><?php echo $admissions; ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              
              <?php $payments = get_field('facility_payment_options'); if( $payments ): ?>
              <h2 id="Payment">Payment Options</h2>
                <ul>
                  <?php foreach( $payments as $payments ): ?>
                    <li><?php echo $payments; ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
               <h2 id="Additional-Information">Additional Information</h2>
              <?php $additionalInformation = get_field('facility_additional_information'); if( $additionalInformation ): ?>
                <ul>
                  <?php foreach( $additionalInformation as $additionalInformation ): ?>
                    <li><?php echo $additionalInformation; ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
               <h2 id="Therapy-Programs">Therapy Programs</h2>
              <?php $therapies = get_field('facility_therapy_programs'); if( $therapies ): ?>
                <ul>
                  <?php foreach( $therapies as $therapies ): ?>
                    <li><?php echo $therapies; ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              <h2 id="Amenitities">Amenitities</h2>
              <?php $ammenities = get_field('facility_amenities'); if( $ammenities ): ?>
                <ul>
                  <?php foreach( $ammenities as $ammenities ): ?>
                    <li><?php echo $ammenities; ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
               <h2 id="Accreditation">Accreditation</h2>
              <?php $accreditation = get_field('facility_accreditation'); if( $accreditation ): ?>
                <ul>
                  <?php foreach( $accreditation as $accreditation ): ?>
                    <li><?php echo $accreditation; ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>

     
            </article>
          </div>
          <div class="col-md-4 col-12">
            <div class="subpage-sidebar">
              <div class="sidebar-block">
                <div class="fr-block-header">
                  <div class="overall-header">Facility Overall Score</div>
                        <p class="overall-score-num"><?php the_field('facility_overall_score');?></p>
                        <div class="fr-star-ratings">
                        <?php
                            $starNumber = get_field('facility_overall_score');
                              for($x=1;$x<=$starNumber;$x++) {
                                  echo '<i class="fa fa-star" aria-hidden="true"></i>';
                              }
                              if (strpos($starNumber,'.')) {
                                  echo '<i class="fas fa-star-half-alt"></i>';
                                  $x++;
                              }
                              while ($x<=5) {
                                  echo '<i class="far fa-star"></i>';
                                  $x++;
                              }
                          ?>
                        </div>
                        <div class="facility-address">

              </div>
                      </div>
                <div class="sidebar-content-block-norm">
                  <div class="sideForm">
                    
                    
                      <div class="fr-block">
                        <p>Google: <span><?php the_field('facility_google_rating');?></span></p>
                        <div class="fr-star-ratings">
                        <?php
                            $starNumber = get_field('facility_google_rating');
                              for($x=1;$x<=$starNumber;$x++) {
                                  echo '<i class="fa fa-star" aria-hidden="true"></i>';
                              }
                              if (strpos($starNumber,'.')) {
                                  echo '<i class="fas fa-star-half-alt"></i>';
                                  $x++;
                              }
                              while ($x<=5) {
                                  echo '<i class="far fa-star"></i>';
                                  $x++;
                              }
                          ?>
                        </div>
                      </div>

                      <div class="fr-block">
                        <p>Yelp: <span><?php the_field('facility_yelp_rating');?></span></p>
                        <div class="fr-star-ratings">
                        <?php
                            $starNumber = get_field('facility_yelp_rating');
                              for($x=1;$x<=$starNumber;$x++) {
                                  echo '<i class="fa fa-star" aria-hidden="true"></i>';
                              }
                              if (strpos($starNumber,'.')) {
                                  echo '<i class="fas fa-star-half-alt"></i>';
                                  $x++;
                              }
                              while ($x<=5) {
                                  echo '<i class="far fa-star"></i>';
                                  $x++;
                              }
                          ?>
                        </div>
                      </div>

                      <div class="fr-block">
                        <p>Facebook: <span><?php the_field('facility_facebook_rating');?></span></p>
                        <div class="fr-star-ratings">
                          <?php
                              $starNumber = get_field('facility_facebook_rating');
                               for($x=1;$x<=$starNumber;$x++) {
                                  echo '<i class="fa fa-star" aria-hidden="true"></i>';
                              }
                              if (strpos($starNumber,'.')) {
                                  echo '<i class="fas fa-star-half-alt"></i>';
                                  $x++;
                              }
                              while ($x<=5) {
                                  echo '<i class="far fa-star"></i>';
                                  $x++;
                              }
                            ?>
                        </div>
                      </div>
                      <address>
                          <i class="fal fa-map-marker-alt"></i>
                          <span><?php the_field('facility_street_address');?></span>
                          <?php if( get_field('facility_street_address_line_2') ): ?>
                            <span><?php the_field('facility_street_address_line_2');?></span>
                          <?php endif;?>
                          <span><?php the_field('facility_city');?>, <?php the_field('facility_state');?>, <?php the_field('facility_zip_code');?></span>
                      </address>
                       <span><i class="fal fa-globe-americas"></i> <a href="<?php the_field('facility_website'); ?>"class="facility-website"><?php the_field('facility_website'); ?></a></span>
                <a href="tel:<?php the_field('facility_phone_number'); ?>"class="facility-number"><i class="fas fa-phone fa-flip-horizontal"></i> <?php the_field('facility_phone_number'); ?></a>
               
                  </div>
                </div>
              </div>

                <div class="quick-jump-nav show-desktop no-mobile" id="quick-jump">
                 <div class="sidebar-block table-contents" >
                    <div class="sidebar-content-block">
                      <div class="sidebar-block-title"><?php the_title(); ?></div>
                      <div class="sidebar-title-line"></div>
                    </div>
                    <div class="sidebar-content-block with-dynamic-list">
                        <a class="sidebar-dynamic-link-block" href="#Level-of-Care">Level of Care</a>
                        <a class="sidebar-dynamic-link-block" href="#Admissions">Admissions</a>
                        <a class="sidebar-dynamic-link-block" href="#Payment">Payment Options</a>
                        <a class="sidebar-dynamic-link-block" href="#Additional-Information">Additional Information</a>
                        <a class="sidebar-dynamic-link-block" href="#Therapy-Programs">Therapy Programs</a>
                        <a class="sidebar-dynamic-link-block" href="#Amenitities">Amenitities</a>
                        <a class="sidebar-dynamic-link-block" href="#Accreditation">Accreditation</a>
                    </div>
                  </div>
                </div>


            <?php if( have_rows('related_links') ):?>
              <div class="sidebar-block">
                <div class="sidebar-content-block">
                  <div class="sidebar-block-title">Related Articles</div>
                  <div class="sidebar-title-line"></div>
                </div>
                <div class="sidebar-content-block with-dynamic-list">
                  <?php while ( have_rows('related_links') ) : the_row();
                    $link = get_sub_field('related_link');
                  ?>
                    <a class="sidebar-dynamic-link-block" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php else : ?>
            <div class="sidebar-block">
              <div class="sidebar-content-block">
                <div class="sidebar-block-title">Treatment Types</div>
                <div class="sidebar-block-title subtitle">Find the best type treatment:</div>
                <div class="sidebar-title-line"></div>
              </div>
              <div class="sidebar-content-block with-dynamic-list">
                <a href="/treatment/detox/" class="sidebar-dynamic-link-block">
                  <div class="sidebar-dynamic-title">Medically-Assisted Detox </div>
                </a>
                <a href="/treatment/inpatient/" class="sidebar-dynamic-link-block">
                  <div class="sidebar-dynamic-title">Inpatient Rehab</div>
                </a>
                <a href="/treatment/outpatient/" class="sidebar-dynamic-link-block">
                  <div class="sidebar-dynamic-title">Outpatient Programs</div>
                </a>
                <a href="/treatment/mat/" class="sidebar-dynamic-link-block">
                  <div class="sidebar-dynamic-title">Medication-Assisted Treatment (MAT)</div>
                </a>
              </div>
            </div>
          <?php endif; ?>

        
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>