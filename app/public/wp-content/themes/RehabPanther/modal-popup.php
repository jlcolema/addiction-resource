<script>

 jQuery(document).ready(function(){

   jQuery.validator.addMethod("phoneUS", function(phone_number, element) {

    phone_number = phone_number.replace(/\s+/g, ""); 

  return this.optional(element) || phone_number.length > 9 &&

    phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);

  }, "Please specify a valid phone number");

  var u   = 'res/submit';//;


  jQuery("#modalPopup").validate({meta:"validte"});

  jQuery("#pop-submit").click(function(obj){

    if(jQuery("#modalPopup").valid()){

      if(document.getElementById('tBoxVal_pop') && document.getElementById('tBoxVal_pop').checked == true){

        jQuery('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');

        jQuery('#modalPopup').submit();
        __ctm.form.track('app.calltrackingmetrics.com', // the capture host
                     'FRT472ABB2C5B9B141A32A449DB8F3DA23AE0864A53C0FAA604', // this FormReactor
                      "8669049724", // the tracking number used for associating visitor data and caller ID consumers will see
                     {
                       country_code: "1", // the expected country code e.g. +1, +44, +55, +61, etc...
                       name: document.getElementById("pop-name").value,
                       phone: document.getElementById("pop-number").value
                     });

        //window.location = 'thank-you';

      } else{

        alert("Please let us know you're human by checking the box above the submit button");

      }

    } else{

      alert('Please Fill Out Required Fields'); 

    }

  });

 });

</script>

<!-- Modal -->
<div class="modal main-pop-cta fade" id="popupForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <p class="modal-text">A Better You Begins Here</p>
        <a class="location-number" href="tel:1-866-904-9724" >Call: (866) 904-9724</a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="form-txt fancy-txt-gry text-center"><i>Or</i></p>
        <form action="#" id="modalPopup" method="POST" onsubmit="submitted=true;" target="hidden_iframe">
            
             
              <div class="col-10">
               <div class="form-group">

        <input type="text" id="pop-name" value="" name="pop-name" class="form-control pop-up required" placeholder="Name">
      </div>
      <div class="form-group">
        <input type="text" id="pop-number" value="" name="pop-number" class="form-control required phoneUS" placeholder="Phone Number"> 
      </div>
      <div class="form-group">
        <label class="checkboxhuman checkbox"><input type="checkbox" id="tBoxVal_pop" class="iamhuman"> <strong>Check this box</strong></label>
      </div>
      <div class="form-group">
        <input type="submit" id="pop-submit" value="Get Help Now" name="submit" class="btn btn-grn btn-lg btn-block">
      </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>