<section class="content-header">
  <h1>
    Home
    <small>Acknowledgement</small>
  </h1>
</section>
<section class="content">
  	<div class="card card-primary">
	    <div class="card-body">
	    	<?php  
				if($message!='Undefined' && $message!=''){
			?>
			<div class="row">
	          	<div class="col-xs-12 col-sm-12 col-md-12 col-la-12">
	          		  <div class="alert alert-success alert-dismissible"><h3><i class="fa fa-check"></i>Alerts!
	          		  </h3>
	          			<?=$message?>
	          		</div>
	          	</div>
	      	</div>
			<?php
			} if($messagefail!='Undefined' && $messagefail!=''){
			?>
			<div class="row">
	          	<div class="col-xs-12 col-sm-12 col-md-12 col-la-12">
	          		 <div class="alert alert-danger alert-dismissible"><h3><i class="fa fa-ban"></i> Alert!</h3>
	          			<?=$messagefail?>
	          		</div>
	          	</div>
	      	</div>
			<?php
			}
			?>
    	</div>
    </div>
</section>
