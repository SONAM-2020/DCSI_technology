<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?>
<body>
  <div id="mainpublicContent">
    <div class="about-us-wrapper pt-60 pb-40">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 order-last order-lg-first">
                  <div class="about-text-wrap">
                      <h4>Downloads</h4>
                     <table id="example1" class="table table-bordered table-striped">
                            <thead style="text-align: center">
                            <tr>
                                <th>No</th>
                                <th>Document Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php foreach($t_downloads as $i=> $event): ?> 
                            <tbody style="text-align: center">
                                <tr>
                                    <td>1.</td>
                                    <td><?php echo$event['Name'];?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-block"><a style="color: white;" href="<?php echo base_url();?><?php echo$event['file'];?>" target="_blank"><i class="fa fa-download"></i> Download</a></button> 
                                    </td>
                                </tr>
                            </tbody>
                          <?php endforeach; ?>
                        </table>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</body>


