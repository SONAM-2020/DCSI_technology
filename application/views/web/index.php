<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view('web/includes/header.php'); ?> 
<body>
	<?php $this->load->view('web/includes/nevagation.php'); ?> 
	<div id="mainpublicContent">
		<?php $this->load->view('web/includes/home.php'); ?> 
	</div>
<?php  $this->load->view('web/includes/footer.php'); ?>
</body>
</html>