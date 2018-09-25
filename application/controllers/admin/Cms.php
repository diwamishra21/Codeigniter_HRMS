<?php

/*
 * This is Cms Page Class Controller
 * Description : All events related home page will manage from here...
 * Authour : Maneesh Tiwari || Shiv Tiwari
 * 
 */

Class Cms extends CL_controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function add() {
            $arrExtraJsPath = array('js'=>array(
                    'assets/global/plugins/jquery-validation/js/jquery.validate.min.js',
                    'assets/pages/scripts/form-validation-md.min.js', 
                    'assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js'
            ),
                'css' =>array('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')
                
            );
        $this->layout->view('admin/cms/banner_add', '', $arrExtraJsPath);
    }

}
