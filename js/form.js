//Sidebar Form


 function(){
    jQuery.validator.addMethod("phoneUS", function(phone_number, element) {

    phone_number = phone_number.replace(/\s+/g, ""); 

  return this.optional(element) || phone_number.length > 9 &&

    phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);

  }, "Please specify a valid phone number");

  $("#ss-submit-ms").before('<div class="form-group"><label class="checkboxhuman checkbox"><input type="checkbox" id="tBoxValms" class="iamhuman"> <strong>Check this box</strong></label></div>');

  $("#formsite-ms").after('<input type="hidden" name="locid" value="addictioncampuses/form1" /><input type="hidden" name="EParam" value="AT1kKIiyxDxzed4PHW9CS6eLTfEDMMCuUSAE7pKjsPecCtQJTIOCeDFuKp4KZJba" /><input type="hidden" name="ElapsedTime" id="ElapsedTime" value="0" /><input type="hidden" name="Referrer" id="Referrer" value="" /><input type="text" name="subject_line" id="subject_line" autocomplete="off" /><label for="subject_line">subject_line</label>');

  $("#client_capture_ms").validate({meta:"validte"});

  $("#ss-submit-ms").click(function(obj){

    if($("#client_capture_ms").valid()){

      if(document.getElementById('tBoxValms') && document.getElementById('tBoxValms').checked == true){

        $('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');

        $('#client_capture_ms').attr('action','https://fs22.formsite.com/res/submit'); //https://docs.google.com/forms/d/1LgzJM_oRTrrcePK4zbyy6UehihEb5BPTBBo8j3LlA5M/formResponse

        $('#client_capture_ms').submit();

        

        //window.location = 'thank-you';

      }else{

        alert("Please let us know you're human by checking the box above the submit button");

      }

    }else{

      alert('Please Fill Out Required Fields'); 

    }

  });

 });


 //Sidebar-CTA Form-->


  jQuery(document).ready(function(){
    jQuery.validator.addMethod("phoneUS", function(phone_number, element) {

    phone_number = phone_number.replace(/\s+/g, ""); 

  return this.optional(element) || phone_number.length > 9 &&

    phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);

  }, "Please specify a valid phone number");

  jQuery("#ss-submit-cta").before('<div class="form-group"><label class="checkboxhuman checkbox"><input type="checkbox" id="tBoxValcta" class="iamhuman"> <strong>Check this box</strong></label></div>');

  jQuery("#formsite-cta").after('<input type="hidden" name="locid" value="addictioncampuses/form1" /><input type="hidden" name="EParam" value="AT1kKIiyxDxzed4PHW9CS6eLTfEDMMCuUSAE7pKjsPecCtQJTIOCeDFuKp4KZJba" /><input type="hidden" name="ElapsedTime" id="ElapsedTime" value="0" /><input type="hidden" name="Referrer" id="Referrer" value="" /><input type="text" name="subject_line" id="subject_line" autocomplete="off" /><label for="subject_line">subject_line</label>');

  jQuery("#client_capture_cta").validate({meta:"validte"});

  jQuery("#ss-submit-cta").click(function(obj){

    if(jQuery("#client_capture_cta").valid()){

      if(document.getElementById('tBoxValcta') && document.getElementById('tBoxValcta').checked == true){

        jQuery('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');

        jQuery('#client_capture_cta').attr('action','https://fs22.formsite.com/res/submit'); //https://docs.google.com/forms/d/1LgzJM_oRTrrcePK4zbyy6UehihEb5BPTBBo8j3LlA5M/formResponse

        jQuery('#client_capture_cta').submit();

        

        //window.location = 'thank-you';

      }else{

        alert("Please let us know you're human by checking the box above the submit button");

      }

    }else{

      alert('Please Fill Out Required Fields'); 

    }

  });

 });

