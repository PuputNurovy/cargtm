<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CTekkar
 *
 * @author Subhan Gustiar Rosda
 */
class CTekkar extends CI_Controller {
  	
  	private $jobdesk;

    function __construct() {
        parent::__construct();
    	$this->jobdesk = 'teknisi-kargo';
    }

    private function isSession($param){
    	$status = FALSE;
    	if ($this->session->userdata($param)) {
			$status = TRUE;
		}
		return $status;
    }

    private function output($halaman, $data, $template) {
        show("contents/tekkar/$halaman", $data, $template);
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
        $data['menu']    = 12;
        $this->output('daftarKargo',$data, 'user');
	}

	// public function kargoTidakDiketahuiView(){
	// 	$this->toRedirect();
	// 	$data['title']   = 'Kargo Tidak Diketahui';
 //        $data['jobdesk'] = $jobdesk;
 //        $data['menu']    = 13;
 //        $this->output('kargoTidakDiketahui',$data, 'user');
	// }

	private function getSessionName($param){
        switch ($param) {
                case 'manager'          : $name = 'manager';break;
                case 'operator-terminal': $name = 'opeter';break;
                case 'teknisi-kargo'  	: $name = 'tekkar';break;
                case 'petugas-transport': $name = 'pettra';break;
                default: $name = '';break;
        }
        return $name;
    }

    // Fungsi CRUD

    public function ubahStatusMasuk(){
        $this->toRedirect();
        // kode crud
        echo "ubah jadi masuk";
    }

    public function ubahStatusKeluar(){
        $this->toRedirect();
        // kode crud
        echo "ubah jadi kaluar";   
    }
}
?>