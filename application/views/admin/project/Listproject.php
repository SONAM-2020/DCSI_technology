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
              <th>Name Of Project</th>
              <th>Project Link</th>
              <th>Image</th>
              <th>Project Description</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($projectList as $i=> $event): ?> 
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['project_name'];?></td>
              <td><?php echo $event['project_link'];?></td>
              <td>
                <img src="<?php echo $event['image'];?>" style="width:10%" alt="Project Image">
                </td>
              <td><?php echo $event['project_description'];?></td>
              <td><?php echo $event['status'];?></td>
              <td>
               <button type="button" class="btn btn-info btn-block" onclick="showrole('<?php echo $event['Id']?>','<?php echo $event['project_name']?>','<?php echo $event['project_link']?>','<?php echo $event['project_description']?>')"><i class="fa fa-edit"></i>Edit</button>

               <button type="button" class="btn btn-danger btn-block" onclick="deleteProjectdetails('<?php echo $event['Id']?>')"><i class="fa fa-times"></i>Delete</button>
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
            <h4 class="modal-title">Update Project Information</h4>
          </div>
          <div class="modal-body" >
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'Update', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Name of Project:</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="Project Name">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Link of Project:</label>
                          <input type="text" name="link" class="form-control" id="link" placeholder="Link of Project">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Project Description</label>
                          <textarea name="editor1" class="form-control summernote" id="editor1" placeholder="Project Description"></textarea>
                      </div>
                      </div>
                    </div>
                    <div class="form-group">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">          
                          <input type="hidden" name="deleteId" id="deleteId">
                          <button class="btn btn-success" type="button" onclick="updateprojectinformation()"> <i class="fa fa-check"></i>Save Changes</button>
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
    
    function showrole(id,s_name,plink,){
    $('#deleteId').val(id);
    $('#name').val(s_name);
    $('#link').val(plink);
    $('#deleteSlider').modal('show');
  }
  function updateprojectinformation(){
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
      var url='<?php echo base_url();?>index.php?adminController/UpdateProjectInformation/Listproject';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#Update").serialize()}; 
      $("#Update").ajaxSubmit(options);
      $('#deleteSlider').modal('hide');
      setTimeout($.unblockUI, 600); 
      }

      $('.summernote').summernote({
      height: 150,   
      });

      function deleteProjectdetails(id){
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
        var url='<?php echo base_url();?>index.php?adminController/DeleteProjectdetails/'+id+'/Listproject';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
   
</script>