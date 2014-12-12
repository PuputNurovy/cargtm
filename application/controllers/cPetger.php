<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CPetger
 *
 * @author Subhan Gustiar Rosda
 */
class CPetger extends CI_Controller {
  
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
        show("contents/petger/$halaman", $data, $template);
    }

	public function index() {
		$this->daftarKargoView();
	}

	public function daftarKargoView(){
		$jobdesk = 'petugas-gerbang';
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   = 'Daftar Kargo';
	        $data['jobdesk'] = $jobdesk;
	        $data['menu']    = 12;
	        $this->output('daftarKargo',$data, 'user');
		} else {
			redirect(base_url().'login');
		}	
	}

	public function kargoTidakDiketahuiView(){
		$jobdesk = 'petugas-gerbang';
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   = 'Kargo Tidak Diketahui';
	        $data['jobdesk'] = $jobdesk;
	        $data['menu']    = 13;
	        $this->output('kargoTidakDiketahui',$data, 'user');
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
}
?>