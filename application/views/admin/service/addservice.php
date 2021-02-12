
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h4 class="alert alert-info">Add Services</h4>
        </div>
        <div class="box-body">
         <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addservice', 'enctype' => 'multipart/form-data'));?>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Title of Services</label>
                          <input type="text" name="service_name" id="service_name" class="form-control" placeholder="Service Title" onclick="removeer('service_err')">
                          <span id="service_err"  class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Type of Services:</label>
                          <select name="service_type" class="form-control" id="service_type" onclick="removeer('service_type_err')">
                          <span id="service_type_err" class="text-danger"></span>
                          <option value=""> Service Type</option>
                            <?php  
                            foreach($serviceList as $i=> $com):
                            ?>
                            <option value="<?php echo$com['category_id'];?>"><?php echo$com['category_name'];?></option>
                            <?php 
                            endforeach; 
                            ?>
                          </select>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Upload Image:</label>
                        <input type="file" name="image" id="image" class="form-control" placeholder="Image" onclick="removeer('image_err')">
                        <span id="image_err" class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <label>Service Content 
                        <sup>
                          <a data-toggle="modal" class="btn btn-info btn-xs" href="#" data-target="#file"><i class="fa fa-download"></i> Attach File</a>
                          <a data-toggle="modal" class="btn btn-info btn-xs" href="#" data-target="#image"><i class="fa fa-download"></i> Attach Picture</a>
                        </sup>
                      </label>
                      <textarea name="editor1" class="form-control summernote" id="editor1" placeholder="Service Content"></textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn-success pull-right" type="button" onclick="addservicedetails()">Add</button>
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
function addservicedetails(){
      //need to do validation
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
      var url='<?php echo base_url();?>index.php?adminController/addService/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addservice").serialize()}; 
      $("#addservice").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
    }
    }
    function validateform(){
		var returntype=true;
    if($('#service_name').val()==""){
			$('#service_err').html('*Service name is required');	
			returntype=false;
		}
		if($('#service_type').val()==""){
			$('#service_type_err').html('*Type of Service Id is required');	
			returntype=false;
		}
		if($('#image').val()==""){
			$('#image_err').html('Image is required');	
			returntype=false;
		}
		if($('#editor1').val()==""){
			$('#content_err').html('Content is required');	
			returntype=false;
		}
		return returntype;
	}

  function removeer(errid){
		$('#'+errid).html('');	
	}

  $('.summernote').summernote({
    height: 150,   //set editable area's height
    codemirror: { // codemirror options
      theme: 'monokai'
    }
    });
</script>

