<main class="ttr-wrapper">
    <div class="container-fluid">
      <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">View Techenology Request</h4>
        <ul class="db-breadcrumb-list">
          <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
          <li>View Techenology Request</li>
        </ul>
      </div>  
      <div class="row">
        <div class="col-lg-12 m-b30">
          <div class="widget-box">
            <div class="wc-title">
              <h4>View Techenology Request</h4>
            </div>
            <div class="widget-inner">
                <div class="">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sender Name:</label>
                    <div class="col-sm-7">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$technologyrequestformList->Name;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sender Email:</label>
                    <div class="col-sm-7">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$technologyrequestformList->Email;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sender Contact:</label>
                    <div class="col-sm-7">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$technologyrequestformList->Contact_No;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sent Date:</label>
                    <div class="col-sm-7">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$technologyrequestformList->Submitted_Date;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Equipment/Tools Name:</label>
                    <div class="col-sm-7">
                      <input class="form-control" type="text" id="Name" name="Name" value="<?=$technologyrequestformList->Equipment_Name;?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-7">
                      <textarea style="height: 200px;" class="form-control" type="text" id="description" name="description" ><?=$technologyrequestformList->Equipment_Description;?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Response</label>
                    <div class="col-sm-7">
                      <textarea style="height: 200px;" class="form-control" type="text" id="description" name="description" ><?=$technologyrequestformList->Response;?></textarea>
                    </div>
                  </div>
                  <div class="seperator"></div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="ttr-overlay"></div>