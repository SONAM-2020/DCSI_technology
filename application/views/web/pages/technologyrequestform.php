<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?>
<style type="text/css">
    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
  display: inline-block;
  font-size: 9pt;
  margin: 10px;
}
.dataTables_paginate>span>a {
    margin-bottom: 0px !important;
    padding: 1px 5px !important;
}

.dataTables_paginate>a {
    margin-bottom: 0px !important;
    padding: 1px 5px !important;
}
.dataTables_length input { 
    width: 20px 
}
.dataTables_filter input { width: 100px }
</style>
<body>
  <div id="mainpublicContent">
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
              <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12 mb-20">
                <!-- <h4>Technology/Equipment/ Machinary Request</h4>
                <table id="example1" class="table table-bordered table-striped">
                            <thead style="text-align: center">
                            <tr>
                              <th>No.</th>
                              <th>Name</th>
                              <th style="display: none;">Contact</th>
                              <th>Email</th>
                              <th>Equipment Name</th>
                              <th style="display: none;">Address</th>
                              <th style="display: none;">Request Type</th>
                              <th style="display: none;">Description</th>
                              <th>Date</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody style="text-align: center">
                            <?php foreach($technologyrequestformList as $i=> $event): ?>
                            <tr>
                              <td><?=$i+1?></td>
                              <td><?php echo $event['Name'];?></td>
                              <td style="display: none;"><?php echo $event['Contact_No'];?></td>
                              <td><?php echo $event['Email'];?></td>
                              <td><?php echo $event['Equipment_Name'];?></td>
                              <td style="display: none;"><?php echo $event['Present_Address'];?></td>
                              <td style="display: none;"><?php echo $event['Type'];?></td>
                              <td style="display: none;"><?php echo $event['Equipment_Description'];?></td>
                              <td><?php echo $event['Submitted_Date'];?></td>
                              <td>
                                <button class="btn btn-primary" onclick="viewRequest('<?php echo $event['Id'];?>')" type="button"><i class="fa fa-eye"></i> View Request</button>
                              </td>
                              </tr>
                              <?php endforeach;?>
                            </tbody>
                          </table> -->
              </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                    <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'globalform'));?>
                        <div class="login-form">
                    <h4>Technology Request Form</h4>
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
                                     <label for="agree" class="pt-10 pl-10 mt-1">Declarations-<i>The information I have provided is the CSI Technology Request Database is correct and true to the best of my knowledge. In the event of detection of false or misleading information, I shall be fully liable and confer herewith the absolute authority to the Ministry of Economic Affairs to take any action deemed appropriate.</label> 
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
    function viewRequest(id){
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
    var url='<?php echo base_url();?>index.php?baseController/loadpage/ViewRequestDetails/'+id;
    $("#mainpublicContent").load(url);
      setTimeout($.unblockUI, 1000); 
  }
  </script>
<script type="text/javascript">
   $(document).ready( function () {
    $('#example1').DataTable();
  } );
</script> 
</body>

