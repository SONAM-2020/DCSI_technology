<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Downloads</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Add Downloads Files</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add/View Downloads Files</h4>
						</div>
						<br>
						<div><button class="btn-secondry fa-pull-right" onclick="addinfo()" type="button">Add</button></div>
						<br>
						<div class="widget-inner">
							<table id="example1" class="table table-bordered table-striped">
						    <thead style="text-align: center">
						    <tr>
						      <th>No.</th>
                  <th>Files Name</th>
                  <th>Files</th>
                  <th>Status</th>
						      <th>Action</th>
						    </tr>
						    </thead>
						    <tbody style="text-align: center">
						    <?php foreach($Downloads as $i=> $event): ?>
						    <tr>
						      <td><?=$i+1?></td>
                  <th><?php echo $event['Name'];?></th>
                  <th><?php echo $event['file'];?></th>
                  <td>
                    <?php if($event['Status']=="Active"){ ?>
                          <span class="btn">
                              <?php echo $event['Status'];?>
                          </span>
                      <?php } else{?>   
                          <span class="btn-secondry">
                              <?php echo $event['Status'];?>
                          </span> 
                      <?php }?>

                  </td>
						      <td>
						       <button type="button" class="btn-secondry btn-block" onclick="deleteslider(<?php echo $event['Id'];?>)"><i class="fa fa-times"></i>Delete</button>
						        </td>
						      </tr>
                  			<?php endforeach;?>
						    </tbody>
						  </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

	<div class="modal modal-default" id="addbioDetails">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="wc-title">
          	<br>
          	<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
          		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
            <h4 class="modal-title" style="text-align: left;"><span id="modalheader"></span></h4>
          		</div>
			</div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                          <label>Name: <span class="text-danger">*</span></label>
                            <input type="text" id="name" onclick="remove_err('Name_err')" name="name" class="form-control">
                            <span id="Name_err" class="text-danger"></span>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 mb-20">
                            <label>Upload Files:<span class="text-danger">*</span></label><span style="color: red;">
<<<<<<< HEAD
                            <input type="file" id="file"  name="file" class="form-control">
                            <p id="output"></p>
=======
                            <input type="file" id="Image" onchange="checkfilesize(this,'images','Image_err','addBtn')" onclick="remove_err('Image_err')" name="Image" class="form-control">
>>>>>>> f4f111c6c524b4fe25111e9f488380c0ba1bf206
                        </div>
                        </div>
                        <br>
                    </div>
               </div>
               <br>
               <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-20">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn-secondry fa-pull-right" id="addBtn" onclick="AddInfo()"><span id="btnspan"></span></button><br><br>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function addinfo(){
      $('#actiontype').val('add');
      $('#modalheader').html('Add Downloads Files');
      $('#btnspan').html('<i class="fa fa-save"></i> Upload Files');
      $('#addbioDetails').modal('show');
    }
    function AddInfo(){
      if(validateaddform()){
      $.blockUI
          ({ 
            css: 
            { 
                  border: 'none', 
                  padding: '15px', 
                  backgroundColor: '#000', 
                  '-webkit-border-radius': '10px', 
                  '-moz-border-radius': '10px', 
                  opacity: .5, 
                  color: '#fff' 
            } 
          });
          var url='<?php echo base_url();?>index.php?adminController/AddFiles';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
          $("#addformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#addbioDetails').modal('hide');
    }
    }

    function validateaddform(){
      var retrtype=true;
      if($('#name').val()==""){
        $('#name_err').html('Please mention Files Name');
        retrtype=false;
      }
      return retrtype;
    }
   function deleteslider(id){
      $.blockUI
          ({ 
            css: 
            { 
                  border: 'none', 
                  padding: '15px', 
                  backgroundColor: '#000', 
                  '-webkit-border-radius': '10px', 
                  '-moz-border-radius': '10px', 
                  opacity: .5, 
                  color: '#fff' 
            } 
          });
        var url='<?php echo base_url();?>index.php?adminController/DeleteDownloads/'+id+'/Downloads';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
</script> 
<script type="text/javascript">
    $('#file').on('change', function() {

        const size =
           (this.files[0].size / 1024 / 1024).toFixed(2);

        if (size > 100 || size < 2) {
            alert("File must be between the size of 2-100 MB");
        } else {
            $("#output").html('<b>' +
               'This file size is: ' + size + " MB" + '</b>');
        }
    });
</script>