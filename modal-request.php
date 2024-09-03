<!-- Modal -->
<div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="popupIcon">
          <img class="footerContactIcon" src="<?php bloginfo('template_directory'); ?>/images/svg/phone-blue.svg"></i>
        </div>
      </div>
      <div class="modal-body text-center">
        <h5 class="modal-title" id="exampleModalLabel">Request a Call</h5>
        <p class="modal-text">Want us to call you? Leave your name and phone number and we'll call you within 2 hours.</p>
        <form action="#" id="client_capture_test" method="POST" onsubmit="submitted=true;" target="hidden_iframe">
          <div class="form-group text-center">
            <div class="col-10 col-center">
              <input id="name" class="form-control" required name="name" type="text" value="" placeholder="Enter your full name">
              <input id="phone" class="form-control phoneUS" required name="phone-number" maxlength="14" type="text" value="" placeholder="Phone Number">
              <div id="messageAccordion" role="tablist" aria-multiselectable="true">
                <a  href="#messageBody" id="messageTrigger" data-parent="messageAccordion" data-toggle="collapse" aria-expanded="false" area-controls="message"class="add-message-link">+ Add a Message</a>
                <div id="messageBody" class="collapse hide"  role="tabpanel"  aria-labelledby="messageTrigger">
                  <textarea rows="12" cols="0" id="message" class="form-control" name="message" type="textarea" placeholder="How can we help?"></textarea>
                </div>
              </div>
              <a class="btnMain btnGrn btnModal mt10" type="submit" name="submit" value="Call Me" id="test-submit">Please call me!</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>