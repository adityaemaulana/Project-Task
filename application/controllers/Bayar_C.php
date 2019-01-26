<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayar_C extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Bayar_M');
	}
	public function index()
	{
		$data = array(
			'produk' => $this->Bayar_M->get_data()
		);

		$this->load->view('header',$data);
		$this->load->view('bayar',$data);
		$this->load->view('footer',$data);
	}
	public function inputController(){

		if(isset($_POST['input'])) {

			$ukm = $this->input->post('ukm');
			$icon = "";

			switch ($ukm) {
				case 'kbms':
					$ukm = "KBMS";
					$icon = "kbms.jpg";
					break;
				case 'jawa':
					$ukm = "jawa";
					$icon = "jawa.jpg";
					break;
				case 'rg':
					$ukm = "Rumah Gadang";
					$icon = "rg.jpg";
					break;
			}



			// upload library
			$config['upload_path'] = './img';
		    $config['allowed_types'] = 'jpg|png|jpeg';
		    $config['max_size']  = '2048';
		    $config['remove_space'] = TRUE;
		    $file_name = $_FILES['gambar']['name'];
		    $config['file_name'] = $file_name;
		  
		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);

		    if(!$this->upload->do_upload('gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
		      echo $this->upload->display_errors();
		      
		    }else{
		      
		    	$param = array(
					"event"=>$this->input->post('event'),
					"icon"=>$icon,
					"ukm"=>$ukm,
					"gambar"=>$file_name,
					"nama_produk"=>$this->input->post('nama_produk'),
					"penjelasan"=>$this->input->post('penjelasan'),
					"stok"=>$this->input->post('stok'),
					"harga"=>$this->input->post('harga')
				);

				$insert = $this->Bayar_M->save_data($param);

				if($insert){
		            $this->session->set_flashdata('alert', 'sukses_insert');
		            redirect('Bayar_C/gotoBayar');
		        }else{
		            echo "<script>alert('Gagal Menambahkan Data');</script>";
		        }	


		    }
    	}
	}

	public function gotoBayar(){
		$data = array(
			'produk' => $this->Bayar_M->get_data()
		);
		$this->load->view('bayar', $data);
	}
	public function gotoKeranjang(){
		$data = array(
			'produk' => $this->Bayar_M->get_data()
		);
		$this->load->view('keranjang', $data);
	}

	public function addToBracket($id){
		$brackets = array();
		array_push($brackets, $id);
		$bracketsSize = sizeof($brackets);
	}


	public function upload(){
	    $config['upload_path'] = './img/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $config['max_size']  = '2048';
	    $config['remove_space'] = TRUE;
	  
	    $this->load->library('upload', $config); // Load konfigurasi uploadnya
	    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
	      // Jika berhasil :
	      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
	      return $return;
	    }else{
	      // Jika gagal :
	      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
	      return $return;
	    }
	}
		public function gotoSuccess() {
		$this->load->view('success');
	}

	public function add()
	{
		$this->qty += 1;
		$data = $this->input->post(null,TRUE);
		$this->Bayar_M->save_data($data);
	}

	public function addQtyController($id) {
		$this->Bayar_M->addQty($id);
		redirect('Bayar_C/gotoBayar');
	}

	public function subsQtyController($id) {
		$this->Bayar_M->subsQty($id);
		redirect('Bayar_C/gotoBayar');
	}

	public function paymentController(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$metode = $this->input->post('method');
		$total = $this->input->post('total');
		$shipping = $this->input->post('shipping');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'metode' => $metode,
			'total' => ($total+$shipping)
		);

		$execute = $this->Bayar_M->payment($data);

		if($execute == true){
			
			redirect('Bayar_C/gotoSuccess');
		}
	}


}

