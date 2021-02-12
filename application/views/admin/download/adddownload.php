
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h4 class="alert alert-info">Add Download File</h4>
        </div>
        <div class="box-body">
         <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'Downloadform', 'enctype' => 'multipart/form-data'));?>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Name of File (Download):</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Name of File(Download)" onclick="removeer('download_err')">
                          <span id="download_err"  class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Type Of Download:</label>
                          <select name="type" class="form-control " id="type">
                          <option value="Free Download">Free Download</option>
                          <option value="Paid Download">Paid Download</option>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Category Download:</label>
                         <select name="Category" id="Category" class="form-control" placeholder="Role" onclick="removeer('servicetype_err')">
                            <option value=""> Select</option>
                            <?php foreach($categoryList as $i=> $role): ?>
                              <option value="<?=$role['Id']?>"> <?=$role['category_name']?></option>
                              <?php endforeach; ?>  
                          </select>
                      </div>
                    </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Link/website related to download</label>
                          <input type="text" name="Link" id="Link" class="form-control" placeholder="Link/website related to download" onclick="removeer('Link_err')">
                          <span id="Link_err"  class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Upload Files:</label>
                        <input type="file" name="download_file" id="download_file" class="form-control" placeholder="Upload Files" onclick="removeer('Files_err')">
                        <span id="Files_err" class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label>Content/Information 
                        <sup>
                          <a data-toggle="modal" class="btn btn-info btn-xs" href="#" data-target="#file"><i class="fa fa-download"></i> Attach File</a>

                          <a data-toggle="modal" class="btn btn-info btn-xs" href="#" data-target="#gambar"><i class="fa fa-download"></i> Attach Picture</a>

                        </sup></label>
                      <textarea name="editor1" class="form-control summernote" id="editor1" ></textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn-success pull-right" type="button" onclick="adddownload()">Add</button>
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
  	function adddownload(){
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
      var url='<?php echo base_url();?>index.php?adminController/AddDownloadfiles/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#Downloadform").serialize()}; 
      $("#Downloadform").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 

    }
    }
    function validateform(){
		var returntype=true; 
    if($('#name').val()==""){
			$('#download_err').html('*Download Name is required');	
			returntype=false;
		}
		if($('#Category').val()==""){
			$('#servicetype_err').html('*Category is required');	
			returntype=false;
		}
		if($('#Link').val()==""){
			$('#Link_err').html('*Link is required');	
			returntype=false;
		}
		if($('#image').val()==""){
			$('#Files_err').html('FIles is required');	
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

