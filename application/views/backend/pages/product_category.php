<main class="ttr-wrapper">
    <div class="container-fluid">
      <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">Product Category</h4>
        <ul class="db-breadcrumb-list">
          <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
          <li>Product Category</li>
        </ul>
      </div>
      <div class="row">
        <div class="col-lg-12 m-b30">
          <div class="widget-box">
            <div class="wc-title">
              <h4>Add/View Product Category</h4>
            </div>
            <br>
            <div><button class="btn-secondry fa-pull-right" onclick="addinfo()" type="button">Add Category</button></div>
            <br>
            <div class="widget-inner">
              <table id="table1" class="table table-bordered table-striped" class="display" style="width:100%">
                <thead style="text-align: center">
                <tr>
                  <th>No.</th>
                  <th>Category Name</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody style="text-align: center">
                <?php foreach($categoryList as $i=> $event): ?>
                <tr>
                  <td><?=$i+1?></td>
                  <td><?php echo $event['Category_Name'];?></td>
                  <td style="display: none;"><?php echo $event['Description'];?></td>
                  <td><a href="<?php echo base_url();?>uploads/CategoryImage/<?php echo$event['Image'];?>" target="_blank"><img src="<?php echo base_url();?>uploads/CategoryImage/<?php echo$event['Image'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/1.png'" width="100" align="left"></a></td>
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
                    <button type="button" class="btn" onclick="editCategory('<?php echo $event['Id']?>','<?php echo $event['Category_Name']?>','<?php echo $event['Status']?>','<?php echo $event['Description'];?>','uploads/CategoryImage/<?php echo $event['Image']?>','uploads/CategoryImage/<?php echo $event['Image']?>')"><i class="fa fa-edit"></i>Edit</button> 
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
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                <h4 class="modal-title" style="text-align: left;"><span id="modalheader"></span></h4>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                  <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                          <label>Category Name: <span class="text-danger">*</span></label>
                            <input type="text" id="name" onclick="remove_err('Name_err')" name="name" class="form-control">
                            <span id="Name_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                          <label>Image:<span class="text-danger">*</span></label><span style="color: red;"><i>(Recommended Size:376x230 px)</i></span>
                            <input type="file" id="Image" onchange="checkfilesize(this,'images','Image_err','addBtn')" name="Image" class="form-control">
                            <span id="Image_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                          <label>Description: <span class="text-danger">*</span></label>
                             <textarea class="mb-0 form-control" id="discription" onclick="remove_err('Discription_err)" name="discription" style="height: 70;" class="form-control"></textarea>
                            <span id="Discription_err" class="text-danger"></span>
                        </div>
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
<div class="modal modal-default" id="EditCategory">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="wc-title">
            <br>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                  <h4 class="modal-title" style="text-align: left;"><span id="modeledit"></span></h4>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'editformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                  <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                          <label>Category Name:<span class="text-danger">*</span></label>
                            <input type="text" id="Name" onclick="remove_err('Name_err')" name="Name" class="form-control">
                            <span id="Name_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                          <label>Category Status: <span class="text-danger">*</span></label>
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
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                          <label>Description: <span class="text-danger">*</span></label>
                            <textarea class="mb-0 form-control" id="discription3" onclick="remove_err('Discription_err)" name="discription3" style="height: 70;" class="form-control"></textarea>
                            <span id="Discription_err" class="text-danger"></span>
                        </div>
                    </div>
               </div>
               <br>
               <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                  <input type="hidden" name="updateId" id="updateId">
                  <button type="button" class="btn-secondry fa-pull-right" id="addBtn" onclick="editcategory()"><span id="editbtnspan"></span></button><br><br>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function addinfo(){
      $('#actiontype').val('add');
      $('#modalheader').html('Add Product Category');
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
          var url='<?php echo base_url();?>index.php?adminController/AddCategory';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
          $("#addformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#addbioDetails').modal('hide');
    }
    }

    function validateaddform(){
      var retrtype=true;
      if($('#name').val()==""){
        $('#Name_err').html('Please mention the title.');
        retrtype=false;
      }
      if($('#discription').val()==""){
        $('#Discription_err').html('Please Select the category Status.');
        retrtype=false;
      }
      if($('#Image').val()==""){
        $('#Image_err').html('Image is required');
        retrtype=false;
      }
      return retrtype;
    }
    function editcategory(){
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
        var url='<?php echo base_url();?>index.php?adminController/EditCategoy/';
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editformId").serialize()}; 
        $("#editformId").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
        $('#EditCategory').modal('hide');
    }
  }
  function validateeditform(){
      var retrtype=true;
      if($('#Name').val()==""){
        $('#Name_err').html('Please mention the category Name.');
        retrtype=false;
      }
      if($('#discription3').val()==""){
        $('#Discription_err').html('Please mention the category description.');
        retrtype=false;
      }
      return retrtype;
    }

    function editCategory(id,name,status,discription,imageId,image){
      $('#Name').val(name);
      $('#category').val(status);
      $('#discription3').val(discription);
      $('#updateId').val(id);
      $('#uploadedImage').val(imageId);
      $('#loadimage').html('<img src="'+image+'" alt="no imaged" width="100%" align="left">');
      $('#actiontype').val('add');
      $('#modeledit').html('Edit Product Category');
      $('#editbtnspan').html('<i class="fa fa-save"></i> Save Details');
      $('#EditCategory').modal('show');
    }
</script> 
