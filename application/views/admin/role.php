<section class="content-header">
  	<h1>
	    Home
	    <small>Staff Details</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Manage Staff Details</h3>
	    </div>
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="sliderDetails" class="table table-bordered table-striped">
			            <thead>
			              <tr>
			                <th>Sl No#</th>
			                <th>Name</th>
			                <th>Email</th>
			                <th>Contact</th>
			                <th>Company</th>
			                <th>Department</th>
			                <th>Designation</th>
			                <th>Role</th>
			                <th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php foreach($userList as $i=> $event): ?>
			                <tr>
			                  <td><?=$i+1?></td>
			                  <td> <?php echo $event['Full_Name'];?> </td>
			                  <td> <?php echo $event['Email_Id'];?> </td>
			                  <td> <?php echo $event['Contact_No'];?> </td>
			                  <td> <?php echo $event['Company_Name'];?> </td>
			                  <td> <?php echo $event['Department'];?> </td>
			                  <td> <?php echo $event['Designaiton'];?> </td>
			                  <td> <?php echo $event['role'];?> </td>
			                  <td>
			                  	 <button type="button" class="btn btn-info btn-block" onclick="showrole('<?php echo $event['Id']?>')"><i class="fa fa-edit"></i>Update Role</button>
			                  	 <button type="button" class="btn btn-danger btn-block" onclick="deleteuser('<?php echo $event['Id']?>')"><i class="fa fa-times"></i>Delete</button>
			                  </td>
			              	</tr>
			               	<?php endforeach; ?>
			            </tbody>
			        </table>
			    </div>
			</div>
		</div>
	</div>
</section>
<div class="modal modal-default" id="deleteSlider">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Update Role</h4>
      		</div>
      		<div class="modal-body">
      			<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'roleupdate', 'enctype' => 'multipart/form-data'));?>
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                  	<select class="form-control pager" onclick="removeerr('Company_Name_err')" name="Company_Name" id="Company_Name">
										<option value=""> Select Role</option>
										<?php  
						                  	foreach($rolelist as $i=> $com):
						              	?>
						              	<option value="<?php echo$com['Id'];?>"> <?php echo$com['Role_Name'];?></option>
					              		<?php 

						                  endforeach; 
						              	?>
									</select>
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<input type="hidden" name="deleteId" id="deleteId">
				                	<button class="btn btn-success" type="button" onclick="updaterole()"> <i class="fa fa-check"></i>Update</button>
				                </div>
				            </div>
			            </div>
			        </div>
      			</form>
      		</div>
      	</div>
  	</div>
</div>

<script type="text/javascript">
	$('.summernote').summernote({
      height:250
  	});
	$(function () {
      $('#sliderDetails').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
    });
	
 	function showrole(id){
 		$('#deleteId').val(id);
  		$('#deleteSlider').modal('show');
 	}
  	
  	function deleteuser(id){
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
	      var url='<?php echo base_url();?>index.php?adminController/deleteuser/'+id+'/role';
	       $("#mainContentdiv").load(url);
	       setTimeout($.unblockUI, 1000);
  	}
  	
  	function updaterole(){
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
      var url='<?php echo base_url();?>index.php?adminController/Updaterole/role';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#roleupdate").serialize()}; 
      $("#roleupdate").ajaxSubmit(options);
      $('#deleteSlider').modal('hide');
      setTimeout($.unblockUI, 600); 
  	}
 
</script>
  	
