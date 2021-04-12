<main class="ttr-wrapper">
    <div class="container-fluid">
      <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">News & Announcement Details</h4>
        <ul class="db-breadcrumb-list">
          <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
          <li>News & Announcement Details</li>
        </ul>
      </div>  
      <div class="row">
        <div class="col-lg-12 m-b30">
          <div class="widget-box">
            <div class="wc-title">
              <h4>News & Announcement Details</h4>
            </div>
            <div class="widget-inner">
              <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'CompanyDetails'));?>
                <div class="">
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">News Image</label>
                    <div class="col-sm-7 col-md-7 col-lg-7 col-xs-12">
                      <img src="<?php echo base_url();?>uploads/NewsAnnouncement/<?=$news_announcementdetails->Image;?>" width="30%" align="left">
                        <input type="file" id="Image" name="Image">
                        <span style="color: red;">Choose image to change</span>
                        <input type="hidden" name="currentlogoinivalue" value="<?=$news_announcementdetails->Image;?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">News Title</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$news_announcementdetails->News_title;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">News Description</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                      <textarea class="form-control summernote" style="height: 100px;" type="text" id="Description" name="Description" class="form-control"><?=$news_announcementdetails->Description;?></textarea>
                    </div>
                  </div>
                </div>
                <div class="">
                  <div class="">
                    <div class="row">
                      <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12">
                      </div>
                      <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                        <input type="hidden" name="updateId" id="updateId" value="<?=$news_announcementdetails->Id;?>">
                        <button type="button" onclick="update('NewsInfo','CompanyDetails')" class="btn btn-success pull-right"><span class="fa fa-edit"></span> Save changes</button>
                        <button type="reset" class="btn-secondry">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="ttr-overlay"></div>
<script type="text/javascript">
  $('.summernote').summernote({
      height:250
    });
</script>