<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BaseController extends CI_Controller {
    public function _construct(){
        parent::_construct();
    }
    public function index(){
        $page_data['category_list'] = $this->CommonModel->get_active_category_list();
        $this->load->view('web/index',$page_data);
    }
    function loadpage($param1="",$param2=""){
        if($param1=="localregister"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/localregister', $page_data);   
        }
        if($param1=="globalregister"){
            $page_data['t_country_master'] = $this->db->get_where('t_country_master',array('Status'=>'Active'))->result_array();
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/globalregister', $page_data);   
        }
        if($param1=="About"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/aboutus', $page_data);   
        }
        if($param1=="Partner"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/Partner', $page_data);   
        }
        if($param1=="News"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/News', $page_data);   
        }
        if($param1=="Download"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/Download', $page_data);   
        }
        if($param1=="Contact"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/Contact', $page_data);   
        }
        if($param1=="TechnologyRequest"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/TechnologyRequest', $page_data);   
        }
        if($param1=="Login"){
            $page_data['linktype']=$param1;
            $this->load->view('web/login/login', $page_data);   
        }
    }

    //edited this method
    function localregistration(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $checkemail=$this->db->get_where('t_user_master',array('Email'=>$this->input->post('email')))->row();
        if($checkemail!=""){
            $page_data['messagefail']="This email is already taken. Pleaese provide another one";
           $this->load->view('web/acknowledgement', $page_data); 
        }
        else{
            $data['Name']=$this->input->post('name');
            $data['Email']=$this->input->post('email');
            $data['Contact_No']=$this->input->post('phone');
            $data['Designation']=$this->input->post('designation');
            $data['Role_Id']=2;//local supplier, give id as mentioned in db ->t_role_master    
            $data['Password']=password_hash($this->input->post('confirmpassword'), PASSWORD_BCRYPT);
            $data['Status']="InActive"; //Activeate this user on approval
            $user_id=$this->CommonModel->do_insert('t_user_master', $data); 

            $sup_data['User_Id']=$user_id;
            $sup_data['Supplier_Type_Id']=1; //from t_
            $sup_data['Company_Name']=$this->input->post('company');
            $sup_data['License_No']=$this->input->post('License');
            $sup_data['Company_Website']=$this->input->post('website');
            $sup_data['Telephone_No']=$this->input->post('telephone');
            $sup_data['License_Registration_Date']= date('Y-m-d',strtotime($this->input->post('Registration')));
            $sup_data['Company_Address']=$this->input->post('address');
            $sup_data['Company_Description']=$this->input->post('description');
            $sup_data['Submitted_Date']=date('Y-m-d h:i:s');
            $sup_data['Status_Id']=1;//change here according to the data in t_status_master
            //$sup_data['City']=$this->input->post('Registration');
            //$sup_data['Postal_Code']=$this->input->post('address');
            $new_file_name = $_FILES["Image"]["name"];
            $file_directory = "../uploads/";
            if(!is_dir($file_directory)){
                mkdir($file_directory,0777,TRUE); 
            }
            if($new_file_name!=""){
              move_uploaded_file($_FILES["Image"]["tmp_name"], $file_directory . $new_file_name);
              $sup_data['License_Img']=$file_directory . $new_file_name;
            }
            $this->CommonModel->do_insert('t_supplier_company', $sup_data); 
            //send mail notification
            if($this->db->affected_rows()>0){
                $page_data['message']="Your Information has been added for Approval. You will be notified throught email once our team take further action.Thank you for using our system";
            }
            else{
                $page_data['messagefail']='Your Information  is not able to submit. Please try again';
            }
            $this->load->view('web/acknowledgement', $page_data);
        }        
    }
    function globalregistration(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $checkemail=$this->db->get_where('t_user_master',array('Email'=>$this->input->post('email')))->row();
        if($checkemail!=""){
            $page_data['messagefail']="This email is already taken. Pleaese provide another one";
           $this->load->view('web/acknowledgement', $page_data); 
        }
        else{
            $data['Name']=$this->input->post('name');
            $data['Email']=$this->input->post('email');
            $data['Contact_No']=$this->input->post('phone');
            $data['Designation']=$this->input->post('designation');
            $data['Role_Id']=3;//local supplier, give id as mentioned in db ->t_role_master    
            $data['Password']=password_hash($this->input->post('confirmpassword'), PASSWORD_BCRYPT);
            $data['Status']="InActive"; //Activeate this user on approval
            $user_id=$this->CommonModel->do_insert('t_user_master', $data); 

            $sup_data['User_Id']=$user_id;
            $sup_data['Supplier_Type_Id']=2; //from t_
            $sup_data['Company_Name']=$this->input->post('company');
            $sup_data['Company_Website']=$this->input->post('website');
            $sup_data['Company_Address']=$this->input->post('address');
            $sup_data['Company_Description']=$this->input->post('description');
            $sup_data['Telephone_No']=$this->input->post('telephone');
            $sup_data['Country_Id']=$this->input->post('Country');
            $sup_data['City']=$this->input->post('city');
            $sup_data['Postal_Code']=$this->input->post('postalcode');
            $sup_data['Submitted_Date']=date('Y-m-d h:i:s');
            $sup_data['Status_Id']=1;//change here according to the data in t_status_master

            $this->CommonModel->do_insert('t_supplier_company', $sup_data); 
            if($this->db->affected_rows()>0){
                $page_data['message']="Your Information has been added for Approval. You will be notified throught email once our team take further action.Thank you for using our system";
            }
            else{
                $page_data['messagefail']='Your Information  is not able to submit. Please try again';
            }
            $this->load->view('web/acknowledgement', $page_data);
        }
    }
    function search_details(){
        $page_data['searchResult'] = $this->CommonModel->searchfromtable($this->input->post('searchdetails'));
        $this->load->view('web/search_result', $page_data);
    }
}