<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="alert alert-info">Download File Category</h3>
        </div>
        <div class="box-body">
          <button type="button" class="btn btn-success" onclick="showdownloadcategory()"><i class="fa fa-edit"></i>Add</button>
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
            <tbody>
              <?php foreach($categoryList as $i=> $event): ?>
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['category_name'];?></td>
              <td><?php echo $event['category_sname'];?></td>
              <td>
                  <button type="button" class="btn btn-info btn-block" onclick="show('<?php echo $event['Id']?>','<?php echo $event['category_name']?>','<?php echo $event['category_sname']?>')"><i class="fa fa-edit"></i>Update</button>
                <button type="button" class="btn btn-danger btn-block" onclick="deleteservicecategory('<?php echo $event['Id']?>')"><i class="fa fa-times"></i>Delete</button>
                </td>
              </tr>
            </tbody>
            <?php endforeach; ?>
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
            <h4 class="modal-title">Update Download Category</h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'update', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Download Category Name:</label>
                            <input type="text" name="Categoryname" id="Categoryname" class="form-control" placeholder="Download Category Name">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Dowload Category Short-Name:</label>
                            <input type="text" name="sname" id="sname" class="form-control" placeholder="Download Category Short-Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <input type="hidden" name="deleteId" id="deleteId">
                          <button class="btn btn-success" type="button" onclick="editdownloadcategory()"> <i class="fa fa-check"></i>Update</button>
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
            <h4 class="modal-title">Add download Category</h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'adddownloadcategory', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Download Category Name:</label>
                            <input type="text" name="Categoryname" id="Categoryname" class="form-control">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Download Category Slug:</label>
                            <input type="text" name="sname" id="sname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <button class="btn btn-success" type="button" onclick="adddownloadcategorydetails()"> <i class="fa fa-check"></i>Add</button>
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
    $('#sname').val(shortcode);
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
        var url='<?php echo base_url();?>index.php?adminController/DeleteDowloadcategory/'+id+'/downloadcategory';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
    
    function editdownloadcategory(){
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
      var url='<?php echo base_url();?>index.php?adminController/UpdateDownloadcategory';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#update").serialize()}; 
      $("#update").ajaxSubmit(options);
      $('#deleteSlider').modal('hide');
      setTimeout($.unblockUI, 600); 
    }
    function showdownloadcategory(){
      $('#adddownloadcategory').modal('show');
    }
    function adddownloadcategorydetails(){
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
      var url='<?php echo base_url();?>index.php?adminController/AddDownloadcategory/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#adddownloadcategory").serialize()}; 
      $("#adddownloadcategory").ajaxSubmit(options);
      $('#adddownloadcategoryid').modal('hide');
      setTimeout($.unblockUI, 600);
    }
 
</script>