<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list mb-1">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Registration List</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b30">
                <div class="widget-box">
                    <div class="widget-inner">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead style="text-align: center">
                            <tr>
                                <th>Sl#</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Contact No</th>
                                <th>Email</th>
                                <th>Company Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody style="text-align: center">
                                <?php foreach($registration_list as $i=> $reg): ?>
                                <tr>
                                    <td><?=$i+1?></td>
                                    <td><?php echo $reg['Name'];?></td>
                                    <td><?php echo $reg['Designation'];?></td>
                                    <td><?php echo $reg['Contact_No'];?></td>
                                    <td><?php echo $reg['Email'];?></td>
                                    <td><?php echo $reg['Company_Name'];?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-block"><a style="color: white;" href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/new_registration_list/approved_details/<?php echo $reg['user_id']?>')"><i class="fa fa-eye"></i> View</a></button> 
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
      setInterval(function() {
        $('#messages').hide();
      }, 9000);
    }); 
     $(document).ready(function() {
    $('#example1').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script> 
