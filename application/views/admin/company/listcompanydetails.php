<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="alert alert-info">View Company Information</h3>
        </div>
        <div class="box-body">
       <!--  <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'uerdet', 'enctype' => 'multipart/form-data'));?> -->
          <table id="sliderDetails" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Name of Company</th>
              <th>Company Logo</th>
              <th>Company Information</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($Companydetails as $i=> $event): ?> 
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['comp_name'];?></td>
              <td><img src="<?php echo $event['image'];?>" style="width:15%; align-items: : center;" alt="Logo"></td>
              <td><?php echo $event['information'];?></td>
              <td><?php echo $event['status_text'];?></td>
              <td>
               <button type="button" class="btn btn-info btn-block" onclick="showrole(
               '<?php echo $event['Id']?>','<?php echo $event['comp_name']?>','<?php echo $event['information']?>','<?php echo $event['image']?>')">Edit</button>
               <button type="button" class="btn btn-danger btn-block" onclick="deletecompanydetails('<?php echo $event['Id']?>')"></i>Delete</button>
              <!-- <?php
                if($event['status_text']=="Y"){?>
                 <button type="button" class="btn btn-danger btn-block" onclick="status_update('<?php echo $event['Id']?>','<?=$event['status_text'];?>')"><i class="fa fa-times"></i>De-Activate</button>
               <?php }else{
               ?>
                <button type="button" class="btn btn-primary btn-block" onclick="status_update('<?php echo $event['Id']?>','<?=$event['status_text'];?>')"><i class="fa fa-check"></i>Activate</button>
              <?php } ?> -->
              </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal modal-default" id="deleteSlider">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Update Company Information</h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'Update', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Company Name:</label>
                          <textarea name="name" class="form-control" id="name" placeholder="Company Name">
                          </textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Company Information:</label>
                          <textarea name="info" class="form-control summernote" id="info" placeholder="Information">
                          </textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label> Change Company Logo:</label>
                            <input type="file" name="logo" class="form-control" id="logo" placeholder="Company Logo">
                        </div>
                    </div>
                    <div class="form-group">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">          
                          <input type="hidden" name="deleteId" id="deleteId">
                          <button class="btn btn-success" type="button" onclick="updatecompanyinformation()"> <i class="fa fa-check"></i>Save Changes</button>
                        </div>
                    </div>
                    </div>
                  </div>
            </form>
          </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(function () {
      $('#sliderDetails').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
    });
  	
    function showrole(id,c_name,information,C_logo){
    $('#deleteId').val(id);
    $('#info').val(information);
    $('#name').val(c_name);
    $('#deleteSlider').modal('show');
  }
    function updatecompanyinformation(){
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
      var url='<?php echo base_url();?>index.php?adminController/updateCompanyInformation/listcompanydetails';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#Update").serialize()}; 
      $("#Update").ajaxSubmit(options);
      $('#deleteSlider').modal('hide');
      setTimeout($.unblockUI, 600); 
      }

      $('.summernote').summernote({
      height: 150,   
      });

      function deletecompanydetails(id){
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
        var url='<?php echo base_url();?>index.php?adminController/deleteCompanyInformation/'+id+'/listcompanydetails';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
    function updatelogo(){
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
      var url='<?php echo base_url();?>index.php?adminController/updateCompanyInformation/listcompanydetails';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#Update").serialize()}; 
      $("#Update").ajaxSubmit(options);
      $('#deleteSlider').modal('hide');
      setTimeout($.unblockUI, 600); 
      }
    // function status_update(id,staus){
    //   $.blockUI
    //     ({ 
    //       css: 
    //       { 
    //             border: 'none', 
    //             padding: '15px', 
    //             backgroundColor: '#000', 
    //             '-webkit-border-radius': '10px', 
    //             '-moz-border-radius': '10px', 
    //             opacity: .5, 
    //             color: '#fff' 
    //       } 
    //     });
    //   var url='<?php echo base_url();?>index.php?adminController/updateCompanyInformation_status/'+id+'/'+staus;
    //   var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#uerdet").serialize()}; 
    //   $("#uerdet").ajaxSubmit(options);
    //   setTimeout($.unblockUI, 600); 
    // }
</script>
