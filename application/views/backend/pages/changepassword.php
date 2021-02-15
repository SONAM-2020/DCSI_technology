<main class="ttr-wrapper">
    <div class="container-fluid">
      <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">User Information</h4>
        <ul class="db-breadcrumb-list">
          <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
          <li>Change Password</li>
        </ul>
      </div>  
      <?php  
        if($message!='Undefined' && $message!=''){
      ?>
        <div class="row bg-green pt-2" id="messageId">
            <div class="col-12">
              <div class="callout callout-success text-center">
                <h4><?=$message?></h4>
              </div>
            </div>
        </div>
      <?php
        } 
      ?>
      <div class="row">
        <div class="col-lg-12 m-b30">
          <div class="widget-box">
            <div class="wc-title">
              <h4>Update Password</h4>
            </div>
            <div class="widget-inner">
              <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'UserInformation'));?>
                <div class="row">
                  <div class="col-6">
                    
                    <div class="form-group row">
                      <label >E-mail Address</label>
                      <input class="form-control" readonly type="text" id="Email" name="Email" value="<?=$userDetils->Email;?>" class="form-control">
                    </div>
                    <div class="form-group row">
                      <label >New Password</label>
                      <input class="form-control" type="text" onclick="remove_err('password_err')" id="password" name="password"  class="form-control">
                      <span class="text-danger" id="password_err"></span>
                    </div>
                    <div class="form-group row">
                      <label >Confirm Password</label>
                      <input class="form-control" type="text" onclick="remove_err('cpassword_err')" id="cpassword" name="cpassword"  class="form-control">
                      <span class="text-danger" id="cpassword_err"></span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group row" style="margin-bottom: -50px;">
                      <div class="col-12">
                          <img src="<?php echo base_url();?>uploads/user.jpg" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.jpg'" class="pull-right mr-5 h-75">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <input type="hidden" name="userId" value="<?php echo $this->session->userdata('User_Id');?>">
                    <button type="reset" class="btn" onclick="update_users('profile')" class="btn btn-success pull-right"><span class="fa fa-edit"></span> Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script>
  setTimeout(function(){
      $('#messageId').hide();
  }, 5000);
  function validatepass(){
    let returnt=true;
    if($('#password').val()==""){
        $('#password_err').html('please provide your new password');
        $('#password').focus();
        returnt=false;
    }
    if($('#cpassword').val()==""){
        $('#cpassword_err').html('Please mention condirm password');
        $('#cpassword').focus();
        returnt=false;
    }
    if($('#cpassword').val()!=$('#password').val()){
        $('#cpassword_err').html('password and confirm password mismatch');
        $('#cpassword').focus();
        returnt=false;
    }
    return returnt;
  }
  function update_users(){
      if(validatepass()){
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
        var url='<?php echo base_url();?>index.php?adminController/updatepassword/';
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#UserInformation").serialize()}; 
        $("#UserInformation").ajaxSubmit(options);
        setTimeout($.unblockUI, 600);
      }
       
  }
  </script>
  