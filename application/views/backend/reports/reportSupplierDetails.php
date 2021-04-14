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
                                    <th>Company Name</th>
                                    <th>License_No</th>
                                    <th>Telephone_No</th>
                                    <th>Company Address</th>
                                    <th>Remarks</th>
                                    <th>Updated_By</th>
                                    <th>Updated_Date</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <?php foreach($reportDetils as $i=> $rep): ?>
                                <tr>
                                    <td><?=$i+1?></td>
                                    <td><?= $rep['Company_Name'];?></td>
                                    <td><?= $rep['License_No'];?></td>
                                    <td><?= $rep['Telephone_No'];?></td>
                                    <td><?= $rep['Company_Address'];?></td>
                                    <td><?= $rep['Remarks'];?></td>
                                    <td><?= $rep['Updated_By'];?></td>
                                    <td><?= $rep['Update_date'];?></td>
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
 