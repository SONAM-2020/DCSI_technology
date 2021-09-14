<!-- <div class="content-wraper pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="shop-products-wrapper">
                <div class="tab-content">
                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                        <div class="product-area shop-product-area">
                            <div class="row">
                                <?php  foreach($product_details as $i=> $pro): ?>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-40" >
                                        <div class="single-product-wrap" style="border: 4px solid black;">
                                            <div class="product-image">
                                                <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')">
                                                    <img src="<?=$pro['Image_Name']?>" alt="Li's Product Image">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h3 style="text-align: center;"><a class="product_name" href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')"><?=$pro['Product_Name']?></a></h3>
                                                    <div class="price-box" style="text-align: center;">
                                                        <span  class="new-price">Nu.<?=$pro['Price']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-actions" style="text-align: center;">
                                                <ul class="add-actions-link m-md-5" >
                                                <li class="add-cart active"><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
                    

 -->

  <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 order-1 order-lg-2">
                            <!-- <div class="single-banner shop-page-banner">
                                <a href="#">
                                    <img src="images/bg-banner/2.jpg" alt="Li's Static Banner">
                                </a>
                            </div> -->
                           <!--  <div class="shop-top-bar mt-30">
                                <div class="product-select-box">
                                    <div class="product-short">
                                        <p>Sort By:</p>
                                        <select class="nice-select">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            <div class="shop-products-wrapper" style="background-color:#ffffff">
                                <div class="tab-content">
                                    <div id="list-view" class="tab-pane fade product-list-view active show" role="tabpanel">
                                        <div class="row">
                                            <div class="col">
                                                <?php  foreach($product_details as $i=> $pro): ?>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="<?=$pro['Image_Name']?>" alt="Li's Product Image">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')"><?=$pro['Product_Name']?></a>
                                                                    </h5>
                                                                </div>
                                                                <h4><a class="product_name" href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')"><?=$pro['Product_Name']?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">Nu.<?=$pro['Price']?></span>
                                                                </div>
                                                                <p style="text-align:justify;"><?=  substr(strip_tags($pro['Description']), 0, 300).'............';?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                            <br><br><br>
                                                             <button class="register-button mt-0" id="createorderbtn" type="button" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')">View Product Details</button>
                                                    </div>
                                                </div>
                                                 <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
