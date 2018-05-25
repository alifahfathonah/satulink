<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Nasabah extends CI_Controller {
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
            'title'=>'Nasabah',
        );
    		$data=array(
    				'data_nasabah'=>$this->m_app->getJoinData1Table(
        								'*',
        								'tbl_mnasabah',
        								'tbl_detail_nasabah',
        								'tbl_mnasabah.kode_nasabah = tbl_detail_nasabah.kode_nasabah'
        								)->result(),
    		);
        $this->load->view('v_header',$data_header);
        $this->load->view('v_top_menu');
        $this->load->view('v_left_menu');
        $this->load->view('nasabah/v_nasabah',$data);
        $this->load->view('v_footer');
        $this->load->view('v_footer_file');
	}

  public function save_add_nasabah()
  {
    $kodepersonalagen=$this->m_app->buatKodePersonalAgen();
    $data_personal_agen['kode_personal_agen'] = $kodepersonalagen;
    $data_personal_agen['nama'] = $this->input->post('nama');
    $data_personal_agen['nomor_ktp'] = $this->input->post('nomor_ktp');
    $data_personal_agen['nomor_npwp'] = $this->input->post('nomor_npwp');
    $data_personal_agen['jenis_kelamin'] = $this->input->post('jenis_kelamin');
    $data_personal_agen['pendidikan_terakhir'] = $this->input->post('pendidikan_terakhir');
    $data_personal_agen['tempat_lahir'] = $this->input->post('tempat_lahir');
    $data_personal_agen['tanggal_lahir'] = $this->input->post('tanggal_lahir');
    $data_personal_agen['kewarganegaraan'] = $this->input->post('kewarganegaraan');
    $data_personal_agen['provinsi_personal_agen'] = $this->input->post('provinsi_personal_agen');
    $data_personal_agen['kota_personal_agen'] = $this->input->post('kota_personal_agen');
    $data_personal_agen['alamat_personal_agen'] = $this->input->post('alamat_personal_agen');
    $data_personal_agen['kecamatan_personal_agen'] = $this->input->post('kecamatan_personal_agen');
    $data_personal_agen['kelurahan_personal_agen'] = $this->input->post('kelurahan_personal_agen');
    $data_personal_agen['kode_pos_personal_agen'] = $this->input->post('kode_pos_personal_agen');
    $data_personal_agen['pekerjaan'] = $this->input->post('pekerjaan');
    $data_personal_agen['status_perkawinan'] = $this->input->post('status_perkawinan');
    $data_personal_agen['nomor_telepon_personal_agen'] = $this->input->post('nomor_telepon_personal_agen');
    $data_personal_agen['email_personal_agen'] = $this->input->post('email_personal_agen');
    $data_personal_agen['createdate'] = date('Y-m-d H:i:s');
    $table_personal_agen="tbl_mpersonal_agen";
    $proses=$this->m_app->insertData($table_personal_agen,$data_personal_agen);
    
     $randompin=$this->m_app->random_password();
     $mobile = $this->input->post('nomor_telepon_personal_agen');
     $message = "Pembukaan Agen SatuLink sudah disetujui.NoAgen:$kodeagen,PIN:$randompin,segera rubah PIN anda di aplikasi.";
     $data = $this->input->post();
     unset($data['submit']);
     $msgencode = urlencode($message);
     $userkey = "iropkz";
     $passkey = "testes";
     $router = "";

     $postdata = array('authkey'=>$userkey,
               'mobile'=>$mobile,
               'message'=>$msgencode,
               'router'=>$router
               );
     $url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$mobile&pesan=$msgencode";

     $ch  = curl_init();
         curl_setopt_array($ch,array(
                     CURLOPT_URL => $url,
                     CURLOPT_RETURNTRANSFER => TRUE,
                     CURLOPT_POST => TRUE,
                     CURLOPT_POSTFIELDS => $postdata
           ));

     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

     $output = curl_exec($ch);
     if (curl_errno($ch)) {
       echo "error". curl_error($ch);
     }
     curl_close($ch);

     if ($proses == TRUE)
     {
       $this->session->set_flashdata('notif-sukses','Agen berhasil ditambahkan | '.$output);
       redirect('agen');
     }
     else
     {
       $this->session->set_flashdata('notif-gagal','Agen gagal ditambahkan | '.$output);
       redirect('agen');
     }
  }

	public function manage_nasabah()
	{
		$kodeagen=$this->uri->segment(3);
		$data_header=array(
            'title'=>'Manage Agen',
		);
		$data=array(
		'data_agen'=>$this->m_app->getJoinData3TableWhere(
								'*',
								'tbl_magen',
								'tbl_mpersonal_agen',
								'tbl_magen.kode_personal_agen = tbl_mpersonal_agen.kode_personal_agen',
								'tbl_musaha_agen',
								'tbl_magen.kode_usaha_agen = tbl_musaha_agen.kode_usaha_agen',
								'tbl_mrekening_agen',
								'tbl_magen.kode_rekening_agen = tbl_mrekening_agen.kode_rekening_agen',
								array('kode_agen'=>$this->uri->segment(3))
								)->result(),
    );

    $this->load->view('v_header',$data_header);
    $this->load->view('v_top_menu');
    $this->load->view('v_left_menu');
    $this->load->view('agen/v_manage_agen',$data);
    $this->load->view('v_footer');
    $this->load->view('v_footer_file');

	}

  public function save_edit_nasabah()
  {
    $Key_data_personal_agen['kode_personal_agen'] = $this->input->post('kode_personal_agen');
    $data_personal_agen['nama'] = $this->input->post('nama');
    $data_personal_agen['nomor_ktp'] = $this->input->post('nomor_ktp');
    $data_personal_agen['nomor_npwp'] = $this->input->post('nomor_npwp');
    $data_personal_agen['jenis_kelamin'] = $this->input->post('jenis_kelamin');
    $data_personal_agen['pendidikan_terakhir'] = $this->input->post('pendidikan_terakhir');
    $data_personal_agen['tempat_lahir'] = $this->input->post('tempat_lahir');
    $data_personal_agen['tanggal_lahir'] = $this->input->post('tanggal_lahir');
    $data_personal_agen['kewarganegaraan'] = $this->input->post('kewarganegaraan');
    $data_personal_agen['provinsi_personal_agen'] = $this->input->post('provinsi_personal_agen');
    $data_personal_agen['kota_personal_agen'] = $this->input->post('kota_personal_agen');
    $data_personal_agen['alamat_personal_agen'] = $this->input->post('alamat_personal_agen');
    $data_personal_agen['kecamatan_personal_agen'] = $this->input->post('kecamatan_personal_agen');
    $data_personal_agen['kelurahan_personal_agen'] = $this->input->post('kelurahan_personal_agen');
    $data_personal_agen['kode_pos_personal_agen'] = $this->input->post('kode_pos_personal_agen');
    $data_personal_agen['pekerjaan'] = $this->input->post('pekerjaan');
    $data_personal_agen['status_perkawinan'] = $this->input->post('status_perkawinan');
    $data_personal_agen['nomor_telepon_personal_agen'] = $this->input->post('nomor_telepon_personal_agen');
    $data_personal_agen['email_personal_agen'] = $this->input->post('email_personal_agen');
    $data_personal_agen['editdate'] = date('Y-m-d H:i:s');
    $table_personal_agen="tbl_mpersonal_agen";
    $this->m_app->updateData($table_personal_agen,$data_personal_agen,$Key_data_personal_agen);

    $key_data_usaha_agen['kode_usaha_agen'] = $this->input->post('kode_usaha_agen');
    $data_usaha_agen['nama_usaha'] = $this->input->post('nama_usaha');
    $data_usaha_agen['jenis_usaha'] = $this->input->post('jenis_usaha');
    $data_usaha_agen['provinsi_usaha'] = $this->input->post('provinsi_usaha');
    $data_usaha_agen['kota_usaha'] = $this->input->post('kota_usaha');
    $data_usaha_agen['alamat_usaha'] = $this->input->post('alamat_usaha');
    $data_usaha_agen['kecamatan_usaha'] = $this->input->post('kecamatan_usaha');
    $data_usaha_agen['kelurahan_usaha'] = $this->input->post('kelurahan_usaha');
    $data_usaha_agen['kode_pos_usaha'] = $this->input->post('kode_pos_usaha');
    $data_usaha_agen['nomor_telepon_usaha'] = $this->input->post('nomor_telepon_usaha');
    $data_usaha_agen['email_usaha'] = $this->input->post('email_usaha');
    $data_usaha_agen['penghasil_pertahun'] = $this->input->post('penghasil_pertahun');
    $data_usaha_agen['tanggal_mulai_usaha'] = $this->input->post('tanggal_mulai_usaha');
    $data_usaha_agen['editdate'] = date('Y-m-d H:i:s');
    $table_usaha_agen="tbl_musaha_agen";
    $this->m_app->updateData($table_usaha_agen,$data_usaha_agen,$key_data_usaha_agen);

    $key_data_rekening_agen['kode_rekening_agen'] = $this->input->post('kode_rekening_agen');
    $data_rekening_agen['nama_pemilik_rekening'] = $this->input->post('nama_pemilik_rekening');
    $data_rekening_agen['jenis_rekening'] = $this->input->post('jenis_rekening');
    $data_rekening_agen['nomor_rekening'] = $this->input->post('nomor_rekening');
    $data_rekening_agen['cabang_terdekat'] = $this->input->post('cabang_terdekat');
    $data_rekening_agen['editdate'] = date('Y-m-d H:i:s');
    $table_rekening_agen="tbl_mrekening_agen";
    $this->m_app->updateData($table_rekening_agen,$data_rekening_agen,$key_data_rekening_agen);

    $key_data_agen['kode_agen'] = $this->input->post('kode_agen');
    $data_agen['nama_keagenan'] = $this->input->post('nama_keagenan');
    $data_agen['wilayah_operasional'] = $this->input->post('wilayah_operasional');
    $data_agen['longitude'] = $this->input->post('longitude');
    $data_agen['latitude'] = $this->input->post('latitude');
    $data_agen['nomor_virtual_account'] = $this->input->post('nomor_virtual_account');
    $data_agen['nama_virtual_account'] = $this->input->post('nama_virtual_account');
    $data_agen['provinsi_agen'] = $this->input->post('provinsi_agen');
    $data_agen['kota_agen'] = $this->input->post('kota_agen');
    $data_agen['alamat_agen'] = $this->input->post('alamat_agen');
    $data_agen['kecamatan_agen'] = $this->input->post('kecamatan_agen');
    $data_agen['kelurahan_agen'] = $this->input->post('kelurahan_agen');
    $data_agen['kode_pos_agen'] = $this->input->post('kode_pos_agen');
    $data_agen['editdate'] = date('Y-m-d H:i:s');
    $table_agen="tbl_magen";
    $proses=$this->m_app->updateData($table_agen,$data_agen,$key_data_agen);

     if ($proses == TRUE)
     {
       $this->session->set_flashdata('notif-sukses','Agen berhasil dirubah');
       redirect('agen');
     }
     else
     {
       $this->session->set_flashdata('notif-gagal','Agen gagal dirubah');
       redirect('agen');
     }
  }

  public function transaksi_nasabah()
	{
      $data_header=array(
          'title'=>'Nasabah',
      );
  		$data=array(
  				'data_transaksi_nasabah'=>$this->m_app->getLeftJoinData2Table(
  										'*',
                      'tbl_ttransaksi',
  										'tbl_detail_nasabah',
  										'tbl_ttransaksi.nomor_rekening = tbl_detail_nasabah.nomor_rekening',
                      'left',
  										'tbl_mnasabah',
  										'tbl_detail_nasabah.kode_nasabah = tbl_mnasabah.kode_nasabah',
                      'left')->result(),
  		);
      $this->load->view('v_header',$data_header);
      $this->load->view('v_top_menu');
      $this->load->view('v_left_menu');
      $this->load->view('nasabah/v_transaksi_nasabah',$data);
      $this->load->view('v_footer');
      $this->load->view('v_footer_file');
	}



}
