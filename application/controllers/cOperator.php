<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of COperator
 *
 * @author Subhan Gustiar Rosda
 */
class COperator extends CI_Controller {
  	
  	private $jobdesk;

    function __construct() {
        parent::__construct();
    	$this->jobdesk = 'operator-terminal';
    }

    private function isSession($param){
    	$status = FALSE;
    	if ($this->session->userdata($param)) {
			$status = TRUE;
		}
		return $status;
    }

    private function output($halaman, $data, $template) {
        show("contents/opeter/$halaman", $data, $template);
    }

    private function toRedirect(){
    	if (!$this->isSession($this->getSessionName($this->jobdesk))) {
			redirect(base_url().'login');
		}
    }

	public function index() {
		$this->daftarKargoView();
	}

	public function daftarKargoView(){
		$this->toRedirect();
		$data['title']   = 'Daftar Kargo';
        $data['jobdesk'] = $this->jobdesk;
        $data['menu']    = 9;
        $this->output('daftarKargo',$data, 'user');
	}

	public function persiapanAngkutView(){
		$this->toRedirect();
		$data['title']   = 'Persiapan Angkut';
        $data['jobdesk'] = $this->jobdesk;
        $data['menu']    = 10;
        $this->output('persiapanAngkut',$data, 'user');
	}

	public function rincianPersiapanView(){
		$this->toRedirect();
		$data['idTransaksi'] = $this->uri->segment(3);
		$data['title']   = 'Rincian Persiapan Angkut - '.$data['idTransaksi'];
        $data['jobdesk'] = $this->jobdesk;
        $data['menu']    = 10;
        $this->output('rincianPersiapan',$data, 'user');
	}

	public function pengambilanKargoView(){
		$this->toRedirect();
		$data['title']   = 'Pengambilan Kargo';
        $data['jobdesk'] = $this->jobdesk;
        $data['menu']    = 11;
        $this->output('pengambilanKargo',$data, 'user');
	}

	public function rincianPengambilanView(){
		$this->toRedirect();
		$data['idTransaksi'] = $this->uri->segment(3);
		$data['title']    	 = 'Rincian Pengambilan Kargo - '.$data['idTransaksi'];
        $data['jobdesk'] 	 = $this->jobdesk;
        $data['menu']    	 = 11;
        $this->output('rincianPengambilan',$data, 'user');
	}

	private function getSessionName($param){
        switch ($param) {
                case 'manager'          : $name = 'manager';break;
                case 'operator-terminal': $name = 'opeter';break;
                case 'teknisi-kargo'    : $name = 'tekkar';break;
                case 'petugas-transport': $name = 'pettra';break;
                default: $name = '';break;
        }
        return $name;
    }

    // Fungsi CRUD

    public function tambahPengambilan(){
        $this->toRedirect();
        //---- kode crud
        echo 'tambah';
    }

    public function ubahPengambilan(){
        $this->toRedirect();
        //---- kode crud
        echo 'ubah';
    }

    public function hapusPengambilan(){
        $this->toRedirect();
        //---- kode crud
        echo 'hapus';
    }

    public function tambahRincianPengambilan(){
        $this->toRedirect();
        //---- kode crud
        echo 'tambah';
    }

    public function ubahRincianPengambilan(){
        $this->toRedirect();
        //---- kode crud
        echo 'ubah';
    }

    public function hapusRincianPengambilan(){
        $this->toRedirect();
        //---- kode crud
        echo 'hapus';
    }

    public function tambahAngkut(){
        $this->toRedirect();
        //---- kode crud
        echo 'tambah';
    }

    public function ubahAngkut(){
        $this->toRedirect();
        //---- kode crud
        echo 'ubah';
    }

    public function hapusAngkut(){
        $this->toRedirect();
        //---- kode crud
        echo 'hapus';
    }

    public function tambahRincianAngkut(){
        $this->toRedirect();
        //---- kode crud
        echo 'tambah';
    }

    public function ubahRincianAngkut(){
        $this->toRedirect();
        //---- kode crud
        echo 'ubah';
    }

    public function hapusRincianAngkut(){
        $this->toRedirect();
        //---- kode crud
        echo 'hapus';
    }

}
?>