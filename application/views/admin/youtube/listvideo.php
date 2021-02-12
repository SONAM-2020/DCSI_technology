<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="alert alert-info">View Videos</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Image</th>
              <th>Title</th>
              <th>Category</th>
              <th>Type</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                 <button type="button" class="btn btn-info btn-block" ><i class="fa fa-edit"></i>Edit</button>
                 <button type="button" class="btn btn-danger btn-block"><i class="fa fa-times"></i>Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  	function updateDetails(){
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
      	var url='<?php echo base_url();?>index.php?adminController/updateUser/';
      	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#adduserform").serialize()}; 
      	$("#adduserform").ajaxSubmit(options);
      	setTimeout($.unblockUI, 600); 
  	}
</script>