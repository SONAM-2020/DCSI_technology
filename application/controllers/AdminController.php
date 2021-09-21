<?php header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller { 
  public function index(){
    $page_data['Message'] = $this->db->get_where('t_contactus',array('Status'=>'Active'))->result_array();

	}
  function loadpage($param1="",$param2="",$param3=""){
    if($param1=="userprofile"){
        $page_data['userDetils'] = $this->db->get_where('t_user_master',array('Id'=>$param2))->row(); 
        $page_data['message']="";
        $this->load->view('backend/pages/userprofile', $page_data);
      }
    if($param1=="password"){
      $page_data['userDetils'] = $this->db->get_where('t_user_master',array('Id'=>$param2))->row(); 
      $page_data['message']="";
      $this->load->view('backend/pages/changepassword', $page_data);
    }
    if($param1=="User"){
      $page_data['Admin'] = $this->db->get_where('t_user_master',array('Role_Id'=>'1'))->result_array(); 
      $page_data['message']="";
      $this->load->view('backend/pages/adminuser', $page_data);
    }
    if($param1=="product_category"){
      $page_data['categoryList'] = $this->db->get_where('t_category_master')->result_array();
      $page_data['message']="";
      $this->load->view('backend/pages/product_category', $page_data);
    }
    if($param1=="CompanyInformation"){
      $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
      $page_data['message']="";
      $this->load->view('backend/pages/CompanyInformation', $page_data);
    }
    if($param1=="ImageSlider"){
      $page_data['ImageSlider'] = $this->db->get_where('t_image_slider')->result_array();
      $page_data['message']="";
      $this->load->view('backend/pages/ImageSlider', $page_data);
    }
    if($param1=="Downloads"){
      $page_data['Downloads'] = $this->db->get_where('t_downloads')->result_array();
      $page_data['message']="";
      $this->load->view('backend/pages/Downloads', $page_data);
    }
    if($param1=="PartnerProfile"){
      $page_data['PartnerInfo'] = $this->db->get_where('t_partner_details')->row(); 
      $page_data['message']="";
      $this->load->view('backend/pages/PartnerProfile', $page_data);
    }
    if($param1=="News"){
        $page_data['News_info'] = $this->db->get_where('t_news_announcement')->result_array();
        $this->load->view('backend/pages/newsandAnnouncement/news_announcement', $page_data);
    }
    if($param1=="ViewnewsDetails"){
        $page_data['news_announcementdetails'] = $this->db->get_where('t_news_announcement', array(
        'Id' => $param2))->row();
        $this->load->view('backend/pages/newsandAnnouncement/news_announcementdetails', $page_data);
    }
    if($param1=="listproductmaster"){
       /* $page_data['List_all_product'] = $this->db->get_where('t_products_master', array(
        'Status' => 'Active'))->result_array();*/
        $page_data['category_list'] = $this->db->get_where('t_category_master', array(
        'Status' => 'Active'))->result_array();
        $query ="SELECT p.`Id`, p.`Product_Name`,p.`Price`,p.`Status`,p.`Category_Id`,r.`Category_Name` FROM `t_products_master` p LEFT JOIN `t_category_master` r ON r.`Id`= p.`Category_Id` WHERE p.`Status`='Active'";
        $page_data['List_all_product'] = $this->db->query($query)->result_array(); 
        $this->load->view('backend/pages/Adminproductlist', $page_data);
    }
    if($param1=="adminviewtechnologyrequest"){
        $page_data['technologyrequestformList'] = $this->db->get_where('t_technology_request', array(
        'Status' => 'Active'))->result_array();
        $this->load->view('backend/pages/supplier/adminviewtechnologyrequest', $page_data);
    }
    if($param1=="viewtechnologyrequest"){
        $page_data['technologyrequestformList'] = $this->db->get_where('t_technology_request', array(
        'Type' => 'Local'))->result_array();
        $this->load->view('backend/pages/supplier/viewtechnologyrequest', $page_data);
    }
    if($param1=="ViewRequestDetails"){
        $page_data['technologyrequestformList'] = $this->db->get_where('t_technology_request', array(
            'Id' => $param2))->row();
        $this->load->view('backend/pages/supplier/ViewTechnologyRequestDetails', $page_data);
    }
    if($param1=="reportIndex"){
            $this->load->view('backend/reports/reportIndex');
        }

    if($param1=="generatereport"){
        $fromdate=$this->input->post('fromdate');
        $todate=$this->input->post('todate');
        $query ="SELECT  p.`Id`,p.`Description`,p.`Last_Updated_Date`,p.`Model_No`,p.`Price`,p.`Product_Name` FROM t_products_master p WHERE  p.`Last_Updated_Date` BETWEEN '".$fromdate."' AND '".$todate."'";
        $page_data['reportDetils'] = $this->db->query($query)->result_array(); 
        $this->load->view('backend/reports/reportDetails',$page_data);
    }
    if($param1=="SectorIndex"){
      $page_data['category_list'] = $this->CommonModel->get_active_category_list();
            $this->load->view('backend/reports/reportsectorIndex',$page_data);
        }

    if($param1=="generateSectorIndexreport"){
        $fromdate=$this->input->post('fromdate');
        $todate=$this->input->post('todate');
        $category=$this->input->post('category');
        $query ="SELECT  p.`Id`,p.`Description`,p.`Last_Updated_Date`,p.`Model_No`,p.`Price`,p.`Product_Name`, p.`Category_Id` FROM t_products_master p WHERE p.`Category_Id`='".$category."' AND  p.`Last_Updated_Date` BETWEEN '".$fromdate."' AND '".$todate."'";
        $page_data['category_list'] = $this->CommonModel->get_active_category_list();
        $page_data['reportDetils'] = $this->db->query($query)->result_array(); 
        $this->load->view('backend/reports/generateSectorIndexreport',$page_data);
    }
    if($param1=="techreportIndex"){
            $this->load->view('backend/reports/technologyreportIndex');
        }
    if($param1=="generatetechnologyreport"){
        $fromdate=$this->input->post('fromdate');
        $todate=$this->input->post('todate');
        $query ="SELECT  * FROM t_technology_request  WHERE  Submitted_Date BETWEEN '".$fromdate."' AND '".$todate."'";
        $page_data['reportDetils'] = $this->db->query($query)->result_array(); 
        $this->load->view('backend/reports/reportTechnology',$page_data);
    }
    
    if($param1=="SupplierIndex"){
      
      $this->load->view('backend/reports/suppliersreportIndex');
        }
    if($param1=="generatesuppliersreport"){
        $fromdate=$this->input->post('fromdate');
        $todate=$this->input->post('todate');
        $query ="SELECT Company_Name, License_No, Telephone_No, Company_Address,Updated_By, Remarks, Update_date FROM t_supplier_company WHERE  Update_date BETWEEN '".$fromdate."' AND '".$todate."'";
        $page_data['reportDetils'] = $this->db->query($query)->result_array(); 
        $this->load->view('backend/reports/reportSupplierDetails',$page_data);
    }      
  }
  // function myPdfPage(){
  //   $url = base_url('assets/your.pdf');
  //   $html = '<iframe src="'.$url.'" style="border:none; width: 100%; height: 100%"></iframe>';
  //   echo $html;
  // }
  function new_registration_list($type="",$id=""){
    date_default_timezone_set('Asia/Dhaka');
    $page_data['message'] =$id;
    if($type=="listall"){
      $page_data['registration_list'] = $this->CommonModel->get_registration_list('submitted');
      $this->load->view('backend/pages/registration/new_registration_list', $page_data);
    }
    if($type=="list_approved_rejected"){
      $page_data['registration_list'] = $this->CommonModel->get_registration_list('approved_rejected',$id);
      $this->load->view('backend/pages/registration/approved_registration_list', $page_data);
    }
    if($type=="list_rejected"){
      $page_data['registration_list'] = $this->CommonModel->get_registration_list('approved_rejected',$id);
      $this->load->view('backend/pages/registration/reject_registration_list', $page_data);
    }
    if($type=="details" || $type=="approved_details"){
      $page_data['registration_details'] = $this->CommonModel->get_registration_details($type,$id);
      $page_data['actiontype'] = $type;
      $this->load->view('backend/pages/registration/new_registration_details', $page_data);
    }
    if($type=="Reject_details"){
      $page_data['registration_details'] = $this->CommonModel->get_registration_details($type,$id);
      $page_data['actiontype'] = $type;
      $this->load->view('backend/pages/registration/new_registration_details', $page_data);
    }
    if($type=="update"){
      $upate_data['Remarks']=$this->input->post('remarks');
      $upate_data['Update_date']=date('Y-m-d h:i:s');
      $upate_data['Updated_By']=$this->session->userdata('Name');
      $mail_type="";
      if($id=="reject"){
        $upate_data['Status_Id']=3;
        $mail_type="REGISTRATION_REJECT";
        
      }
      if($id=="approve"){
        $upate_data['Status_Id']=2;
        $upate_user_data['Status']='Active';
        $this->db->where('Id', $this->input->post('userid'));
        $this->db->update('t_user_master', $upate_user_data);
        $mail_type="REGISTRATION_APPROVE";
      }
      $this->db->where('Id', $this->input->post('companyid'));
      $this->db->update('t_supplier_company', $upate_data);

      //mail notification
      $emailparam='';
      $maildetails=$this->db->get_where('t_mail_template', array( 'Template_Module' => $mail_type))->row();
      $t_mail_template=$maildetails->Template_Mail_Body;
      $t_mail_template=str_replace("##Name##", ''.$this->input->post('name'),  $t_mail_template);
      $t_mail_template=str_replace("##REJECT_REASON##", ''.$this->input->post('remarks'),  $t_mail_template);
      $htmlContent =$t_mail_template;
      $val=$this->CommonModel->sendmail($this->input->post('email'), $maildetails->Template_Subject.' (This is system generated mail. Please donot reply)',$htmlContent);
      
      $this->new_registration_list('listall','Data updated successfully');
    }
    
  } 

  function supplierpage($type="",$param2=""){
    date_default_timezone_set('Asia/Dhaka');
    $page_data['message'] =$param2;
    if($type=="loadpage"){
      $page_data['category_list'] = $this->CommonModel->get_active_category_list();
      $page_data['product_list'] = $this->CommonModel->get_productDetails($this->session->userdata('User_Id')); 
      $this->load->view('backend/pages/supplier/add_products', $page_data);
    }
    
    if($type=="orderrequested"){
      $page_data['product_list'] = $this->CommonModel->get_requestedDetails($this->session->userdata('User_Id')); 
      $this->load->view('backend/pages/supplier/requested_products', $page_data);
    }
    if($type=="ViewproductDetails"){
      $page_data['product_details'] = $this->db->get_where('t_products_master', array( 'Id' => $param2))->row(); 
      $this->load->view('backend/pages/supplier/requested_products_detials', $page_data);
    }
    
    if($type=="addproduct"){
      $upate_data['Product_Name']= $this->input->post('product');
      $upate_data['Category_Id']= $this->input->post('category');
      $upate_data['Company_Id']= $this->db->get_where('t_supplier_company',array('User_Id'=>$this->session->userdata('User_Id')))->row()->Id;
      $upate_data['Price']= $this->input->post('price');
      $upate_data['Stock']= $this->input->post('stock');
      $upate_data['Model_No']= $this->input->post('modal');
      $upate_data['Description']= $this->input->post('discription');
      $upate_data['Last_Updated_Date']=date('Y-m-d h:i:s');
      $upate_data['Status']='Active';
      $product_id=$this->CommonModel->do_insert('t_products_master', $upate_data);
      $image_data['Product_Id']=$product_id; 
      $file_directory = "uploads/productImages/comp".$this->db->get_where('t_supplier_company',array('User_Id'=>$this->session->userdata('User_Id')))->row()->Id.'/';
      if(!is_dir($file_directory)){
          mkdir($file_directory,0777,TRUE);
      }
      if(!empty($_FILES["Image1"]["name"])){
        move_uploaded_file($_FILES["Image1"]["tmp_name"], $file_directory . $_FILES["Image1"]["name"]);
        $image_data['Image_Name']=$file_directory . $_FILES["Image1"]["name"];
        $this->CommonModel->do_insert('t_product_images', $image_data); 
      }
      if(!empty($_FILES["Image2"]["name"])){
        move_uploaded_file($_FILES["Image2"]["tmp_name"], $file_directory . $_FILES["Image2"]["name"]);
        $image_data['Image_Name']=$file_directory . $_FILES["Image2"]["name"];
        $this->CommonModel->do_insert('t_product_images', $image_data); 
      }
      if(!empty($_FILES["Image3"]["name"])){
        move_uploaded_file($_FILES["Image3"]["tmp_name"], $file_directory . $_FILES["Image3"]["name"]);
        $image_data['Image_Name']=$file_directory . $_FILES["Image3"]["name"];
        $this->CommonModel->do_insert('t_product_images', $image_data); 
      }
      $this->supplierpage('loadpage','Data added successfully');
    }
    
    if($type=="edit"){
      $page_data['category_list'] = $this->CommonModel->get_active_category_list();
      $page_data['product_details'] = $this->db->get_where('t_products_master',array('Id'=>$param2))->row();
      $page_data['product_images'] = $this->db->get_where('t_product_images',array('Product_Id'=>$param2))->result_array();
      $this->load->view('backend/pages/supplier/edit_products', $page_data);
    }
    
    if($type=="editproduct"){
      $upate_data['Product_Name']= $this->input->post('product');
      $upate_data['Category_Id']= $this->input->post('category');
      $upate_data['Price']= $this->input->post('price');
      $upate_data['Model_No']= $this->input->post('modal');
      $upate_data['Stock']= $this->input->post('stock');
      $upate_data['Sold_Status']= $this->input->post('sold');
      $upate_data['Description']= $this->input->post('discription');
      $upate_data['Last_Updated_Date']=date('Y-m-d h:i:s');
      $upate_data['Status']=$this->input->post('current_status');
      $this->db->where('Id', $this->input->post('productId'));
      $this->db->update('t_products_master', $upate_data);
      $image_data['Product_Id']=$this->input->post('productId'); 
      $file_directory = "uploads/productImages/comp".$this->db->get_where('t_supplier_company',array('User_Id'=>$this->session->userdata('User_Id')))->row()->Id.'/';
      if(!is_dir($file_directory)){
          mkdir($file_directory,0777,TRUE);
      }
      if(!empty($_FILES["Image1"]["name"])){
        unlink($this->input->post('existimage1'));
        move_uploaded_file($_FILES["Image1"]["tmp_name"], $file_directory . $_FILES["Image1"]["name"]);
        $image_data['Image_Name']=$file_directory . $_FILES["Image1"]["name"];
        $this->db->where('Id', $this->input->post('existimageId1'));
        $this->db->update('t_product_images', $image_data);
      }
      if(!empty($_FILES["Image2"]["name"])){
        unlink($this->input->post('existimage2'));
        move_uploaded_file($_FILES["Image2"]["tmp_name"], $file_directory . $_FILES["Image2"]["name"]);
        $image_data['Image_Name']=$file_directory . $_FILES["Image2"]["name"];
        $this->db->where('Id', $this->input->post('existimageId2'));
        $this->db->update('t_product_images', $image_data);
      }
      if(!empty($_FILES["Image3"]["name"])){
        unlink($this->input->post('existimage3'));
        move_uploaded_file($_FILES["Image3"]["tmp_name"], $file_directory . $_FILES["Image3"]["name"]);
        $image_data['Image_Name']=$file_directory . $_FILES["Image3"]["name"];
        $this->db->where('Id', $this->input->post('existimageId3'));
        $this->db->update('t_product_images', $image_data);
      }
      $this->supplierpage('loadpage','Data Updated successfully');
    }
    
  }
  function AddCategory(){
    $page_data['message']="";
    $page_data['messagefail']="";
    if(!empty($_FILES["Image"]["name"])){
            move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/CategoryImage/'.$_FILES["Image"]["name"]);
            $data['Image']=$_FILES["Image"]["name"];
        }
    $data['Category_Name']=$this->input->post('name');
    $data['Status']="Active"; 
    $data['Description']=$this->input->post('discription');
    $this->CommonModel->do_insert('t_category_master', $data); 
    if($this->db->affected_rows()>0){
        $page_data['message']="Category has been added.Thank you for using our system";
    }
    else{
        $page_data['messagefail']='Category is not able to submit. Please try again';
    }
    $page_data['categoryList'] = $this->db->get_where('t_category_master')->result_array();
    $this->load->view('backend/pages/acknowledgement', $page_data); 
  }
  function EditCategoy($param1="",$param2=""){
    if(!empty($_FILES["uploadedImageedit"]["name"])){
            $fle="./uploads/CategoryImage/".$this->input->post('uploadedImage');
            if (file_exists($fle)){
                unlink($fle);
            }
            move_uploaded_file($_FILES['uploadedImageedit']['tmp_name'],'./uploads/CategoryImage/'.$_FILES["uploadedImageedit"]["name"]);
            $data['Image']=$_FILES["uploadedImageedit"]["name"];
        }
    $data['Category_Name']=$this->input->post('Name');      
    $data['Status']=$this->input->post('category');
    $data['Description']=$this->input->post('discription3');
    $this->db->where('Id', $this->input->post('updateId'));
    $this->db->update('t_category_master`', $data); 

    $page_data['categoryList'] = $this->db->get_where('t_category_master')->result_array();
    $this->load->view('backend/pages/product_category', $page_data);
  }
  function EditorderStatus($param1="",$param2=""){    
    $data['Status']=$this->input->post('category');
    $this->db->where('Id', $this->input->post('EditId'));
    $this->db->update('t_order_details`', $data); 
    if($this->db->affected_rows()>0){
          $page_data['message']="Order Status has been Edited Successfully";
        }
        else{
            $page_data['messagefail']='Unable to Edit Order Status. Please try again';
        }
        $this->load->view('backend/pages/acknowledgement', $page_data);
  }
  function updatechnologyr($param1="",$param2=""){    
    $data['Status']=$this->input->post('category');
    $this->db->where('Id', $this->input->post('userId'));
    $this->db->update('t_technology_request`', $data); 
    if($this->db->affected_rows()>0){
          $page_data['message']="Technology Request Status has been Edited Successfully";
        }
        else{
            $page_data['messagefail']='Unable to Edit Technology Request Status. Please try again';
        }
        $this->load->view('backend/pages/acknowledgement', $page_data);
  }
  function AddFiles(){
    $page_data['message']="";
    $page_data['messagefail']="";
    $new_file_name = $_FILES["file"]["name"];
    $file_directory = "uploads/Downloads/";
    if(!is_dir($file_directory)){
        mkdir($file_directory,0777,TRUE);
    }
    if($new_file_name!=""){
      move_uploaded_file($_FILES["file"]["tmp_name"],''.$file_directory . $new_file_name);
      $data['file']=$file_directory . $new_file_name;
    }else{
      $page_data['message']="uploading file has been failed.Try again later";
    }
    $data['Name']=$this->input->post('name');
    $data['Status']='Active';
    $page_data['Downloads'] = $this->db->get('t_downloads')->result_array();
    $this->CommonModel->do_insert('t_downloads', $data);
    if($this->db->affected_rows()>0){
        $page_data['message']="Files has been added.Thank you for using our system";
    }
    else{
        $page_data['messagefail']='Files is not able to submit. Please try again';
    }
    $this->load->view('backend/pages/acknowledgement', $page_data); 
  }
   function DeleteDownloads($sliderId="",$page=""){ 
        $page_data['Downloads'] = $this->db->get('t_downloads')->result_array();
        $page_data['message']="";
        $page_data['messagefail']="";
        $this->db->where('Id', $sliderId);
        $this->db->delete('t_downloads');
        if($this->db->affected_rows()>0){
          $page_data['message']="Files has been deleted Successfully";
        }
        else{
            $page_data['messagefail']='Unable to Delete Files. Please try again';
        }
        $this->load->view('backend/pages/acknowledgement', $page_data); 
      }
  function AddSlider(){
    $page_data['message']="";
    $page_data['messagefail']="";
    if(!empty($_FILES["Image"]["name"])){
            move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/Imageslider/'.$_FILES["Image"]["name"]);
            $data['Image']=$_FILES["Image"]["name"];
        }
    $data['Name']=$this->input->post('name');
    $data['Links']=$this->input->post('links');
    $data['Description']=$this->input->post('description');
    $data['Status']='Active';
    $page_data['ImageSlider'] = $this->db->get('t_image_slider')->result_array();
    $this->CommonModel->do_insert('t_image_slider', $data);
    if($this->db->affected_rows()>0){
        $page_data['message']="Image Slider has been added.Thank you for using our system";
    }
    else{
        $page_data['messagefail']='Image Slider is not able to submit. Please try again';
    }
    $this->load->view('backend/pages/acknowledgement', $page_data); 
  }
    function EditSliders($param1="",$param2=""){
        if(!empty($_FILES["uploadedImageedit"]["name"])){
            $fle="../uploads/Imageslider/".$this->input->post('uploadedImage');
            if (file_exists($fle)){
                unlink($fle);
            }
            move_uploaded_file($_FILES['uploadedImageedit']['tmp_name'],'./uploads/Imageslider/'.$_FILES["uploadedImageedit"]["name"]);
            $data['Image']=$_FILES["uploadedImageedit"]["name"];
        }
        $data['Name']=$this->input->post('Name');    
        $data['Links']=$this->input->post('links1');  
        $data['Description']=$this->input->post('Description');
        $this->db->where('Id', $this->input->post('sliderId'));
        $this->db->update('t_image_slider`', $data); 
        $page_data['ImageSlider'] = $this->db->get('t_image_slider')->result_array(); 
        $this->load->view('backend/pages/ImageSlider', $page_data); 
      }

     
    function Deleteslider($sliderId="",$page=""){ 
        $page_data['ImageSlider'] = $this->db->get('t_image_slider')->result_array();
        $page_data['message']="";
        $page_data['messagefail']="";
        $this->db->where('Id', $sliderId);
        $this->db->delete('t_image_slider');
        if($this->db->affected_rows()>0){
          $page_data['message']="Image Slider has been deleted Successfully";
        }
        else{
            $page_data['messagefail']='Unable to Delete Image Slider. Please try again';
        }
        $this->load->view('backend/pages/acknowledgement', $page_data); 
      }
      function Deleteproduct($sliderId="",$page=""){ 
        $page_data['List_all_product'] = $this->db->get_where('t_products_master', array(
        'Status' => 'Active'))->result_array();
        $page_data['message']="";
        $page_data['messagefail']="";
        $this->db->where('Id', $sliderId);
        $this->db->delete('t_products_master');
        if($this->db->affected_rows()>0){
          $page_data['message']="Product has been deleted Successfully";
        }
        else{
            $page_data['messagefail']='Unable to Delete Product. Please try again';
        }
        $this->load->view('backend/pages/acknowledgement', $page_data); 
      }

       function Editadminproduct($param1="",$param2=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Product_Name']=$this->input->post('Name');    
        $data['Price']=$this->input->post('Price');
        $data['Category_Id']=$this->input->post('Category_Id');
        //die($this->input->post('EditId'));  
        $data['Status']=$this->input->post('Status');
        $this->db->where('Id', $this->input->post('EditId'));
        $this->db->update('t_products_master`', $data); 
        if($this->db->affected_rows()>0){
          $page_data['message']="Product has been Edited Successfully";
        }
        else{
            $page_data['messagefail']='Unable to Edit Product. Please try again';
        }
        $this->load->view('backend/pages/acknowledgement', $page_data); 
      }
      function UpdateInfo($param1=""){
        $page_data['formSubmit']="";
        $page_data['message']="";
        $page_data['messagefail']="";
        if($param1=='Companyinfo'){
            $data['Name']=$this->input->post('Name');
            $data['Contact_Number']=$this->input->post('Telephone');
            $data['Email_Address']=$this->input->post('Email');
            $data['Company_Description']=$this->input->post('Description');
            $data['Location_Address']=$this->input->post('Location');
            $data['Fackbook_Link']=$this->input->post('facebook');
            $data['Twitter_Link']=$this->input->post('twitter');
            $data['Googleplus_Link']=$this->input->post('Google');
            $data['Youtube_Link']=$this->input->post('Youtube');
            if(!empty($_FILES["Image"]["name"])){
                $fle="../uploads/".$this->input->post('currentlogoinivalue');
                if (file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/'.$_FILES["Image"]["name"]);
                $data['Logo']=$_FILES["Image"]["name"];
            }
            $this->db->where('Id', "1");
            $this->db->update('t_company_details', $data);
            if($this->db->affected_rows()>0){
                $page_data['message']='Your Company Information has been Updated Successfully. Thank you';
            }
            else{
                $page_data['messagefail']='No changes are found to be updated.Thank you';
            } 
            $this->load->view('backend/pages/acknowledgement', $page_data);           
        }
        if($param1=='PartnerInfo'){
            $data['Name']=$this->input->post('Name');
            $data['Description']=$this->input->post('Description');
            if(!empty($_FILES["Image"]["name"])){
                $fle="../uploads/".$this->input->post('currentlogoinivalue');
                if (file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/'.$_FILES["Image"]["name"]);
                $data['Image']=$_FILES["Image"]["name"];
            }
            $this->db->where('Id', "1");
            $this->db->update('t_partner_details', $data);
            if($this->db->affected_rows()>0){
                $page_data['message']='Your Partner Information has been Updated Successfully. Thank you';
            }
            else{
                $page_data['messagefail']='No changes are found to be updated.Thank you';
            } 
            $this->load->view('backend/pages/acknowledgement', $page_data);           
        }
        if($param1=='NewsInfo'){
           $data['News_title']=$this->input->post('Name');
           $data['Description']=$this->input->post('Description');
            if(!empty($_FILES["Image"]["name"])){
                $fle="../uploads/NewsAnnouncement/".$this->input->post('currentlogoinivalue');
                if (file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/NewsAnnouncement/'.$_FILES["Image"]["name"]);
                $data['Image']=$_FILES["Image"]["name"];
            }
            $this->db->where('Id', $this->input->post('updateId'));
            $this->db->update('t_news_announcement', $data);
            if($this->db->affected_rows()>0){
                $page_data['message']='Your News and Announcement has been Updated Successfully. Thank you';
            }
            else{
                $page_data['messagefail']='No changes are found to be updated.Thank you';
            } 
            $this->load->view('backend/pages/acknowledgement', $page_data);           
        }
  }
  function Addnews(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['News_title']=$this->input->post('name');
        $data['Description']=$this->input->post('description');
        
        if(!empty($_FILES["Image"]["name"])){
            move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/NewsAnnouncement/'.$_FILES["Image"]["name"]);
            $data['Image']=$_FILES["Image"]["name"];
        }
        $this->CommonModel->do_insert('t_news_announcement', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="Your News and Announcement has been added.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Your News and Announcement is not able to submit. Please try again';
        }
        $this->load->view('backend/pages/acknowledgement', $page_data); 
      }
    function Deletenews($productid="",$page=""){ 
        $page_data['message']="";
        $page_data['messagefail']="";
        $this->db->where('Id', $productid);
        $this->db->delete('t_news_announcement');
        if($this->db->affected_rows()>0){
            $page_data['message']="Your News and Announcement has been delete successfully.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Not able to delete your News and Announcement. Please try again';
        }
        $this->load->view('backend/pages/acknowledgement', $page_data);
        }

       function Addtechnologyrequestrespond($param1=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Response']=$this->input->post('Response');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('t_messagedtls`', $data);
        $page_data['technologyrequestformList'] = $this->db->get_where('t_technology_request', array(
        'Status' => 'Active'))->result_array();
        $this->load->view('backend/pages/supplier/viewtechnologyrequest', $page_data);

        ///email the response to request applier
      }
      function updateusers(){
        $page_data['userDetils'] =$this->CommonModel->getuserDetails($this->input->post('userId'));
        $data['Name']=$this->input->post('Name');
        $data['Contact_No']=$this->input->post('Phone');
        $data['Designation']=$this->input->post('Designation');
      //  if(!empty($_FILES["Image"]["name"])){
      //     $fle="../uploads/users/".$this->input->post('currentlogoinivalue');
      //     if (file_exists($fle)){
      //         unlink($fle);
      //     }
      //     move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/users/'.$_FILES["Image"]["name"]);
      //     $data['Image']=$_FILES["Image"]["name"];
      // }
        if(!empty($_FILES["Image"]["name"])){
                $fle="../uploads/Users/".$this->input->post('currentlogoinivalue');
                if (file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/Users/'.$_FILES["Image"]["name"]);
                $data['Image']=$_FILES["Image"]["name"];
            }
        $this->db->where('Id', $this->input->post('userId'));
        $this->db->update('t_user_master', $data);
        
        $page_data['message']="Update Information successfully";
        $this->load->view('backend/pages/userprofile', $page_data);

    }
    function updatepassword(){
        $data['Password']=password_hash($this->input->post('cpassword'), PASSWORD_BCRYPT);
        $this->db->where('Id', $this->input->post('userId'));
        $this->db->update('t_user_master', $data);
        $page_data['userDetils'] =$this->CommonModel->getuserDetails($this->input->post('userId'));
        $page_data['message']="Password resetted successfully";
        $this->load->view('backend/pages/changepassword', $page_data);

    }
    function Addadminusers(){
       $page_data['message']="";
        $page_data['messagefail']="";
        $data['Name']=$this->input->post('name');
        $data['Email']=$this->input->post('email');
        $data['Contact_No']=$this->input->post('phone');
        $data['Status']="Active";
        $data['Password']=password_hash("dcsi@2021", PASSWORD_BCRYPT);
        $data['Role_Id']="1";
        
        $this->CommonModel->do_insert('t_user_master', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="New Users has been Created.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Unable to create New Users. Please try again';
        }
        $this->load->view('backend/pages/acknowledgement', $page_data);

    }
    function Editadminusers(){
    // die($this->input->post('category'));
        $data['Status']=$this->input->post('category');
        $this->db->where('Id', $this->input->post('EditId'));
        $this->db->update('t_user_master', $data);
        $page_data['Admin'] = $this->db->get_where('t_user_master',array('Role_Id'=>'1'))->result_array(); 
        $page_data['message']="Status resetted successfully";
        $this->load->view('backend/pages/adminuser', $page_data);

    }

    

}
