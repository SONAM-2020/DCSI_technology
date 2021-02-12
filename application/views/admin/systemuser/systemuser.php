<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="alert alert-info">System Users Data</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Username</th>
              <th>Access Right Level</th>
              <th>Phone</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody style="text-align: center">
              <?php foreach($systemUser as $i=> $event): ?>
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['Full_Name'];?></td>
              <td><?php echo $event['User_Id'];?></td>
              <td><?php echo $event['Role_Id'];?></td>
              <td><?php echo $event['Contact_Number'];?></td>
              <td>
                <button type="button" class="btn btn-info btn-block" onclick="show('<?php echo $event['Full_Name']?>','<?php echo $event['User_Id']?>','<?php echo $event['Role_Id']?>')"><i class="fa fa-edit"></i>Update</button>
                 <button type="button" class="btn btn-danger btn-block"><i class="fa fa-times"></i>Delete</button>
                </td>
              </tr>
              <?php endforeach;?>
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
            <h4 class="modal-title">Update System User Infomation</h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'update', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Name of System User:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name of User">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Contact Information:</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number Of User">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <input type="hidden" name="deleteId" id="deleteId">
                          <button class="btn btn-success" type="button" onclick="updatesystemuser()"> <i class="fa fa-check"></i>Update</button>
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
    $('.summernote').summernote({
    height: 150,   //set editable area's height
    codemirror: { // codemirror options
    }
    });
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
  
  function show(id,name,shortcode){
    $('#name').val(name);
    $('#phone').val(shortcode);
    $('#deleteId').val(id);
    $('#deleteSlider').modal('show');
  }
    
    function deleteservicecategory(id){
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
        var url='<?php echo base_url();?>index.php?adminController/Deleteservicecategory/'+id+'/servicecategory';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
    
    function updatesystemuser(){
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
      var url='<?php echo base_url();?>index.php?adminController/UpdateSystemUser';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#update").serialize()}; 
      $("#update").ajaxSubmit(options);
      $('#deleteSlider').modal('hide');
      setTimeout($.unblockUI, 600); 
    }