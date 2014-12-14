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
    
    private $jobdesk;

    function __construct() {
        parent::__construct();
        $this->jobdesk = $this->uri->segment(1);
    }

    private function isSession($param){ 
    	$status  = FALSE;
    	if ($this->session->userdata($param)) {
			$status = TRUE;
		}
		return $status;
    }

    private function output($halaman, $data, $template) {
        show("contents/$halaman", $data, $template);
    }

    private function toRedirect(){
        if (!$this->isSession($this->getSessionName($this->jobdesk))) {
            redirect(base_url().'login');
        }
    }

    public function index() {
		redirect(base_url().'login');
	}

	public function profile(){
        $this->toRedirect();
		$data['title']   = 'Info Akun';
        $data['jobdesk'] = $this->jobdesk;
        $data['menu']    = 15;
        $user            = $this->session->userdata($this->getSessionName($this->jobdesk));
        $data['infoAkun']= $this->mUser->getView('nama_akun = \''.$user['nama_akun'].'\' AND  nama = \''.$user['nama'].'\' AND jobdesk = \''.$user['jobdesk'].'\'');
        $this->output('profile',$data, 'user');
	}

    public function errorView(){
        $data['title']   = 'Oops terjadi kesalahan';
        $this->output('error',$data, 'default');
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

    public function ubahProfile(){
        $this->toRedirect();
        //----- Kode update
    }
}

?>