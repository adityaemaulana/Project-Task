<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Bayar_M extends CI_Model
{
	public function get_data()
	{
		$query = $this->db->order_by('id','DESC')->get('bayar');
		return $query->result();
	}
	public function save_data($data)
	{
		return $insert = $this->db->insert('bayar', $data);
	}
	public function payment($param)
	{
		return $this->db->insert('payment', $param);
	}

	public function addQty($id){
		return $this->db->query("UPDATE bayar SET chart=chart+1 WHERE id='$id'");
	}

	public function subsQty($id){
		return $this->db->query("UPDATE bayar SET chart=chart-1 WHERE id='$id'");
	}  
}