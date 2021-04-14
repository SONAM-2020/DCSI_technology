<body>
  <div id="mainpublicContent">
    <div class="bg-info">
        <div class="container">
            <!-- <div class="breadcrumb-content pl-10">
                <ul>
                    <li class="text-white"><b>Partner Information</b></li>
                </ul>
            </div> -->
        </div>
      </div>
    <div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                      <div class="contact-page-side-content">
                          <h4 class="contact-page-title">Contact Us</h4>
                          <p class="contact-page-message mb-25">We serve as an online database for the exchange of technology offers and requests both in Bhutan and global.The Online database search engine is connected to selected international database centers.</p>
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
                                <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
                                <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-2">
                                   <label>Your Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" onclick="remove_err('Name_err')" name="name" class="form-control">
                                    <span id="Name_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-2">
                                   <label>Your Email <span class="text-danger">*</span></label>
                                    <input type="text" id="email" onclick="remove_err('Email_err')" name="email" class="form-control">
                                    <span id="Email_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-2">
                                   <label>Phone: <span class="text-danger">*</span></label>
                                    <input type="text" id="phone" onclick="remove_err('Phone_err')" name="phone" class="form-control">
                                    <span id="Phone_err" class="text-danger"></span>
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
                                <button type="button" class="li-btn-3" onclick="AddInfo()">Send</button>
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
<script type="text/javascript">
    function AddInfo(){
      if(validateaddform()){
      $.blockUI
          ({ 
            css: 
            { 
                  border: 'none', 
                  padding: '15px', 
                  backgroundColor: '#000', 
                  '-webkit-border-radius': '10px', 
                  '-moz-border-radius': '10px', 
                  opacity: .5, 
                  color: '#fff' 
            } 
          });
          var url='<?php echo base_url();?>index.php?baseController/Addcontactus';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
          $("#addformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#addbioDetails').modal('hide');
    }
    }

    function validateaddform(){
       var retrtype=true;
      if($('#name').val()==""){
        $('#Name_err').html('Please mention the Full Name.');
        retrtype=false;
      }
      if($('#email').val()==""){
        $('#Email_err').html('Please mention Email Address');
        retrtype=false;
      }
      if($('#phone').val()==""){
        $('#Phone_err').html('Please mention phone Number');
        retrtype=false;
      }
      return retrtype;
    }
</script> 

