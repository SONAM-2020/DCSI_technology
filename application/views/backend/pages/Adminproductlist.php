<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list mb-1">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Edit Products</li>
            </ul>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="widget-box">
                    <div class="widget-inner p-1">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($List_all_product as $i=> $pro): ?>
                                <tr>
                                    <td><?=$i+1?></td> 
                                    <td><?php echo $pro['Product_Name'];?></td>
                                    <td><?php echo $pro['Price'];?></td>
                                    <td><?php echo $pro['Category_Name'];?></td>
                                    <td><?php echo $pro['Status'];?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="editinfo('<?php echo $pro['Id']?>','<?php echo $pro['Product_Name']?>','<?php echo $pro['Price']?>','<?php echo $pro['Category_Name']?>','<?php echo $pro['Status']?>')"><i class="fa fa-times"></i>Edit</button>
                                        <button type="button" class="btn-secondry" onclick="deleteproduct(<?php echo $pro['Id'];?>)"><i class="fa fa-edit"></i>Delete</button>
                                        
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-default" id="Edit">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="wc-title">
            <br>
            <div class="col-12">
              <div class="col-6">
            <h4 class="modal-title" style="text-align: left;"><span id="modalheader1"></span></h4>
              </div>
      </div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'editformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-12">
                  <div class="row">
                      <div class="col-6">
                        <label>Product Name: <span class="text-danger">*</span></label>
                          <input type="text" id="Name" onclick="remove_err('Name_err')" name="Name" class="form-control">
                          <span id="Name_err" class="text-danger"></span>
                      </div>
                      <div class="col-6">
                        <label>Price: <span class="text-danger">*</span></label>
                          <input type="text" id="Price" onclick="remove_err('Price_err')" name="Price" class="form-control">
                          <span id="Price_err" class="text-danger"></span>
                      </div>
                      <br>
                      <div class="col-6">
                        <label>Product Category: <span class="text-danger">*</span></label>
                        <select name="Category_Id" id="Category_Id" class="form-control">
                          <option value="">Select</option>
                            <?php foreach($category_list as $i=> $cat): ?>
                                <option value="<?=$cat['Id']?>"> <?=$cat['Category_Name']?></option>
                            <?php endforeach;?>
                        </select>
                      </div>
                      <div class="col-6">
                        <label>Status: <span class="text-danger">*</span></label>
                        <select name="Status" id="Status" class="form-control">
                          <option value="Active">Active</option>
                          <option value="InActive">InActive</option>
                        </select>
                      </div>
                    </div>
               </div>
               <br>
               <div class="col-12">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                   <input type="hidden" name="EditId" id="EditId">
                  <button type="button" class="btn fa-pull-right" id="addBtn" onclick="EditproductInfo()"><span id="btnspanedit"></span></button><br><br>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
</main>
<script src="<?php echo base_url();?>assest/admin/assets/js/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assest/website/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>
<script type="text/javascript">
     $(document).ready(function() {
    $('#example1').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
  function deleteproduct(id){
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
        var url='<?php echo base_url();?>index.php?adminController/Deleteproduct/'+id+'/Adminproductlist';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }

</script> 
<script type="text/javascript">
    function editinfo(Editid,name,price,cat,tatus){
       // alert('#Category');
      $('#EditId').val(Editid);
      $('#Name').val(name);
      $('#Price').val(price);
      $('#Category_Id').val(cat);
      $('#Status').val(tatus);
      $('#actiontype').val('Save Changes');
      $('#modalheader1').html('Edit Product');
      $('#btnspanedit').html('<i class="fa fa-save"></i> Save Users');
      $('#Edit').modal('show');

    }
    function EditproductInfo(){
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
          var url='<?php echo base_url();?>index.php?adminController/Editadminproduct';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editformId").serialize()}; 
          $("#editformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#Edit').modal('hide');
    }
</script>
