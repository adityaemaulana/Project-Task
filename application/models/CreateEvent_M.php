<?php
	class CreateEvent_M extends CI_Model{

		public function createEvent($data)
		{
			$hari = $this->dateDiffer($_POST['deadline']);
			$img = 'assets/img/'.$_FILES['cover']['name'];

			$event = array(
					'user_id' => $this->session->userdata('user_id'),
					'imageurl' => $img,
					'title' => $_POST['title'],
					'subtitle' => $_POST['subtitle'],
					'kategori' => $_POST['kategori'],
					'target' => $_POST['target'],
					'hari' => $hari	,
					'content' => $_POST['caption'],
					'date' => $_POST['tanggal'],
					'time' => $_POST['waktu'],
					'location' => $_POST['lokasi'],
					'about' => $_POST['about']
			);

			$this->db->insert('event', $event);
		}

		public function dateDiffer($date)
		{
			$now = date("Y-m-d");
			$datenow = date_create($now);
			$datetarget = date_create($date);
			$diff = date_diff($datetarget, $datenow);

			return $diff->format('%a');
		}
	} 
?>