<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?>
<body>
  <div id="mainpublicContent">
      <div class="bg-info">
        <div class="container">
            <div class="breadcrumb-content pl-10">
                <ul>
                    <li class="text-white"><b>Global Registration Form</b></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'globalform'));?>
                        <div class="login-form">
                            <h4 class="login-title mb-10">1.User Detials</h4>
                            <div class="row">
                                <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xs-12 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Name<span class="text-danger">*</span></label> 
                                    <input class="mb-0 form-control" type="text" name="name" id="name" placeholder="Name" onchange="remove_err('name_err','name')" >
                                    <span id="name_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xs-12 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Designation<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="text" name="designation" id="designation" placeholder="Designation" onchange="remove_err('designation_err','designation')">
                                    <span id="designation_err" class="text-danger"></span>
                                </div>
                                
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Mobile Number<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="number" name="phone" id="phone" placeholder="Phone No." onchange="remove_err('phone_err','phone')">
                                    <span id="phone_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xs-12 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Email Address (Will be your user name)<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="email" name="email" id="email" placeholder="E-mail Address" onchange="remove_err('email_err','email')">
                                    <span id="email_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Password<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="password" name="password" id="password" placeholder="Password" onchange="remove_err('password_err','password')">
                                    <span id="password_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Confirm Password<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="password" name="confirmpassword" id="confirmpassword" placeholder="Re-type the Password" onchange="remove_err('confirmpassword_err','confirmpassword')">
                                    <span id="confirmpassword_err" class="text-danger"></span>
                                </div>
                            </div>
                            <h4 class="login-title">2.Company Registration Form</h4>
                            <div class="row">
                                <div class="col-sm-6 col-sm-6 col-md-6 col-lg-6 col-xs-12 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Name of Company<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="company" id="company" placeholder="Name of Company" onchange="remove_err('company_err','company')">
                                    <span id="company_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-sm-6 col-md-6 col-lg-6 col-xs-12 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Company Website<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="website" id="website" placeholder="https://www.company.bt" onchange="remove_err('website_err','website')">
                                    <span id="website_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Telephone Number<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="telephone" id="telephone" placeholder="Telephone Number" onchange="remove_err('telephone_err','telephone')">
                                    <span id="telephone_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Company Address</label>
                                    <textarea class="mb-0 form-control" onchange="remove_err('address_err','address')" name="address" id="address" style="height: 70;"></textarea>
                                    <span id="address_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Company Description</label>
                                    <textarea class="mb-0 form-control"  name="description" id="description" style="height: 70;"></textarea>
                                </div>
                               
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                <label for="Country">Country<span class="text-danger">*</span></label>
                                    <select class="mb-0 form-control" name="Country" id="Country" onchange="remove_err('Country_err','Country')">
                                      <option value="-1">----select Your Country----</option>
                                      <?php  
                                        foreach($t_country_master as $i=> $des):
                                      ?>
                                        <option value="<?=$des['Id'];?>"> <?=$des['Country_Name'];?></option>
                                      <?php 
                                        endforeach; 
                                      ?>
                                    </select>
                                    <span id="Country_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                    <label>City <span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="city" id="city" placeholder="City" onchange="remove_err('city_err','city')">
                                    <span id="city_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                    <label>Zip/Pin Code<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="postalcode" id="postalcode" placeholder="Zip/Postal Code" onchange="remove_err('postalcode_err','postalcode')">
                                    <span id="postalcode_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20 input-group-append">
                                     <input type="checkbox"  class="" onclick="removevalidationhceckbox('agree_err','agree')" id="agree" name="agree">
                                     <label for="agree" class="pt-10 pl-10 mt-1">Declarations-The knowledge provide above is true to the best of my Knowledge.</label> 
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                    <span id="agree_err" class="text-danger"></span>
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
      if($('#phone').val()=="" || $('#phone').val().length!=8){
        $('#phone_err').html('Please Mention Your 8 digit Phone Number');
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
      if($('#confirmpassword').val()=="" || ($('#confirmpassword').val()!=$('#password').val())){
        $('#confirmpassword_err').html('Password mismathch');
        $('#confirmpassword').focus();
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
    if($('#Image').val()==""){
        $('#Image_err').html('Upload license copy');
        $('#Image').focus();
        returnt=false;
      }
      if($('#telephone').val()==""){
        $('#telephone_err').html('Please Mention Your Comapny Telephone No.');
        $('#telephone').focus();
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
      if($('#agree').prop('checked')==false){
        $('#agree_err').html('You need to agree declaration <br>');
        $('#agree').focus();
        returnt=false;
      }
      return returnt;
    }
  </script>
</body>
