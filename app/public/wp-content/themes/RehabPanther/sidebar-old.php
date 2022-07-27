<div class="subpage-sidebar">
<?php if( have_rows('quick_jump') ): ?>
  <div class="quick-jump-nav show-desktop no-mobile" id="quick-jump">
   <div class="sidebar-block table-contents" >
      <div class="sidebar-content-block">
        <div class="sidebar-block-title">Table of Contents</div>
        <div class="sidebar-title-line"></div>
      </div>
      <div class="sidebar-content-block with-dynamic-list">
        <?php while ( have_rows('quick_jump') ) : the_row(); ?>
          <a class="sidebar-dynamic-link-block" href="#<?php the_sub_field('anchor_id'); ?>"><?php the_sub_field('anchor_text'); ?></a>
        <?php  endwhile; ?>
      </div>
    </div>
  </div>
<?php endif; ?>

    <div class="sidebar-block">
    <div class="sidebar-content-block green">
      <div class="sidebar-block-title white">
        Questions About Treatment?
      </div>
      <div class="sidebar-block-title subtitle">
        Contact us for:
      </div>
      <ul>
          <li>Access to top treatment centers</li>
          <li>Caring, supportive guidance</li>
          <li>Financial assistance options</li>
        </ul>
      <a class="btnMain btnSidebar" href="tel:+1-888-407-2072"><i class="fa fa-phone" aria-hidden="true"></i> (888) 407-2072</a>
    </div>
  </div>

    <div class="sidebar-block">
      <div class="sidebar-content-block-norm">
      <div class="sideForm">
        <p class="or-txt fancy-txt">Get Help Now</p>
        <?php echo do_shortcode('[contact-form-7 id="275" title="Sidebar"]'); ?>
        <p class="confidential-txt"><i class="fa fa-lock" aria-hidden="true"></i> Your information is 100% confidential</p>
      </div>
    </div>
  </div>
  <div class="sidebar-block">
    <div class="sidebar-image-block">
      <div class="sidebar-image-block-overlay">
        <div class="sidebar-block-title white">Ready for help?</div>
        <div class="sidebar-block-title subtitle white-subtitle">Get Confidential Help 24/7</div>
      </div>
    </div>
    <a href="tel:+18559779303" class="sidebar-cta-link-block">
       <img class="sidebar-cta-icon" src="<?php bloginfo('template_directory'); ?>/images/svg/phone-call.svg"></i>
      <div class="sidebar-cta-title">Call us now:</div>
      <div class="sidebar-cta-title large phone-nr">(855) 977-9303</div>
    </a>
  </div>
  <div class="sidebar-block">
    <div class="sidebar-image-block treatment-center">
      <div class="sidebar-image-block-overlay treatment-overlay">
        <div class="sidebar-block-title white">Find a treatment center near you</div>
        <div class="sidebar-block-title subtitle white-subtitle">Learn more about your options and find the perfect treatment center in your area.</div>
      </div>
      <a href="/find-a-treatment-center-near-me" class="sidebar-cta-link-block purple w-inline-block">
       <img class="sidebar-cta-icon small" src="<?php bloginfo('template_directory'); ?>/images/svg/next-arrow.svg"></i>
        <div class="sidebar-cta-title">The best centers in your area</div>
        <div class="sidebar-cta-title large">Find a center now</div>
      </a>
    </div>
  </div>


  <?php if( have_rows('relevant_links') ): ?>
    <div class="sidebar-block">
      <div class="sidebar-content-block">
        <?php if( get_field('sidebar_title') ): ?>
          <div class="sidebar-block-title"><?php the_field('sidebar_title'); ?></div>
        <?php endif; ?>
        <?php if( get_field('sidebar_subtitle') ): ?>
          <div class="sidebar-block-title subtitle"><?php the_field('sidebar_subtitle'); ?></div>
          <div class="sidebar-title-line"></div>
        <?php endif; ?>
      </div>
      <div class="sidebar-content-block with-dynamic-list">
        <?php while ( have_rows('relevant_links') ) : the_row(); ?>
          <a href="<?php the_sub_field('relevant_link_url'); ?>" class="sidebar-dynamic-link-block">
            <div class="sidebar-dynamic-title"><?php the_sub_field('relevant_link_title'); ?></div>
          </a>
        <?php endwhile; ?>
      </div>
    </div>
  <?php else : ?>
    <div class="sidebar-block">
      <div class="sidebar-content-block">
        <div class="sidebar-block-title">Frequently asked</div>
        <div class="sidebar-block-title subtitle">Get Answers to Your Questions:</div>
        <div class="sidebar-title-line"></div>
      </div>
      <div class="sidebar-content-block with-dynamic-list">
        <a href="/faq/can-i-pay-for-treatment-with-insurance" class="sidebar-dynamic-link-block">
          <div class="sidebar-dynamic-title">Can I Pay for Treatment with Insurance?</div>
        </a>
        <a href="/faq/how-can-i-stage-an-intervention" class="sidebar-dynamic-link-block">
          <div class="sidebar-dynamic-title">How Can I Stage an Intervention?</div>
        </a>
        <a href="/faq/how-much-does-treatment-cost" class="sidebar-dynamic-link-block">
          <div class="sidebar-dynamic-title">How Much Does Treatment Cost?</div>
        </a>
        <a href="/faq/paying-for-rehab-with-medicaid-and-medicare" class="sidebar-dynamic-link-block">
          <div class="sidebar-dynamic-title">Paying For Rehab with Medicaid and Medicare</div>
        </a>
        <a href="/faq/what-is-intpatient-drug-rehab" class="sidebar-dynamic-link-block">
          <div class="sidebar-dynamic-title">What is Intpatient Drug Rehab?</div>
        </a>
      </div>
    </div>
  <?php endif; ?>

    <div class="sidebar-block">
    <div class="sidebar-content-block green">
      <div class="sidebar-block-title white">
        Request a Call
      </div>
      <div class="sidebar-block-title subtitle">
        Do you want us to call you?
      </div>
      <a class="btnMain btnSidebar" data-toggle="modal" data-target="#requestModal">Request a Call Now</a>
    </div>
  </div>
</div>