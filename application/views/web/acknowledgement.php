<?php
    $this->load->view('web/includes/header.php');
?> 
<section class="event-details-area section-gap">
	<div class="container">
	<div class="login px-4 mx-auto mw-100">
		 <h3 class="heading mb-2 text-center"> <span>Acknowledgement </span></h3>
		<div class="panel panel-info">
    		<div class="panel panel-body">
    			<div class="row">
		            <div class="alert alert-danger col-lg-12 col-md-12 col-sm-12 col-xs-12">
		            	<?php  
							if($message!='Undefined' && $message!=''){
						?>
							<p><?=$message?></p>
						<?php
						}
						?>	
		            </div>
		            
		            <a href="<?php echo base_url();?>"><button type="button"   class="btn btn-info"><i class="fa fa-arrow-left"></i> Back to Login </button></a>
		        </div>
		    </div>
		</div>
	</div>
</div>
</section>
<?php
	    $this->load->view('web/includes/footer.php');
	?>