//Sidebar-OLD Form-->


  jQuery(document).ready(function(){
    jQuery.validator.addMethod("phoneUS", function(phone_number, element) {

    phone_number = phone_number.replace(/\s+/g, ""); 

  return this.optional(element) || phone_number.length > 9 &&

    phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);

  }, "Please specify a valid phone number");

  jQuery("#ss-submit-old").before('<div class="form-group"><label class="checkboxhuman checkbox"><input type="checkbox" id="tBoxValold" class="iamhuman"> <strong>Check this box</strong></label></div>');

  jQuery("#formsite-old").after('<input type="hidden" name="locid" value="addictioncampuses/form1" /><input type="hidden" name="EParam" value="AT1kKIiyxDxzed4PHW9CS6eLTfEDMMCuUSAE7pKjsPecCtQJTIOCeDFuKp4KZJba" /><input type="hidden" name="ElapsedTime" id="ElapsedTime" value="0" /><input type="hidden" name="Referrer" id="Referrer" value="" /><input type="text" name="subject_line" id="subject_line" autocomplete="off" /><label for="subject_line">subject_line</label>');

  jQuery("#client_capture_old").validate({meta:"validte"});

  jQuery("#ss-submit-old").click(function(obj){

    if(jQuery("#client_capture_old").valid()){

      if(document.getElementById('tBoxValold') && document.getElementById('tBoxValold').checked == true){

        jQuery('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');

        jQuery('#client_capture_old').attr('action','https://fs22.formsite.com/res/submit'); //https://docs.google.com/forms/d/1LgzJM_oRTrrcePK4zbyy6UehihEb5BPTBBo8j3LlA5M/formResponse

        jQuery('#client_capture_old').submit();

        

        //window.location = 'thank-you';

      }else{

        alert("Please let us know you're human by checking the box above the submit button");

      }

    }else{

      alert('Please Fill Out Required Fields'); 

    }

  });

 });




  //Pop-up form


  jQuery(document).ready(function(){
    jQuery.validator.addMethod("phoneUS", function(phone_number, element) {

    phone_number = phone_number.replace(/\s+/g, ""); 

  return this.optional(element) || phone_number.length > 9 &&

    phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);

  }, "Please specify a valid phone number");

  jQuery("#ss-submit3").before('<div class="form-group"><label class="checkboxhuman checkbox"><input type="checkbox" id="tBoxVal3" class="iamhuman"> <strong>Check this box</strong></label></div>');

  jQuery("#formsite3").after('<input type="hidden" name="locid" value="addictioncampuses/form1" /><input type="hidden" name="EParam" value="AT1kKIiyxDxzed4PHW9CS6eLTfEDMMCuUSAE7pKjsPecCtQJTIOCeDFuKp4KZJba" /><input type="hidden" name="ElapsedTime" id="ElapsedTime" value="0" /><input type="hidden" name="Referrer" id="Referrer" value="" /><input type="text" name="subject_line" id="subject_line" autocomplete="off" /><label for="subject_line">subject_line</label>');

  jQuery("#client_capture3").validate({meta:"validte"});

  jQuery("#ss-submit3").click(function(obj){

    if(jQuery("#client_capture3").valid()){

      if(document.getElementById('tBoxVal3') && document.getElementById('tBoxVal3').checked == true){

        jQuery('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');

        jQuery('#client_capture3').attr('action','https://fs22.formsite.com/res/submit'); //https://docs.google.com/forms/d/1LgzJM_oRTrrcePK4zbyy6UehihEb5BPTBBo8j3LlA5M/formResponse

        jQuery('#client_capture3').submit();

        

        //window.location = 'thank-you';

      }else{

        alert("Please let us know you're human by checking the box above the submit button");

      }

    }else{

      alert('Please Fill Out Required Fields'); 

    }

  });

 });



  //Main Form

 jQuery(document).ready(function(){

   jQuery.validator.addMethod("phoneUS", function(phone_number, element) {

    phone_number = phone_number.replace(/\s+/g, ""); 

  return this.optional(element) || phone_number.length > 9 &&

    phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);

  }, "Please specify a valid phone number");


  var u   = 'res/submit';//;

  jQuery("#ss-submit").before('<div class="form-group"><label class="checkboxhuman checkbox"><input type="checkbox" id="tBoxVal" class="iamhuman"> <strong>Check this box</strong></label></div>');
jQuery("#formsite").after('<input type="hidden" name="locid" value="addictioncampuses/form1" /><input type="hidden" name="EParam" value="AT1kKIiyxDxzed4PHW9CS6eLTfEDMMCuUSAE7pKjsPecCtQJTIOCeDFuKp4KZJba" /><input type="hidden" name="ElapsedTime" id="ElapsedTime" value="0" /><input type="hidden" name="Referrer" id="Referrer" value="" /><input type="text" name="subject_line" id="subject_line" autocomplete="off" /><label for="subject_line">subject_line</label>');
  jQuery("#client_capture").validate({meta:"validte"});

  jQuery("#ss-submit").click(function(obj){

    if(jQuery("#client_capture").valid()){

      if(document.getElementById('tBoxVal') && document.getElementById('tBoxVal').checked == true){

        jQuery('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');

        jQuery('#client_capture').attr('action','https://fs22.formsite.com/'+u); //https://docs.google.com/forms/d/1MmCnmiN4qwXAYR962smNipVb2oPrcfF4JdUi9DY6mcY/formResponse

        jQuery('#client_capture').submit();

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


    <!--Newsletter Form-->
  <script>

 jQuery(document).ready(function(){

   jQuery.validator.addMethod("phoneUS", function(phone_number, element) {

    phone_number = phone_number.replace(/\s+/g, ""); 

  return this.optional(element) || phone_number.length > 9 &&

    phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);

  }, "Please specify a valid phone number");


  var u   = 'res/submit';//;

  jQuery("#ss-submit2").before('<div class="form-group"><label class="checkboxhuman checkbox"><input type="checkbox" id="tBoxVal2" class="iamhuman"> <strong>Check this box</strong></label></div>');
jQuery("#formsite2").after('<input type="hidden" name="locid" value="addictioncampuses/form1" /><input type="hidden" name="EParam" value="AT1kKIiyxDxzed4PHW9CS6eLTfEDMMCuUSAE7pKjsPecCtQJTIOCeDFuKp4KZJba" /><input type="hidden" name="ElapsedTime" id="ElapsedTime" value="0" /><input type="hidden" name="Referrer" id="Referrer" value="" /><input type="text" name="subject_line" id="subject_line" autocomplete="off" /><label for="subject_line">subject_line</label>');
  jQuery("#client_capture2").validate({meta:"validte"});

  jQuery("#ss-submit2").click(function(obj){

    if(jQuery("#client_capture2").valid()){

      if(document.getElementById('tBoxVal2') && document.getElementById('tBoxVal2').checked == true){

        jQuery('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');

        jQuery('#client_capture2').attr('action','https://fs22.formsite.com/'+u); //https://docs.google.com/forms/d/1MmCnmiN4qwXAYR962smNipVb2oPrcfF4JdUi9DY6mcY/formResponse

        jQuery('#client_capture2').submit();

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