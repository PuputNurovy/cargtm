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
class c_taaView extends CI_Controller {
    //put your code here
    public function index(){
        $this->load->view('taa/index');
    }
    
    public function v_daftarTaa(){
        $this->load->view('taa/daftarTAA');
    }
}

?>
