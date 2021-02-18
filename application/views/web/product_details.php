<div class="content-wraper">
    <div class="container">
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
                <div class="product-details-left">
                    <div class="product-details-images slider-navigation-1" id="productSlider" style="width: 100%; display: inline-block;">
                    	<?php  foreach($product_images_details as $i=> $img):?>
                    		<div class="lg-image">
	                            <a class="popup-img venobox vbox-item" href="#" data-gall="myGallery">
	                                <img src="<?=$img['Image_Name']?>" alt="product image">
	                            </a>
	                        </div>
                	 	<?php endforeach; ?>
                    </div>
                    <!-- <div class="product-details-thumbs slider-thumbs-1">  
                    	<?php  foreach($product_images_details as $i=> $image):?>
                    		 <div class="sm-image"><img src="<?=$image['Image_Name']?>" alt="product image thumb"></div>
                	 	<?php endforeach; ?>                                      
                    </div> -->
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content pt-60">
                    <div class="product-info">
                        <h2><?=$product_details->Product_Name?></h2>
                        <span class="product-details-ref">Modal: <?=$product_details->Model_No?>
                        <div class="rating-box pull-right ">
                            <a href="#"><?=$product_details->Last_Updated_Date?> </a>
                        </div>
                        </span>
                        <div class="rating-box pt-20">
                            <ul class="rating rating-with-review-item">
                                <li class="fa fa-home"><a href="#">Company: <?=$company_details->Company_Description?></a></li><br>
                                <li class="fa fa-phone"><a href="#">Contact:<?=$company_details->Telephone_No?> </a></li>
                            </ul>
                        </div>
                        <div class="price-box pt-20">
                            <span class="new-price new-price-2">Nu. <?=$product_details->Price?></span>
                        </div>
                        <div class="product-desc mb-0">
                            <p>
                                <span><?=$product_details->Description?>
                                </span>
                            </p>
                        </div>
                        <div class="single-add-to-cart">
                            <form action="#" class="cart-quantity" id="orderform">
                                <button class="add-to-cart" id="createorderbtn" type="button" onclick="orderpage('<?=$product_details->Id?>')">Create Order</button>
                                <div id="createform" style="display:none">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                            <span>Please provide following details. You will be contacted through the folloiwng contact information by the supplier</span>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                            <label class="mb-1">Name<span class="text-danger">*</span></label> 
                                            <input class="mb-0 form-control" type="text" name="name" id="name" placeholder="Name" onchange="remove_err('name_err','name')" >
                                            <span id="name_err" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                            <label class="mb-1">Contact No<span class="text-danger">*</span></label> 
                                            <input class="mb-0 form-control" type="text" name="contact" id="contact" placeholder="Contact" onchange="remove_err('contact_err','contact')" >
                                            <span id="contact_err" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                            <label class="mb-1">Email:<span class="text-danger">*</span></label> 
                                            <input class="mb-0 form-control" type="email" name="email" id="email" placeholder="Email" onchange="remove_err('email_err','email')" >
                                            <span id="email_err" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 mb-20">
                                            <label class="mb-1">Quantity:<span class="text-danger">*</span></label> 
                                            <input class="mb-0 form-control" type="number" name="quantity" id="quantity" value="1" onchange="remove_err('quantity_err','quantity')">
                                            <span id="quantity_err" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="productId" value="<?=$product_details->Id?>">
                                    <input type="hidden" name="companyId" value="<?=$company_details->Id?>">
                                    <button class="add-to-cart" id="createorderbtn" type="button" onclick="submitorder('<?=$product_details->Id?>')">Submit Order</button>
                                </div>
                            </form>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
    $("#productSlider").slick({
        infinite:true,
        centerMode: true,
        variableWidth: true,
        dots: true,
        speed: 500,
        cssEase: 'linear',
        useTransform:false,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: true
    });
});
</script>

<script>
    function orderpage(){
            $('#createform').show();
            $('#createorderbtn').hide();
            
    }
    function validateorderform(){
        let returntype=true;
        if($('#name').val()==""){
            $('#name_err').html('Please mention your name');
            returntype=false;
        }
        if($('#contact').val()==""){
            $('#contact_err').html('Please mention your contact number');
            returntype=false;
        }
        if($('#email').val()==""){
            $('#email_err').html('Please mention your email');
            returntype=false;
        }
        if(parseInt($('#quantity').val())<1){
            $('#quantity_err').html('Quantity cannot be less then 1');
            returntype=false;
        }
        return returntype;
    }
    function submitorder(id){
        if(validateorderform()){
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
            var url='<?php echo base_url();?>index.php?baseController/createorder';
            var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#orderform").serialize()}; 
            $("#orderform").ajaxSubmit(options);
            setTimeout($.unblockUI, 600); 
        }
    }
</script>
