<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller { 
  public function index(){
	}
  function loadpage($param1="",$param2="",$param3=""){
    $page_data['formSubmit']="";
    if($param1=="userprofile"){
        $page_data['userDetils'] = $this->db->get_where('t_supplier',array('supplier_Id'=>$param2))->row(); 
        $page_data['message']="";
        $this->load->view('backend/pages/userprofile', $page_data);
      }
    if($param1=="password"){
      $page_data['userDetils'] = $this->db->get_where('t_supplier',array('supplier_Id'=>$param2))->row(); 
      $page_data['message']="";
      $this->load->view('backend/pages/changepassword', $page_data);
    }
    if($param1=="product_category"){
      $page_data['categoryList'] = $this->db->get_where('t_category_master',array('Status'=>'Active'))->result_array();
      $page_data['message']="";
      $this->load->view('backend/pages/product_category', $page_data);
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
      if($id=="reject"){
        $upate_data['Status_Id']=3;
      }
      if($id=="approve"){
        $upate_data['Status_Id']=2;
        $upate_user_data['Status']='Active';
        $this->db->where('Id', $this->input->post('userid'));
        $this->db->update('t_user_master', $upate_user_data);
      }
      $this->db->where('Id', $this->input->post('companyid'));
      $this->db->update('t_supplier_company', $upate_data);
      
      //send mail notification
      $this->new_registration_list('listall','Data updated successfully');
    }
    
  } 
  
  function AddCategory(){
    $page_data['message']="";
    $page_data['messagefail']="";
    $data['Category_Name']=$this->input->post('name');
    $data['Status']="Active"; 
    $data['Description']=$this->input->post('discription');
     $new_file_name = $_FILES["Image"]["name"];
    $file_directory = "uploads/";
    if(!is_dir($file_directory)){
        mkdir($file_directory,0777,TRUE);
    }
    if($new_file_name!=""){
      move_uploaded_file($_FILES["Image"]["tmp_name"], $file_directory . $new_file_name);
      $data['Image']=$file_directory . $new_file_name;
    }
    $this->CommonModel->do_insert('t_category_master', $data); 
    if($this->db->affected_rows()>0){
        $page_data['message']="Category has been added.Thank you for using our system";
    }
    else{
        $page_data['messagefail']='Category is not able to submit. Please try again';
    }
    $this->load->view('backend/pages/acknowledgement', $page_data); 
  }
  function EditCategoy($param1=""){
    $data['Category_Name']=$this->input->post('Name');      
    $data['Status']=$this->input->post('category');
    $data['Description']=$this->input->post('discription3');

     $new_file_name = $_FILES["Image"]["name"];
    $file_directory = "uploads/";
    if(!is_dir($file_directory)){
        mkdir($file_directory,0777,TRUE);
    }
    if($new_file_name!=""){
      move_uploaded_file($_FILES["Image"]["tmp_name"], $file_directory . $new_file_name);
      $data['Image']=$file_directory . $new_file_name;
    }
    $this->db->where('Id', $this->input->post('updateId'));
    $this->db->update('t_category_master`', $data); 

    $page_data['categoryList'] = $this->db->get('t_category_master')->result_array();
    $this->load->view('backend/pages/product_category', $page_data);
  }
}