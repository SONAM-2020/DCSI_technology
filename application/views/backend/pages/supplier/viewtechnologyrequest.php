<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Techenology Request</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Techenology Request</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>View Techenology Request</h4>
						</div>
            <br>
						<div class="widget-inner">
							<table id="table1" class="table table-bordered table-striped">
						    <thead style="text-align: center">
						    <tr>
						      <th>No.</th>
						      <th>Name</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th>Equipment Name</th>
						      <th style="display: none;">Address</th>
                  <th>Request Type</th>
                  <th style="display: none;">Description</th>
                  <th>Date</th>
                  <th>Status</th>
						      <th>Action</th>
						    </tr>
						    </thead>
						    <tbody style="text-align: center">
						    <?php foreach($technologyrequestformList as $i=> $event): ?>
						    <tr>
						      <td><?=$i+1?></td>
                  <td><?php echo $event['Name'];?></td>
						      <td><?php echo $event['Contact_No'];?></td>
                  <td><?php echo $event['Email'];?></td>
                  <td><?php echo $event['Equipment_Name'];?></td>
                  <td style="display: none;"><?php echo $event['Present_Address'];?></td>
                  <td><?php echo $event['Type'];?></td>
                  <td style="display: none;"><?php echo $event['Equipment_Description'];?></td>
                  <td><?php echo $event['Submitted_Date'];?></td>
                  <td><?php echo $event['Status'];?></td>
                  <td>
                    <button class="btn-secondry" onclick="viewRequest('<?php echo $event['Id'];?>')" type="button"><i class="fa fa-eye"></i> View Request</button>
                    <br><br>
                    <!-- <button type="button" class="btn" onclick="Reply('<?php echo $event['Id']?>','<?php echo $event['Name']?>','<?php echo $event['Email']?>',)"><i class="fa fa-edit"></i>Reply Request</button> --> 
						      </td>
						      </tr>
                  <?php endforeach;?>
						    </tbody>
						  </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

	<div class="modal modal-default" id="addbioDetails">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="wc-title">
          	<br>
          	<div class="col-12">
          		<div class="col-6">
            <h4 class="modal-title" style="text-align: left;"><span id="modalheader"></span></h4>
          		</div>
			</div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-12">
                  <div class="row">
                    <div class="col-6">
                          <label>Name of Sender: <span class="text-danger">*</span></label>
                            <input type="text" id="name" onclick="remove_err('Name_err')" name="name" class="form-control">
                            <span id="Name_err" class="text-danger"></span>
                        </div>
                        <div class="col-6">
                          <label>To Email: <span class="text-danger">*</span></label>
                            <input type="text" id="Email" onclick="remove_err('Email_err')" name="Email" class="form-control">
                            <span id="Email_err" class="text-danger"></span>
                        </div>
                        <div class="col-12">
                          <label>Reply Request:<span class="text-danger">*</span></label>
                            <textarea type="text" id="Response" onclick="remove_err('Response_err')" name="Response" class="form-control"></textarea>
                            <span id="Response_err" class="text-danger"></span>
                        </div>
                    </div>
               </div>
               <br>
               <div class="col-12">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                  <input type="hidden" name="deleteId" id="deleteId">
                  <button type="button" class="btn-secondry fa-pull-right" onclick="AddInfo()"><span id="btnspan"></span></button><br><br>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  function Reply(id,name,shortcode){
    $('#name').val(name);
    $('#Email').val(shortcode);
    $('#deleteId').val(id);
    $('#actiontype').val('add');
    $('#modalheader').html('Write Reply');
    $('#btnspan').html('<i class="fa fa-save"></i> Add Details');
    $('#addbioDetails').modal('show');
  }
  function AddInfo(){
    if(validateaddform()){
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
        var url='<?php echo base_url();?>index.php?adminController/Addtechnologyrequestrespond';
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
        $("#addformId").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
        $('#addbioDetails').modal('hide');
    }
    }

    function validateaddform(){
      var retrtype=true;
      if($('#name').val()==""){
        $('#Name_err').html('Please mention Name');
        retrtype=false;
      }
      if($('#Email').val()==""){
        $('#Email_err').html('Please mention Email');
        retrtype=false;
      }
      return retrtype;
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
    var url='<?php echo base_url();?>index.php?adminController/loadpage/ViewRequestDetails/'+id;
    $("#mainContentdiv").load(url);
      setTimeout($.unblockUI, 1000); 
  }

</script> 
