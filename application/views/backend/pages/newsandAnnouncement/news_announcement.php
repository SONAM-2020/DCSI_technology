<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">News & Announcement</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>News & Announcement</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add/View News & Announcement</h4>
						</div>
						<br>
						<div><button class="btn-secondry fa-pull-right" onclick="addinfo()" type="button">Add</button></div>
						<br>
						<div class="widget-inner">
							<table id="example1" class="table table-bordered table-striped">
						    <thead style="text-align: center">
						    <tr>
						      <th>No.</th>
                  <th>News Title</th>
						      <th style="display: none;">News Details</th>
						      <th>Image</th>
                  <th>Posted Date</th>
                  <th>Status</th>
						      <th>Action</th>
						    </tr>
						    </thead>
						    <tbody style="text-align: center">
						    <?php foreach($News_info as $i=> $event): ?> 
						    <tr>
						      <td><?=$i+1?></td>
                  <th><?php echo $event['News_title'];?></th>
						      <td style="display: none;"><?php echo $event['Description'];?></td>
						      <td><img style="width: 100px; height: 100px;" src="<?php echo base_url();?>uploads/NewsAnnouncement/<?php echo $event['Image'];?>"></td>
                  <th><?php echo $event['Post_date'];?></th>
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
                    <button class="btn-secondry btn-info btn-block" onclick="viewNewsDetail('<?php echo $event['Id'];?>')" type="button"><i class="fa fa-eye"></i> View/Edit</button><br><br>
						       <button type="button" class="btn btn-danger btn-block" onclick="deletenews(<?php echo $event['Id'];?>)"><i class="fa fa-times"></i>Delete</button>
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
          	<div class="col-12">
          		<div class="col-6">
            <h4 class="modal-title" style="text-align: left;"><span id="modalheader"></span></h4>
          		</div>
			</div>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
            <div class="col-12">
                  <div class="row">
                    <div class="col-6">
                          <label>Title of News: <span class="text-danger">*</span></label>
                            <input type="text" id="name" onclick="remove_err('Name_err')" name="name" class="form-control">
                            <span id="Name_err" class="text-danger"></span>
                        </div>
                        <div class="col-6">
                            <label>Upload News Images:<span class="text-danger">*</span></label><span style="color: red;"><i>(Image Size:700*438)</i></span>
                            <input type="file" id="Image" onchange="checkfilesize(this,'images','Image_err','addBtn')" onclick="remove_err('Image_err')" name="Image" class="form-control">
                            <span id="Image_err" class="text-danger"></span>
                        </div>
                        <div class="col-12">
                          <label>News Description: <span class="text-danger">*</span></label>
                          <textarea style="height: : 100px;" type="text" id="description" onclick="remove_err('Description_err')" name="description" class="form-control summernote"></textarea>
                            <span id="Description_err" class="text-danger"></span>
                        </div>
                        <br>
                    </div>
               </div>
               <br>
               <div class="col-12">
                  <button type="button" class="btn fa-pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn-secondry fa-pull-right" id="addBtn" onclick="AddInfo()"><span id="btnspan"></span></button><br><br>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $('.summernote').summernote({
      height:250
    });
   $(document).ready(function() {
    $('#example1').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>
<script type="text/javascript">
    function addinfo(){
      $('#actiontype').val('add');
      $('#modalheader').html('Add News & Announcement');
      $('#btnspan').html('<i class="fa fa-save"></i> Add Details');
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
          var url='<?php echo base_url();?>index.php?adminController/Addnews';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
          $("#addformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#addbioDetails').modal('hide');
    }
    }
    function validateaddform(){
      var retrtype=true;
      if($('#name').val()==""){
        $('#name_err').html('Please mention News Title');
        retrtype=false;
      }
      if($('#description').val()==""){
        $('#Description_err').html('Please mention News Description');
        retrtype=false;
      }
      if($('#image').val()==""){
        $('#Image_err').html('Image is required');
        retrtype=false;
      }
      return retrtype;
    }
   function deletenews(id){
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
        var url='<?php echo base_url();?>index.php?adminController/Deletenews/'+id+'/news_announcement';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
    function viewNewsDetail(id){
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
    var url='<?php echo base_url();?>index.php?adminController/loadpage/ViewnewsDetails/'+id;
    $("#mainContentdiv").load(url);
      setTimeout($.unblockUI, 1000); 
  }

</script> 