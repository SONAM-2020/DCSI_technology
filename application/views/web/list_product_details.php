<div class="content-wraper">
    <div class="container">
    <div class="row">
        <div class="product-active">
            <?php  foreach($product_details as $i=> $pro): ?>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-product-wrap">
                        <div class="product-image">
                            <a href="single-product.html">
                                <img src="<?=$pro['Image_Name']?>" alt="Li's Product Image">
                            </a> 
                        </div>
                        <div class="product_desc">
                            <div class="product_desc_info">
                                <div class="product-review">
                                    <h5 class="manufacturer">
                                        <a href="#"><?=$pro['Last_Updated_Date']?></a>
                                    </h5>
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3 style="text-align: center;"><a class="product_name" href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')"><?=$pro['Product_Name']?></a></h3>
                                <div class="price-box" style="text-align: center;">
                                    <span  class="new-price">Nu.<?=$pro['Price']?></span>
                                </div>
                            </div>
                            <div class="add-actions" style="text-align: center;">
                                <ul class="add-actions-link m-md-5" >
                                    <li class="add-cart active"><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')">View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</div>
