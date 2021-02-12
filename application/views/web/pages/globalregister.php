<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?>
<body>
  <div id="mainpublicContent">
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Global Supplier Registration Form</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <form action="#">
                        <div class="login-form">
                            <h4 class="login-title">1.User Registration Form</h4>
                            <div class="row">
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Name</label>
                                    <input class="mb-0" type="text" placeholder="Name">
                                </div>
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" placeholder="Email Address">
                                </div>
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Designation</label>
                                    <input class="mb-0" type="text" placeholder="Designation">
                                </div>
                                <div class="col-md-4 mb-20">
                                    <label>Mobile Number</label>
                                    <input class="mb-0" type="password" placeholder="Mobile Number">
                                </div>
                                <div class="col-md-4 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-4 mb-20">
                                    <label>Confirm Password</label>
                                    <input class="mb-0" type="password" placeholder="Confirm Password">
                                </div>
                                 <!-- <div class="col-md-12 mb-20">
                                    <label>Self Explanatory</label>
                                    <textarea class="mb-0" style="height: 70;"></textarea>
                                </div> -->
                            </div>
                        </div>
                        <div class="login-form">
                            <h4 class="login-title">2.Company Registration Form</h4>
                            <div class="row">
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Name of Company</label>
                                    <input class="mb-0" type="text" placeholder="Name of Company">
                                </div>
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Company Website</label>
                                    <input class="mb-0" type="text" placeholder="https://www.company.bt">
                                </div>
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Telephone</label>
                                    <input class="mb-0" type="text" placeholder="">
                                </div>
                                <div class="col-md-4 mb-20">
                                    <label>Company Address</label>
                                    <textarea class="mb-0" style="height: 70;"></textarea>
                                </div>
                                <div class="col-4">
                                <label for="Country">Country</label>
                                    <select name="Country" id="Country">
                                      <option value="-1">----select a value----</option>
                                      <option value="bhutan">Bhutan</option>
                                      <option value="mercedes">India</option>
                                      <option value="audi">Germany</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-12 mb-20">
                                    <label>City</label>
                                    <input class="mb-0" type="text" placeholder="city">
                                </div>
                                <div class="col-md-4 col-12 mb-20">
                                    <label>Zip/Pin Code</label>
                                    <input class="mb-0" type="text" placeholder="Zip/Pin Code">
                                </div>
                                <div class="col-12">
                                    <button class="register-button mt-0">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php  $this->load->view('web/includes/footer.php'); ?>
</div>
</body>
