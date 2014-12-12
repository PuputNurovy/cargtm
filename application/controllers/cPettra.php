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
        show("contents/pettra/$halaman", $data, $template);
    }

	public function index() {
		$this->daftarTransportView();
	}

	public function daftarTransportView(){
		$jobdesk = 'petugas-transport';
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   = 'Daftar Transport & Alat Angkut';
	        $data['jobdesk'] = $jobdesk;
	        $data['menu']    = 14;
	        $this->output('daftarTransport',$data, 'user');
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