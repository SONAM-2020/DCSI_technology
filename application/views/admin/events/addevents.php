
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h4 class="alert alert-info">Add Events</h4>
        </div>
        <div class="box-body">
         <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'adduserform', 'enctype' => 'multipart/form-data'));?>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Name of Activity</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Name of Activity" onclick="removeer('name_err')">
                          <span id="name_err"  class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Type of Activities:</label>
                          <input type="text" name="atype" id="atype" class="form-control" placeholder="Type of Activities" onclick="removeer('atype_err')">
                        <span id="atype_err" class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Executive Committee:</label>
                        <input type="text" name="Committee" id="Committee" class="form-control" placeholder="Executive Committee" onclick="removeer('Committee_err')">
                        <span id="Committee_err" class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Place of Execution:</label>
                          <input type="text" name="Place" id="Place" class="form-control" placeholder="Place of Execution" onclick="removeer('place_err')">
                        <span id="place_err" class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Start Date:</label>
                          <input type="text" name="date" id="datepicker" class="form-control" placeholder="Start Date" onclick="removeer('date_err')">
                        <span id="date_err" class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Date of Completion:</label>
                          <input type="text" name="date" id="datepicker" class="form-control" placeholder="Date of Completion" onclick="removeer('date_err')">
                        <span id="date_err" class="text-danger"></span>
                      </div>
                      
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Concise Discription:</label>
                        <input type="text" name="cdiscription" id="cdiscription" class="form-control" placeholder="Concise Discription" onclick="removeer('cdiscription_err')">
                        <span id="cdiscription_err" class="text-danger"></span>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Upload Image:</label>
                        <input type="file" name="image" id="image" class="form-control" placeholder="Password" onclick="removeer('image_err')">
                        <span id="image_err" class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label>News Content 
                        <sup>
                          <a data-toggle="modal" class="btn btn-info btn-xs" href="#" data-target="#file"><i class="fa fa-download"></i> Attach File</a>

                          <a data-toggle="modal" class="btn btn-info btn-xs" href="#" data-target="#gambar"><i class="fa fa-download"></i> Attach Picture</a>

                        </sup></label>
                      <textarea name="editor1" class="form-control" id="editor1" placeholder="News Content"></textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn-success pull-right" type="button" onclick="addUserDetails()">Add</button>
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
  	function addUserDetails(){
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
      var url='<?php echo base_url();?>index.php?adminController/addUser/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#adduserform").serialize()}; 
      $("#adduserform").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 

    }
    }
    function validateform(){
		var returntype=true;
    if($('#CID').val()==""){
			$('#cid_err').html('*CID Number is required');	
			returntype=false;
		}
		if($('#Full_Name').val()==""){
			$('#name_err').html('*Name is required');	
			returntype=false;
		}
		if($('#User_Id').val()==""){
			$('#email_err').html('*Email/User Id is required');	
			returntype=false;
		}
		if($('#Contact_Number').val()==""){
			$('#contact_err').html('Contact is required');	
			returntype=false;
		}
		if($('#Password').val()==""){
			$('#password_err').html('Password is required');	
			returntype=false;
		}
		if($('#Role_Id').val()==""){
			$('#role_err').html('Role is required');	
			returntype=false;
		}
		return returntype;
	}
  function removeer(errid){
		$('#'+errid).html('');	
	}
  	
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

  $('#datepicker').datepicker({
      autoclose: true
  })
</script>
