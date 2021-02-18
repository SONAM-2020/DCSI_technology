<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Silder</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Manage Image Slider</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add/View Images</h4>
						</div>
						<br>
						<div><button class="btn-secondry fa-pull-right" onclick="addinfo()" type="button">Add</button></div>
						<br>
						<div class="widget-inner">
							<table id="example1" class="table table-bordered table-striped">
						    <thead style="text-align: center">
						    <tr>
						      <th>No.</th>
                  <th>Slider Name</th>
						      <th style="display: none;">Slider Description</th>
                  <th>Links</th>
						      <th>Image</th>
                  <th>Status</th>
						      <th>Action</th>
						    </tr>
						    </thead>
						    <tbody style="text-align: center">
						    <?php foreach($ImageSlider as $i=> $event): ?>
						    <tr>
						      <td><?=$i+1?></td>
                  <th><?php echo $event['Name'];?></th>
						      <td style="display: none;"><?php echo $event['Description'];?></td>
                  <th><?php echo $event['Links'];?></th>
						      <td><a href="<?php echo base_url();?>uploads/Imageslider/<?php echo$event['Image'];?>" target="_blank"><img src="<?php echo base_url();?>uploads/Imageslider/<?php echo$event['Image'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/1.png'" width="100" align="left"></a></td>
                  <td>
                    <?php if($event['Status']=="Active"){ ?>
                          <span class="btn">
                              <?php echo $event['Status'];?>
                          </span>
                      <?php } else{?>   
                          <span class="btn-secondry">
                              <?php echo $event['Status'];?>
                          </span> 
                      <?php }?>

                  </td>
						      <td>
                    <button type="button" class="btn-secondry btn-danger btn-block" onclick="editdetails('<?php echo $event['Id']?>','<?php echo $event['Name']?>','<?php echo $event['Description']?>','<?php echo $event['Links']?>','uploads/Imageslider/<?php echo $event['Image']?>','uploads/Imageslider/<?php echo $event['Image']?>')"><i class="fa fa-edit"></i>Edit</button> 
                    <br><br>
						       <button type="button" class="btn btn-danger btn-block" onclick="deleteslider(<?php echo $event['Id'];?>)"><i class="fa fa-times"></i>Delete</button>
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
          	<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
          		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
            <h4 class="modal-title" style="text-align: left;"><span id="modalheader"></span></h4>
          		</div>
			</div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                          <label>Name: <span class="text-danger">*</span></label>
                            <input type="text" id="name" onclick="remove_err('Name_err')" name="name" class="form-control">
                            <span id="Name_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label>Image:<span class="text-danger">*</span></label><span style="color: red;"><i>(Recommended Size:370x230px)</i></span>
                            <input type="file" id="Image" onchange="checkfilesize(this,'images','Image_err','addBtn')" name="Image" class="form-control">
                            <span id="Image_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                          <label>Website Links: <span class="text-danger">*</span></label>
                            <input type="text" id="links" onclick="remove_err('Links_err')" name="links" class="form-control">
                            <span id="Links_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                            <label>Description: <span class="text-danger">*</span></label>
                            <textarea id="description" onclick="remove_err('Description_err')" name="description" class="form-control"></textarea>
                          </div>
                        </div>
                        <br>
                        
                    </div>
               </div>
               <br>
               <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn-secondry fa-pull-right" id="addBtn" onclick="AddInfo()"><span id="btnspan"></span></button><br><br>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>

<div class="modal modal-default" id="EditDetails">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="wc-title">
            <br>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
            <h4 class="modal-title" style="text-align: left;"><span id="modeledit"></span></h4>
              </div>
      </div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'editformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                          <label>Name: <span class="text-danger">*</span></label>
                            <input type="text" id="Name" onclick="remove_err('Name_err')" name="Name" class="form-control">
                            <span id="Name_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                          <label>Status: <span class="text-danger">*</span></label>
                            <select name="category" id="category" class="form-control">
                              <option value="Active">Active</option>
                              <option value="InActive">InActive</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label>Current Image</label><br />
                          <span id="loadimage"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label>Image:</label><span style="color: red;"><i>(Recommended Size:370x230px)</i></span>
                             <input type="hidden" name="uploadedImage" id="uploadedImage"> 
                             <input type="file" id="uploadedImageedit" name="uploadedImageedit" class="form-control">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                          <label>Website Links: <span class="text-danger">*</span></label>
                            <input type="text" id="links1" onclick="remove_err('Links1_err')" name="links1" class="form-control">
                            <span id="Links1_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                            <label>Description: <span class="text-danger">*</span></label>
                            <textarea id="Description" onclick="remove_err('Description_err')" name="Description" class="form-control"></textarea>
                        </div>
                      </div>
                        <br>
               </div>
               <br>
               <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                   <input type="hidden" name="sliderId" id="sliderId">
                  <button type="button" class="btn-secondry fa-pull-right" id="addBtn" onclick="EditImageSlider()"><span id="btnspanedit"></span></button><br><br>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function addinfo(){
      $('#actiontype').val('add');
      $('#modalheader').html('Add Image Slider');
      $('#btnspan').html('<i class="fa fa-save"></i> Add Details');
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
          var url='<?php echo base_url();?>index.php?adminController/AddSlider';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
          $("#addformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#addbioDetails').modal('hide');
    }
    }

    function validateaddform(){
      var retrtype=true;
      if($('#name').val()==""){
        $('#name_err').html('Please mention Sider Name');
        retrtype=false;
      }
      if($('#description').val()==""){
        $('#Description_err').html('Please mention Slider Description');
        retrtype=false;
      }
      if($('#image').val()==""){
        $('#Image_err').html('Image is required');
        retrtype=false;
      }
      if($('#links').val()==""){
        $('#Links_err').html('Website Link is required');
        retrtype=false;
      }
      return retrtype;
    }
   function deleteslider(id){
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
        var url='<?php echo base_url();?>index.php?adminController/Deleteslider/'+id+'/imageslider';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
    function editdetails(id,name,descript,links,imageId,image){
      $('#Name').val(name);
      $('#Description').val(descript);
      $('#links1').val(links);
      $('#sliderId').val(id);
      $('#uploadedImage').val(imageId);
      $('#loadimage').html('<img src="'+image+'" alt="no imaged" width="100%" align="left">');
      $('#actiontype').val('add');
      $('#modeledit').html('Edit Image Slider');
      $('#btnspanedit').html('<i class="fa fa-save"></i> Save Details');
      $('#EditDetails').modal('show');
    }
  function EditImageSlider(){
      if(validateeditform()){
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
        var url='<?php echo base_url();?>index.php?adminController/EditSliders/';
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editformId").serialize()}; 
        $("#editformId").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
        $('#EditDetails').modal('hide');
    }
  }
  function validateeditform(){
      var retrtype=true;
      if($('#Name').val()==""){
        $('#Name_err').html('Please mention Sider Name');
        retrtype=false;
      }
      if($('#Description').val()==""){
        $('#Description_err').html('Please mention Slider Description');
        retrtype=false;
      }
      if($('#links1').val()==""){
        $('#Links1_err').html('Website Link is required');
        retrtype=false;
      }
      return retrtype;

    }
</script> 