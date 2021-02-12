
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h4 class="alert alert-info">General Configuration</h4>
        </div>
        <div class="box-body">
         <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'adduserform', 'enctype' => 'multipart/form-data'));?>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Title of Services</label>
                          <input type="text" name="service" id="service" class="form-control" placeholder="Service Title" onclick="removeer('title_err')">
                          <span id="title_err"  class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Publish Date:</label>
                          <input type="text" name="Date" id="datepicker" class="form-control" placeholder="Date" onclick="removeer('date_err')">
                        <span id="date_err" class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Publish Time:</label>
                        <input type="text" name="time" id="time" class="form-control" placeholder="time" onclick="removeer('time_err')">
                        <span id="time_err" class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Type of Services:</label>
                          <select name="Role_Id" id="Role_Id" class="form-control" placeholder="Role" onclick="removeer('servicetype_err')">
                            <option value=""> Select</option>
                            <?php foreach($rolelist as $i=> $role): ?>
                              <option value="<?=$role['Id']?>"> <?=$role['Role_Name']?></option>
                              <?php endforeach; ?>  
                          </select>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Upload Image:</label>
                        <input type="file" name="image" id="image" class="form-control" placeholder="Password" onclick="removeer('image_err')">
                        <span id="password_err" class="text-danger"></span>
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
