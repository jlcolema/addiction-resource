
<div class="modal fade" id="exitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered exit-modal" role="document">
    
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form id="exitForm" action="" method="POST" onsubmit="submitted=true;" target="hidden_iframe">



<!-- One "tab" for each step in the form: -->
<div class="tab">
  <div class="exit-header">Before you go...</div>
  <div class="exit-sub-header">Who are you seeking help for?</div>
  <ul class="mf-option m-hide">
    <li>
      <label>
        <input type="radio" value="Myself" name="help_for" class="help_for"> 
        
        <span>Myself</span>
      </label>
    </li>
    <li>
      <label>
        <input type="radio" value="A Loved One" name="help_for" class="help_for"> 
        <span>A Loved One</span>
      </label>
    </li>
  </ul>
</div>
<div class="tab">
  <div class="exit-sub-header">How soon do you need treatment?</div>
  <ul class="mf-option m-hide">
    <li>
      <label>
        <input type="radio" value="Right Now" name="how_soon" class="how_soon"> 
        <img class="form-icons" src="<?php bloginfo('template_directory'); ?>/images/alarm-clock.svg"></i>
        <span>Right now</span>
      </label>
    </li>
      <li>
      <label>
        <input type="radio" value="Within a Week" name="how_soon" class="how_soon"> 
        <img class="form-icons" src="<?php bloginfo('template_directory'); ?>/images/calendar.svg"></i>
        <span>Within a week</span>
      </label>
    </li>
  </ul>
</div>
<div class="tab">
  <div class="exit-sub-header">I'm seeking treatment for...</div>
  <ul class="mf-option m-hide">
    <li>
      <label>
        <input type="radio" value="Alcohol" name="seeking_treatment_for" class="seeking_treatment_for"> 
        <img class="form-icons" src="<?php bloginfo('template_directory'); ?>/images/alcohol.svg"></i>
        <span>Alcohol</span>
      </label>
    </li>
      <li>
      <label>
        <input type="radio" value="Drugs" name="seeking_treatment_for" class="seeking_treatment_for"> 
        <img class="form-icons" src="<?php bloginfo('template_directory'); ?>/images/drugs.svg"></i>
        <span>Drugs</span>
      </label>
      </li>
      <li>
      <label>
        <input type="radio" value="Other" name="seeking_treatment_for" class="seeking_treatment_for"> 
        <img class="form-icons" src="<?php bloginfo('template_directory'); ?>/images/psychology.svg"></i>
        <span>Other</span>
      </label>
    </li>
  </ul>
</div>
<div class="tab">
  <div class="exit-sub-header">Will you go through withdrawal if you stopped using?</div>
  <ul class="mf-option m-hide">
    <li>
      <label>
        <input type="radio" value="Yes" name="withdrawal" class="withdrawal"> 
        <span>Yes</span>
      </label>
      </li>
      <li>
      <label>
        <input type="radio" value="No" name="withdrawal" class="withdrawal"> 
        <span>No</span>
      </label>
    </li>
  </ul>
</div>

<div class="tab">
  <div class="exit-sub-header">How will you pay for treatment?</div>
    <ul class="mf-option m-hide">
    <div class="multi-form-row">
      <li>
        <label class="multi-lrg">
          <input type="radio" value="Private Insurance (PPO/HMO)" name="payment_option" class="payment_option"> 
          <img class="form-icons" src="<?php bloginfo('template_directory'); ?>/images/insurance.svg"></i>
          <span>Private Insurance (PPO/HMO)</span>
        </label>
      </li>
      <li>
        <label class="multi-lrg">
          <input type="radio" value="State Funded (Medicaid/Medicare)" name="payment_option" class="payment_option"> 
          <img class="form-icons" src="<?php bloginfo('template_directory'); ?>/images/medical-symbol.svg"></i>
          <span>State Funded (Medicaid/Medicare)</span>
        </label>
      </li>
    </div>
    <div>
      <li>
      <label class="multi-lrg">
        <input type="radio" value="Self Pay" name="payment_option" class="payment_option"> 
        <img class="form-icons" src="<?php bloginfo('template_directory'); ?>/images/self-pay.svg"></i>
        <span>Self/Private<br> Pay</span>
      </label>
      </li>
      <li>
      <label class="multi-lrg">
        <input type="radio" value="No Insurance or Treatment Funds" name="payment_option" class="payment_option">
        <img class="form-icons" src="<?php bloginfo('template_directory'); ?>/images/health-insurance.svg"></i>
        <span>No Insurance or Treatment Funds</span>
      </label>
    </li>
  </div>
  </ul>
</div>
<div class="tab">
  <div class="exit-sub-header">Last Step!</div>
  <p>We need a bit more information to connect you to <span class="yellowTxt">treatment options near you.</span></p>
  <div class="row">
<div class="form-group col-md-6 col-12">
<input placeholder="Full Name" id="contact_name" class="form-control">
  </div>
