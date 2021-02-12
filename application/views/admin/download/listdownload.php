<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="alert alert-info">Download File</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Download</th>
              <th>Title</th>
              <th>Category</th>
              <th>Type</th>
              <th>Author</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php foreach($downloadlist as $i=> $event): ?>
            <tr>
             <td><?=$i+1?></td>
              <td><img src="<?php echo $event['download_file'];?>" style="width:10%" alt="Download File"></td>
              <td><?php echo $event['download_name'];?></td>
              <td><?php echo $event['download_category'];?></td>
              <td><?php echo $event['type_of_download'];?></td>
              <td><?php echo $event['author'];?></td>
              <td>
                 <button type="button" class="btn btn-info btn-block" onclick="showrole('<?php echo $event['Id']?>','<?php echo $event['download_name']?>','<?php echo $event['type_of_download']?>','<?php echo $event['download_category']?>')"><i class="fa fa-edit"></i>Edit</button>

               <button type="button" class="btn btn-danger btn-block" onclick="deletedownload('<?php echo $event['Id']?>')"><i class="fa fa-times"></i>Delete</button>
              </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section><div class="modal modal-default" id="deleteSlider">
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
                    <div class="form-group row">
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Service Name:</label>
                          <textarea name="name" class="form-control" id="name" placeholder="Service Name">
                          </textarea>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Type Of Download:</label>
                          <select name="type" class="form-control " id="type">
                          <option value="Free Download">Free Download</option>
                          <option value="Paid Download">Paid Download</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Category Download:</label>
                         <select name="Category" id="Category" class="form-control" placeholder="Role" onclick="removeer('servicetype_err')">
                            <option value=""> Select</option>
                            <?php foreach($categoryList as $i=> $role): ?>
                              <option value="<?=$role['Id']?>"> <?=$role['category_name']?></option>
                              <?php endforeach; ?>  
                          </select>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Link/website related to download</label>
                          <input type="text" name="Link" id="Link" class="form-control" placeholder="Link/website related to download" onclick="removeer('Link_err')">
                          <span id="Link_err"  class="text-danger"></span>
                      </div>
                    </div>
                    <div class="form-group">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">          
                          <input type="hidden" name="deleteId" id="deleteId">
                          <button class="btn btn-success" type="button" onclick="updatedownload()"> <i class="fa fa-check"></i>Save Changes</button>
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
    
    function showrole(id,s_name,t,c,l){
    $('#deleteId').val(id);
    $('#name').val(s_name);
    $('#type').val(t);
    $('#Category').val(c);
    $('#deleteSlider').modal('show');
  }
  function updatedownload(){
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
      var url='<?php echo base_url();?>index.php?adminController/UpdateDownload/listdownload';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#Update").serialize()}; 
      $("#Update").ajaxSubmit(options);
      $('#deleteSlider').modal('hide');
      setTimeout($.unblockUI, 600); 
      }

      $('.summernote').summernote({
      height: 150,   
      });

      function deletedownload(id){
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
        var url='<?php echo base_url();?>index.php?adminController/DeleteDownload/'+id+'/listdownload';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
   
</script>