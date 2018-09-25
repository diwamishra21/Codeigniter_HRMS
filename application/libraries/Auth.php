<?php

/*
 * This is Auth library page
 * Description : getting all data related user
 * Authour: Maneesh Tiwari || Shiv Tiwari
 */

class Auth {

	private $CI;

	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->model('admin/User_Model');
		$this->CI->load->helper('ip_helper');
	}

	public function isLogin($dataCheck) {
//		/echo "<pre>";print_r($this->CI->custom_session);exit;
		$userData = $this->CI->custom_session->custom_userdata($dataCheck);
                //print_r($userData);die;
		return (!empty($userData))?true:false;
	}

	public function isLoginCheck($type = '', $dataCheck) {
		//var_dump($dataCheck); exit;
		$check = $this->isLogin($dataCheck);

		if ($type == 'login') {
			if ($check) {
				redirect_to('admin/home');
			}
		} else {
			if (!$check) {
				redirect_to('admin/login');
			}
		}
	}

	function logout($field, $url, $email_id) {
		$arrTimeOut = array();
		$arrTimeOut = array('logout_time' => date("y-m-d h:i:s:"));
		$this->CI->User_Model->logout_model($arrTimeOut, $email_id);
		$this->CI->custom_session->custom_unset_userdata($field);
		redirect_to($url);
	}

	function formatted_userdata($field) {
		$userData = $this->CI->custom_session->custom_userdata($field);
		// var_dump($userData);
		// exit;
		$arrUser = array();
		if (count($userData) > 0) {
			$arrUser = $this->CI->User_Model->getUserDetail($userData['id']);
			// var_dump($arrUser);
			// exit;
			if (count($arrUser)) {
				$arrUser = $arrUser[0];
			}
		}
		return $arrUser;
	}

	function insert_ip($email_id, $code) {
		$userData    = array('data' => $this->formatted_userdata('user_admin'));
		$code        = $code;
		$get_user_ip = get_client_ip();
		$timeOut     = array('last_login' => date("Y-m-d H:i:s:"),
			'email_id'                       => $email_id,
			'code'                           => $code);
		// var_dump($timeOut);
		// exit;
		$argUpdateData = array('ip_address' => $get_user_ip,
			'last_login'                       => date("Y-m-d h:i:s:"));
		$date = date("Y-m-d");
		// var_dump($date);
		// exit;
		$this->CI->User_Model->insert_ip_model($argUpdateData, $date, $email_id);
		$this->CI->User_Model->total_working_hours($timeOut, $date, $email_id);
	}

}
