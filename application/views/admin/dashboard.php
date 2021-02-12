<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('admin/css.php'); ?> 
    <body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
        	<?php $this->load->view('admin/header.php'); ?> 
        	<?php $this->load->view('admin/nav.php'); ?> 
		 	<div class="content-wrapper">
		 		<div id="mainContentdiv">
			     	<?php $this->load->view('admin/reportdetails.php'); ?> 
		     	</div>
			</div>
			
	<?php
    $this->load->view('admin/footer.php');
	?> 
    </div> 
	</body>

</html> 


