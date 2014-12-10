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
class c_gerbangView extends CI_Controller {
    //put your code here
    
    public function index(){
        $this->load->view('gerbang/index');
    }
    
    public function v_daftar(){
        $this->load->view('gerbang/daftarKargo');
    }
    
    public function v_unknown() {
        $this->load->view('gerbang/Unknown');

    }
}

?>
