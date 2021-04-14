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
    <div class="li-main-blog-page li-main-blog-details-page pt-60 pb-60 pb-sm-45 pb-xs-45">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-lg-1 order-2">
                <div class="li-blog-sidebar-wrapper">
                    <div class="li-blog-sidebar">
                        <h4 class="li-blog-sidebar-title">Technology News/Events</h4>
                        <?php foreach($news_list as $i=> $event): ?>
                        <div class="li-recent-post pb-30">
                            <div class="li-recent-post-thumb">
                                <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_NewsDestails/<?=$event['Id']?>')">
                                    <img style="width: 100%;height: 100%;" class="img-full" src="<?php echo base_url();?>uploads/NewsAnnouncement/<?php echo$event['Image'];?>" alt="Li's Product Image">
                                </a>
                            </div>
                            <div class="li-recent-post-des">
                                <span><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_NewsDestails/<?=$event['Id']?>')"><?php echo$event['News_title'];?></a></span>
                                <span class="li-post-date"><?php echo$event['Post_date'];?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="li-blog-sidebar">
                        <h4 class="li-blog-sidebar-title">Technology Database</h4>
                        <?php foreach($t_imagecategory as $i=> $event): ?>
                        <ul class="li-blog-tags">
                            <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/load_allproductdetails/<?=$event['Id']?>')"><?=$event['Category_Name']?></a></li>
                        </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="row li-main-content">
                    <div class="col-lg-12">
                       
                        <div class="li-blog-single-item pb-30">
                            <div class="li-blog-banner">
                                <a href="#"><img style="width: 100%;height: 100%;" class="img-full" src="<?php echo base_url();?>uploads/NewsAnnouncement/<?=$t_announcement->Image;?>" alt=""></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="#"><?=$t_announcement->News_title;?></a></h3>
                                    <div class="li-blog-meta">
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i><?=$t_announcement->Post_date;?></a>
                                    </div>
                                    <p><?=$t_announcement->Description;?></p>
                                    
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
</body>


