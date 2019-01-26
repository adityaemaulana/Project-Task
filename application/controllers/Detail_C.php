<?php 
	class Detail_C extends CI_Controller{
		public function index($eventid)
		{
			$this->load->model('Detail_M');

			$this->load->view('header');
			$item['event'] = $this->Detail_M->get_data($eventid);
			$item['update'] = $this->Detail_M->get_update($eventid);
			
			$data = array(
					'id' => $eventid,
					'eventdata' => $item['event'],
					'eventupdate' => $item['update']
			);

			$this->load->view('detail', $data);
			$this->load->view('footer');
		}
	}
?>