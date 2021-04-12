<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li> <b class="breadcrumb-title">Technology Request Report</b></li>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Conatct No.</th>
                                    <th>Present Address</th>
                                    <th>Equipment Name</th>
                                    <th>Equipment Description</th>
                                    <th>Date</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <?php foreach($reportDetils as $i=> $rep): ?>
                                <tr>
                                    <td><?=$i+1?></td>
                                    <td><?= $rep['Name'];?></td>
                                    <td><?= $rep['Email'];?></td>
                                    <td><?= $rep['Contact_No'];?></td>
                                    <td><?= $rep['Present_Address'];?></td>
                                    <td><?= $rep['Equipment_Name'];?></td>
                                    <td><?= $rep['Equipment_Description'];?></td>
                                    <td><?= $rep['Submitted_Date'];?></td>
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
 