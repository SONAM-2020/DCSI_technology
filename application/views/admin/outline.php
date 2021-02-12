<div class="">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Guidelines</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="timeline">
              <div class="time-label">
                <span class="bg-red">Guidelines</span>
              </div>
              <div>
                <i class="fas fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header"><a href="#">Bhutan Telecom MIS</a></h3>

                  <div class="timeline-body">
                    <li>Management Department or Marketing Division have to upload file and give input to this system.</li>
                    <li>As an user you will get the report of various data depending on your selected category.</li>
                    <li>As a general user you will only get to view report with different graphical output.</li>
                  </div>
                </div>
              </div>
              <div>
                <i class="fas fa-user bg-green"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header no-border"><a href="#">Users Option</a></h3>
                  <div class="timeline-body">
                  <li>User can change their details by going to their profile.</li>
                  <li>Only Administrator have the power to delete record.</li>
                </div>
              </div>
            </div>
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header"><a href="#">Aim & Objectives</h3></a>
                <div class="timeline-body">
                <li>The application aims to dynamically accommodate data and give accurate report at fastest way.</li>
                <li>Reduce work load.</li>
                <li>Enable employee to get report for clarity.</li>
                <li>For effective and efficient process.</li>
                </div>
              </div>
    </section>
<script type="text/javascript">
function generateReport(year){
    $.blockUI
        ({ 
          css: 
          { 
              border: 'none', 
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius':  '10px', 
              opacity: .5, 
              color: '#fff' 
          } 
        });
        $("#mainContentdiv").load('<?php echo base_url();?>index.php?adminController/outline/outline');
          setTimeout($.unblockUI, 1000); 
  }
</script>
