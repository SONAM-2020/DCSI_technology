<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-banner shop-page-banner">
                </div>
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                        </div>
                        <div class="toolbar-amount">
                        </div>
                    </div>
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sort By:</p>
                            <select class="nice-select">
                                <?php  
                                foreach($category_list as $i=> $des):
                              ?>
                                <option value="<?=$des['Id'];?>"> <?=$des['Category_Name'];?></option>
                              <?php 
                                endforeach; 
                              ?>
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src=" " alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html"></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">Nu.</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="shopping-cart.html">View Details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane product-list-view fade" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/2.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite Sound via Ring Radiator Technology. Stream And Control R3 Speakers Wirelessly With Your Smartphone. Sophisticated, Modern Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>