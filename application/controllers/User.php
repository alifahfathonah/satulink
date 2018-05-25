<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  User extends CI_Controller {
function __construct(){
        parent::__construct();
        if($this->session->userdata('LOGIN_STATUS') != TRUE ){
    			$this->session->set_flashdata('notif-gagal','ANDA HARUS LOGIN TERLEBIH DAHULU !');
    			redirect('login');
        }
		else { $this->load->model('m_app'); }
    }

	public function index()
	{
        $data_header=array(
            'title'=>'User',
        );
    		$data=array(
    				'data_user'=>$this->m_app->getAllData('tbl_muser')->result(),
    		);
        $this->load->view('v_header',$data_header);
        $this->load->view('v_top_menu');
        $this->load->view('v_left_menu');
        $this->load->view('user/v_user',$data);
        $this->load->view('v_footer');
        $this->load->view('v_footer_file');
	}

    public function save_add_user()
    {
      $kodeuser=$this->m_app->buatKodeUser();
      $data_user['kode_user'] = $kodeuser;
      $data_user['username'] = $this->input->post('username');
      $data_user['password'] = md5($this->input->post('password'));
      $data_user['tipe_user'] = $this->input->post('tipe_user');
      $data_user['createdate'] = date('Y-m-d H:i:s');
      $data_user['isactive'] = '1';
      $table_user="tbl_muser";
      $proses=$this->m_app->insertData($table_user,$data_user);

       if ($proses == TRUE)
       {
         $this->session->set_flashdata('notif-sukses','User berhasil ditambahkan');
         redirect('user');
       }
       else
       {
         $this->session->set_flashdata('notif-gagal','User gagal ditambahkan');
         redirect('user');
       }
    }


}
