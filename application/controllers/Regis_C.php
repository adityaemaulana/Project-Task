<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_C extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	    $this->load->model('Regis_M');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
	public function daftar_akun()
    {        $data = $this->input->post(null,TRUE);
        $insert = $this->Regis_M->daftar_akun($data);
        if($insert){
            $this -> session -> set_flashdata('alert','sukses_daftar');
            echo "<script type='text/javascript'> alert('sukses daftar akun');</script>";
            redirect('User');
        }else{
            echo "<script type='text/javascript'> alert('gagal daftar akun');</script>";
            
        }

    }
}
//riska chairunisa 1301164546//