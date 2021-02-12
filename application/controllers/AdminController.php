<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller { 
	public function index(){
	}
   function loadPage($page="",$id=""){
        $page_data['userDetils'] =$this->CommonModel->getuserDetails($id);
		    $this->load->view('admin/account/'.$page,$page_data);
		}
   function updateUser(){
       $page_data['messagefail']="";
        $data['CID']=$this->input->post('CID');
        die('CID');
        $data['Full_Name']=$this->input->post('Full_Name');
        $data['Contact_Number']=$this->input->post('Contact_Number');
        $data['User_Id']=$this->input->post('User_Id');
       // $data['Password']=$this->input->post('Password');
        $this->db->where('Id',  $this->input->post('userId'));
        $this->db->update('t_user_details`', $data);
        $page_data['message']="Details are updated. Thank you for using the system";
        $this->load->view('admin/acknowledgement', $page_data); 
    }
   function updatePassword(){
     	$page_data['messagefail']="";
     	$data['Password']=password_hash($this->input->post('Password'), PASSWORD_BCRYPT);

     }
    function loadservice($page="",$id=""){
      $page_data['ServiceCategory'] = $this->db->get_where('t_service',array('service_type'))->result_array();
      $page_data['Category']=$this->db->get_where('t_service_category',array('category_name'))->result_array();
      $page_data['serviceList'] = $this->db->get_where('t_service_category',array('status'=>'Yes'))->result_array();
      $page_data['Slist'] = $this->db->get_where('t_service',array('status'=>'Y'))->result_array();
        $this->load->view('admin/service/'.$page,$page_data);
     }
    function loadcompany($page="",$id=""){
     $page_data['Companydetails'] = $this->db->get('t_company')->result_array();
      // $page_data['companydetails'] = $this->CommonModel->getcompanydetails($id);
      $this->load->view('admin/company/'.$page,$page_data);
     }
     function loadfile($page=""){
      $page_data['categoryList'] = $this->db->get_where('t_download_category',array('status'=>'Yes'))->result_array();
      $page_data['downloadlist'] = $this->db->get_where('t_download',array('status'=>'Yes'))->result_array();

          $this->load->view('admin/download/'.$page,$page_data);
     }
     function loadvideo($page=""){

          $this->load->view('admin/youtube/'.$page);
     }
     function loadevents($page=""){

          $this->load->view('admin/events/'.$page);
     }
     function loadclients($page=""){

          $this->load->view('admin/clients/'.$page);
     }
     function loadstaff($page=""){

          $this->load->view('admin/team/'.$page);
     }
     function loadsystem($page=""){
          $page_data['systemUser'] = $this->db->get_where('t_user_details',array('Role_Id'=>'1'))->result_array();
          $this->load->view('admin/systemuser/'.$page,$page_data);
     }
     function loadconfig($page=""){

          $this->load->view('admin/configuration/'.$page);
     }
     function loadproject($page=""){
      $page_data['projectList'] = $this->db->get_where('t_project',array('status'=>'Yes'))->result_array();
        $this->load->view('admin/project/'.$page,$page_data);
     }
// SERVICE FUNCTION 
    function addService(){
        $page_data['message']="";
        $page_data['messagefail']="";
        
        $data['service_name']=$this->input->post('service_name');
        $data['service_type']=$this->input->post('service_type');
        $data['content']=$this->input->post('editor1');
        $data['status']='Yes';
        $new_file_name = $_FILES["image"]["name"];
        $file_directory = "uploads/attachments/".date("Y").'/'.date("M").'/';
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
        if($new_file_name!=""){
          move_uploaded_file($_FILES["image"]["tmp_name"], $file_directory . $new_file_name);
          $data['image']=$file_directory . $new_file_name;
        }
        $this->CommonModel->do_insert('t_service', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="Service details has been added.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Service is not able to submit. Please try again';
        }
        $this->load->view('admin/acknowledgement', $page_data); 
      }
    function updateServiceInformation($param1=""){
        $data['service_name']=$this->input->post('name');
        $data['content']=$this->input->post('editor1');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('t_service`', $data);
        $page_data['Slist'] = $this->db->get_where('t_service',array('Status'=>'Y'))->result_array();
        $this->load->view('admin/service/'.$param1,$page_data);
    }
    function deleteserviceInformation($ServiceId="",$page=""){
    $this->db->where('Id', $ServiceId);
        $this->db->delete('t_service');
        $page_data['Slist'] = $this->db->get_where('t_service',array('Status'=>'Y'))->result_array();
      $this->load->view('admin/service/'.$page,$page_data);
  }

//SERVICE CATEGORY FUNCTION
    function Updateservicecategory($param1=""){
        $page_data['message']="";
        $page_data['messagefail']=""; 
        $data['category_name']=$this->input->post('Categoryname');
        $data['slug']=$this->input->post('sname');
        $this->db->where('category_id',  $this->input->post('deleteId'));
        $this->db->update('t_service_category`', $data);
        $page_data['serviceList'] = $this->db->get_where('t_service_category',array('status'=>'Yes'))->result_array();
        if($this->db->affected_rows()>0){
            $page_data['message']="Service Category has been Updated.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Unable to Update Service Category. Please try again';
        }
        $this->load->view('admin/acknowledgement', $page_data); 
    }
    function Deleteservicecategory($serviceid="",$page=""){ 
        $this->db->where('category_id', $serviceid);
        $this->db->delete('t_service_category');
        $page_data['serviceList'] = $this->db->get_where('t_service_category',array('status'=>'Yes'))->result_array();
        $this->load->view('admin/service/'.$page,$page_data);
        }
    function AddServicecategory(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['category_name']=$this->input->post('Categoryname');
        $data['slug']=$this->input->post('sname');
        $data['status']='Yes';
        $this->CommonModel->do_insert('t_service_category', $data); 
       if($this->db->affected_rows()>0){
            $page_data['message']="Service Category has been added.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Unable to add Service Category. Please try again';
        }
        $this->load->view('admin/acknowledgement', $page_data); 
    }

    //COMPANY FUNCTION
    function addcompany($page=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['comp_name']=$this->input->post('name');
        $data['information']=$this->input->post('info');
        $data['status_text']='Yes';
        $new_file_name = $_FILES["image"]["name"];
        $file_directory = "uploads/attachments/Comp_Logo".date("Y").'/'.date("M").'/';
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
        if($new_file_name!=""){
          move_uploaded_file($_FILES["image"]["tmp_name"], $file_directory . $new_file_name);
          $data['image']=$file_directory . $new_file_name;
        }
        $this->CommonModel->do_insert('t_company', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="Company details has been added.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Company is not able to submit. Please try again';
        }
        $this->load->view('admin/acknowledgement', $page_data); 
  }
  function updateCompanyInformation($param1=""){
        $data['information']=$this->input->post('info');
        $data['comp_name']=$this->input->post('name');
        $data['image']=$this->input->post('logo');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('t_company`', $data);
        $page_data['Companydetails'] = $this->db->get_where('t_company',array('status_text'=>'Yes'))->result_array();
        $this->load->view('admin/company/'.$param1,$page_data);
  }

  function deleteCompanyInformation($companyId="",$page=""){
    $this->db->where('Id', $companyId);
        $this->db->delete('t_company');
        $page_data['Companydetails'] = $this->db->get_where('t_company',array('status_text'=>'Yes'))->result_array();
      $this->load->view('admin/company/'.$page,$page_data);
  }
  // function updateCompanyInformation_status($iserId="",$stus=""){
  //       if($stus=="Yes" || $stus=="Y"){
  //     $data['status_text']='N';
  //       }
  //       else{
  //          $data['status_text']='Y'; 
  //       }
  //       $this->db->where('Id',  $iserId);
  //       $this->db->update('t_company`', $data);
  //       $page_data['Companydetails'] = $this->db->get('t_company')->result_array();
  //       $this->load->view('admin/company/',$page_data);
  // }

  //PROJECT FUNCTION
  function AddProject(){
        $page_data['message']="";
        $page_data['messagefail']="";
        // die('sdsds: '. $this->input->post('editor1'));
        $data['project_name']=$this->input->post('name');
        $data['project_link']=$this->input->post('link');
        $data['project_description']=$this->input->post('editor1');
        $data['status']='Yes';
        $new_file_name = $_FILES["image"]["name"];
        $file_directory = "uploads/attachments/".date("Y").'/'.date("M").'/';
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
        if($new_file_name!=""){
          move_uploaded_file($_FILES["image"]["tmp_name"], $file_directory . $new_file_name);
          $data['image']=$file_directory . $new_file_name;
        }
        $this->CommonModel->do_insert('t_project', $data);

        if($this->db->affected_rows()>0){
            $page_data['message']="Service details has been added. Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Service is not able to submit. Please try again';
        }
        $this->load->view('admin/acknowledgement', $page_data); 
      }
      
      function UpdateProjectInformation($param1=""){
        $data['project_name']=$this->input->post('name');
        $data['project_link']=$this->input->post('link');
        $data['project_description']=$this->input->post('editor1');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('t_project`', $data);
        $page_data['projectList'] = $this->db->get_where('t_project',array('status'=>'Yes'))->result_array();
        $this->load->view('admin/project/'.$param1,$page_data);
  }

      function DeleteProjectdetails($companyId="",$page=""){
        $this->db->where('Id', $companyId);
            $this->db->delete('t_project');
            $page_data['projectList'] = $this->db->get_where('t_project',array('status'=>'Yes'))->result_array();
          $this->load->view('admin/project/'.$page,$page_data);
      }

      //Update System Users
      function UpdateSystemUser($param1=""){
        $data['Full_Name']=$this->input->post('name');
        $data['Contact_Number']=$this->input->post('phone');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('t_user_details`', $data);
        $page_data['systemUser'] = $this->db->get_where('t_user_details',array('Role_Id'=>'1'))->result_array();
        $this->load->view('admin/systemuser/'.$param1,$page_data);
      }
      // downloadd
       function AddDownloadfiles(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['download_name']=$this->input->post('name');
        $data['link']=$this->input->post('Link');
        $data['download_category']=$this->input->post('Category');
        $data['type_of_download']=$this->input->post('type');
        $data['download_desceiption']=$this->input->post('editor1');
        $data['status']='Yes';
        $new_file_name = $_FILES["download_file"]["name"];
        $file_directory = "uploads/Files/".date("Y").'/'.date("M").'/';
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
        if($new_file_name!=""){
          move_uploaded_file($_FILES["download_file"]["tmp_name"], $file_directory . $new_file_name);
          $data['download_file']=$file_directory . $new_file_name;
        }
        $this->CommonModel->do_insert('t_download', $data);

        if($this->db->affected_rows()>0){
            $page_data['message']="Service details has been added. Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Service is not able to submit. Please try again';
        }
        $this->load->view('admin/acknowledgement', $page_data); 
      }
      
      function UpdateDownload($param1=""){
        $data['download_name']=$this->input->post('name');
        $data['type_of_download']=$this->input->post('type');
        $data['download_category']=$this->input->post('Category');
        $data['link']=$this->input->post('Link');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('t_download`', $data);
        $page_data['downloadlist'] = $this->db->get_where('t_download',array('status'=>'Yes'))->result_array();
        $this->load->view('admin/download/'.$param1,$page_data);
  }
  function DeleteDownload($companyId="",$page=""){
        $this->db->where('Id', $companyId);
            $this->db->delete('t_download');
            $page_data['downloadlist'] = $this->db->get_where('t_download',array('status'=>'Yes'))->result_array();
          $this->load->view('admin/download/'.$page,$page_data);
      }
      //DOWNLOAAD CATEGORY FUNCTION
    function UpdateDownloadcategory($param1=""){
        $data['category_name']=$this->input->post('Categoryname');
        $data['category_sname']=$this->input->post('sname');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('t_download_category`', $data);
        $page_data['categoryList'] = $this->db->get_where('t_download_category',array('status'=>'Yes'))->result_array();
        $this->load->view('admin/download/'.$param1,$page_data);
    }
    function DeleteDowloadcategory($downloadid="",$page=""){
        $this->db->where('Id', $downloadid);
        $this->db->delete('t_download_category');
        $page_data['categoryList'] = $this->db->get_where('t_download_category',array('status'=>'Yes'))->result_array();
        $this->load->view('admin/download/'.$page,$page_data);
        }
    function AddDownloadcategory(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['category_name']=$this->input->post('Categoryname');
        $data['category_sname']=$this->input->post('sname');
        $data['status']='Yes';
        $this->CommonModel->do_insert('t_download_category', $data); 
        $this->load->view('admin/download/'.$page_data); 
    }


  }