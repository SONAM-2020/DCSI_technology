<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?>
<body>
  <div id="mainpublicContent">
    <div class="bg-info">
        <div class="container">
            <div class="breadcrumb-content pl-10">
                <ul>
                    <li class="text-white"><b>News & Announcement</b></li>
                </ul>
            </div>
        </div>
      </div>
     <div class="li-main-blog-page pt-60 pb-55">
          <div class="container">
              <div class="row">
                  <!-- <div class="col-lg-3 order-lg-1 order-2">
                      <div class="li-blog-sidebar-wrapper">
                          <div class="li-blog-sidebar">
                              <div class="li-sidebar-search-form">
                                  <form action="#">
                                      <input type="text" class="li-search-field" placeholder="search here">
                                      <button type="submit" class="li-search-btn"><i class="fa fa-search"></i></button>
                                  </form>
                              </div>
                          </div>
                          <div class="li-blog-sidebar pt-25">
                              <h4 class="li-blog-sidebar-title">Categories</h4>
                              <ul class="li-blog-archive">
                                  <li><a href="#">Laptops (10)</a></li>
                                  <li><a href="#">TV & Audio (08)</a></li>
                                  <li><a href="#">reach (07)</a></li>
                                  <li><a href="#">Smartphone (14)</a></li>
                                  <li><a href="#">Cameras (10)</a></li>
                                  <li><a href="#">Headphone (06)</a></li>
                              </ul>
                          </div>
                          <div class="li-blog-sidebar">
                              <h4 class="li-blog-sidebar-title">Blog Archives</h4>
                              <ul class="li-blog-archive">
                                  <li><a href="#">January (10)</a></li>
                                  <li><a href="#">February (08)</a></li>
                                  <li><a href="#">March (07)</a></li>
                                  <li><a href="#">April (14)</a></li>
                                  <li><a href="#">May (10)</a></li>
                                  <li><a href="#">June (06)</a></li>
                              </ul>
                          </div>
                          <div class="li-blog-sidebar">
                              <h4 class="li-blog-sidebar-title">Recent Post</h4>
                              <div class="li-recent-post pb-30">
                                  <div class="li-recent-post-thumb">
                                      <a href="blog-details.html">
                                          <img class="img-full" src="images/product/small-size/3.jpg" alt="Li's Product Image">
                                      </a>
                                  </div>
                                  <div class="li-recent-post-des">
                                      <span><a href="blog-details.html">First Blog Post</a></span>
                                      <span class="li-post-date">25.11.2018</span>
                                  </div>
                              </div>
                              <div class="li-recent-post pb-30">
                                  <div class="li-recent-post-thumb">
                                      <a href="blog-details.html">
                                          <img class="img-full" src="images/product/small-size/2.jpg" alt="Li's Product Image">
                                      </a>
                                  </div>
                                  <div class="li-recent-post-des">
                                      <span><a href="blog-details.html">First Blog Post</a></span>
                                      <span class="li-post-date">25.11.2018</span>
                                  </div>
                              </div>
                              <div class="li-recent-post pb-30">
                                  <div class="li-recent-post-thumb">
                                      <a href="blog-details.html">
                                          <img class="img-full" src="images/product/small-size/5.jpg" alt="Li's Product Image">
                                      </a>
                                  </div>
                                  <div class="li-recent-post-des">
                                      <span><a href="blog-details.html">First Blog Post</a></span>
                                      <span class="li-post-date">25.11.2018</span>
                                  </div>
                              </div>
                          </div>
                          <div class="li-blog-sidebar">
                              <h4 class="li-blog-sidebar-title">Tags</h4>
                              <ul class="li-blog-tags">
                                  <li><a href="#">Gaming</a></li>
                                  <li><a href="#">Chromebook</a></li>
                                  <li><a href="#">Refurbished</a></li>
                                  <li><a href="#">Touchscreen</a></li>
                                  <li><a href="#">Ultrabooks</a></li>
                                  <li><a href="#">Sound Cards</a></li>  
                              </ul>
                          </div>
                      </div>
                  </div> -->
                  <div class="col-sm-12 col-md-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 col-xs-12 order-lg-2 order-1">
                      <div class="row li-main-content">
                        <?php foreach($t_announcement as $i=> $event): ?>
                          <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                              <div class="li-blog-single-item pb-40">
                                  <div class="li-blog-gallery-slider slick-dot-style">
                                      <div class="li-blog-banner">
                                          <a href="blog-details.html"><img class="img-full" src="NewsAnnouncement/<?php echo$event['Image'];?>" alt="Product Image"></a>
                                      </div>
                                  </div>
                                  <div class="li-blog-content">
                                      <div class="li-blog-details">
                                          <h3 class="li-blog-heading pt-35"><a href="#"><?php echo$event['News_title'];?></a></h3>
                                          <div class="li-blog-meta">
                                              <a class="post-time" href="#"><i class="fa fa-calendar"></i><?php echo$event['Post_date'];?></a>
                                          </div>
                                          <p><?php echo$event['Description'];?></p>
                                          <div class="li-blog-sharing text-center pt-30">
                                              <h4>share this post:</h4>
                                              <a href="#"><i class="fa fa-facebook"></i></a>
                                              <a href="#"><i class="fa fa-twitter"></i></a>
                                              <a href="#"><i class="fa fa-pinterest"></i></a>
                                              <a href="#"><i class="fa fa-google-plus"></i></a>
                                          </div>
                                      </div>
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
</body>


