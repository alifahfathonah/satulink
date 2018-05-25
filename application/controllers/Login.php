<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->model('m_app');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data=array(
            'title'=>'Login Page',
        );
        $this->load->view('v_header',$data);
        $this->load->view('v_login');
        $this->load->view('v_footer_file');
	}


    function cek_login() {
      //cek login
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      //query ke database
      $result = $this->m_app->getSelectedData('tbl_muser',array('username'=>$username,'password'=>$password));
      //jika sukses
      if($result->num_rows() > 0) {
          $sess_array = array();
          foreach($result->result() as $row) {
              //ambil data untuk session
              $sess_array = array(
                  'ID_USER' => $row->id_user,
                  'KODE_USER' => $row->kode_user,
                  'USERNAME' => $row->username,
                  'TIPE_USER' => $row->tipe_user,
                  'LOGIN_STATUS'=>TRUE
              );
              //buat session
              $this->session->set_userdata($sess_array);
              redirect('dashboard');
      }
      } else {
          //jika salah
          $this->session->set_flashdata('notif-gagal','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
          redirect('login');
          return FALSE;
      }
    }

    function logout() {
        $this->session->unset_userdata('ID_USER');
        $this->session->unset_userdata('KODE_USER');
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('TIPE_USER');
        $this->session->unset_userdata('LOGIN_STATUS');
        redirect('login');
    }

}
