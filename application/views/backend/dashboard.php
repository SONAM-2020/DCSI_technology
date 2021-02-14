<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('backend/include/header.php'); ?>
	<?php $this->load->view('backend/include/top_navbar.php'); ?> 
 	<?php $this->load->view('backend/include/side_navbar.php'); ?> 
 	<div class="content-wrapper">
 		<div id="mainContentdiv"> 			
	     	<?php $this->load->view('backend/include/dashboarddetails.php'); ?> 
     	</div>
	</div>
    <?php  $this->load->view('backend/include/footer.php'); ?> 
</html> 