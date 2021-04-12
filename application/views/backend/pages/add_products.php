<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Products</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Products</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add/View Products</h4>
						</div>
						<br>
						<div><button class="btn-secondry fa-pull-right" onclick="addinfo()" type="button">Add</button></div>
						<br>
						<div class="widget-inner">
							<table id="example1" class="table table-bordered table-striped">
						    <thead style="text-align: center">
						    <tr>
						      <th>No.</th>
						      <th>Name</th>
                  <th>Category</th>
						      <!-- <th style="display: none;">Description</th> -->
						      <th>Price</th>
                  <th>Status</th>
						      <th>Image</th>
						      <th>Action</th>
						    </tr>
						    </thead>
						    <tbody style="text-align: center">
						    <?php foreach($add_products as $i=> $event): ?>
						    <tr>
						      <td><?=$i+1?></td>
	              	<td><?php echo $event['name'];?></td>
                  <td><?php echo $event['categoryId'];?></td>
						      <!-- <td style="display: none;"><?php echo $event['description'];?></td> -->
						      <td><?php echo $event['price'];?></td>
                  <td><?php echo $event['status'];?></td>
						      <td><img style="width: 100px; height: 100px;" src="<?php echo $event['Image'];?>"></td></td>
						      <td>
                    <button type="button" class="btn-secondry btn-info btn-block"><a style="color: white;" href="<?php echo base_url();?>index.php?adminController/loadpage/ProductEdit/<?php echo $event['Id']?>"><i class="fa fa-edit"></i>Edit</a></button> 
                    <br>
						       <button type="button" class="btn btn-danger btn-block" onclick="deleteproduct(<?php echo $event['Id'];?>)"><i class="fa fa-times"></i>Delete</button>
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
          	<div class="col-12">
          		<div class="col-6">
            <h4 class="modal-title" style="text-align: left;"><span id="modalheader"></span></h4>
          		</div>
			</div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-12">
                  <div class="row">
                    <div class="col-6">
                          <label>Select Product Category: <span class="text-danger">*</span></label>
                            <select class="form-control pager" onclick="remove_err('Category_Name_err')" name="Category_Name" id="Category_Name">
                            <option value="">Select</option>
                            <?php  
                                foreach($categoryList as $i=> $cat):
                              ?>
                              <option value="<?php echo$cat['Id'];?>"> <?php echo$cat['Name'];?></option>
                              <?php 
                                endforeach; 
                              ?>
                            
                            </select>
                        </div>
                        <div class="col-6">
                          <label>Select Product Sub-Category: <span class="text-danger">*</span></label>
                            <select class="form-control pager" onclick="remove_err('Sub_Category_Name_err')" name="Sub_Category_Name" id="Sub_Category_Name">
                            <option value="">Select</option>
                            <?php  
                                foreach($subcategorylist as $i=> $cat):
                              ?>
                              <option value="<?php echo$cat['Id'];?>"> <?php echo$cat['sub_category_name'];?></option>
                              <?php 
                                endforeach; 
                              ?>
                            
                            </select>
                        </div>
                        <div class="col-6">
                          <label>Name of Product: <span class="text-danger">*</span></label>
                            <input type="text" id="name" onclick="remove_err('Name_err')" name="name" class="form-control">
                            <span id="Name_err" class="text-danger"></span>
                        </div>
                        <div class="col-6">
                          <label>Display Status: <span class="text-danger">*</span></label><br>
                          <select class="form-control" onclick="remove_err('Status_err')" name="Status" id="Status">
                          	  <option value="-1">Select</option>
              							  <option value="Yes">Yes</option>
              							  <option value="No">No</option>
              							</select>
                        </div>
                        <br>
                        <div class="col-6">
                            <label>Images of Product:<span class="text-danger">*</span></label><span style="color: red;"><i>(Image Size:700*420)</i></span>
                            <input type="file" id="Image" onchange="checkfilesize(this,'images','Image_err','addBtn')" onclick="remove_err('Image_err')" name="Image" class="form-control">
                            <span id="Image_err" class="text-danger"></span>
                        </div>
                        <div class="col-6">
                          <label>Price of Product: <span class="text-danger">*</span></label>
                            <input type="number" id="price" onclick="remove_err('Price_err')" name="price" class="form-control">
                            <span id="Price_err" class="text-danger"></span>
                        </div>
                        <br>
                      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label>Description of Product: <span class="text-danger">*</span></label>
                            <textarea id="description" onclick="remove_err('Description_err')" name="description" class="form-control"></textarea>
                        </div>
                    </div>
               </div>
               <br>
               <div class="col-12">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn-secondry fa-pull-right" id="addBtn" onclick="AddInfo()"><span id="btnspan"></span></button><br><br>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
    function addinfo(){
      $('#actiontype').val('add');
      $('#modalheader').html('Add Product');
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
          var url='<?php echo base_url();?>index.php?adminController/Addproduct';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
          $("#addformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#addbioDetails').modal('hide');
    }
    }

    function validateaddform(){
       var retrtype=true;
      if($('#Name').val()==""){
        $('#Name_err').html('Please mention the Product Name.');
        retrtype=false;
      }
      if($('#description').val()==""){
        $('#Description_err').html('Please mention Product Description');
        retrtype=false;
      }
      if($('#image').val()==""){
        $('#Image_err').html('Please Select Product Image');
        retrtype=false;
      }
      if($('#Price').val()==""){
        $('#Price_err').html('Please Enter Price');
        retrtype=false;
      }
      if($('#Category_Name').val()==""){
        $('#Category_Name_err').html('Please Select Category');
        retrtype=false;
      }
      if($('#Sub_Category_Name').val()==""){
        $('#Sub_Category_Name_err').html('Please Select Sub-Category');
        retrtype=false;
      }
      if($('#Status').val()==""){
        $('#Status_err').html('Please Select Status');
        retrtype=false;
      }
      return retrtype;
    }
   function deleteproduct(id){
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
        var url='<?php echo base_url();?>index.php?adminController/deleteproduct/'+id+'/products';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
</script> 
