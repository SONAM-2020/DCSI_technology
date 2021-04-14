<main class="ttr-wrapper">
    <div class="container-fluid">
      <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">User Information</h4>
        <ul class="db-breadcrumb-list">
          <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
          <li>User Information</li>
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
              <h4>User Information</h4>
            </div>
            <div class="widget-inner">
              <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'UserInformation'));?>
                <div class="">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group row">
                        <label >Name</label>
                        <input class="form-control" type="text" id="Name" name="Name" value="<?=$userDetils->Name;?>" class="form-control">
                      </div>
                      <div class="form-group row">
                        <label >Phone</label>
                        <input class="form-control" type="text" id="Phone" name="Phone" value="<?=$userDetils->Contact_No;?>" class="form-control">
                      </div>
                      <div class="form-group row">
                        <label >Designation</label>
                        <input class="form-control" type="text" id="Designation" name="Designation" value="<?=$userDetils->Designation;?>" class="form-control">
                      </div>
                      <div class="form-group row">
                        <label >E-mail Address</label>
                        <input class="form-control" readonly type="text" id="Email" name="Email" value="<?=$userDetils->Email;?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group row" style="margin-bottom: -50px;">
                        <div class="col-12">
                            <img style="width: 128px; height: auto;" src="<?php echo base_url();?>uploads/Users/<?=$userDetils->Image;?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.jpg'" class="pull-right mr-5 h-75">
                        </div>
                      </div>
                      <div class="form-group row text-right">
                        <div class="col-12">
                            <input type="file" id="Image" name="Image"><br>
                            <span style="color: red;">Choose Image (Recommebded Size:128*128)</span>
                            <input type="hidden" name="currentlogoinivalue" value="uploads/Users/<?=$userDetils->Image;?>">
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
  function update_users(){
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
      var url='<?php echo base_url();?>index.php?adminController/updateusers/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#UserInformation").serialize()}; 
      $("#UserInformation").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
  }
  </script>
  