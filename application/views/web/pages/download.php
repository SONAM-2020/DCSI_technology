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
                            <tbody style="text-align: center">
                                <tr>
                                    <td>1.</td>
                                    <td>Annual-Report-2019-2020.pdf</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-block"><a style="color: white;" href="<?php echo base_url();?>/uploads/Downloads/Annual-Report-2019-2020.pdf"><i class="fa fa-download"></i> Download</a></button> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</body>


