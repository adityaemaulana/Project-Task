<?php 
	class Home_M extends CI_Model{

		public function get_all_event()
		{
			$this->db->limit(3);
			$query = $this->db->get('event');
			return $query->result();
		}	
	}
?>