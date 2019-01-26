<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');
        
}


public function index(){
  
  session_destroy();
  $this->load->view('header');
  $this->load->view("login");
  $this->load->view('footer');

}

function login_user(){
  $user_login=array(
    'user_email'=>$this->input->post('user_email'),
    'user_password'=>$this->input->post('user_password')
  );

    $data= $this->user_model->login_user($user_login['user_email'],$user_login['user_password']);

      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('nama_lengkap',$data['nama_lengkap']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_password',$data['user_password']);
        $this->session->set_userdata('jenis_kelamin',$data['jenis_kelamin']);
        $this->session->set_userdata('no_telpon',$data['no_telpon']);
        $this->session->set_userdata('alamat',$data['alamat']); 

        redirect('Home_C');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Tidak Dapat Login, Coba Lagi.');
        $this->load->view('header');
        $this->load->view("login");
        $this->load->view('footer');
      }
}

function user_profile(){

$this->load->view('home');

}
public function user_logout(){

    $this->session->sess_destroy();
    redirect('user/login_view', 'refresh');
  }
}

?>
