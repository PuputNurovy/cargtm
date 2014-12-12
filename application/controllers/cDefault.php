<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CDefault
 *
 * @author Subhan Gustiar Rosda
 */
class CDefault extends CI_Controller {
  
    function __construct() {
        parent::__construct();
    }

    private function isSession($jobdesk){ 
    	$status  = FALSE;
    	if ($this->session->userdata($jobdesk)) {
			$status = TRUE;
		}
		return $status;
    }

    private function output($halaman, $data, $template) {
        show("contents/$halaman", $data, $template);
    }

    public function index() {
		redirect(base_url().'login');
	}

	public function profile(){
		$jobdesk = $this->uri->segment(1);
		if ($this->isSession($this->getSessionName($jobdesk))) {
			$data['title']   = 'Info Akun';
	        $data['jobdesk'] = $jobdesk;
	        $data['menu']    = 15;
	        $this->output('profile',$data, 'user');
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