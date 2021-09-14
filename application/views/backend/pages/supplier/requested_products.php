<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Order Request</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Order Request</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="widget-inner">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead style="text-align: center">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Submission Date Time</th>
                                <th>Status</th>
                                <th>Update Order</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                            <?php foreach($product_list as $i=> $pro): ?>
                                <tr>
                                    <td><?=$i+1?></td>
                                    <td><?php echo $pro['Name'];?></td>
                                    <td><?php echo $pro['Contact_No'];?></td>
                                    <td><?php echo $pro['Email'];?></td>
                                    <td><a href="#" onclick="loadproductdetails('<?php echo $pro['Product_Id'];?>')"><?php echo $pro['Product_Name'];?></a></td>
                                    <td><?php echo $pro['Quantity'];?></td>
                                    <td><?php echo $pro['Submitted_Date'];?></td>
                                    <td><?php echo $pro['Status'];?></td>
                                    <td><button type="button" class="btn-secondry btn-info btn-block"><a style="color: white;" href="#" onclick="editinfo('<?php echo $pro['Id']?>','<?php echo $pro['Status']?>')"><i class="fa fa-edit"></i>Update</button> </td>
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
    <div class="modal-dialog modal-md">
      <div class="modal-content">
          <div class="wc-title">
            <br>
            <div class="col-12">
                <h4 class="modal-title" style="text-align: left;"><span id="modalheader1"></span></h4>
            </div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'editformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-12">
                  <div class="row">
                        <label>Order Status: <span class="text-danger">*</span></label>
                        <select name="category" id="category" class="form-control">
                          <option value="Received">Received</option>
                          <option value="Completed">Completed</option>
                          <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>
               </div>
               <br>
               <div class="col-12">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                   <input type="hidden" name="EditId" id="EditId">
                  <button type="button" class="btn fa-pull-right" id="addBtn" onclick="EditInfo()"><span id="btnspanedit"></span></button><br><br>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
</main>
<script type="text/javascript">
   function loadproductdetails(id){
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
    var url='<?php echo base_url();?>index.php?adminController/supplierpage/ViewproductDetails/'+id;
    $("#mainContentdiv").load(url);
    setTimeout($.unblockUI, 1000); 
  }

</script> 
<script type="text/javascript">
    function editinfo(Editid,tatus){
      $('#EditId').val(Editid);
      $('#category').val(tatus);
      $('#actiontype').val('add');
      $('#modalheader1').html('Update Order Status');
      $('#btnspanedit').html('<i class="fa fa-save"></i> Save Changes');
      $('#Edit').modal('show');
    }
    function EditInfo(){
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
          var url='<?php echo base_url();?>index.php?adminController/EditorderStatus';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editformId").serialize()}; 
          $("#editformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#Edit').modal('hide');
    }
</script>