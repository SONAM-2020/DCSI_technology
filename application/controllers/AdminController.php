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
}