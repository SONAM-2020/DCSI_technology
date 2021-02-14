<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?>
<body>
  <div id="mainpublicContent">
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Global Supplier Registration Form</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'globalform'));?>
                        <div class="login-form">
                            <h4 class="login-title">1.User Registration Form</h4>
                            <div class="row">
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Name<span class="text-danger">*</span></label> 
                                    <input class="mb-0 form-control" type="text" name="name" id="name" placeholder="Name" onclick="remove_err('name_err')" >
                                    <span id="name_err" class="text-danger"></span>
                                </div>
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Designation<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="text" name="designation" id="designation" placeholder="Designation" onclick="remove_err('designation_err')">
                                    <span id="designation_err" class="text-danger"></span>
                                </div>
                                
                                <div class="col-md-4 mb-20">
                                    <label>Mobile Number<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="text" name="phone" id="phone" placeholder="Phone No." onclick="remove_err('phone_err')">
                                    <span id="phone_err" class="text-danger"></span>
                                </div>
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Email Address<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="text" name="email" id="email" placeholder="E-mail Address" onclick="remove_err('email_err')">
                                    <span id="email_err" class="text-danger"></span>
                                </div>
                                <div class="col-md-4 mb-20">
                                    <label>Password<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="password" name="password" id="password" placeholder="Password" onclick="remove_err('password_err')">
                                    <span id="password_err" class="text-danger"></span>
                                </div>
                                <div class="col-md-4 mb-20">
                                    <label>Confirm Password<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="password" name="confirmpassword" id="confirmpassword" placeholder="Re-type the Password" onclick="remove_err('confirmpassword_err')">
                                    <span id="confirmpassword_err" class="text-danger"></span>
                                </div>
                            </div>
                            <h4 class="login-title">2.Company Registration Form</h4>
                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Name of Company<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="company" id="company" placeholder="Name of Company" onclick="remove_err('company_err')">
                                    <span id="company_err" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Company Website<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="website" id="website" placeholder="https://www.company.bt" onclick="remove_err('website_err')">
                                    <span id="website_err" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Telephone Number<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="telephone" id="telephone" placeholder="Telephone Number" onclick="remove_err('telephone_err')">
                                    <span id="telephone_err" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Company Address</label>
                                    <textarea class="mb-0 form-control"  name="address" id="address" style="height: 70;"></textarea>
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Company Description</label>
                                    <textarea class="mb-0 form-control"  name="description" id="description" style="height: 70;"></textarea>
                                </div>
                               
                                <div class="col-4">
                                <label for="Country">Country<span class="text-danger">*</span></label>
                                    <select name="Country" id="Country"  onclick="remove_err('Country_err')">
                                      <option value="-1">----select a value----</option>
                                      <option value="bhutan">Bhutan</option>
                                      <option value="mercedes">India</option>
                                      <option value="audi">Germany</option>
                                    </select>
                                    <span id="Country_err" class="text-danger"></span>
                                </div>
                                <div class="col-md-4 col-12 mb-20">
                                    <label>City <span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="city" id="city" placeholder="City" onclick="remove_err('city_err')">
                                    <span id="city_err" class="text-danger"></span>
                                </div>
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Zip/Pin Code<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="postalcode" id="postalcode" placeholder="Zip/Postal Code" onclick="remove_err('postalcode_err')">
                                    <span id="postalcode_err" class="text-danger"></span>
                                </div>
                                <div class="col-12">
                                    <button type ="button" class="register-button mt-0 form-control" onclick="AddInfo()">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function AddInfo(){
    if(validatefrom()){
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
            var url='<?php echo base_url();?>index.php?baseController/globalregistration';
            var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#globalform").serialize()}; 
            $("#globalform").ajaxSubmit(options);
            setTimeout($.unblockUI, 600); 
        }
    }
    function validatefrom(){
      let returnt=true;
       if($('#password, #confirmpassword').on('keyup', 
        function () {
        if ($('#password').val() == $('#confirmpassword').val()) {
        $('#confirmpassword_err').html('Matching').css('color', 'green');
        } else 
        $('#confirmpassword_err').html('Not Matching').css('color', 'red');
        }));

      if($('#name').val()==""){
        $('#name_err').html('Please Mention Your Name');
        $('#name').focus();
        returnt=false;
      }
      if($('#designation').val()==""){
        $('#designation_err').html('Please Mention Your Designation');
        $('#designation').focus();
        returnt=false;
      }
      if($('#phone').val()==""){
        $('#phone_err').html('Please Mention Your Phone Number');
        $('#phone').focus();
        returnt=false;
      }
      if($('#email').val()==""){
        $('#email_err').html('Please Mention Your E-mail Address');
        $('#email').focus();
        returnt=false;
      }
      if($('#password').val()==""){
        $('#password_err').html('Please create New Password');
        $('#password').focus();
        returnt=false;
      }

      if($('#company').val()==""){
        $('#company_err').html('Please Mention Your Company Name');
        $('#company').focus();
        returnt=false;
      }
      if($('#website').val()==""){
        $('#website_err').html('Please Mention Your Company Website');
        $('#website').focus();
        returnt=false;
      }
      if($('#Country').val()==""){
        $('#Country_err').html('Please Mention Country');
        $('#Country').focus();
        returnt=false;
      }
      if($('#telephone').val()==""){
        $('#telephone_err').html('Please Mention Your Comapny Telephone No.');
        $('#telephone').focus();
        returnt=false;
      }
      if($('#city').val()==""){
        $('#city_err').html('Please Mention Your City');
        $('#city').focus();
        returnt=false;
      }
      if($('#postalcode').val()==""){
        $('#postalcode_err').html('Please Mention Your Postal Code');
        $('#postalcode').focus();
        returnt=false;
      }

     
      return returnt;
    }
  </script>
</body>
