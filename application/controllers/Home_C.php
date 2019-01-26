<?php 
	class Home_C extends CI_Controller{
		public function index()
		{
			$this->load->model('Home_M');

			$this->load->view('header');
			$data['query'] = $this->Home_M->get_all_event();
			$this->load->view('home', $data);
			
			$this->load->view('footer');
		}
	}
?>