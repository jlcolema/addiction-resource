<?php
/*
Template Name: Landing Page
*/
get_header();?>

   <!-- Intro Section -->
<section class="inner-intro dark-bg bg-image overlay-dark40" data-background-img="<?php bloginfo('template_directory'); ?>/assets/img/couple3.jpg" style="background-position: center top;">
   	<div class="container lp-body">
   		<div class="col-xs-8 col-center border-top">
   			<div class="col-xs-6 border-left"></div>
   			<div class="col-xs-6 border-right"></div>
   		</div>
   		<div class="col-md-8 mb-sm-30 col-center hero-heading lp-header">
   			<h2>Find a Treatment Center Nearby</h2>
<!--    			<h2 class="h2">Addiction Treatment</h2> -->
   		</div>
   		<div class="row">
   			<div class="col-md-8 col-xs-10 col-center .no-padding  clearfix">
   				<div class="col-center border-bottom"></div>
   			</div>
   		</div>
   		<div class="row text-center">
   			<p class="lp-txt col-md-10 col-center">RehabCenter.net connects you with the best drug and alcohol treatment centers in your area. Regardless of where you live, we can help you find the perfect rehab.</p>
   			<div class="col-md-8 col-center lp-btn">
   				<a href="tel:888-979-9592" class="btn btn-md btn-basic arrow-left-cta-blue">(888) 979-9592</a>
   			</div>
   		</div>
   			<div class="row">
   				<p class="lp-txt-head text-center">Call Now For:</p>
   			<p class="lead col-md-8 col-sm-10 col-xs-10 col-center "><i class="fa fa-check fa-2x" aria-hidden="true"></i> 100% confidential substance abuse assessment and treatment placement.</p>
   			<p class="lead col-md-8 col-sm-10 col-xs-10 col-center "><i class="fa fa-check fa-2x" aria-hidden="true"></i> Compassionate guidance from specialists who are in recovery themselves</p>
   			<p class="lead col-md-8 col-sm-10 col-xs-10 col-center "><i class="fa fa-check fa-2x" aria-hidden="true"></i> Immediate enrollment into the treatment center of your choice</p>
   			<p class="lead col-md-8 col-sm-10 col-xs-10 col-center "><i class="fa fa-check fa-2x" aria-hidden="true"></i> Information on financial help, insurance and payment plans</p>
   		</div>
   	</div>
</section>
<div class="clearfix"></div>
<!-- End Intro Section -->

<section id="landing-content">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-8 col-center text-center recover-today">
				<h2>Start your recovery today</h2>
				<p>Our phone number is available 24/7 to help you or your loved one find a treatment center that meets your needs. It only takes one call to start your new life in recovery.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 col-center phone-callout">
				<h5>Speak with a Treatment Specialist Now</h5>
				<h5 class="number" style="position: relative;"><a class="telephone-link" href="tel:888-979-9592">(888) 979-9592</a></h5>
			</div>
		</div>
			<div class="row">
				<div class="col-lg-10 col-center phone-callout">
					<p class="or fancy-txt-gry">OR</p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-10 col-center text-center call-me">
					<p>Enter your phone number to receive a call from our treatment specialists</p>
				</div>
<div class="col-lg-8 col-md-12 col-sm-12 col-center text-center phone-request">
 <form class="text-center" action="#" id="client_capture_test" method="POST" onsubmit="submitted=true;" target="hidden_iframe" class="form-request-call">				
				<input type="tel" class="phone phoneUS" id="phone" name="callback-phone" placeholder="Phone Number" required=""> 
				<button class="btn btn-md btn-basic arrow-left-cta-blue btn-lp" type="submit" name="submit" value="Call Me" id="test-submit">Request a Call</button>
			</form>
</div>

			</div>


	</div>
</section>


<?php get_footer(); ?>