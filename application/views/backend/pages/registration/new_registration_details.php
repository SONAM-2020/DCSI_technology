<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Registration Details</li>
            </ul>
        </div>
        <div class="widget-box">
            <div class="widget-inner">
                <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'localform'));?>
                    <label><u>User/Personal Details</u></lavel><br>
                    <div class="row form-group mt-4"> 
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Name</lavel>
                            <input type="text" value="<?=$registration_details->Name?>" class="form-check-inline form-control" id="name" name="name" readonly>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Designation</lavel>
                            <input type="text" value="<?=$registration_details->Designation?>" class="form-check-inline form-control" id="designation" name="designation" readonly>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Email Address</lavel>
                            <input type="text" value="<?=$registration_details->Email?>" class="form-check-inline form-control" id="email" name="email" readonly>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Mobile Number</lavel>
                            <input type="text" value="<?=$registration_details->Contact_No?>" class="form-check-inline form-control" id="mobile" name="mobile" readonly>
                        </div>
                    </div>
                    <label><u>Business Details </u>(Supplier Type: <?=$registration_details->Supplier_Type?>)</lavel><br>
                    
                    <div class="row form-group"> 
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Name of Business</lavel>
                            <input type="text" value="<?=$registration_details->Company_Name?>" class="form-check-inline form-control" id="Company_Name" name="Company_Name" readonly>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Business Website</lavel>
                            <input type="text" value="<?=$registration_details->Company_Website?>" class="form-check-inline form-control" id="Company_Website" name="Company_Website" readonly>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Location Address</lavel>
                            <input type="text" value="<?=$registration_details->Company_Address?>" class="form-check-inline form-control" id="Company_Address" name="Company_Address" readonly>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Business Description</lavel>
                            <input type="text" value="<?=$registration_details->Company_Description?>" class="form-check-inline form-control" id="Company_Description" name="Company_Description" readonly>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Telephone Number</lavel>
                            <input type="text" value="<?=$registration_details->Telephone_No?>" class="form-check-inline form-control" id="Telephone_No" name="Telephone_No" readonly>
                        </div>
                        <?php if($registration_details->Supplier_Type=="International"){?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Country</lavel>
                                <input type="text" value="<?=$registration_details->Country_Name?>" class="form-check-inline form-control" id="Country" name="Country" readonly>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>City </lavel>
                                <input type="text" value="<?=$registration_details->City?>" class="form-check-inline form-control" id="City" name="City" readonly>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Zip/Pin Code</lavel><br>
                                <input type="text" value="<?=$registration_details->Postal_Code?>" class="form-check-inline form-control" id="Postal_Code" name="Postal_Code" readonly>
                            </div>
                        <?php }else{?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Business Registration Date</lavel>
                                <input type="text" value="<?=$registration_details->License_Registration_Date?>" class="form-check-inline form-control" id="License_Registration_Date" name="License_Registration_Date" readonly>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Business License No</lavel>
                                <input type="text" value="<?=$registration_details->License_No?>" class="form-check-inline form-control" id="License_No" name="License_No" readonly>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Business License</label><br>
                               <button class="btn btn-primary" type="button"><a href="<?=$registration_details->License_Img?>"  target="_blank"> View/Download</a></button> 
                            </div>
                        <?php }?>
                    </div>
                    <?php if($actiontype=="details"){ ?>
                    <div class="row form-group"> 
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Remarks</lavel>
                            <textarea class="form-control form-check-inline" name="remarks" id="remarks"></textarea>
                            <span id="remarks_err" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="row form-group"> 
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="hidden" name="companyid" id="companyid" value="<?=$registration_details->company_Id?>">
                            <input type="hidden" name="userid" id="userid" value="<?=$registration_details->user_id?>">
                            <button class="btn btn-primary btn-link bg-info text-light" type="button" onclick="takeaction('approve')"> <i class="fa fa-check"></i> Approve</button>
                            <button class="btn btn-danger btn-link bg-danger text-light" type="button" onclick="takeaction('reject')"> <i class="fa fa-times"></i> Reject</button>
                        </div>
                    </div>
                    <?php } if($registration_details->Remarks!=""){ ?>
                        <div class="row form-group"> 
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Remarks</lavel>
                            <textarea class="form-control form-check-inline" readonly><?=$registration_details->Remarks?></textarea>
                            <span id="remarks_err" class="text-danger"></span>
                        </div>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    function takeaction(type){
        if(type=="reject" && $('#remarks').val()==""){
            $('#remarks_err').html('Please mention reason for reject');
        }
        else{
            $('#remarks_err').html('');
            $.blockUI
            ({ 
            css: 
            { 
                border: 'none', 
                padding: '15px', 
                backgroundColor: '#000', 
                '-webkit-border-radius': '10px', 
                '-moz-border-radius': '10px', 
                opacity: .5, 
                color: '#fff' 
            } 
            });
            var url='<?php echo base_url();?>index.php?adminController/new_registration_list/update/'+type;
            var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#localform").serialize()}; 
            $("#localform").ajaxSubmit(options);
            setTimeout($.unblockUI, 600); 
        }
    }
</script> 
