<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list mb-1">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Edit Products</li>
            </ul>
        </div>
        <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                    <label class="mb-0 mt-3">Product Name: <span class="text-danger">*</span></label>
                    <input type="text" id="product" value="<?=$product_details->Product_Name?>" onchange="remove_error('product_err','product')" name="product" class="form-control">
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
                    <input type="text" id="price" value="<?=$product_details->Price?>" onchange="remove_error('price_err','price')" name="price" class="form-control">
                    <span id="price_err" class="text-danger"></span>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                    <label class="mb-0 mt-3">Modal: </label>
                    <input type="text" id="modal" value="<?=$product_details->Model_No?>" name="modal" class="form-control">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                    <label class="mb-0 mt-3">Stock: </label><span style="color: red;"><i>Numbers Only</i></span>
                    <input type="number" id="stock" value="<?=$product_details->Stock?>" name="stock" class="form-control">
                </div>
                 <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                    <label class="mb-0 mt-3">Sold/ Not Sold:</label><br>
                    <input type="radio" name="sold" value="Sold"> Sold
                    <input type="radio" name="sold" value="Not_Sold"> Not Sold
                </div>
                <?php foreach($product_images as $i=> $img): ?>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                        <img style="width: 100px; height: 80px;" src="<?php echo $img['Image_Name'];?>"><br>
                        <input type="hidden" name="existimage<?=$i+1?>" value="<?=$img['Image_Name']?>">
                        <input type="hidden" name="existimageId<?=$i+1?>" value="<?=$img['Id']?>">
                        <label class="mb-0 mt-3">Image<?=$i+1?>:</label><span style="color: red;"><i>(Recommended Size:500x500 px)</i></span>
                        <input type="file" id="Image<?=$i+1?>" onchange="checkfilesize(this,'images','Image_err','addBtn')" name="Image<?=$i+1?>" class="form-control">
                        <span id="Image<?=$i+1?>_err" class="text-danger"></span>
                    </div>
                <?php endforeach;?>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                    <label class="mb-0 mt-3">Status:</label><br>
                    <input type="radio" name="current_status" value="Active"> Active
                    <input type="radio" name="current_status" value="InActive"> In Active
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                    <label class="mb-0 mt-3">Description:</label>
                    <textarea class="mb-0 form-control summernote" id="discription" name="discription" style="height: 70;" class="form-control">
                    <?=$product_details->Description?></textarea>
                </div>
                
            </div>
            <div class="row pt-2 pull-right">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                    <input type="hidden" name="productId" value="<?=$product_details->Id?>">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                    <button type="button" class="btn-secondry" id="addBtn" onclick="addproducts()"><span id="btnspan"></span> Save Changes</button>
                </div>
            </div>
            
        </form>
    </div>
</div><br><br><br><br>
<script>
    $('.summernote').summernote({
      height:250
    });
    $('#category').val('<?=$product_details->Category_Id?>');
    $('input[name=sold][value="<?=$product_details->Sold_Status?>"]').prop('checked',true);
    $('input[name=current_status][value="<?=$product_details->Status?>"]').prop('checked',true);
    function addproducts(){
        if(validateaddformedit()){
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
            var url='<?php echo base_url();?>index.php?adminController/supplierpage/editproduct/';
            var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
            $("#addformId").ajaxSubmit(options);
            $('#add_modal').modal('hide');
            setTimeout($.unblockUI, 600); 
        }
    }
    function validateaddformedit(){
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
        
        return returntype;
    }
</script>