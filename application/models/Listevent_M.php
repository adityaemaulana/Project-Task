<?php 
	class Listevent_M extends CI_Model{

		public function get_all_event()
		{
			$query = $this->db->get('event');
			return $query->result();
		}	
	}
?>