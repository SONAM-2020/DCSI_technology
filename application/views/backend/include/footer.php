
</footer> 
<script src="<?php echo base_url();?>assest/admin/assets/js/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/counter/waypoints-min.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/counter/counterup.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/masonry/masonry.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/masonry/filter.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='<?php echo base_url();?>assest/admin/assets/vendors/scroll/scrollbar.min.js'></script>
<script src="<?php echo base_url();?>assest/admin/assets/js/functions.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/vendors/chart/chart.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/assets/js/admin.js"></script>
<script src='<?php echo base_url();?>assest/admin/assets/vendors/calendar/moment.min.js'></script>
<script src='<?php echo base_url();?>assest/admin/assets/vendors/calendar/fullcalendar.js'></script>
<script type="text/javascript" src="<?php echo base_url();?>assest/summernote/summernote-lite.js"></script>
<script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>
<script type="text/javascript">
  function remove_err(err_Id){
    $('#'+err_Id).html('');
  }
  function loadpage(url,id){
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
      $("#mainContentdiv").load(url);
      setTimeout($.unblockUI, 1000);
      
    }
    function update(type,formId){
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
      var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/'+type;
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#"+formId).serialize()}; 
      $("#"+formId).ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
    }
    function checkfilesize(file,fileId,errorId,buttonId){
      var val=file.files[0].size/1024/1024,ext=$('#'+fileId).val().split('.').pop();
        if(val > 50){
            $('#'+errorId).html('Your file size should be below 2 mb. your current file size is '+val+' mb');
            file.value = "";
            $('#'+buttonId).hide();
        }
        else if(ext.toUpperCase()!="PNG" && ext.toUpperCase()!="JPG" && ext.toUpperCase()!="JPEG"&& ext.toUpperCase()!="PDF"){
            $('#'+errorId).html('you are not allow to attach this file. only png/jpg/jpeg/PDF are allowed ');
            file.value = "";
            $('#'+buttonId).hide();
        }
        else{
            $('#'+errorId).html('');
            $('#'+buttonId).show();
        }
    }


</script>
<script type="text/javascript">
   $(document).ready( function () {
  $('#example1').DataTable();
  } );
</script> 
</body>