<div class="form-group col-md-6 col-12">
<input placeholder="Phone Number" id="contact_number" class="form-control phoneValidate phone">
</div>
<div class="form-group col-12">
    <select class="form-control" id="location" name="location" required>
      <option value="" selected="true" disabled="disabled">Select your location</option>
      <option value="Alaska">Alaska</option>
      <option value="Alabama">Alabama</option>
      <option value="Arkansas">Arkansas</option>
      <option value="Arizona">Arizona</option>
      <option value="California">California</option>
      <option value="Colorado">Colorado</option>
      <option value="Connecticut">Connecticut</option>
      <option value="District of Columbia">District of Columbia</option>w
      <option value="Delaware">Delaware</option>
      <option value="Florida">Florida</option>
      <option value="Georgia">Georgia</option>
      <option value="Hawaii">Hawaii</option>
      <option value="Iowa">Iowa</option>
      <option value="Idaho">Idaho</option>
      <option value="Illinois">Illinois</option>
      <option value="Indiana">Indiana</option>
      <option value="Kansas">Kansas</option>
      <option value="Kentucky">Kentucky</option>
      <option value="Louisiana">Louisiana</option>
      <option value="Massachusetts">Massachusetts</option>
      <option value="Maryland">Maryland</option>
      <option value="Maine">Maine</option>
      <option value="Michigan">Michigan</option>
      <option value="Minnesota">Minnesota</option>
      <option value="Missouri">Missouri</option>
      <option value="Mississippi">Mississippi</option>
      <option value="Montana">Montana</option>
      <option value="North Carolina">North Carolina</option>
      <option value="North Dakota">North Dakota</option>
      <option value="Nebraska">Nebraska</option>
      <option value="New Hampshire">New Hampshire</option>
      <option value="New Jersey">New Jersey</option>
      <option value="New Mexico">New Mexico</option>
      <option value="Nevada">Nevada</option>
      <option value="New York">New York</option>
      <option value="Ohio">Ohio</option>
      <option value="Oklahoma">Oklahoma</option>
      <option value="Oregon">Oregon</option>
      <option value="Pennsylvania">Pennsylvania</option>
      <option value="Puerto Rico">Puerto Rico</option>
      <option value="Rhode Island">Rhode Island</option>
      <option value="South Carolina">South Carolina</option>
      <option value="South Dakota">South Dakota</option>
      <option value="Tennessee">Tennessee</option>
      <option value="Texas">Texas</option>
      <option value="Utah">Utah</option>
      <option value="Virginia">Virginia</option>
      <option value="Vermont">Vermont</option>
      <option value="Washington">Washington</option>
      <option value="Wisconsin">Wisconsin</option>
      <option value="West Virginia">West Virginia</option>
      <option value="Wyoming">Wyoming</option>
    </select>
</div>
</div>
</div>

<div style="overflow:auto;">
  <div class="msf-btn-block">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Get help now</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>
      </div>
    </div>
  </div>
</div>

      <script type="text/javascript">
        var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  document.getElementById("nextBtn").style.display = "none";
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";

  } 
  else {
    document.getElementById("prevBtn").style.display = "none";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Reclaim Your Life";
    document.getElementById("nextBtn").style.display = "inline-block";
    document.getElementById("nextBtn").className = "btn btn-md btnYellow btnMultiStep";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}
jQuery(function(){   
        jQuery('.help_for').change(function() {
            jQuery('#nextBtn').trigger('click');
        });
        jQuery('.how_soon').change(function() {
            jQuery('#nextBtn').trigger('click');
        });
        jQuery('.seeking_treatment_for').change(function() {
            jQuery('#nextBtn').trigger('click');
        });
        jQuery('.withdrawal').change(function() {
            jQuery('#nextBtn').trigger('click');
        });
        jQuery('.payment_option').change(function() {
            jQuery('#nextBtn').trigger('click');
        });
    });
function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    var helpFor = $('input[name=help_for]:checked').val();
    var howSoon = $('input[name=how_soon]:checked').val();
    var typeAddiction = $('input[name=seeking_treatment_for]:checked').val();
    var withdrawlBool = $('input[name=withdrawal]:checked').val();
    var paymentOption = $('input[name=payment_option]:checked').val();
    var location = $('#location').val();
    //...the form gets submitted:
    $('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');
                        $('#regForm').submit();
                        __ctm.form.track('app.calltrackingmetrics.com',
                            'FRT472ABB2C5B9B141A87EB45D9EF215A1D0A651DC5C1653A83CF964479293D2AC6',
                            "8446163400",
                            {
                                country_code: "1",
                                name: document.getElementById("contact_name").value,
                                phone: document.getElementById("contact_number").value,
                                custom: {
                                  "Location": location,
                        "Yourself Or Loved One": helpFor,
                        "How soon do you need treatment?": howSoon,
                        "I'm seeking treatment for": typeAddiction,
                        "Will you go through withdrawal if you stopped using?": withdrawlBool,
                        "How will you pay for treatment?": paymentOption
                    }
                            });
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }

  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";

  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
      </script>