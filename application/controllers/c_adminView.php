<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_adminView
 *
 * @author puput nurovy
 */
class c_adminView extends CI_Controller {
    //put your code here
    public function index(){
        $this->load->view('manager(admin)/index');
    }


    public function v_user(){
        $this->load->view('manager(admin)/user');
    }
    
    public function v_persiapanAngkut() {
        $this->load->view('manager(admin)/persiapanAngkut');

    }
    
    public function v_angkutKargo() {
        $this->load->view('manager(admin)/pengambilanKargo');
    }
    public function v_taa() {
        $this->load->view('manager(admin)/daftarTAAad');
    }
    
    public function v_restore() {
        $this->load->view('manager(admin)/restore');
    }
    
    public function v_backup() {
        $this->load->view('manager(admin)/backup');
    }
}

?>
