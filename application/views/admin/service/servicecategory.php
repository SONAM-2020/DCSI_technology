<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="alert alert-info">Service Category</h3>
        </div>
        <div class="box-body">
          <button type="button" class="btn btn-success" onclick="showservicecategory()"><i class="fa fa-edit"></i>Add</button>
          <br><br>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Category Name</th>
              <th>Slug</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody style="text-align: center">
              <?php foreach($serviceList as $i=> $event): ?>
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['category_name'];?></td>
              <td><?php echo $event['slug'];?></td>
              <td>
                <button type="button" class="btn btn-info btn-block" onclick="show('<?php echo $event['category_id']?>','<?php echo $event['category_name']?>','<?php echo $event['slug']?>')"><i class="fa fa-edit"></i>Update</button>
                <button type="button" class="btn btn-danger btn-block" onclick="deleteservicecategory('<?php echo $event['category_id']?>')"><i class="fa fa-times"></i>Delete</button>
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
            <h4 class="modal-title">Update Service Category</h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'update', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Service Category Name:</label>
                            <input type="text" name="Categoryname" id="Categoryname" class="form-control" placeholder="Service Category Name">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Service Category Short-Name:</label>
                            <input type="text" name="sname" id="sname" class="form-control" placeholder="Service Category Short-Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <input type="hidden" name="deleteId" id="deleteId">
                          <button class="btn btn-success" type="button" onclick="editservicecategory()"> <i class="fa fa-check"></i>Update</button>
                        </div>
                    </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>

<div class="modal modal-default" id="addservicecategoryid">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Service Category</h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addservicecategory', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Service Category Name:</label>
                            <input type="text" name="Categoryname" id="Categoryname" class="form-control">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Service Category Slug:</label>
                            <input type="text" name="sname" id="sname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <button class="btn btn-success" type="button" onclick="addservicecategorydetails()"> <i class="fa fa-check"></i>Add</button>
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
    $('#Categoryname').val(name);
    $('#Slug').val(shortcode);
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
    
    function editservicecategory(){
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
      var url='<?php echo base_url();?>index.php?adminController/Updateservicecategory';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#update").serialize()}; 
      $("#update").ajaxSubmit(options);
      $('#deleteSlider').modal('hide');
      setTimeout($.unblockUI, 600); 
    }
    function showservicecategory(){
      $('#addservicecategoryid').modal('show');
    }
    function addservicecategorydetails(){
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
      var url='<?php echo base_url();?>index.php?adminController/AddServicecategory/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addservicecategory").serialize()}; 
      $("#addservicecategory").ajaxSubmit(options);
      $('#addservicecategoryid').modal('hide');
      setTimeout($.unblockUI, 600);
    }
 
</script>
