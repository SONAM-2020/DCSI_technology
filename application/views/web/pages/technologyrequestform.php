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
                    <li class="text-white"><b>Technology Request Form</b></li>
                </ul>
            </div>
        </div>
      </div>
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
              <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12 mb-20">
              </div>
                <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12 mb-20">
                    <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'globalform'));?>
                        <div class="login-form">
                            <div class="row">
                               <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Name<span class="text-danger">*</span></label> 
                                    <input class="mb-0 form-control" type="text" name="name" id="name"  onchange="remove_err('name_err','name')" >
                                    <span id="name_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Mobile Number<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="number" name="phone" id="phone"  onchange="remove_err('phone_err','phone')">
                                    <span id="phone_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Email Address<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="email" name="email" id="email"  onchange="remove_err('email_err','email')">
                                    <span id="email_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Present Address</label>
                                    <textarea class="mb-0 form-control" onchange="remove_err('address_err','address')" name="address" id="address" style="height: 100;"></textarea>
                                    <span id="address_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label>Select Request Type: <span class="text-danger">*</span></label>
                                    <select class="form-control pager" onclick="remove_err('request_err')" name="request" id="request">
                                    <option value="">----Select Request Type----</option>
                                      <option value="Local">Local Request</option>
                                      <option value="Global">Global Request</option>
                                    </select>
                                    <span id="request_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Equiptment/Tools Name<span class="text-danger">*</span></label>
                                     <input class="mb-0 form-control" type="text" name="equipment" id="equipment"  onchange="remove_err('equipment_err','equipment')">
                                    <span id="email_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Equipment Description</label>
                                    <textarea class="mb-0 form-control"  name="description" id="description" style="height: 100;"></textarea>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20 input-group-append">
                                     <input type="checkbox"  class="" onclick="removevalidationhceckbox('agree_err','agree')" id="agree" name="agree">
                                     <label for="agree" class="pt-10 pl-10 mt-1">Declarations-The Information provided above is true to the best of my knowledge.</label> 
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                    <span id="agree_err" class="text-danger"></span>
                                    <button type ="button" class="register-button mt-0 form-control" onclick="AddInfo()">Submit</button>
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
            var url='<?php echo base_url();?>index.php?baseController/technologyrequestForm';
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
      if($('#address').val()==""){
        $('#address_err').html('Please Mention Your Present Address');
        $('#address').focus();
        returnt=false;
      }
      if($('#equipment').val()==""){
        $('#equipment_err').html('Please Mention Your Equiptment/Tools Name');
        $('#equipment').focus();
        returnt=false;
      }
      if($('#agree').prop('checked')==false){
        $('#agree_err').html('You need to agree declaration <br>');
        $('#agree').focus();
        returnt=false;
      }
      if($('#request').val()==""){
        $('#request_err').html('Please select a request type');
        $('#request').focus();
        returnt=false;
      }
      return returnt;
    }
  </script>
</body>
