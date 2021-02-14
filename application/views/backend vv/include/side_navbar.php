<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<div class="ttr-sidebar-logo">
				<a href="#"><img alt="" src="<?php echo base_url();?>uploads/1.png" width="122" height="27"></a>
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="<?php echo base_url();?>index.php?loginController/dashboard" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Dashborad</span>
		                </a>
		            </li>
		            <li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/add_products/')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Product Management</span>
		                </a>
		            </li>
		            <li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/GuideLines/')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Company Information</span>
		                </a>
		            </li>
		            <li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/GuideLines/')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">Local Technology Request</span>
		                </a>
		            </li>
		            <li>
						<a href="#" class="ttr-material-button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/userprofile/<?php echo $this->session->userdata('User_table_id');?>')">
							<span class="ttr-icon"><i class="ti-layout-media-center-alt"></i></span>
		                	<span class="ttr-label">My Accout</span>
		                </a>
		            </li>
		            <li>
						<a href="<?php echo base_url();?>index.php?loginController/logout">
							<span class="ttr-icon"><i class="ti-share"></i></span>
		                	<span class="ttr-label">Log Out</span>
		                </a>
		            </li>
		            <li class="ttr-seperate"></li>
				</ul>
			</nav>
		</div>
	</div>