<?php 
	class Listevent_C extends CI_Controller{
		public function index()
		{
			$this->load->model('Listevent_M');

			$this->load->view('header');
			$data['query'] = $this->Listevent_M->get_all_event();
			$this->load->view('listevent', $data);
			$this->load->view('footer');
		}
	}
?>