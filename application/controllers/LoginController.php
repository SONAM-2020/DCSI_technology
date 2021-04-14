<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class loginController extends CI_Controller {
    public function _construct(){
        parent::_construct();
    }
    public function index(){
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $page_data['t_announcement'] = $this->db->get_where('t_news_announcement',array('Status'=>'Active'))->result_array();
         $page_data['t_imagecategory'] = $this->db->get_where('t_category_master',array('Status'=>'Active'))->result_array();
        $page_data['t_imageslider'] = $this->db->get_where('t_image_slider',array('Status'=>'Active'))->result_array();

        $page_data['category_list'] = $this->CommonModel->get_active_category_list();
        $this->load->view('web/index', $page_data);
    }
    //edited this method
    function login(){
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $page_data['Message'] = $this->db->get_where('t_contactus',array('Status'=>'Active'))->result_array();

         $page_data['message']="";
        if($this->input->post('email')!="" &&  $this->input->post('password')!=""){
            $query = $this->db->get_where('t_user_master', array('Email' => $this->input->post('email')));
            if ($query->num_rows() > 0){
                $row = $query->row_array(); 
                if(password_verify($this->input->post('password'), $row['Password'])){
                    if($row['Status']=="InActive"){
                     $page_data['messagefail']='Your user detail is deactivated. Please contact system administrator.';
                         $this->load->view('web/acknowledgement', $page_data); 
                    }
                    else{
                        $this->session->set_userdata('User_Id', $row['Id']);
                        $this->session->set_userdata('Image', $row['Image']);
                        $this->session->set_userdata('Name', $row['Name']);
                        $this->session->set_userdata('Email', $row['Email']);
                        $this->session->set_userdata('Contact_No', $row['Contact_No']);
                        $this->session->set_userdata('Role_Id', $row['Role_Id']);
                        redirect(base_url() . 'index.php?loginController/dashboard', 'refresh');
                    }  
                }
                else{
                    $page_data['messagefail']='Invalid Email and Password';
                    $this->load->view('web/acknowledgement', $page_data); 
                }
            } 
            else{
                $page_data['messagefail']='Invalid Email  Address';
                $this->load->view('web/acknowledgement', $page_data); 
            }
        } 
        else{
            $page_data['messagefail']='Email Address and Password is Required';
                $this->load->view('web/acknowledgement', $page_data); 
        }
    }
    function dashboard($param=""){
        $page_data['Message'] = $this->db->get_where('t_contactus',array('Status'=>'Active'))->result_array();

        $page_data['message']="";
        if ($this->session->userdata('User_Id') == null ){
            redirect(base_url(), 'refresh');
        }
        else{
            $this->load->view('backend/dashboard', $page_data);
        }
    }
    function logout($param=''){  
        $this->session->unset_userdata(0);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?loginController/', 'refresh');
    }
}