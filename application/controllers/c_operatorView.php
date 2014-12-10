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
class c_operatorView extends CI_Controller {
    //put your code here
    public function index(){
        $this->load->view('operator/index');
    }


    public function v_daftarKargoOp(){
        $this->load->view('operator/daftarKargoOp');
    }
    
    public function v_persiapanAngkut() {
        $this->load->view('operator/persiapanAngkut');

    }
    
    public function v_pengambilanKargo() {
        $this->load->view('operator/pengambilanKargo');
    }
    
}

?>
