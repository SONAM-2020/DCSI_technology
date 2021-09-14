<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?>
<?php
  error_reporting(0);
?>
<body>
  <div id="mainpublicContent">
    <div class="bg-info">
        <div class="container mb-1">
            <div class="breadcrumb-content pl-10">
                <ul>
                    <li class="text-white"><b>Acknowledgement</b></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <?php  
                    if($message!='Undefined' && $message!=''){
                ?>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 bg-info text-white pt-10 text-center">
                        <p><?=$message?></p>
                    </div>
                <?php
                    }else{
                ?>  
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 bg-danger text-white pt-10 text-center">
                        <p><?=$messagefail?></p>
                    </div>
                <?php
                    }
                ?> 
            </div>
        </div>
    </div>
</div>
</body>
</html>
