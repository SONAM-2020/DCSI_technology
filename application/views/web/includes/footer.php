<div class="footer">
 <!--<div class="footer-static-top">-->
 <!--       <div class="container">-->
 <!--           <div class="footer-shipping pt-60 pb-55 pb-xs-25">-->
 <!--               <div class="row">-->
 <!--                   <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">-->
 <!--                       <div class="li-shipping-inner-box">-->
 <!--                           <div class="shipping-icon">-->
 <!--                           </div>-->
 <!--                           <div class="shipping-text">-->
 <!--                           </div>-->
 <!--                       </div>-->
 <!--                   </div>-->
 <!--                   <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">-->
 <!--                       <div class="li-shipping-inner-box">-->
 <!--                           <div class="shipping-text">-->
 <!--                               <h4 style="text-align: center;">Advisory Support By:</h4>-->
 <!--                           </div>-->
 <!--                           <div class="shipping-icon">-->
 <!--                               <img src="<?php echo base_url();?>uploads/appctt.png" alt="Shipping Icon">-->
 <!--                           </div>-->
 <!--                           <div class="shipping-text">-->
 <!--                               <h5>-->
 <!--                                   <a href="#">Asian Pacific Center of Technology Transfer</a>-->
 <!--                               </h5>-->
 <!--                           </div>-->
 <!--                       </div>-->
 <!--                   </div>-->
 <!--                   <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">-->
 <!--                       <div class="li-shipping-inner-box">-->
 <!--                           <div class="shipping-text">-->
 <!--                               <h4 style="text-align: center;">Funding Support By:</h4>-->
 <!--                           </div>-->
 <!--                           <div class="shipping-icon">-->
 <!--                               <img src="<?php echo base_url();?>uploads/icimod.png" alt="Shipping Icon">-->
 <!--                           </div>-->
 <!--                           <div class="shipping-text">-->
 <!--                               <h5>-->
 <!--                                   <a href="#">International Centre for Integrated Mountain Development </a>-->
 <!--                               </h5>-->
 <!--                           </div>-->
 <!--                       </div>-->
 <!--                   </div>-->
 <!--                   <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">-->
 <!--                       <div class="li-shipping-inner-box">-->
 <!--                           <div class="shipping-icon">-->
 <!--                           </div>-->
 <!--                           <div class="shipping-text">-->
 <!--                           </div>-->
 <!--                       </div>-->
 <!--                   </div>-->
 <!--               </div>-->
 <!--           </div>-->
 <!--       </div>-->
 <!--   </div> -->
    <div class="footer-static-middle">
        <div class="container">
            <div class="footer-logo-wrap pt-10 pb-10">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-logo">
                            <img src="<?php echo base_url();?>uploads/1.png" alt="Footer Logo">
                            <p class="info">
                                We serve as an online database for the exchange of technology offers and requests both in Bhutan and global.The Online database search engine is connected to selected international database centers.
                            </p>
                        </div>
                       
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Contact Us:</h3>
                             <ul class="des">
                                <li class="mb-0">
                                    <span>Address: </span>
                                    <?=$CompanyInfo->Location_Address;?>
                                </li>
                                <li class="mb-0">
                                    <span>Phone: 
                                    <a href="#">(+975)-<?=$CompanyInfo->Contact_Number;?></a></span>
                                </li>
                                <li>
                                    <span>Email: 
                                    <a href="mailto:<?=$CompanyInfo->Email_Address;?>"><?=$CompanyInfo->Email_Address;?></a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-block">
                            <h3 class="footer-block-title" style="color: 
                            red;">Visitor Count:&nbsp; <button class="btn btn-success"><?php
                    $size=sizeof($this->db->get_where('t_visiter_detls', array(
                        'Status' => 'Active'
                        ))->result_array());
                        if($size>0){
                            echo $size;
                        }
                        else{
                            echo 0;
                        }
                    ?></button> </h3>
                            <img src="<?php echo base_url();?>uploads/icimod.png" alt="Shipping Icon">
                    <p>Supported By: International Centre for Integrated Mountain Development(ICIMOD) & Asian Pacific Center of Technology Transfer(APCTT)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-static-bottom pt-0 pb-55" style="background-image: url('<?php echo base_url();?>uploads/header1.JPG')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright text-center pt-25">
                        <span class="tg-copyright"><a target="_blank" href="https://www.bhutansyncits.com" style="color: black;">གསར་བཟོ་འབད་མི། ༔ BHUTANSYNC INFOTECH SOLUTION</a></span>
                        <nav class="tg-addnav">
                          <ul>
                            <li><a href="javascript:void(0);" style="color: black;">འདྲ་བཤུས་དབང༌ཆ། &copy ༢༠༢༡ CSI TECHNOLOGY</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url();?>assest/website/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/vendor/popper.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/ajax-mail.js"></script>
<script src="<?php echo base_url();?>assest/website/js/jquery.meanmenu.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/wow.min.js"></script>
<script src="<?php echo base_url();?>assest/slick/slick.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/jquery.mixitup.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/waypoints.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/jquery.barrating.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/venobox.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/scrollUp.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest/summernote/summernote-lite.js"></script>
<script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>

<script type="text/javascript">
    function searchproductdetails(){
        if($('#searchdetailsfom').val()==""){
            $('#searchdetails').prop('placeholder','Please enter search key here');
        }
        else{
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
            var url='<?php echo base_url();?>index.php?baseController/search_details';
            var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#searchdetails").serialize()}; 
            $("#searchdetails").ajaxSubmit(options);
            setTimeout($.unblockUI, 600); 
        }
    }
    function remove_err(err_Id,fieldId){
        if($('#'+fieldId).val()!=""){
            $('#'+err_Id).html('');
        }
    }
    function removevalidationhceckbox(errid,id){
        if($('#'+id).prop('checked')){
             $('#'+errid).html('');
        }
    }
   function loadpage(url){
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
      $("#mainpublicContent").load(url);
      setTimeout($.unblockUI, 1000); 
    }
    function checkfilesize(file,fileId,errorId,buttonId){
      var val=file.files[0].size/1024/1024,ext=$('#'+fileId).val().split('.').pop();
        if(val > 6){
            $('#'+errorId).html('Your file Size Should be below 2 MB. Your current file size is '+val+' 2MB');
            file.value = "";
            $('#'+buttonId).hide();
        }
        else if(ext.toUpperCase()!="PNG" && ext.toUpperCase()!="JPG" && ext.toUpperCase()!="JPEG"&& ext.toUpperCase()!="PDF"){
            $('#'+errorId).html('you are not allow to attach this file. only png/jpg/jpeg are allowed ');
            file.value = "";
            $('#'+buttonId).hide();
        }
        else{
            $('#'+errorId).html('');
            $('#'+buttonId).show();
        }
    }
</script>
