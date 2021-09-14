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
                    <li class="text-white"><b>Supplier Registration Form</b></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-section mb-60">
        <div class="container"> 
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'localform'));?>
                        <div class="login-form">
                            <h4 class="login-title mb-10">1.User Details</h4>
                            <div class="row">
                                <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xs-12 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Name<span class="text-danger">*</span></label> 
                                    <input class="mb-0 form-control" type="text" name="name" id="name" onchange="remove_err('name_err','name')" >
                                    <span id="name_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xs-12 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Designation<span class="text-danger">*</span></label>
                                    <!-- <input class="mb-0 form-control" type="text" name="designation" id="designation"  onchange="remove_err('designation_err','designation')">-->
                                    <!--<span id="designation_err" class="text-danger"></span>-->
                                    <select id="designation" name="designation">
                                      <option value="-1">Select Designation</option>
                                      <?php foreach($designationList as $i=> $ent): ?>
                                        <option value="<?= $ent['Name'];?>"><?= $ent['Name'];?></option>
                                        <?php endforeach;?>
                                     </select>
                                </div>
                                
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Mobile Number<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="number" name="phone" id="phone" onchange="remove_err('phone_err','phone')">
                                    <span id="phone_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xs-12 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Email Address (Will be your user name)<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="email" name="email" id="email"  onchange="remove_err('email_err','email')">
                                    <span id="email_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Password<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="password" name="password" id="password" onchange="remove_err('password_err','password')">
                                    <span id="password_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                    <label class="mb-1">Confirm Password<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="password" name="confirmpassword" id="confirmpassword" onchange="remove_err('confirmpassword_err','confirmpassword')">
                                    <span id="confirmpassword_err" class="text-danger"></span>
                                </div>
                            </div>
                            <h4 class="login-title mb-10">2.Business Details</h4>
                            <div class="row">
                                <div class="col-sm-6 col-sm-6 col-md-6 col-lg-6 col-xs-12 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Name of Business<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="company" id="company" onchange="remove_err('company_err','company')">
                                    <span id="company_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-sm-6 col-md-6 col-lg-6 col-xs-12 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Business License No.<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="License" id="License" onchange="remove_err('License_err','License')">
                                    <span id="License_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-sm-6 col-md-6 col-lg-6 col-xs-12 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Business License<span class="text-danger">*</span></label>
                                     <input type="file" id="Image" onchange="checkfilesize(this,'images','Image_err','addBtn')" onchange="remove_err('Image_err','Image')" name="Image" class="mb-0 form-control">
                                    <span id="Image_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-sm-6 col-md-6 col-lg-6 col-xs-12 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Business Website</label>
                                    <input class="mb-0 form-control" type="text" name="website" id="website" onchange="remove_err('website_err','website')">
                                    <span id="website_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Telephone Number<span class="text-danger">*</span></label>
                                    <input class="mb-0 form-control" type="text" name="telephone" id="telephone" onchange="remove_err('telephone_err')">
                                    <span id="telephone_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Business Registration Date<span class="text-danger">*</span></label>
                                   <input class="mb-0 form-control" type="date" name="Registration" id="Registration"  onchange="remove_err('Registration_err')">
                                    <span id="Registration_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Location Address</label>
                                    <textarea class="mb-0 form-control" onchange="remove_err('address_err','address')" name="address" id="address" style="height: 70;"></textarea>
                                    <span id="address_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                                    <label class="mb-1">Business Description</label>
                                    <textarea class="mb-0 form-control"  name="description" id="description" style="height: 70;"></textarea>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20 input-group-append">
                                     <input type="checkbox"  class="" onclick="removevalidationhceckbox('agree_err','agree')" id="agree" name="agree">
                                     <label for="agree" class="pt-10 pl-10 mt-1">Declarations-<i>The information I have provided is the CSI Technology Request Database is correct and true to the best of my knowledge. In the event of detection of false or misleading information, I shall be fully liable and confer herewith the absolute authority to the Ministry of Economic Affairs to take any action deemed appropriate.</i></label> 
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
            var url='<?php echo base_url();?>index.php?baseController/localregistration';
            var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#localform").serialize()}; 
            $("#localform").ajaxSubmit(options);
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
      // if($('#website').val()==""){
      //   $('#website_err').html('Please Mention Your Company Website');
      //   $('#website').focus();
      //   returnt=false;
      // }
      if($('#License').val()==""){
        $('#License_err').html('Please Mention Your Company Licences');
        $('#License').focus();
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
      if($('#Registration').val()==""){
        $('#Registration_err').html('Please Mention Your Comapny Registration Date');
        $('#Registration').focus();
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
</html>
