<?php 
	class Detail_M extends CI_Model{

		public function get_data($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('event');
			return $query->result();
		}

		public function get_update($id)
		{
			$this->db->where('idevent', $id);
			$query = $this->db->get('eventupdate');
			return $query->result();
		}
	}
?>