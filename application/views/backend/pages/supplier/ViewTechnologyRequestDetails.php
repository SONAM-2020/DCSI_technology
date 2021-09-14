<?php
     error_reporting(E_ALL);
     ini_set('display_errors', 0);    
?>
<main class="ttr-wrapper">
    <div class="container-fluid">
      <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">View Techenology Request</h4>
        <ul class="db-breadcrumb-list">
          <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
          <li>View Techenology Request</li>
        </ul>
      </div> 
      <div class="row">
        <div class="col-lg-12 m-b30">
          <div class="widget-box">
            <div class="wc-title">
              <h4>View Techenology Request</h4>
            </div>
            <div class="widget-inner">
              <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'UserInformation'));?>
                <div class="">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sender Name:</label>
                    <div class="col-sm-7">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$technologyrequestformList->Name;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sender Email:</label>
                    <div class="col-sm-7">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$technologyrequestformList->Email;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sender Contact:</label>
                    <div class="col-sm-7">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$technologyrequestformList->Contact_No;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sent Date:</label>
                    <div class="col-sm-7">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$technologyrequestformList->Submitted_Date;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Equipment/Tools Name:</label>
                    <div class="col-sm-7">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$technologyrequestformList->Equipment_Name;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-7">
                      <textarea style="height: 200px;" class="form-control" type="text" id="description" name="description" ><?=$technologyrequestformList->Equipment_Description;?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-7 col-form-label">Technology Request Status<span class="text-danger"> <i>Please Update the Status after Contacting the Request Sender*</i></span></label>
                    <div class="col-sm-5">
                        <select name="category" id="category" class="form-control">
                          <option value="Active">Active</option>
                          <option value="InActive">InActive</option>
                        </select>
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Response</label>
                    <div class="col-sm-7">
                      <textarea style="height: 200px;" class="form-control" type="text" id="description" name="description" ><?=$technologyrequestformList->Response;?></textarea>
                    </div>
                  </div> -->
                  <div class="seperator"></div>
                  <div class="row">
                     <input type="hidden" name="userId" value="<?=$technologyrequestformList->Id;?>">
                    <button type="reset" class="btn" onclick="update_users('profile')" class="btn btn-success pull-right"><span class="fa fa-edit"></span>Update</button>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="ttr-overlay"></div>
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
      var url='<?php echo base_url();?>index.php?adminController/updatechnologyr/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#UserInformation").serialize()}; 
      $("#UserInformation").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
  }
  </script>