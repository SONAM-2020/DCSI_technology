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
                    <li class="text-white"><b>About Us</b></li>
                </ul>
            </div>
        </div>
      </div>
    <div class="about-us-wrapper pt-60 pb-40">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 order-last order-lg-first" style="background-color:white;">
                  <div class="about-text-wrap">
                      <h4><?=$CompanyInfo->Name;?></h4>
                      <p><?=$CompanyInfo->Company_Description;?></p>
                  </div>
              </div>
              <div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
                  <div>
                      <img class="img-full" src="<?php echo base_url();?>uploads/aboutus.png" alt="About Us" />
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</body>


