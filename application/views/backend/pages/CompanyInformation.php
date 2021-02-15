<main class="ttr-wrapper">
    <div class="container-fluid">
      <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">Company Information</h4>
        <ul class="db-breadcrumb-list">
          <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
          <li>Company Information</li>
        </ul>
      </div>  
      <div class="row">
        <div class="col-lg-12 m-b30">
          <div class="widget-box">
            <div class="wc-title">
              <h4>Company Information</h4>
            </div>
            <div class="widget-inner">
              <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'CompanyDetails'));?>
                <div class="">
                  <div class="form-group row">
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12 ml-auto">
                      <h3>1. Company Details</h3>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">Company Logo</label>
                    <div class="col-sm-7 col-md-7 col-lg-7 col-xs-12">
                      <img src="<?php echo base_url();?>uploads/<?=$CompanyInfo->Logo;?>" width="30%" align="left">
                        <input type="file" id="Image" name="Image">
                        <span style="color: red;">Choose image to change</span>
                        <input type="hidden" name="currentlogoinivalue" value="<?=$CompanyInfo->Logo;?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">Company Name</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$CompanyInfo->Name;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">Company Contact</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                      <input class="form-control" type="text" id="Telephone" name="Telephone" value="<?=$CompanyInfo->Contact_Number;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">Company E-mail Address</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                      <input class="form-control" type="text" id="Email" name="Email" value="<?=$CompanyInfo->Email_Address;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">Address</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                      <input class="form-control" type="text" id="Location" name="Location" value="<?=$CompanyInfo->Location_Address;?>" class="form-control">
                    </div>
                  </div>
                  <div class="seperator"></div>
                  <div class="form-group row">
                    <div class="col-sm-10 ml-auto">
                      <h3>2. Company Social Links</h3>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">Facebook Link</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                      <input class="form-control" type="text" id="facebook" name="facebook" value="<?=$CompanyInfo->Fackbook_Link;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">Twitter Link</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                     <input class="form-control" type="text" id="twitter" name="twitter" value="<?=$CompanyInfo->Twitter_Link;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">Youtube Link</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                      <input class="form-control" type="text" id="Youtube" name="Youtube" value="<?=$CompanyInfo->Youtube_Link;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">Google+ Link</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                      <input class="form-control" type="text" id="Google" name="Google" value="<?=$CompanyInfo->Googleplus_Link;?>" class="form-control">
                    </div>
                  </div>
                  <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                  <div class="form-group row">
                    <div class="col-sm-10 ml-auto">
                      <h3 class="m-form__section">3. Company Description</h3>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-12 col-form-label">Company Description</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                      <textarea class="form-control summernote" style="height: 100px;" type="text" id="Description" name="Description" class="form-control"><?=$CompanyInfo->Company_Description;?></textarea>
                    </div>
                  </div>
                </div>
                <div class="">
                  <div class="">
                    <div class="row">
                      <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12">
                      </div>
                      <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
                        <button type="button" onclick="update('Companyinfo','CompanyDetails')" class="btn btn-success pull-right"><span class="fa fa-edit"></span> Save changes</button>
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