
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h4 class="alert alert-info">Add Staff & Team</h4>
        </div>
        <div class="box-body">
         <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'adduserform', 'enctype' => 'multipart/form-data'));?>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Name:</label>
                          <input type="text" name="Name" id="Name" class="form-control" placeholder="Name" onclick="removeer('name_err')">
                          <span id="name_err"  class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>E-mail:</label>
                          <input type="text" name="Email" id="Email" class="form-control" placeholder="E-mail" onclick="removeer('email_err')">
                          <span id="email_err"  class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Place of Birth:</label>
                          <input type="text" name="Place" id="Place" class="form-control" placeholder="Place of Birth" onclick="removeer('place_err')">
                        <span id="place_err" class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Date of Birth:</label>
                        <input type="text" name="date" id="date" class="form-control" placeholder="Date of Birth" onclick="removeer('date_err')">
                        <span id="date_err" class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Position:</label>
                          <select name="Role_Id" id="Role_Id" class="form-control" placeholder="Role" onclick="removeer('position_err')">
                            <option value=""> Select</option>
                            <?php foreach($rolelist as $i=> $role): ?>
                              <option value="<?=$role['Id']?>"> <?=$role['Role_Name']?></option>
                              <?php endforeach; ?>  
                          </select>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Phone:</label>
                        <input type="Number" name="phone" id="phone" class="form-control" placeholder="Phone Number" onclick="removeer('phone_err')">
                        <span id="phone_err" class="text-danger"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Area of Expertise:</label>
                        <input type="text" name="Expertise" id="Expertise" class="form-control" placeholder="Area of Expertise" onclick="removeer('expertise_err')">
                        <span id="expertise_err" class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Upload Image:</label>
                        <input type="file" name="image" id="image" class="form-control" placeholder="Password" onclick="removeer('image_err')">
                        <span id="password_err" class="text-danger"></span>
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
