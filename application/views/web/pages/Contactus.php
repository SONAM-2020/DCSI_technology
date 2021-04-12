<body>
  <div id="mainpublicContent">
    <div class="bg-info">
        <div class="container">
            <div class="breadcrumb-content pl-10">
                <ul>
                    <li class="text-white"><b>Partner Information</b></li>
                </ul>
            </div>
        </div>
      </div>
    <div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                      <div class="contact-page-side-content">
                          <h4 class="contact-page-title">Contact Us</h4>
                          <p class="contact-page-message mb-25">We serves as an online database for the exchange of technology offers and requests both in Bhutan and globally.The Online database search engine is connected to selected international database centers.</p>
                          <div class="single-contact-block">
                              <h5><i class="fa fa-fax"></i> Address</h5>
                              <p><?=$CompanyInfo->Location_Address;?></p>
                          </div>
                          <div class="single-contact-block">
                              <h5><i class="fa fa-phone"></i> Phone</h5>
                              <p>Mobile: <?=$CompanyInfo->Contact_Number;?></p>
                          </div>
                          <div class="single-contact-block last-child">
                              <h5><i class="fa fa-envelope-o"></i> Email</h5>
                              <p><?=$CompanyInfo->Email_Address;?></p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                      <div class="contact-form-content pt-sm-55 pt-xs-55">
                          <h4 class="contact-page-title">Tell Us Your Message</h4>
                          <div class="contact-form">
                              <form  id="contact-form" action="http://demo.hasthemes.com/limupa-v3/limupa/mail.php" method="post">
                                <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-2">
                                   <label>Your Name <span class="required">*</span></label>
                                     <input type="text" name="customerName" id="customername" required>
                                </div>
                                <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-2">
                                   <label>Your Email <span class="required">*</span></label>
                                      <input type="email" name="customerEmail" id="customerEmail" required>
                                </div>
                                <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-2">
                                    <label>Subject</label>
                                      <input type="text" name="contactSubject" id="contactSubject">
                                </div>
                                <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-2">
                                   <label>Your Message</label>
                                      <textarea name="contactMessage" id="contactMessage" ></textarea>
                                </div>
                                <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-2">
                                  <button type="submit" value="submit" id="submit" class="li-btn-3" name="submit">send</button>
                                </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>


