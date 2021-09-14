<div class="li-static-banner pt-20 pt-sm-30 pt-xs-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="slider-area">
                    <div class="slider-active owl-carousel">
                        <?php foreach($t_imageslider as $i=> $event): ?>
                        <div class="single-slide align-center-left  animation-style-01 bg-1" style="background-image: url('<?php echo base_url();?>uploads/Imageslider/<?php echo$event['Image'];?>">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h2 style="color: white;"><?php echo$event['Name'];?></h2>
                                <h3 style="color: white;"><?php echo$event['Description'];?></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links bg-info text-white" href="<?php echo$event['Links'];?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
                <br><br><br><br><br><br>
        </div>
    </div>
</div>
<br><br>
<div class="li-static-banner">
    <div class="container">
        <div class="row">
            <?php foreach($t_imagecategory as $i=> $event): ?>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="single-banner">
                    <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_allproductdetails/<?=$event['Id']?>')">
                        <img src="uploads/CategoryImage/<?=$event['Image']?>" alt="CSI Product">
                    </a>
                </div>
            </div>
            <br><br><br>
            <?php endforeach; ?>
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
            $query="SELECT  p.`Id`,p.`Description`,p.`Last_Updated_Date`,p.`Model_No`,p.`Price`,p.`Product_Name`,i.`Image_Name`  FROM t_products_master p, t_product_images i WHERE p.`Category_Id` = ".$itm['Id']." AND p.`Id`=i.`Product_Id` AND p.`Status`='Active' GROUP BY p.Id, p.`Last_Updated_Date` DESC LIMIT 10 "; 
                $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));") ;
                $product_list=$this->db->query($query)->result_array();
                if($i==0){?>
                <div id="product<?=$i?>" class="tab-pane active show" role="tabpanel">
                <?php  }else{?>
                <div id="product<?=$i?>" class="tab-pane" role="tabpanel">
                <?php }?>
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <?php  foreach($product_list as $i=> $pro): ?>
                                <div class="col-lg-12">
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_productdetails/<?=$pro['Id']?>')">
                                                <img src="<?=$pro['Image_Name']?>" alt="Csi Product Image">
                                            </a> 
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <!--<div class="product-review">-->
                                                <!--    <h5 class="manufacturer">-->
                                                <!--        <a href="#"><?=$pro['Last_Updated_Date']?></a>-->
                                                <!--    </h5>-->
                                                <!--    <div class="rating-box">-->
                                                <!--        <ul class="rating">-->
                                                <!--            <li><i class="fa fa-star-o"></i></li>-->
                                                <!--            <li><i class="fa fa-star-o"></i></li>-->
                                                <!--            <li><i class="fa fa-star-o"></i></li>-->
                                                <!--            <li class="no-star"><i class="fa fa-star-o"></i></li>-->
                                                <!--            <li class="no-star"><i class="fa fa-star-o"></i></li>-->
                                                <!--        </ul>-->
                                                <!--    </div>-->
                                                <!--</div>-->
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
            <?php  endforeach; ?>
            
        </div>
    </div>
</div>
