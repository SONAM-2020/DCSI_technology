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