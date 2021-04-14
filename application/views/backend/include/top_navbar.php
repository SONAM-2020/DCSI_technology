<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<div class="ttr-logo-box">
				<div>
					<a href="<?php echo base_url();?>index.php?loginController/dashboard" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="<?php echo base_url();?>uploads/dcsilogowhite.png" width="30" height="30">
						<img class="ttr-logo-desktop" alt="" src="<?php echo base_url();?>uploads/dcsilogowhite.png" width="160" height="27">
					</a>
				</div>
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img src="<?php echo base_url();?>uploads/Users/<?php echo $this->session->userdata('Image');?>" onerror="this.src='<?php echo base_url();?>uploads/user.jpg'" class="user-image" alt="User Image"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/userprofile/<?php echo $this->session->userdata('User_Id');?>')">My profile</a></li>
								<li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/password/<?php echo $this->session->userdata('User_Id');?>')">Change Password</a></li>
								<li><a href="<?php echo base_url();?>index.php?loginController/logout">Logout</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
		</div>
	</header>