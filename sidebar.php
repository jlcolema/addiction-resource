
  <?php if ( !is_page_template (array( 'contact-us.php', 'page-outreach.php' ) ) ) { ?>
   <div class="side_b">
      <div class="sidebar-content-block-norm">
      <div class="sideForm">
        <div class="sidebar-form-title">Questions About Treatment?</div>
        <div class="side_b_title subtitle-form">We offer 100% confidential substance abuse assessment and treatment placement tailored to your individual needs. Achieve long-term recovery.</div>
        <form action="#" id="contact_form" method="POST" onsubmit="submitted=true;" target="hidden_iframe">
          <div class="form-group">
            <input class="form-control" type="text" name="Name" value="" id="contact_name" placeholder="Name">
          </div>
          <div class="form-group">
            <input class="form-control required phoneValidate phone" type="text" name="Phone Number" value="" id="contact_number" placeholder="Phone Number"> 
          </div>
          <div class="form-group">
            <textarea id="contact_message" name="Message" rows="4" class="form-control" placeholder="How can we help?"></textarea>
          </div>
          <div class="form-group">
            <input class="btn-side" name="Submit" type="submit" value="Reclaim Your Life" id="contact_submit">
            <p class="s_respect text-center">100% confidential. We respect your privacy.</p>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php }?>
<?php if ( is_page_template( 'page-best.php' ) ) { ?>
    <div class="side_b">
      <div class="sidebar-content-block-norm">
      <h3>Why These Facilities?</h3>
      <p>Our goal is to help people find the best addiction treatment program that suits their individual needs whether that be close to home, out-of-state, or at a facility with specific program offerings.</p>
      <h4>We use the following criteria to select treatment centers:</h4>
      <ul class="best-criteria">
        <li>
          <span class="criteria-icon"><i class="fal fa-star"></i></span>
                <h4>1. Accreditation</h4>
                <p>Maintaining accreditation from organizations such as the Joint Commission (JCAHO) and the Commission On Accreditation Of Rehabilitation Facilities (CARF).</p>
        </li>
        <li>
          <span class="criteria-icon"><i class="fal fa-file-certificate"></i></span>
                <h4>2. Certifications/Memberships</h4>
                <p>Having membership in the National Association of Addiction Treatment Providers (NAATP) and LegitScript certification.</p>
        </li>
        <li>
          <span class="criteria-icon"><i class="fal fa-clipboard-check"></i></span>
                <h4>3. Licensed Staff</h4>
                <p>A team of licensed, experienced, trained professionals dedicated to treating substance abuse with a high level of care.</p>
        </li>
        <li>
          <span class="criteria-icon"><i class="fal fa-clock"></i></span>
                <h4>4. Reputation</h4>
                <p>Having positive reviews across Google, Facebook, Yelp, and other online review platforms as well as client testimonials.</p>
        </li>
        <li>
          <span class="criteria-icon"><i class="fal fa-handshake"></i></span>
                <h4>5. Treatment Modalities</h4>
                <p>Effective treatment methods include evidence-based, alternative, and holistic healing methods across a range of rehab programs.</p>
        </li>

      </ul>
      <p class="choosing-link"><a href="/how-we-choose/">Learn More About How We Choose</a></p>
    </div>
  </div>
<?php }?>

   

  <?php if( have_rows('related_links') ):?>
    <div class="side_b">
      <div class="side_cb">
        <div class="side_b_title">People also read</div>
        <div class="side_tl"></div>
      </div>
      <div class="side_cb d_list">
        <?php while ( have_rows('related_links') ) : the_row();
          $link = get_sub_field('related_link');
        ?>
          <a class="side_d_list_b" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <?php endwhile; ?>
      </div>
    </div>


<?php $post_objects = get_field('location_link'); if( $post_objects ): ?>
<div class="side_b">
  <div class="sidebar-content-block-sm">
    <h4 class="select-state-title h5">Find a drug rehab center <span>Near You...</span></h4>
    <div class="dropdown">
      <a class="btn btn-primary dropdown-toggle" data-display="static" data-toggle="dropdown">
        Select a city
      </a>
      <div class="dropdown-menu scrollable-menu" data-display="static">
        <?php foreach( $post_objects as $post):?>
       <a class="dropdown-item side-dropdown" href="<?php the_permalink(); ?>"><?php the_field('internal_linking_title'); ?></a>
           <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
    <?php wp_reset_postdata();?>
<?php endif; ?>



  <?php else : ?>
    <div class="side_b">
      <div class="side_cb">
        <div class="side_b_title">Treatment Types</div>
        <div class="side_b_title subtitle">Find the best type treatment:</div>
        <div class="side_tl"></div>
      </div>
      <div class="side_cb d_list">
        <a href="/treatment/detox/" class="side_d_list_b">Medically-Assisted Detox</a>
        <a href="/treatment/inpatient/" class="side_d_list_b">Inpatient Rehab</a>
        <a href="/treatment/outpatient/" class="side_d_list_b">Outpatient Programs</a>
        <a href="/treatment/mat/" class="side_d_list_b">Medication-Assisted Treatment (MAT)</a>
      </div>
    </div>
  <?php endif; ?>
