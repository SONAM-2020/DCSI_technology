<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Admin Users Management</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Users</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add/View Users</h4>
						</div>
						<br>
						<div><button class="btn-secondry fa-pull-right" onclick="addinfo()" type="button">Add hjytju</button></div>
						<br>
						<div class="widget-inner">
							<table id="example1" class="table table-bordered table-striped">
						    <thead style="text-align: center">
						    <tr>
						      <th>No.</th>
						      <th>Name</th>
                  <th>Email</th>
						      <th>Contact_No</th>
						      <th>Image</th>
                  <th>Status</th>
						      <th>Action</th>
						    </tr>
						    </thead>
						    <tbody style="text-align: center">
						    <?php foreach($Admin as $i=> $event): ?>
						    <tr>
						      <td><?=$i+1?></td>
	              	<td><?php echo $event['Name'];?></td>
                  <td><?php echo $event['Email'];?></td>
                  <td><?php echo $event['Contact_No'];?></td>
                  <td><img style="width: 100px; height: 100px;" src="<?php echo base_url();?>uploads/Users/<?php echo $event['Image'];?>"></td>
                  <td> <?php if($event['Status']=="Active"){ ?>
                          <span class="btn" style="color: green;">
                              <?php echo $event['Status'];?>
                          </span>
                      <?php } else{?>   
                          <span class="btn-secondry" style="color: red;">
                              <?php echo $event['Status'];?>
                          </span> 
                      <?php }?></td>
						      <td>
                  <button type="button" class="btn-secondry btn-block" onclick="editinfo('<?php echo $event['Id']?>','<?php echo $event['Name']?>','<?php echo $event['Email']?>','<?php echo $event['Status']?>','<?php echo $event['Contact_No']?>')"><i class="fa fa-edit"></i>Edit</button> 
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
                        <label>Name: <span class="text-danger">*</span></label>
                          <input type="text" id="name" onclick="remove_err('Name_err')" name="name" class="form-control">
                          <span id="Name_err" class="text-danger"></span>
                      </div>
                      <div class="col-6">
                        <label>Email: <span class="text-danger">*</span></label>
                          <input type="text" id="email" onclick="remove_err('Email_err')" name="email" class="form-control">
                          <span id="Email_err" class="text-danger"></span>
                      </div>
                      <div class="col-6">
                        <label>Contact Number: <span class="text-danger">*</span></label>
                          <input type="text" id="phone" onclick="remove_err('Phone_err')" name="phone" class="form-control">
                          <span id="Phone_err" class="text-danger"></span>
                      </div>
                      <br>
                      <div class="col-6">
                        <label>Note: <span class="text-danger">*** System will Automatically create the password for user (dcsi@2021)***</span></label>
                      </div>
                    </div>
               </div>
               <br>
               <div class="col-12">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn-secondry fa-pull-right" id="addBtn" onclick="AddInfo()"><span id="btnspan"></span></button><br><br>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
<div class="modal modal-default" id="Edit">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="wc-title">
            <br>
            <div class="col-12">
              <div class="col-6">
            <h4 class="modal-title" style="text-align: left;"><span id="modalheader1"></span></h4>
              </div>
      </div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'editformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-12">
                  <div class="row">
                      <div class="col-6">
                        <label>Name: <span class="text-danger">*</span></label>
                          <input type="text" id="Name" onclick="remove_err('Name_err')" name="Name" class="form-control">
                          <span id="Name_err" class="text-danger"></span>
                      </div>
                      <div class="col-6">
                        <label>Email: <span class="text-danger">*</span></label>
                          <input type="text" id="Email" onclick="remove_err('Email_err')" name="Email" class="form-control">
                          <span id="Email_err" class="text-danger"></span>
                      </div>
                      <div class="col-6">
                        <label>Contact Number: <span class="text-danger">*</span></label>
                          <input type="text" id="Phone" onclick="remove_err('Phone_err')" name="Phone" class="form-control">
                          <span id="Phone_err" class="text-danger"></span>
                      </div>
                      <br>
                      <div class="col-6">
                        <label>Status: <span class="text-danger">*</span></label>
                        <select name="category" id="category" class="form-control">
                          <option value="Active">Active</option>
                          <option value="InActive">InActive</option>
                        </select>
                      </div>
                    </div>
               </div>
               <br>
               <div class="col-12">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                   <input type="hidden" name="EditId" id="EditId">
                  <button type="button" class="btn fa-pull-right" id="addBtn" onclick="EditInfo()"><span id="btnspanedit"></span></button><br><br>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
    function addinfo(){
      $('#actiontype').val('add');
      $('#modalheader').html('Add New Users');
      $('#btnspan').html('<i class="fa fa-save"></i> Add Users');
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
          var url='<?php echo base_url();?>index.php?adminController/Addadminusers';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
          $("#addformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#addbioDetails').modal('hide');
    }
    }

    function validateaddform(){
       var retrtype=true;
      if($('#name').val()==""){
        $('#Name_err').html('Please mention the Full Name.');
        retrtype=false;
      }
      if($('#email').val()==""){
        $('#Email_err').html('Please mention Email Address');
        retrtype=false;
      }
      if($('#phone').val()==""){
        $('#Phone_err').html('Please mention phone number');
        retrtype=false;
      }
      return retrtype;
    }
</script> 
<script type="text/javascript">
    function editinfo(Editid,name,email,tatus,phone){
      $('#EditId').val(Editid);
      $('#Name').val(name);
      $('#Email').val(email);
      $('#Phone').val(phone);
      $('#category').val(tatus);
      $('#actiontype').val('add');
      $('#modalheader1').html('Edit Users');
      $('#btnspanedit').html('<i class="fa fa-save"></i> Save Users');
      $('#Edit').modal('show');
    }
    function EditInfo(){
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
          var url='<?php echo base_url();?>index.php?adminController/Editadminusers';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editformId").serialize()}; 
          $("#editformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#Edit').modal('hide');
    }
</script>
