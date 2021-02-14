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
        $this->load->view('supplierDashboard/pages/userprofile', $page_data);
      }
    if($param1=="password"){
      $page_data['userDetils'] = $this->db->get_where('t_supplier',array('supplier_Id'=>$param2))->row(); 
      $page_data['message']="";
      $this->load->view('supplierDashboard/pages/changepassword', $page_data);
    }
    if($param1=="add_products"){
      $page_data['add_products'] = $this->CommonModel->getproductDetails($param2);
      $page_data['message']="";
      $this->load->view('supplierDashboard/pages/add_products', $page_data);
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
}