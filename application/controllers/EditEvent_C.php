<?php 
	class EditEvent_C extends CI_Controller{
		public function index()
		{
			$this->load->model('EditEvent_M');

			$this->load->view('header');
			$id = $this->session->userdata('user_id');
			$data['query'] = $this->EditEvent_M->get_user_event($id);

			$this->load->view('editevent', $data);
			$this->load->view('footer');
		}

		public function delete($id)
		{
			$this->load->model('EditEvent_M');
			$this->EditEvent_M->delete_event($id);
			redirect('EditEvent_C/index');
		}

		public function edit($id)
		{
			$this->load->model('EditEvent_M');

			$this->load->view('header');
			$data['query'] = $this->EditEvent_M->get_user_event($id);

			$this->load->view('formeditevent', $data);
			$this->load->view('footer');
		}

		public function editEvent()
		{
			$data = $this->input->post();
			$id = $this->session->userdata('user_id');
			
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '1048';
			
			$this->load->library('upload', $config);
			
			$this->load->library('form_validation');
			$this->rules();

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('header');
				$this->load->view('formeditevent', array('error' => '' ));
				$this->load->view('footer');
			}else
			{
				$this->load->model('EditEvent_M');
				$this->EditEvent_M->edit_event($data, $id);
				redirect('EditEvent_C/index');
			}

		}

		public function rules()
		{
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

			$this->form_validation->set_message('required', '{field} diperlukan');
			$this->form_validation->set_message('max_length', '{field} tidak boleh lebih dari 20 karakter');
			$this->form_validation->set_message('max_length', '{field} harus lebih dari Rp 1.000.000');

			$this->form_validation->set_rules('title', 'Nama Event', 'required|max_length[20]');
			$this->form_validation->set_rules('subtitle', 'Penyelenggara Event', 'required|max_length[20]');
			$this->form_validation->set_rules('target', 'Target Penggalangan', 'required|greater_than[1000000]');
			$this->form_validation->set_rules('deadline', 'Deadline', 'required');
			$this->form_validation->set_rules('caption', 'Deskripsi', 'required');
			$this->form_validation->set_rules('tanggal', 'Tanggal Event', 'required');
			$this->form_validation->set_rules('waktu', 'Waktu Event', 'required');
			$this->form_validation->set_rules('lokasi', 'Lokasi Event', 'required');
			$this->form_validation->set_rules('about', 'Dekripsi Lengkap', 'required');
		}
	}
?>	