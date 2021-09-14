<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?>
<body>
    <?php $this->load->view('web/includes/nevagation.php'); ?> 
  <div id="mainpublicContent">
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
              <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
              </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                    <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'globalform'));?>
                        <div class="login-form">
                        <h4>Reset Your Password</h4>
                            <div class="row">
 
                               <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Email<span class="text-danger">*</span></label> 
                                    <input class="mb-0 form-control" type="text" name="email" id="email"  onchange="remove_err('email_err','email')" >
                                    <span id="email_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">New Password<span class="text-danger">*</span></label> 
                                    <input class="mb-0 form-control" type="password" name="password" id="password"  onchange="remove_err('password_err','password')" >
                                    <span id="password_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Confirm Password<span class="text-danger">*</span></label> 
                                    <input class="mb-0 form-control" type="password" name="confirmpassword" id="confirmpassword"  onchange="remove_err('confirmpassword_err','confirmpassword')" >
                                    <span id="confirmpassword_err" class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
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
            var url='<?php echo base_url();?>index.php?baseController/replaceoldpassword';
            var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#globalform").serialize()}; 
            $("#globalform").ajaxSubmit(options);
            setTimeout($.unblockUI, 600); 
        }
    }
    function validatefrom(){
      let returnt=true;
      if($('#email').val()==""){
        $('#email_err').html('Please Enter Your Email');
        $('#email').focus();
        returnt=false;
      }
      if($('#password').val()==""){
        $('#password_err').html('Please Enter Your password');
        $('#password').focus();
        returnt=false;
      }
       if($('#confirmpassword').val()=="" || ($('#confirmpassword').val()!=$('#password').val())){
        $('#confirmpassword_err').html('Password mismathch');
        $('#confirmpassword').focus();
        returnt=false;
      }
      return returnt;
    }
  </script>
  <?php
    $this->load->view('web/includes/footer.php');
?>
</body>

