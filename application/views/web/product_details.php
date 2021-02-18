<div class="content-wraper">
    <div class="container">
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
                <div class="product-details-left">
                    <div class="product-details-images slider-navigation-1" id="AboutUsSlider" style="width: 100%; display: inline-block;">
                    	<?php  foreach($product_images_details as $i=> $img):?>
                    		<div class="lg-image">
	                            <a class="popup-img venobox vbox-item" href="<?=$img['Image_Name']?>" data-gall="myGallery">
	                                <img src="<?=$img['Image_Name']?>" alt="product image">
	                            </a>
	                        </div>
                	 	<?php endforeach; ?>
                    </div>
                    <!-- <div class="product-details-thumbs slider-thumbs-1">  
                    	<?php  foreach($product_images_details as $i=> $image):?>
                    		 <div class="sm-image">ff:<img src="<?=$image['Image_Name']?>" alt="product image thumb"></div>
                	 	<?php endforeach; ?>                                      
                    </div> -->
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content pt-60">
                    <div class="product-info">
                        <h2><?=$product_details->Product_Name?></h2>
                        <span class="product-details-ref">Modal: <?=$product_details->Model_No?></span>
                        <div class="rating-box pt-20">
                            <ul class="rating rating-with-review-item">
                                <li class="review-item"><a href="#"><?=$product_details->Last_Updated_Date?> </a></li>
                            </ul>
                        </div>
                        <div class="price-box pt-20">
                            <span class="new-price new-price-2">Nu. <?=$product_details->Price?></span>
                        </div>
                        <div class="product-desc">
                            <p>
                                <span><?=$product_details->Description?>
                                </span>
                            </p>
                        </div>
                        <br>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
    $("#AboutUsSlider").slick({
        infinite:true,
        centerMode: true,
        variableWidth: true,
        dots: true,
        speed: 500,
        cssEase: 'linear',
        useTransform:false,
//      autoplay: true,
//      autoplaySpeed: 6000,
        arrows: true
    });
});
</script>

