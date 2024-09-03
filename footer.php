</div>
<footer>
  <section class="main-footer">
    <div class="container">
      <div class="row support-row text-center">
        <div class="col-12 col-md-6">
          <p class="ar-supports">AddictionResource.net Supports:</p>
          <img class="supports" src="<?php bloginfo('template_directory'); ?>/images/samhsa.png">
        </div>
        <div class="col-12 col-md-6 sponsorship">
          <p class="ar-supports">Brought To You By Treatment Providers:</p>
          <a class="sponsor-inquiry" href="#" data-toggle="modal" data-target="#answerModal">Who Answers?</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <img class="f-logo" src="<?php bloginfo('template_directory'); ?>/images/full-logo-light.png">
          <p class="copyright">Copyright © <?php echo date("Y"); ?> AddictionResource.net. All Rights Reserved</p>
          <ul class="list-inline footer-links">
            <li class="list-inline-item"><a href="/about-us/">About Us</a></li>
            <li class="list-inline-item"><a href="/privacy-policy/">Privacy Policy</a></li>
            <li class="list-inline-item"><a href="/contact-us/">Contact Us</a></li>
          </ul>
          <p class="site-disclaimer col-md-9 col-center">AddictionResource.net is a referral service that provides information about addiction treatment practitioners and facilities. AddictionResource.net is not a medical provider or treatment facility and does not provide medical advice. AddictionResource.net does not endorse any treatment facility or guarantee the quality of care provided, or the results to be achieved, by any treatment facility. The information provided by AddictionResource.net is not a substitute for professional treatment advice.</p>
        </div>
      </div>
    </div>
  </section>
</footer>
<a class="jp-tp"><i class="fal fa-angle-up fa-2x"></i></a>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script defer src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<script defer src="<?php bloginfo('template_directory'); ?>/js/number-mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<?php get_template_part('modal-evidence'); ?>
<?php get_template_part('modal-answer'); ?>
<?php if ( is_page_template( 'page-outreach.php' ) ) { ?>
<?php } else {get_template_part('/cta/banner-cta');} ?>

  <?php wp_footer(); ?>
  </body>
</html>