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
                    <li class="active">Login</li>
                </ul> 
            </div>
        </div>
    </div>
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xs-4">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xs-4">
                     <?php echo form_open('?adminController/login' , array('class' =>'form-horizontal','id' => 'loginform'));?>
                        <div class="login-form">
                            <h4 class="login-title">Login</h4>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" onclick="remove_err('email_err')" id="email" class="form-control mb-0" placeholder="Email Address">
                                    <span id="email_err" class="text-danger"></span>
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Password</label>
                                    <input type="password" id="password" onclick="remove_err('password_err')" name="password" class="form-control mb-0" placeholder="Password">
                                    <span id="password_err" class="text-danger"></span>
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                    <a href="#"> Forgotten pasward?</a>
                                </div>
                                <div class="col-md-12">
                                    <button class="register-button mt-0" onclick="login()">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php  $this->load->view('web/includes/footer.php'); ?>
</div>
<script>
function login(){
  if(validate()){
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
     $('#loginform').submit();
      setTimeout($.unblockUI, 600);
  }
}
function validate(){
  var retval=true;
  if($('#email').val()==""){
    $('#email_err').html('Please provide your email');
    retval=false;
  }
  if($('#password').val()==""){
     $('#password_err').html('Your password is required'); 
     retval=false;
  }
  return retval;
}
function remove_err(err_Id){
  $('#'+err_Id).html('');
}
function loadforgotpassword(){
  $('#loginsection').hide();
  $('#forgotpass').show()
}
function getOtp(){
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
  var url = '<?php echo base_url();?>index.php?adminController/getOtp/'+$('#emailtoresetpassword').val();
  $.ajax({  
    type: "GET",
    url : url,
    success : function(data){
      if(data.trim() =='success'){
        $('#messagetodisplay').html('System has reset your password. Please visit your email to get new password');
        $('#loginsection').show();
        $('#forgotpass').hide();
        $('#mismatcherr').hide();
      }
      else{
        $('#loginsection').hide();
        $('#forgotpass').show()
        $('#emailtoresetpassword_err').html(data);
      }
    },
    error : function(jqXHR, textStatus, errorThrown) {  
    alert(textStatus+'in error:'+errorThrown+":"+jqXHR);  
    }
  });
  setTimeout($.unblockUI, 6000);
}
</script>
</body>
</html>