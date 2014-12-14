<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CPettra
 *
 * @author Subhan Gustiar Rosda
 */
class CPettra extends CI_Controller {

    private $jobdesk;
  
    function __construct() {
        parent::__construct();
        $this->jobdesk = 'petugas-transport';
    }

    private function isSession($param){
    	$status = FALSE;
    	if ($this->session->userdata($param)) {
			$status = TRUE;
		}
		return $status;
    }

    private function output($halaman, $data, $template) {
        show("contents/pettra/$halaman", $data, $template);
    }

    private function toRedirect(){
        if (!$this->isSession($this->getSessionName($this->jobdesk))) {
            redirect(base_url().'login');
        }
    }
	public function index() {
		$this->daftarTransportView();
	}

	public function daftarTransportView(){
        $this->toRedirect();
        $data['title']   = 'Daftar Transport & Alat Angkut';
        $data['jobdesk'] = $this->jobdesk;
        $data['menu']    = 14;
        $this->output('daftarTransport',$data, 'user');	
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

    public function tambahTransport(){
        $this->toRedirect();
        //kode crud
        echo "tambah";
    }

    public function ubahTransport(){
        $this->toRedirect();
        //kode crud
        echo "ubah";
    }

    public function hapusTransport(){
        $this->toRedirect();
        //kode crud
        echo "hapus";
    }

}
?>