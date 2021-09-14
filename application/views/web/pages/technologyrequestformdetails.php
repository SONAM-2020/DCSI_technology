<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?>
<body>
  <div id="mainpublicContent">
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
              <div class="col-sm-1 col-md-1 col-lg-1 col-xs-12 mb-20">
                </div>
                <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12 mb-20">
                    <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'globalform'));?>
                        <div class="login-form">
                            <h4>Technology/Equipment/ Machinary Request Details</h4>
                            <h5 style="color: red;"><i>All the interested suppliers can directly contact to the technology/equipment/machinary request given below and submit your offer directly through thge contact information given below. </i></h5>
                            <div class="row">
                               <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Name</label> 
                                    <input class="mb-0 form-control" type="text" name="name" id="name" value="<?=$technologyrequestformList->Name;?>">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Mobile Number</label>
                                     <input class="mb-0 form-control" type="number" name="phone" id="phone"  value="<?=$technologyrequestformList->Contact_No;?>">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Email Address</label>
                                     <input class="mb-0 form-control" type="email" name="email" id="email" value="<?=$technologyrequestformList->Email;?>">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Request Date</label>
                                     <input class="mb-0 form-control" type="text" name="equipment" id="equipment" value="<?=$technologyrequestformList->Submitted_Date;?>">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Equiptment/Tools Name</label>
                                     <input class="mb-0 form-control" type="text" name="equipment" id="equipment" value="<?=$technologyrequestformList->Equipment_Name;?>">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                                    <label class="mb-1">Equipment Description</label>
                                    <textarea class="mb-0 form-control"  name="description" id="description" style="height: 100;"><?=$technologyrequestformList->Equipment_Description;?></textarea>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

