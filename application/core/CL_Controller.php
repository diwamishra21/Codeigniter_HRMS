<?php

/* 
 * This is main Controller which will be load on every controller insted of CI_controller.
 * Authour : Maneesh Tiwari || Shiv Tiwari
 * 
 */

class CL_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('custom_redirect_helper');
        $this->load->library('Layout');
        $this->load->library('Auth');
    }
    
}



