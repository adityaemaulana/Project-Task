<?php
 
class form_model extends CI_Model{
 function input_data($data,$table){
  $this->db->insert($table,$data);
 }
}
//riska chairunisa 1301164546
?>