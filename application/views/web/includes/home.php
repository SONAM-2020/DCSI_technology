<div class="slider-with-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="slider-area">
                    <div class="slider-active owl-carousel">
                        <?php foreach($t_imageslider as $i=> $event): ?>
                        <div class="single-slide align-center-left  animation-style-01 bg-1" style="background-image: url('<?php echo base_url();?>uploads/<?php echo$event['Image'];?>">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h2 style="color: white;"><?php echo$event['Name'];?></h2>
                                <h3 style="color: white;">uploads/<?php echo$event['Description'];?></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
                
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <div class="li-banner" style="background-image: url('<?php echo base_url();?>uploads/banner.png">
                    <br>
                    <h3>I AM LOCAL SUPPLIER</h3>
                    <p style="color: black;">
                    Diversify your investment portfolio with access to highly curated and personalised deal flow from India and beyond  highly curated and personalised deal flow from</p>
                   
                    <div class="default-btn">
                        <a class="links" href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/localregister/')">Register Here</a>
                    </div>
                    <br>
                </div>
                <div class="li-banner mt-15 mt-sm-30 mt-xs-30" style="background-image: url('<?php echo base_url();?>uploads/banner.png">
                    <br>
                    <h2>I AM GLOBLE SUPPLIER</h2>
                    <p style="color: black;">
                    Diversify your investment portfolio with access to highly curated and personalised deal flow from India and beyond  highly curated and personalised deal flow from</p>
                    <div class="default-btn">
                        <a class="links" href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/globalregister/')">Register Here</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="li-static-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
                <div class="single-banner">
                    <a href="#">
                        <img src="<?php echo base_url();?>uploads/category1.png" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <div class="single-banner">
                    <a href="#">
                        <img src="<?php echo base_url();?>uploads/category2.png" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <div class="single-banner">
                    <a href="#">
                        <img src="<?php echo base_url();?>uploads/category3.png" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pt-60 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                        <?php  foreach($category_list as $i=> $itm): if($i==0){?>
                            <li><a class="active" data-toggle="tab" href="#product<?=$i?>"><span><?=$itm['Category_Name']?></span></a></li>
                        <?php  }else{?>
                            <li><a data-toggle="tab" href="#product<?=$i?>"><span><?=$itm['Category_Name']?></span></a></li>
                        <?php } endforeach; ?>
                    </ul>                
                </div>
            </div>
        </div>
        <div class="tab-content">
            <?php  foreach($category_list as $i=> $itm): 
            $query="SELECT p.`Id`,p.`Description`,p.`Last_Updated_Date`,p.`Model_No`,p.`Price`,p.`Product_Name`,i.`Image_Name`  FROM t_products_master p, t_product_images i WHERE p.`Category_Id` = ".$itm['Id']." AND p.`Id`=i.`Product_Id` AND p.`Status`='Active' GROUP BY p.Id, p.`Last_Updated_Date` DESC LIMIT 10 "; 
            $product_list=$this->db->query($query)->result_array();
                if($i==0){?>
                <div id="product<?=$i?>" class="tab-pane active show" role="tabpanel">
            <?php  }else{?>
                <div id="product<?=$i?>" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <?php  foreach($product_list as $i=> $pro): ?>
                            
                                <div class="col-lg-12">
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
                                                <h4><a class="product_name" href="#"><?=$pro['Product_Name']?></a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">Nu.<?=$pro['Price']?></span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php } endforeach; ?>
            
            <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel">
                        <div class="col-lg-12">
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="<?php echo base_url();?>uploads/product_large7.png" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Graphic Corner</a>
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
                                        <h4><a class="product_name" href="single-product.html">Kitchen Mini-Rack</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">Nu.1800</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="<?php echo base_url();?>uploads/product_large8.png" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Studio Design</a>
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
                                        <h4><a class="product_name" href="single-product.html">Kitchen Mini-Rack</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">Nu.1800</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="li-featured-product" class="tab-pane" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel">
                        <div class="col-lg-12">
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="<?php echo base_url();?>assest/website/images/product/large-size/3.jpg" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Graphic Corner</a>
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
                                        <h4><a class="product_name" href="single-product.html">Kitchen Mini-Rack</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">Nu.1800</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="<?php echo base_url();?>assest/website/images/product/large-size/5.jpg" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Studio Design</a>
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
                                        <h4><a class="product_name" href="single-product.html">Kitchen Mini-Rack</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">Nu.1800</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="<?php echo base_url();?>assest/website/images/product/large-size/7.jpg" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Graphic Corner</a>
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
                                        <h4><a class="product_name" href="single-product.html">Kitchen Mini-Rack</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">Nu.1800</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="<?php echo base_url();?>assest/website/images/product/large-size/9.jpg" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Studio Design</a>
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
                                        <h4><a class="product_name" href="single-product.html">Kitchen Mini-Rack</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">Nu.1800</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="<?php echo base_url();?>assest/website/images/product/large-size/11.jpg" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Graphic Corner</a>
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
                                        <h4><a class="product_name" href="single-product.html">Kitchen Mini-Rack</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">Nu.1800</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="<?php echo base_url();?>assest/website/images/product/large-size/12.jpg" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Studio Design</a>
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
                                        <h4><a class="product_name" href="single-product.html">Kitchen Mini-Rack</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">Nu.1800</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#">View Details</a></li>
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
