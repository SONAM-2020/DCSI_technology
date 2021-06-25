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
        $query =$this->db->query("SELECT * FROM t_user_master u LEFT JOIN t_role_master r ON r.`Id`=u.`Role_Id` WHERE u.`Id`= '".$id."'")->row();
        return $query;
    }
   function gethomeproductDetails($id=""){
        $query =$this->db->query(" ")->result_array();
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
  
  function getusersproducts($id=""){
    $query=$this->db->query("
    SELECT c.`Category_Name`,c.`Description` FROM t_products_master p LEFT JOIN t_category_master c ON c.`Id`=p.`Category_Id` LEFT JOIN t_supplier_company s ON p.`Company_Id`=s.`Id` LEFT JOIN t_user_master u ON u.`Id`=s.`User_Id` WHERE u.`Id`='1'")->result_array();
  }
  function getadminproducts($id=""){
    $query=$this->db->query("
    SELECT c.`Category_Name`,c.`Description` FROM t_products_master p LEFT JOIN t_category_master c ON c.`Id`=p.`Category_Id` LEFT JOIN t_supplier_company s ON p.`Company_Id`=s.`Id` WHERE u.`Id`='1'")->result_array();
  }
  function get_registration_list($type="",$id=""){
    $query="SELECT u.`Contact_No`,u.`Designation`,u.`Email`,u.`Id` user_id,u.`Name`,s.`Company_Name`,s.`Company_Website`,s.`Submitted_Date`,s.`Company_Address` FROM t_user_master u JOIN t_supplier_company s ON s.`User_Id`=u.`Id`";
    if($type=="submitted"){
      $query =$this->db->query($query." WHERE s.Status_Id=1 AND u.Role_Id <> 1")->result_array();
    }
    if($type=="approved_rejected"){
      $query =$this->db->query($query." WHERE s.Status_Id='".$id."' AND u.Role_Id <> 1")->result_array();
    }
    return $query;
  }
  function get_requestedDetails($userdi=""){
    $query="SELECT o.`Contact_No`,o.`Company_Id`,o.`Email`,o.`Id`,o.`Name`,o.`Product_Id`,p.`Product_Name`,o.`Quantity`,o.`Submitted_Date` FROM t_order_details o JOIN t_supplier_company s ON s.`Id`=o.`Company_Id` JOIN t_products_master p ON p.`Id`=o.`Product_Id` WHERE s.`User_Id`=".$userdi;
    return $this->db->query($query)->result_array();
  }
  function get_registration_details($type="",$id=""){
    $query="SELECT u.`Contact_No`,u.`Designation`,u.`Email`,u.`Id` user_id,u.`Name`,s.`Company_Name`,s.`Company_Website`,s.`Submitted_Date`,s.`Company_Address`,s.`City`,s.`Company_Description`,s.`Id` company_Id,s.`License_Img`,s.`License_No`,s.`License_Registration_Date`,s.`Postal_Code`,s.`Telephone_No`,c.`Country_Name`,t.`Supplier_Type`,s.`Remarks`
    FROM t_user_master u JOIN t_supplier_company s ON s.`User_Id`=u.`Id` LEFT JOIN t_country_master c ON c.`Id`=s.`Country_Id` LEFT JOIN t_supplier_type t ON t.`Id`=s.`Supplier_Type_Id`";
    //return $this->db->query($query)->row();
    if($type=="details"){
      $query.=" WHERE s.Status_Id=1 AND u.Role_Id <> 1 AND u.Id='".$id."'";
    }
    if($type=="approved_details"){
      $query.=" WHERE s.Status_Id=2 AND u.Role_Id <> 1 AND u.Id='".$id."'";
    }
    if($type=="Reject_details"){
      $query.=" WHERE s.Status_Id=3 AND u.Role_Id <> 1 AND u.Id='".$id."'";
    }
    //die($query);
    return $this->db->query($query)->row();
  }
  function get_active_category_list(){
    return $this->db->get_where('t_category_master', array('Status' => 'Active'))->result_array();
  }
  function get_productDetails($userId=""){
    $query="SELECT p.`Id`,p.`Product_Name`,c.`Category_Name`,p.`Description`,p.`Price`,p.`Status`,i.`Image_Name` FROM t_products_master p JOIN t_product_images i ON i.`Product_Id`=p.`Id` JOIN t_supplier_company s ON s.`Id`=p.`Company_Id` JOIN t_category_master c ON c.`Id`=p.`Category_Id` ";
    $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
    return $this->db->query($query." WHERE s.User_Id='".$userId."' GROUP BY p.Id ")->result_array();
  }
  function searchfromtable($searchtype=""){
    $query="SELECT p.`Id`,p.`Description`,p.`Last_Updated_Date`,p.`Model_No`,p.`Price`,p.`Product_Name`,i.`Image_Name`  FROM t_products_master p, t_product_images i WHERE p.`Product_Name` LIKE '%".$searchtype."%' AND p.`Id`=i.`Product_Id` AND p.`Status`='Active' GROUP BY p.Id "; 
    $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
    return $this->db->query($query)->result_array();
  }
  public function sendmail($email="",$subject="",$htmlContent=""){
    //https://myaccount.google.com/lesssecureapps?gar=1&pli=1&rapt=AEjHL4OXAOCed0mI3C3xzgRvnUHiGsmjZVZ7xYiXMoaqCaOGGgUCwJbAm9aJYs5C_-X_XwA4HpXItpBO1L37B8REBosPSNo9YA
    $this->load->library('email');
    $config = array(
    //   'protocol'  => 'smtp',//ssmtp
    //   'smtp_host' => 'ssl://smtp.googlemail.com',//ssl://ssmtp.googlemail.com
    'protocol'  => 'ssmtp',
      'smtp_host' => 'ssl://ssmtp.gmail.com',//ssl://ssmtp.googlemail.com
      'smtp_port' => 465, 
      'smtp_user' => 'noreplydcsitechnology@gmail.com',
      'smtp_pass' => 'Admin@2021',
     'smtp_timeout' => '7',
      'mailtype'  => 'html',
      'smtp_crypto' => 'security', //can be 'ssl' or 'tls' for example
      'charset'   => 'utf-8'
    // 'protocol'  => 'smtp',
    // 'smtp_host' => 'mail.dcsitechnology.bt',
    // 'smtp_port' => 587,
    // 'smtp_user' => 'noreply@dcsitechnology.bt',
    // 'smtp_pass' => 'sonam@2020',
    // 'mailtype'  => 'html',
    // 'charset'   => 'utf-8'
    );
    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->set_newline("\r\n");
    $this->email->set_crlf( "\r\n" );
    $this->load->helper('string');
    $this->email->to($email);
    $this->email->from('noreply@dcsitechnology.bt','DCSI');
    $this->email->subject($subject);
    $this->email->message($htmlContent);
    $this->email->send();
  }
}

