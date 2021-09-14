<?php
     error_reporting(E_ALL);
     ini_set('display_errors', 0);    
?>
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Acknowledgement</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Acknowledgement</li>
			</ul>
		</div>	
		<div class="row">
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<?php  
						if($message!='Undefined' && $message!=''){
					?>
					<div class="wc-title">
						<h4>Message</h4>
					</div>
					<div class="widget-inner">
						<div class="row">
				          	<div class="col-12">
				          		<div class="callout callout-success text-center">
				          			<h4><?=$message?></h4>
				          		</div>
				          	</div>
				      	</div>
				      	<?php
						} if($messagefail!='Undefined' && $messagefail!=''){
						?>
					</div>
					<div class="row">
			          	<div class="col-12">
			          		<div class="callout callout-danger text-center">
			          			<h4><?=$messagefail?></h4>
			          		</div>
			          	</div>
			      	</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</main>
<div class="ttr-overlay"></div>