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
class c_admin extends CI_Controller {
    //put your code here
    public function index(){
        $this->load->view('manager(admin)/index');
    }
    
    public function insertUser(){
        
    }
}

?>
