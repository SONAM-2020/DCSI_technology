<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list mb-1">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Add Products</li>
            </ul>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php if($message!=""){ ?>
                    <div class="alert alert-info text-center" id="messages">
                       <?=$message?>
                    </div>
                <?php } ?>
                <div class="widget-box">
                    <div class="widget-inner p-1">
                        <button class="btn btn-auccess pull-right" onclick="addproduct()" type="button"> <i class="fa fa-plus"></i> Add</button><br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th style="display: none;">Description</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($product_list as $i=> $pro): ?>
                                <tr>
                                    <td><?=$i+1?></td>
                                    <td><img style="width: 100px; height: 80px;" src="<?php echo $pro['Image_Name'];?>"></td>
                                    <td><?php echo $pro['Product_Name'];?></td>
                                    <td><?php echo $pro['Category_Name'];?></td>
                                    <td style="display: none;"><?php echo $pro['Description'];?></td>
                                    <td><?php echo $pro['Price'];?></td>
                                    <td><?php echo $pro['Stock'];?></td>
                                    <td><?php echo $pro['Status'];?></td>
                                    <td>
                                        <button type="button" class="btn-secondry btn-info btn-block"><a style="color: white;" href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/supplierpage/edit/<?php echo $pro['Id']?>')"><i class="fa fa-edit"></i>Edit</a></button> 
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
<div class="modal modal-default" id="add_modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wc-title">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                    <h4 class="modal-title" style="text-align: left;"><span id="modalheader"></span></h4>
                </div>
            </div>
            <div class="modal-body">
                <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label class="mb-0 mt-3">Product Name: <span class="text-danger">*</span></label>
                            <input type="text" id="product" onchange="remove_error('product_err','product')" name="product" class="form-control">
                            <span id="product_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label class="mb-0 mt-3">Category: <span class="text-danger">*</span></label>
                            <select class="form-control" name="category" id="category" onchange="remove_error('category_err','product')">
                                <option value=""> Select</option>
                                <?php foreach($category_list as $i=> $cat): ?>
                                    <option value="<?=$cat['Id']?>"> <?=$cat['Category_Name']?></option>
                                <?php endforeach;?>
                            </select>
                            <span id="category_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label class="mb-0 mt-3">Product Price: <span class="text-danger">*</span></label>
                            <input type="text" id="price" onchange="remove_error('price_err','price')" name="price" class="form-control">
                            <span id="price_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label class="mb-0 mt-3">Modal: </label>
                            <input type="text" id="modal" name="modal" class="form-control">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label class="mb-0 mt-3">Stock: </label><span style="color: red;"><i>Numbers Only</i></span>
                            <input type="number" id="stock" name="stock" class="form-control">
                        </div>
                         
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label class="mb-0 mt-3">Image1:<span class="text-danger">*</span></label><span style="color: red;"><i>(Recommended Size:500x500 px)</i></span>
                            <input type="file" id="Image" onchange="checkfilesize(this,'images','Image_err','addBtn')" name="Image1" class="form-control">
                            <span id="Image1_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label class="mb-0 mt-3">Image2:</label><span style="color: red;"><i>(Recommended Size:500x500 px)</i></span>
                            <input type="file" id="Image2" onchange="checkfilesize(this,'Image2','Image2_err','addBtn')" name="Image2" class="form-control">
                            <span id="Image2_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label class="mb-0 mt-3">Image3:</label><span style="color: red;"><i>(Recommended Size:500x500 px)</i></span>
                            <input type="file" id="Image3" onchange="checkfilesize(this,'Image3','Image3_err','addBtn')" name="Image3" class="form-control">
                            <span id="Image3_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                        <label class="mb-0 mt-3">Description:</label>
                            <textarea class="mb-0 form-control summernote" id="discription" name="discription" style="height: 70;" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row pt-2 pull-right">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                            <button type="button" class="btn-secondry" id="addBtn" onclick="addproducts()"><span id="btnspan"></span> Save Changes</button>
                        </div>
                    </div>
                    
                </form>
            </div>    
        </div>
    </div>
</div>
<script type="text/javascript">
     $(document).ready(function() {
    $('#example1').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
  $('.summernote').summernote({
      height:250
    });
    function remove_error(error,id){
        if($('#'+id).val()!=""){
            $('#'+error).html('');
        }
    }
    $(document).ready(function() {
      setInterval(function() {
        $('#messages').hide();
      }, 9000);
    }); 
    function addproduct(){
        $('#add_modal').modal('show');
    }
    function addproducts(){
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
            var url='<?php echo base_url();?>index.php?adminController/supplierpage/addproduct/';
            var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
            $("#addformId").ajaxSubmit(options);
            $('#add_modal').modal('hide');
            setTimeout($.unblockUI, 600); 
        }
    }
    function validateaddform(){
        let returntype=true;
        if($('#product').val()==""){
            $('#product_err').html('name is required');
            returntype=false;
            $('#product').focus();
        }
        if($('#category').val()==""){
            $('#category_err').html('select category');
            returntype=false;
            $('#category').focus();
        }
        if($('#price').val()==""){
            $('#price_err').html('expected price is required');
            returntype=false;
            $('#price').focus();
        }
        if($('#Image1').val()==""){
            $('#Image1_err').html('atleast one image should be upload');
            returntype=false;
            $('#Image1').focus();
        }
        return returntype;
    }
</script> 
