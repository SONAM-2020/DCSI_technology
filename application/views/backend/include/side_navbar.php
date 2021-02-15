<div class="ttr-sidebar">
	<div class="ttr-sidebar-wrapper content-scroll">
		
		<nav class="ttr-sidebar-navi">
			<ul>
				<li>
					<a href="<?php echo base_url();?>index.php?loginController/dashboard" class="ttr-material-button">
						<span class="ttr-icon"><i class="ti-home"></i></span>
	                	<span class="ttr-label">Dashborad</span>
	                </a>
	            </li>
				<?php
					if($this->session->userdata('Role_Id')==1){
				?>		
		            <li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Website Management</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="#" class="ttr-material-button"  onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/GeneralInfo/')"><span class="ttr-label">General Information</span></a>
		                	</li>
		                	<li>
		                		<a href="#" class="ttr-material-button"  onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/ImageSlider/')"><span class="ttr-label">Manage Home Slider</span></a>
		                	</li>
		                	<li>
		                		<a href="#" class="ttr-material-button"  onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Service/')"><span class="ttr-label">Partner Profile</span></a>
		                	</li>
		                </ul>
		            </li>
		            <li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/product_category/')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Product Category Management</span>
		                </a>
		            </li>
					<li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/new_registration_list/listall')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Registration Supplier List</span>
		                </a>
		            </li>
		            <li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/new_registration_list/list_approved_rejected/2')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Approved Supplier List</span>
		                </a>
		            </li>
		            <li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/new_registration_list/list_approved_rejected/3')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Rejected Supplier List</span>
		                </a>
		            </li>
				<?php }else{ ?>
					<li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/supplierpage/loadpage/')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Product Management</span>
		                </a>
		            </li>
		            <li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/GuideLines/')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Local Technology Request</span>
		                </a>
		            </li>
		            <li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/GuideLines/')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Order Request</span>
		                </a>
		            </li>
				<?php } ?>
				
	            <li class="ttr-seperate"></li>
			</ul>
		</nav>
	</div>
</div>