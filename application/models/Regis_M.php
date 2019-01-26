<?php
class Regis_M extends CI_Model
{
    public function daftar_akun($data)
    {
    	var_dump($data);
        $param = array(
            "nama_lengkap"=>$data['namalgkp'],
            "jenis_kelamin"=>$data['gender'],
            "no_telpon"=>$data['telfon'],
            "user_email"=>$data['email'],
            "user_password"=>$data['password'],
            "alamat"=>$data['alamat']
        );

        $insert = $this->db->insert('user', $param);

        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    // public function login_akun($data){

    //     $this->db->where('username',$data['username']);
    //     $this->db->where('password',$data['password']);

    //     $result = $this->db->get('akun');
    //     if($result->num_rows()==1){
    //         return $result->row(0);
    //     }else{
    //         return false;
    //     }
    // }
}

//riska chairunisa 1301164546
?>
