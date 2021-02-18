<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller { 
  public function index(){
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
    if($param1=="viewtechnologyrequest"){
        $page_data['technologyrequestformList'] = $this->db->get_where('t_technology_request', array(
        'Status' => 'Active'))->result_array();
        $this->load->view('backend/pages/supplier/viewtechnologyrequest', $page_data);
    }
    if($param1=="ViewRequestDetails"){
        $page_data['technologyrequestformList'] = $this->db->get_where('t_technology_request', array(
            'Id' => $param2))->row();
        $this->load->view('backend/pages/supplier/ViewTechnologyRequestDetails', $page_data);
    }
        
      
  }
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
    if($type=="details" || $type=="approved_details"){
      $page_data['registration_details'] = $this->CommonModel->get_registration_details($type,$id);
      $page_data['actiontype'] = $type;
      $this->load->view('backend/pages/registration/new_registration_details', $page_data);
    }
    if($type=="update"){
      $upate_data['Remarks']=$this->input->post('remarks');
      $upate_data['Update_date']=date('Y-m-d h:i:s');
      $upate_data['Updated_By']=$this->session->userdata('User_Id');
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
      $page_data['product_details'] = $this->db->get_where('t_products_master', array( 'Id' => $param2))->row();; 
      $this->load->view('backend/pages/supplier/requested_products_detials', $page_data);
    }
    
    if($type=="addproduct"){
      $upate_data['Product_Name']= $this->input->post('product');
      $upate_data['Category_Id']= $this->input->post('category');
      $upate_data['Company_Id']= $this->db->get_where('t_supplier_company',array('User_Id'=>$this->session->userdata('User_Id')))->row()->Id;
      $upate_data['Price']= $this->input->post('price');
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
  function AddSlider(){
    $page_data['message']="";
    $page_data['messagefail']="";
    if(!empty($_FILES["Image"]["name"])){
            move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/Imageslider/'.$_FILES["Image"]["name"]);
            $data['Image']=$_FILES["Image"]["name"];
        }
    $data['Name']=$this->input->post('name');
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
            $fle="./uploads/Imageslider/".$this->input->post('uploadedImage');
            if (file_exists($fle)){
                unlink($fle);
            }
            move_uploaded_file($_FILES['uploadedImageedit']['tmp_name'],'./uploads/Imageslider/'.$_FILES["uploadedImageedit"]["name"]);
            $data['Image']=$_FILES["uploadedImageedit"]["name"];
        }
        $data['Name']=$this->input->post('Name');      
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
           $data['News_title']=$this->input->post('name');
           $data['Description']=$this->input->post('description');
            if(!empty($_FILES["Image"]["name"])){
                $fle="../uploads/NewsAnnouncement/".$this->input->post('currentlogoinivalue');
                if (file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/NewsAnnouncement/'.$_FILES["Image"]["name"]);
                $data['Image']=$_FILES["Image"]["name"];
            }
            $this->db->where('Id', "1");
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
        $new_file_name = $_FILES["Image"]["name"];
        $file_directory = "../uploads/NewsAnnouncement/";
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
        if($new_file_name!=""){
          move_uploaded_file($_FILES["Image"]["tmp_name"], $file_directory . $new_file_name);
          $data['Image']=$file_directory . $new_file_name;
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
        $data['Name']=$this->input->post('Name');
        $data['Contact_No']=$this->input->post('Phone');
        $data['Designation']=$this->input->post('Designation');
        if(!empty($_FILES["Image"]["name"])){
            $fle="../uploads/".$this->input->post('currentlogoinivalue');
            if (file_exists($fle)){
                unlink($fle);
            }
            move_uploaded_file($_FILES['Image']['tmp_name'],'../uploads/'.$_FILES["Image"]["name"]);
            $data['Image']=$_FILES["Image"]["name"];
        }
        $this->db->where('Id', $this->input->post('userId'));
        $this->db->update('t_user_master', $data);
        $page_data['userDetils'] =$this->CommonModel->getuserDetails($this->input->post('userId'));
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
    

}
