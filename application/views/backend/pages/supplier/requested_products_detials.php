<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list mb-1">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Products</li>
            </ul>
        </div>
        <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                    <label class="mb-0 mt-3">Product Name: <?=$product_details->Product_Name?></label>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                    <label class="mb-0 mt-3">Product Price: <?=$product_details->Price?></label>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                    <label class="mb-0 mt-3">Modal: <?=$product_details->Model_No?></label>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                    <label class="mb-0 mt-3">Description: <?=$product_details->Description?></label>
                </div>
                
            </div>
        </form>
    </div>
</div>