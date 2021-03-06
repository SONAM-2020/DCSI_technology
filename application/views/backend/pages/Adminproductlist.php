<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list mb-1">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Add Products</li>
            </ul>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="widget-box">
                    <div class="widget-inner p-1">
                        <button class="btn btn-auccess pull-right" onclick="addproduct()" type="button"> <i class="fa fa-plus"></i> Add</button><br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th style="display: none;">Description</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($List_all_product as $i=> $pro): ?>
                                <tr>
                                    <td><?=$i+1?></td>
                                    <td><?php echo $pro['Product_Name'];?></td>
                                    <td style="display: none;"><?php echo $pro['Description'];?></td>
                                    <td><?php echo $pro['Price'];?></td>
                                    <td><?php echo $pro['Status'];?></td>
                                    <td>
                                        <button type="button" class="btn-secondry btn-block" onclick="deleteproduct(<?php echo $pro['Id'];?>)"><i class="fa fa-times"></i>Delete</button>
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
</main>
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
