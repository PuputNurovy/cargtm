<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CManager
 *
 * @author Subhan Gustiar Rosda
 */
class CManager extends CI_Controller {
  
    function __construct() {
        parent::__construct();
    }

    private function isSession($param){
    	$status = FALSE;
    	if ($this->session->userdata($param)) {
			$status = TRUE;
		}
		return $status;
    }

    private function output($halaman, $data, $template) {
        show("contents/manager/$halaman", $data, $template);
    }

	public function index() {
		$this->dasborView();
	}

	public function dasborView(){
		$jobdesk  = 'manager';
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   = 'Dasbor';
	        $data['jobdesk'] = $jobdesk;
	        $data['menu']    = 1;
	        $this->output('dasbor',$data, 'user');
		} else {
			redirect(base_url().'login');
		}	
	}

	public function daftarPenggunaView(){
		$jobdesk  = 'manager';
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   		= 'Manajemen Pengguna';
	        $data['jobdesk'] 		= $jobdesk;
	        $data['menu']    		= 2;
	        $data['dataPengguna']	= $this->mUser->getUser();
	        $this->output('manajemenPengguna',$data, 'user');
		} else {
			redirect(base_url().'login');
		}
	}

	public function persiapanAngkutView(){
		$jobdesk  = 'manager';
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   = 'Laporan - Persiapan Angkut';
	        $data['jobdesk'] = $jobdesk;
	        $data['menu']    = 3;
	        $this->output('persiapanAngkut',$data, 'user');
		} else {
			redirect(base_url().'login');
		}
	}

	public function pengambilanKargoView(){
		$jobdesk  = 'manager';
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   = 'Laporan - Pengambilan Kargo';
	        $data['jobdesk'] = $jobdesk;
	        $data['menu']    = 4;
	        $this->output('pengambilanKargo',$data, 'user');
		} else {
			redirect(base_url().'login');
		}
	}

	public function transportDanAlatView(){
		$jobdesk  = 'manager';
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   = 'Laporan - Transport dan Alat';
	        $data['jobdesk'] = $jobdesk;
	        $data['menu']    = 5;
	        $this->output('transportDanAlat',$data, 'user');
		} else {
			redirect(base_url().'login');
		}
	}

	public function backupView(){
		$jobdesk  = 'manager';
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   = 'Backup dan Restore Database - Backup';
	        $data['jobdesk'] = $jobdesk;
	        $data['menu']    = 6;
	        $this->output('backup',$data, 'user');
		} else {
			redirect(base_url().'login');
		}
	}

	public function restoreView(){
		$jobdesk  = 'manager';
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   = 'Backup dan Restore Database - Restore';
	        $data['jobdesk'] = $jobdesk;
	       	$data['menu']    = 7;
	        $this->output('restore',$data, 'user');
		} else {
			redirect(base_url().'login');
		}
	}

	private function getSessionName($param){
        switch ($param) {
                case 'manager'          : $name = 'manager';break;
                case 'operator-terminal': $name = 'opeter';break;
                case 'petugas-gerbang'  : $name = 'petger';break;
                case 'petugas-transport': $name = 'pettra';break;
                default: $name = '';break;
        }
        return $name;
    }

	/*
	Fungsi CUD (CREATE, UPDATE, DELETE)
	*/

	public function tambahPengguna(){
		$nama 	   = $this->input->post('nama');
		$nama      = ucwords(strtolower($nama));
		$namaAkun  = $this->input->post('namaAkun');
		$kataSandi = $this->input->post('kataSandi');
		$jobdesk   = $this->input->post('pilihJobdesk');

		$data['nama']     = $nama;
		$data['jobdesk']  = $jobdesk;
		$data['nama_akun'] = $namaAkun;
		$data['kata_sandi']= $kataSandi;

		if ($namaAkun != '' && $kataSandi != '' ) {
			if ($this->mUser->getAut('nama_akun = \''.$namaAkun.'\'') == '') {
				if($this->mUser->insert($data)){
					$this->session->set_flashdata('flashSuccess', 'Data pengguna berhasil disimpan.');
					redirect(base_url().'manager/manajemen-pengguna');
				} else {
					$this->session->set_flashdata('flashError', 'Data pengguna gagal disimpan.');
					redirect(base_url().'manager/manajemen-pengguna');
				}
			} else {
				$this->session->set_flashdata('flashError', 'Gagal menyisipkan, duplikasi nama akun.');
				redirect(base_url().'manager/manajemen-pengguna');
			}	
		} else {
			$this->session->set_flashdata('flashError', 'Proses penyisipan gagal, terdapat data yang bernilai NULL.');
			redirect(base_url().'manager/manajemen-pengguna');
		}
	}

	public function aturUlangKataSandi(){

	}

	public function hapusPengguna(){

	}
}
?>