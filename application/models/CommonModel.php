<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CommonModel extends CI_Model{
	function __construct(){
        parent::__construct();
    }
  function do_insert($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
  function getuserDetails($id=""){
        $query =$this->db->query("SELECT * FROM t_user_details u LEFT JOIN t_role r ON r.`Id`=u.`Role_Id` WHERE u.`Id`= '".$id."'")->row();
        return $query;
    }
  function getusers(){ 
       $query =$this->db->query(" SELECT u.`CID`,u.`Contact_Numer`,u.`Full_Name`,u.`User_Id` Email_Id,u.`Id` user_id,IF(u.`User_Status`='Y','Yes','No') Active_status FROM t_user_details u LEFT JOIN t_role_master r ON r.`Id`=u.`Role_Id` ")->result_array();
        return $query;
    }
  function getservicecategory($id=""){
    $query =$this->db->query("SELECT  f.`category_name`, f.`slug` FROM t_service_category f WHERE f.`category_id`='".$id."'")->row();
    return $query;
  }
  function getserviceList($id=""){
    $query =$this->db->query("SELECT  f.`category_name` FROM t_service_category f WHERE f.`category_id`='".$id."'")->row();
    return $query;
  }
  function getcompanydetails($id=""){
    $query =$this->db->query("SELECT c.`comp_name`,c.`mission`, c.`information`, c.`work`, c.`design`, c.`support`, c.`image` FROM t_company c WHERE c.`Id`='".$id."'")->result_array();
    return $query;
  }
  function getproductDetails($id=""){
    $query=$this->db->query("
    SELECT * FROM t_products p LEFT JOIN t_supplier r ON r.`supplier_Id`=p.`product_Id` where p.`product_Id`='".$id."'")->result_array();

  }
}

