<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assest/admin/dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>BADALA</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Service</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadservice/listservice/')"><i class="fa fa-circle-o"></i>View Service Data</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadservice/addservice/')"><i class="fa fa-circle-o"></i> Add Service</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadservice/servicecategory/')"><i class="fa fa-circle-o"></i> Service Category</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Company Details</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadcompany/addcompanydetails/')"><i class="fa fa-circle-o"></i> Add Company Details</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadcompany/listcompanydetails/')"><i class="fa fa-circle-o"></i> View Company Details</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Project</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">2</small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadproject/addproject/')"><i class="fa fa-circle-o"></i>Add Project</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadproject/Listproject/')"><i class="fa fa-circle-o"></i>List Project</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Download File</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadfile/listdownload/')"><i class="fa fa-circle-o"></i> View Download Data</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadfile/adddownload/')"><i class="fa fa-circle-o"></i> Add Downloads Files</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadfile/downloadcategory/')"><i class="fa fa-circle-o"></i> Download Category</a></li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Youtube Video</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadvideo/listvideo/')"><i class="fa fa-circle-o"></i> View Youtube Videos</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadvideo/addvideos/')"><i class="fa fa-circle-o"></i> Add Video</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>News & Event</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadevents/listevents/')"><i class="fa fa-circle-o"></i> View Event Data</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadevents/addevents/')"><i class="fa fa-circle-o"></i> Add News & Event</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadclients/clients/')">
            <i class="fa fa-th"></i> <span>Client Data</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Staff & Team</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadstaff/liststaff/')"><i class="fa fa-circle-o"></i> View Team Details</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadstaff/addstaff/')"><i class="fa fa-circle-o"></i> Add Staff/Team</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadstaff/department/')"><i class="fa fa-circle-o"></i>Department</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadsystem/systemuser/')">
            <i class="fa fa-envelope"></i> <span>System Users</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">1</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Configuration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadconfig/generalconfig/')"><i class="fa fa-circle-o"></i> General Configuration</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadconfig/Officialdata/')"><i class="fa fa-circle-o"></i> Official Data Update</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadconfig/emailsetting/')"><i class="fa fa-circle-o"></i> Email Setting</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadconfig/department/')"><i class="fa fa-circle-o"></i> Change Logo</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadconfig/department/')"><i class="fa fa-circle-o"></i> Change Image Footer</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>