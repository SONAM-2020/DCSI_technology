<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li> <b class="breadcrumb-title">Product Report</b></li>
            </ul>
        </div>  
        <div class="row">
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="widget-inner">
                    <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'movementform'));?>
                        <table id="table1" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Product Name</th>
                                    <th>Model_No</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <?php foreach($reportDetils as $i=> $rep): ?>
                                <tr>
                                    <td><?=$i+1?></td>
                                    <td><?= $rep['Product_Name'];?></td>
                                    <td><?= $rep['Model_No'];?></td>
                                    <td><?= $rep['Price'];?></td>
                                    <td><?= $rep['Last_Updated_Date'];?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   

<script>
    $(document).ready(function() {
        $('#table1').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
</script>
 