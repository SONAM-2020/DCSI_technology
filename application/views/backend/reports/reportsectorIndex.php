<main class="ttr-wrapper">
  <div class="container-fluid">
    <div class="db-breadcrumb">
      <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
        <li> <b class="breadcrumb-title">Generate Report</b></li>
      </ul>
    </div>  
    <div class="row">
      <div class="col-lg-12 m-b30">
        <div class="widget-box">
          <div class="widget-inner">
            <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'movementform'));?>
              <div class="row form-group">
                <div class="col-4">
                  <label>From Date:</label>
                  <input type="date" id="fromdate" onclick="remove_err('fromdate_err')" name="fromdate" class="form-control">
                  <span id="fromdate_err" class="text-danger"></span>
                </div>
                <div class="col-4">
                  <label>To Date:<span class="text-danger">*</span></label>
                  <input type="date" id="todate" onclick="remove_err('todate_err')" name="todate" class="form-control">
                  <span id="todate_err" class="text-danger"></span>
                </div>
                <div class="col-4">
                  <label>Product Category:<span class="text-danger">*</span></label>
                  <select class="form-control pager" onclick="remove_err('category_err')" name="category" id="category">
                    <option value="">Select Product Category</option>
                    <?php foreach($category_list as $i=> $cat): ?>
                        <option value="<?=$cat['Id']?>"> <?=$cat['Category_Name']?></option>
                    <?php endforeach;?>
                  </select>
                  <span id="category_err" class="text-danger"></span>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-12 pull-right">
                    <button type="button"  onclick="submitForm()" class="btn btn-success"> Generate</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script>
    function validate(){
      let returnt=true;
      if($('#purpose').val()==""){
        $('#purpose_err').html('Please mention Purpose');
        $('#purpose').focus();
        returnt=false;
      }
      if($('#reason').val()==""){
        $('#reason_err').html('Please mention reason');
        $('#reason').focus();
        returnt=false;
      }
      return returnt;
    }
    function submitForm(){
      if(validate()){
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
        var url='<?php echo base_url();?>index.php?adminController/loadpage/generateSectorIndexreport/';
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#movementform").serialize()}; 
        $("#movementform").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
      }
    }
  </script>