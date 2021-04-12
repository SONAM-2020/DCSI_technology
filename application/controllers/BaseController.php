<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BaseController extends CI_Controller {
    public function _construct(){
        parent::_construct();
    }
    public function index(){
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $page_data['t_announcement'] = $this->db->get_where('t_news_announcement',array('Status'=>'Active'))->result_array();
        $page_data['t_imagecategory'] = $this->db->get_where('t_category_master',array('Status'=>'Active'))->result_array();
        $page_data['t_imageslider'] = $this->db->get_where('t_image_slider',array('Status'=>'Active'))->result_array();
        
        $page_data['category_list'] = $this->CommonModel->get_active_category_list();
        $this->load->view('web/index',$page_data);
    }
    function loadpage($param1="",$param2=""){
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $page_data['designationList'] = $this->db->get_where('t_designation_master',array('Status'=>'Active'))->result_array();
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
            $page_data['PartnerInfo'] = $this->db->get_where('t_partner_details')->row();
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/Partner', $page_data);   
        }
        if($param1=="News"){
            $page_data['t_announcement'] = $this->db->get_where('t_news_announcement',array('Status'=>'Active'))->result_array();
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/News', $page_data);   
        }
        if($param1=="Downloads"){
            $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
            // $page_data['product_list'] = $this->CommonModel->gethomeproductDetails();
            $page_data['category_list'] = $this->CommonModel->get_active_category_list();
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/download', $page_data);   
        }
        if($param1=="TechnologyRequest"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/technologyrequestform', $page_data);   
        }
        if($param1=="Login"){
            $page_data['linktype']=$param1;
            $this->load->view('web/login/login', $page_data);   
        }
        if($param1=="Newsdetails"){
            $page_data['t_announcement'] = $this->db->get_where('t_news_announcement',array('Id'=>$param2))->result_array();
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/newsdetails', $page_data);   
        }
        if($param1=="Contact"){
            $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/Contactus', $page_data);   
        }
    }

    //edited this method
    function localregistration(){
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
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
            $file_directory = "./uploads/License/";
            if(!is_dir($file_directory)){
                mkdir($file_directory,0777,TRUE); 
            }
            if($new_file_name!=""){
              move_uploaded_file($_FILES["Image"]["tmp_name"], $file_directory . $new_file_name);
              $sup_data['License_Img']=$file_directory . $new_file_name;
            }
            $this->CommonModel->do_insert('t_supplier_company', $sup_data); 
            //mail notification
            $emailparam='';
            $maildetails=$this->db->get_where('t_mail_template', array( 'Template_Module' => 'REGISTRATION_SUBMISSION'))->row();
            $t_mail_template=$maildetails->Template_Mail_Body;
            $t_mail_template=str_replace("##Name##", ''.$this->input->post('name'),  $t_mail_template);
            $htmlContent =$t_mail_template;
            $val=$this->CommonModel->sendmail($this->input->post('email'), $maildetails->Template_Subject.' (This is system generated mail. Please donot reply)',$htmlContent);
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
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
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
            
            $emailparam='';
            $maildetails=$this->db->get_where('t_mail_template', array( 'Template_Module' => 'REGISTRATION_SUBMISSION'))->row();
            $t_mail_template=$maildetails->Template_Mail_Body;
            $t_mail_template=str_replace("##Name##", ''.$this->input->post('name'),  $t_mail_template);
            $htmlContent =$t_mail_template;
            $val=$this->CommonModel->sendmail($this->input->post('email'), $maildetails->Template_Subject.' (This is system generated mail. Please donot reply)',$htmlContent);

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

    function technologyrequestForm(){
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $page_data['message']="";
        $page_data['messagefail']="";
        
        $data['Name']=$this->input->post('name');
        $data['Email']=$this->input->post('email');
        $data['Contact_No']=$this->input->post('phone');
        $data['Present_Address']=$this->input->post('address');
        $data['Equipment_Name']=$this->input->post('equipment');
        $data['Equipment_Description']=$this->input->post('description');
        $this->CommonModel->do_insert('t_technology_request', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="Your Information has been added. You will be notified throught email once our the Supplier take further action.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Your Information  is not able to submit. Please try again';
        }
        $this->load->view('web/acknowledgement', $page_data);
    }

    function load_productdetails($id=""){
        $page_data['product_details'] =$this->db->get_where('t_products_master',array('Id'=>$id))->row();
        $page_data['product_images_details'] =$this->db->get_where('t_product_images',array('Product_Id'=>$id))->result_array();
        $page_data['company_details'] =$this->db->get_where('t_supplier_company',array('Id'=>$page_data['product_details']->Company_Id))->row();
        $this->load->view('web/product_details', $page_data);
    }
    
    function createorder(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Name']=$this->input->post('name');
        $data['Email']=$this->input->post('email');
        $data['Contact_No']=$this->input->post('contact');
        $data['Quantity']=$this->input->post('quantity');
        $data['Product_Id']=$this->input->post('productId');
        $data['Company_Id']=$this->input->post('companyId');
        $data['Submitted_Date']=date('Y-m-d h:i:s');
        $this->CommonModel->do_insert('t_order_details', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="Your order information has been added. You will be contacted with your provided information.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Your Information  is not able to submit. Please try again';
        }
        $this->load->view('web/acknowledgement', $page_data);
    }
    function load_NewsDestails($id=""){
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $page_data['t_announcement'] = $this->db->get_where('t_news_announcement',array('Id'=>$id))->result_array();
        $this->load->view('web/pages/newsdetails', $page_data);
    }
    
    function load_allproductdetails($id=""){
        $query="SELECT p.`Id`,p.`Description`,p.`Last_Updated_Date`,p.`Model_No`,p.`Price`,p.`Product_Name`,i.`Image_Name`  FROM t_products_master p, t_product_images i WHERE p.`Category_Id` = ".$id." AND p.`Id`=i.`Product_Id` AND p.`Status`='Active' GROUP BY p.Id, p.`Last_Updated_Date` DESC ";
        $page_data['product_details'] =$this->db->query($query)->result_array();
        $this->load->view('web/list_product_details', $page_data);
    }
}