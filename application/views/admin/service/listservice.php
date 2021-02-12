<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="alert alert-info">List of Service</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Title</th>
              <th>Service Type</th>
              <th>Image</th>
              <th>Content</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($Slist as $i=> $event): ?>  
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['service_name'];?></td>
              <td><?php echo $event['service_type'];?></td>
              <td>
                <img src="<?php echo $event['image'];?>" style="width:10%" alt="User Image">
                </td>
              <td><?php echo $event['content'];?></td>
              <td><?php echo $event['Status'];?></td>
              <td>
               <button type="button" class="btn btn-info btn-block" onclick="showrole('<?php echo $event['Id']?>','<?php echo $event['service_name']?>','<?php echo $event['Status']?>')"><i class="fa fa-edit"></i>Edit</button>

               <button type="button" class="btn btn-danger btn-block" onclick="deleteservicedetails('<?php echo $event['Id']?>')"><i class="fa fa-times"></i>Delete</button>
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
            <h4 class="modal-title">Update Service Information</h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'Update', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Service Name:</label>
                          <textarea name="name" class="form-control" id="name" placeholder="Service Name">
                          </textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Service Information</label>
                          <textarea name="editor1" class="form-control summernote" id="editor1" placeholder="Service Content"></textarea>
                      </div>
                        </div>
                    </div>
                    <div class="form-group">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">          
                          <input type="hidden" name="deleteId" id="deleteId">
                          <button class="btn btn-success" type="button" onclick="updateserviceinformation()"> <i class="fa fa-check"></i>Save Changes</button>
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
    
    function showrole(id,s_name,Status,){
    $('#deleteId').val(id);
    $('#name').val(s_name);
    $('#deleteSlider').modal('show');
  }
  function updateserviceinformation(){
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
      var url='<?php echo base_url();?>index.php?adminController/updateServiceInformation/listservice';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#Update").serialize()}; 
      $("#Update").ajaxSubmit(options);
      $('#deleteSlider').modal('hide');
      setTimeout($.unblockUI, 600); 
      }

      $('.summernote').summernote({
      height: 150,   
      });

      function deleteservicedetails(id){
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
        var url='<?php echo base_url();?>index.php?adminController/deleteserviceInformation/'+id+'/listservice';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
   
</script>