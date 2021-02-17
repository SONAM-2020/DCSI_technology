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