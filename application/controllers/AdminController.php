<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller { 
  public function index(){
	}
  function loadpage($param1="",$param2="",$param3=""){
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
      $page_data['categoryList'] = $this->db->get_where('t_category_master')->result_array();
      $page_data['message']="";
      $this->load->view('backend/pages/product_category', $page_data);
    }
    if($param1=="GeneralInfo"){
      $page_data['GeneralInfo'] = $this->db->get_where('t_',array('Status'=>'Active'))->result_array();
      $page_data['message']="";
      $this->load->view('backend/pages/product_category', $page_data);
    }
    if($param1=="ImageSlider"){
      $page_data['ImageSlider'] = $this->db->get_where('t_image_slider')->result_array();
      $page_data['message']="";
      $this->load->view('backend/pages/ImageSlider', $page_data);
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
} 