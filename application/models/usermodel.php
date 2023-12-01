<?php
class Usermodel extends CI_model
{
public function get()
{
   
//$this->load->database();
//$this->db->where("id",71);
 $data=$this->db->get("product");
 return $data->result();

 //get table name like product ,login no query only get table name
 
}
}


?>