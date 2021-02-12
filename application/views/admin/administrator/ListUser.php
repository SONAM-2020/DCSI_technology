<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Manage Users Details</li>
        </ol>
      </div>
    </div>
  </div>
</section>
	 <section class="content">
      <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Manage Users Details</h4>
              </div>
              <div class="card-body">
	    	<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'uerdet', 'enctype' => 'multipart/form-data'));?>
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="sliderDetails" class="table table-bordered">
			            <thead>
			              <tr>
			                <th>Sl No.</th>
			                <th>Email</th>
			                <th>User Status</th>
			                <th>CID</th>
			                <th>Name</th>
                            <th>Contact</th>
			                <th>Role</th>
			                <th>User Type</th>
			                <th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php foreach($userList as $i=> $event): ?>
			                <tr>
			                  <td><?=$i+1?></td>
			                  <td> <?php echo $event['User_Id'];?> </td>
			                  <td> <?php echo $event['User_Status'];?> </td>
			                  <td> <?php echo $event['CID'];?> </td>
			                  <td> <?php echo $event['Full_Name'];?> </td>
			                  <td> <?php echo $event['Contact_Number'];?> </td>
                              <td> <?php echo $event['Role_Id'];?> </td>
                              <td> <?php echo $this->db->get_where('t_role',array('Id'=>$event['Role_Id']))->row()->Role_Name;?> </td>
			                  <td>
			                  	 <button type="button" class="btn btn-info btn-block" onclick="showrole('<?php echo $event['Id']?>')"><i class="fa fa-edit"></i>Update Role</button>
			                  	 <?php
			                  	 if($event['User_Status']=="Y"){?>
			                  	 	 <button type="button" class="btn btn-danger btn-block" onclick="userstatus('<?php echo $event['Id']?>','<?=$event['User_Status'];?>')"><i class="fa fa-times"></i>De-Activate</button>
			                  	 <?php }else{
			                  	 ?>
			                  	  <button type="button" class="btn btn-primary btn-block" onclick="userstatus('<?php echo $event['Id']?>','<?=$event['User_Status'];?>')"><i class="fa fa-check"></i>Activate</button>
			                  	<?php } ?>
			                  </td>
			              	</tr>
			               	<?php endforeach; ?>
			            </tbody>
			        </table>
			    </div>

</div>
	    
	</div>
</section>
 <div class="modal fade" id="deleteSlider">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> Update Role</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'roleupdate', 'enctype' => 'multipart/form-data'));?>
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                  	<select class="form-control pager" onclick="removeerr('user_role_err')" name="User_List" id="User_List">
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
				                	<button class="btn btn-success" type="button" onclick="updaterole()"> <i class="fa fa-check"></i> Update</button>
				                </div>
				            </div>
			            </div>
			        </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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

  	function userstatus(id,staus){
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
      var url='<?php echo base_url();?>index.php?adminController/updatestaus/'+id+'/'+staus;
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#uerdet").serialize()}; 
      $("#uerdet").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
  	}
 
</script>
  	
