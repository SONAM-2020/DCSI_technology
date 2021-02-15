<div class="content-wraper pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="shop-products-wrapper">
                <div class="tab-content">
                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                        <div class="product-area shop-product-area">
                            <div class="row">
                                <?php  foreach($searchResult as $i=> $itm):?>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="<?=$itm['Image_Name']?>" alt="Li's Product Image">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="#"><?=$itm['Last_Updated_Date']?></a>
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
                                                    <h4><a class="product_name" href="#"><?=$itm['Product_Name']?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">Nu. <?=$itm['Price']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#"><i class="fa fa-eye"></i> View Details</a></li>
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
                    

