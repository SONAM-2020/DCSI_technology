
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h4 class="alert alert-info">Add Company Details</h4>
        </div>
        <div class="box-body">
         <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addcompanyform', 'enctype' => 'multipart/form-data'));?>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group row">
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <label>Name of Company:</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Name of Company" onclick="removeer('name_err')">
                          <span id="name_err"  class="text-danger"></span>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <label>Upload Logo:</label>
                          <input type="file" name="image" id="image" class="form-control" placeholder="Company Logo" onclick="removeer('image_err')">
                          <span id="image_err" class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Company Information:</label>
                          <textarea name="info" class="form-control summernote" id="info"></textarea>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <button class="btn btn-success pull-right" type="button" onclick="addcompanyDetails()">Add</button>
                  </div>
                  </div>
                </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
</section>
<script type="text/javascript">
  	function addcompanyDetails(){
    if(validateform()){
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
      var url='<?php echo base_url();?>index.php?adminController/addcompany/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addcompanyform").serialize()}; 
      $("#addcompanyform").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
    }
    }
    function validateform(){
		var returntype=true;
  
		if($('#name').val()==""){
			$('#name_err').html('*company name is required');	
			returntype=false;
		}
    if($('#image').val()==""){
      $('#image_err').html('*Company Logo is required'); 
      returntype=false;
    }
		return returntype;
	}
    function removeer(errid){
  		$('#'+errid).html('');	
  	}
     $('.summernote').summernote({
      height: 200,  
      });
</script>
