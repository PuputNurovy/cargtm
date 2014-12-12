<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CLogin
 *
 * @author Subhan Gustiar Rosda
 */
class CLogin extends CI_Controller {
  
    function __construct() {
        parent::__construct();
    }

    private function output($halaman, $data, $template) {
        show("contents/$halaman", $data, $template);
    }

    public function index() {
        if ($this->session->userdata('manager')) {
            redirect(base_url().'manager');
        } elseif ($this->session->userdata('opeter')) {
            redirect(base_url().'operator-terminal');
        } elseif ($this->session->userdata('petger')) {
            redirect(base_url().'petugas-gerbang');
        } elseif ($this->session->userdata('pettra')) {
            redirect(base_url().'petugas-transport');
        } else {
            $this->loginView();
        }
	}

	public function loginView(){
		$data['title'] = 'Login';
		$this->output('login',$data,'default');
	}

    public function autentikasi(){
        $jobdesk    = $this->input->post('pilihJobdesk');
        $nama_akun  = $this->input->post('namaAkun');
        $kata_sandi = $this->input->post('kataSandi');
        $query     = $this->mUser->getAut("(((nama_akun = '".$nama_akun."') AND (kata_sandi = '".$kata_sandi."')) AND (jobdesk = '".$jobdesk."'))");
        if ($query != '') {
            $data['jobdesk']   = $jobdesk;
            $data['nama_akun']  = $nama_akun;
            $data['nama']      = $query;
            switch ($jobdesk) {
                case 'manager'          : $this->session->set_userdata('manager', $data);$this->manager();break;
                case 'operator terminal': $this->session->set_userdata('opeter', $data);$this->operatorTerminal();break;
                case 'petugas gerbang'  : $this->session->set_userdata('petger', $data);$this->penjagaGerbang();break;
                case 'petugas transport': $this->session->set_userdata('pettra', $data);$this->petugasTransport();break;
                default: break;
            }
        } else {
           $this->session->set_flashdata('flashError', 'Login gagal. Tidak ada data user yang sesuai');
           redirect(base_url().'login');
        }        
    }

    private function manager(){
        redirect(base_url().'manager');
    }

    private function operatorTerminal(){
        redirect(base_url().'operator-terminal');
    }

    private function penjagaGerbang(){
        redirect(base_url().'petugas-gerbang');
    }

    private function petugasTransport(){
        redirect(base_url().'petugas-transport');
    }

    public function hapusSesi(){
        $jobdesk = $this->uri->segment(1);
        $this->session->unset_userdata($this->getSessionName($jobdesk));
        redirect(base_url().'login');
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