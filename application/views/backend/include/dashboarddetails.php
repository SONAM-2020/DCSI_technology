
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Dashboard</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Dashboard</li>
			</ul>
		</div>	
		<div class="row">
			<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="widget-card widget-bg1">					 
					<div class="wc-item">
						<h4 class="wc-title">
							Total No. of Product
						</h4>
						<span class="wc-des">
							Product added to System
						</span>
						<span class="wc-stats">
							<span class="counter"><?php
              		$size=sizeof($this->db->get_where('t_products_master', array(
			            'Status' => 'Active'
    			        ))->result_array());
    			        if($size>0){
    			        	echo $size;
    			        }
    			        else{
    			        	echo 0;
    			        }
            		?></span> 
						</span>		
						<div class="progress wc-progress">
							<div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="wc-progress-bx">
							<span class="wc-change">
							</span>
							<span class="wc-number ml-auto">
							</span>
						</span>
					</div>				      
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="widget-card widget-bg2">					 
					<div class="wc-item">
						<h4 class="wc-title">
						Technology Request
						</h4>
						<span class="wc-des">
						Total Technology Request
						</span>
						<span class="wc-stats counter">
							<?php
								$size=sizeof($this->db->get_where('t_technology_request', array(
								'Status' => 'Active'
								))->result_array());
								if($size>0){
									echo $size;
								}
								else{
									echo 0;
								}
							?>
						</span>		
						<div class="progress wc-progress">
							<div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>				      
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="widget-card widget-bg3">					 
					<div class="wc-item">
						<h4 class="wc-title">
							New Orders 
						</h4>
						<span class="wc-des">
							Fresh Order Amount 
						</span>
						<span class="wc-stats counter">
							7 
						</span>		
						<div class="progress wc-progress">
							<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="wc-progress-bx">
							<span class="wc-change">
							</span>
							<span class="wc-number ml-auto">
							</span>
						</span>
					</div>				      
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="widget-card widget-bg4">					 
					<div class="wc-item">
						<h4 class="wc-title">
							Total Users 
						</h4>
						<span class="wc-des">
							Total Number of Users
						</span>
						<span class="wc-stats counter">
							<?php
              		$size=sizeof($this->db->get_where('t_user_master', array(
			            'Status' => 'Active'
    			        ))->result_array());
    			        if($size>0){
    			        	echo $size;
    			        }
    			        else{
    			        	echo 0;
    			        }
            		?>
						</span>		
						<div class="progress wc-progress">
							<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>				      
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="wc-title">
						<h4></h4>
					</div>
					<div class="widget-inner">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<div class="ttr-overlay"></div>




