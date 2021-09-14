<div class="body-wrapper" >
    <header class="li-header-4" style="background-color: #cc0606;">
        <div class="header-top pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="header-top-left">
                            <ul class="phone-wrap">
                                <li class="phone-wrap"><span>Telephone Enquiry: </span><a href="#">(+975) <?=$CompanyInfo->Contact_Number;?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="header-top-right">
                            <ul class="ht-menu">
                                <li class="phone-wrap">
                                   <span>Email Enquiry: </span><a href="#" style="color: white;">  <?=$CompanyInfo->Email_Address;?></a>
                                </li>
                                <!-- <li>
                                    <span class="language-selector-wrapper">Language :</span>
                                    <div class="ht-language-trigger"><span>English</span></div>
                                    <div class="language ht-language">
                                        <ul class="ht-setting-list">
                                            <li class="active"><a href="#"><img src="<?php echo base_url();?>assest/website/images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                            <li><a href="#"><img src="<?php echo base_url();?>assest/website/images/menu/flag-icon/2.jpg" alt="">Dzongkha</a></li>
                                        </ul>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0 pt-15 pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo pb-sm-30 pb-xs-30">
                            <a href="<?php echo base_url();?>">
                                <img src="<?php echo base_url();?>uploads/dcsilogowhite.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 pl-0 ml-sm-15 ml-xs-15">
                        <!-- Begin Header Middle Searchbox Area -->
                        <form action="#" class="hm-searchbox" id="searchdetails">
                            <input type="text" id="searchdetailsfom" name="searchdetails" placeholder="Enter Name of Product">
                            <button class="li-btn" type="button" onclick="searchproductdetails()"><i class="fa fa-search"></i></button>
                        </form>
                        <span class="text-danger" id="searcherr"></div>
                        <div class="header-middle-right">
                            <ul class="hm-menu">
                                <li class="hm-wishlist">
                                   <div class="default-btn">
                                          <a class="links bg-info text-white" href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/Login/')">Login</a>
                                   </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-sticky d-none d-lg-block d-xl-block" style="background-color: #cc0606;">
            <!-- style="background-image: url('<?php echo base_url();?>uploads/header1.JPG')"  -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hb-menu">
                            <nav>
                                <ul>
                                  <li></li>
                                  <li></li>
                                  <li></li>
                                  <li></li>
                                  <li><a href="<?php echo base_url();?>">Home</a></li>
                                  <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/About/')">About Us</a></li>
                                  <!-- <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/Partner/')">Partner Profile</a></li> -->
                                  <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/News/')">Technology News</a></li>
                                  <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/Downloads/')">Downloads</a></li>
                                  <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/Contact/')">Contact Us</a></li>
                                  <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/TechnologyRequest/')">Technology Request</a></li>
                                  <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/localregister/')">Registration</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area d-lg-none d-xl-none col-12">
            <div class="container"> 
                <div class="row">
                    <div class="mobile-menu">
                    </div>
                </div>
            </div>
        </div>
</header>

