<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view('web/includes/header.php'); ?> 
<!-- <body style="background-image: url('<?php echo base_url();?>uploads/background.png');"> -->
	<body style="background-image: url('<?php echo base_url();?>uploads/background.jpg');">
	<?php $this->load->view('web/includes/nevagation.php'); ?> 
	<div id="mainpublicContent">
		<?php $this->load->view('web/includes/home.php'); ?> 
	</div>
<?php  $this->load->view('web/includes/footer.php'); ?>
</body>
</html>