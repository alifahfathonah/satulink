<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Dashboard extends CI_Controller {
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
            'title'=>'Dashboard',
        );
        $data=array(
          'jumlah_agen'=>$this->m_app->getAllData('tbl_magen')->num_rows(),
          'jumlah_nasabah'=>$this->m_app->getAllData('tbl_mnasabah')->num_rows(),
          'jumlah_transaksi'=>$this->m_app->getAllData('tbl_ttransaksi')->num_rows(),'jumlah_komisi'=>$this->m_app->getSumData('tbl_komisi','komisi')->result(),
          'jumlah_dana_nasabah'=>$this->m_app->getSumData('tbl_detail_nasabah','saldo_nasabah')->result(),
          'jumlah_dana_agen'=>$this->m_app->getSumData('tbl_magen','saldo_agen')->result(),
          'jumlah_transaksi_hari_ini'=>$this->m_app->getSelectedData('tbl_ttransaksi',array('createdate'=>date("Y-m-d")))->num_rows(),
          'jumlah_transaksi_pembukaan_rekening_hari_ini'=>$this->m_app->getSelectedData('tbl_ttransaksi',array('createdate'=>date("Y-m-d"),'jenis_transaksi'=>'1'))->num_rows(),
          'jumlah_transaksi_penutupan_rekening_hari_ini'=>$this->m_app->getSelectedData('tbl_ttransaksi',array('createdate'=>date("Y-m-d"),'jenis_transaksi'=>'2'))->num_rows(),
          'jumlah_transaksi_setor_tunai_hari_ini'=>$this->m_app->getSelectedData('tbl_ttransaksi',array('createdate'=>date("Y-m-d"),'jenis_transaksi'=>'3'))->num_rows(),
          'jumlah_transaksi_tarik_tunai_hari_ini'=>$this->m_app->getSelectedData('tbl_ttransaksi',array('createdate'=>date("Y-m-d"),'jenis_transaksi'=>'4'))->num_rows(),
          'jumlah_transaksi_transfer_hari_ini'=>$this->m_app->getSelectedData('tbl_ttransaksi',array('createdate'=>date("Y-m-d"),'jenis_transaksi'=>'5'))->num_rows(),

        );

        $this->load->view('v_header',$data_header);
        $this->load->view('v_top_menu');
        $this->load->view('v_left_menu');
        $this->load->view('v_dashboard',$data);
        $this->load->view('v_footer');
        $this->load->view('v_footer_file');
	}

}
