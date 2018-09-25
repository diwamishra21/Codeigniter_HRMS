<?php

/*
 * Custom Session Library
 * description : set and get all data from session
 * Authour : Maneesh Tiwari || Shiv Tiwari
 *
 */
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Custom_Session {

	private $CI;

	function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->library('session');
	}

	function custom_set_userdata($data) {
		if (!empty($data)) {
			$site_session = $this->CI->session->userdata(SITE_SESSION_NAME);
			// var_dump($site_session);
			// exit;
			if (!empty($site_session)) {
				$data = array_merge($data, $site_session);
				// var_dump($data);
				// exit;
			}
			$this->CI->session->set_userdata(SITE_SESSION_NAME, $data);
		}
	}

	function custom_userdata($field) {
		$site_session = $this->CI->session->userdata(SITE_SESSION_NAME);
		// var_dump($site_session);
		// exit;

		return (!empty($site_session) && array_key_exists($field, $site_session))?$site_session[$field]:array();
	}

	function custom_unset_userdata($field) {
		$is_unset     = false;
		$site_session = $this->CI->session->userdata(SITE_SESSION_NAME);
		if (!empty($site_session) && array_key_exists($field, $site_session)) {
			unset($site_session[$field]);
			$this->CI->session->set_userdata(SITE_SESSION_NAME, $site_session);
			$is_unset = true;
		}
		return $is_unset;
	}

	function custom_set_flashdata($data, $name) {
		if (!empty($data) && !empty($name)) {
			$this->CI->session->set_flashdata($name, $data);
		}
	}

	function custom_flashdata($name) {
		if (!empty($name)) {
			return $this->CI->session->flashdata($name);
		}
	}

	function loadMsg($name, $type) {
		$msg = '';
		if (!empty($name) && !empty($type)) {
			$data = $this->custom_flashdata($name);
			if (!empty($data)) {
				if ($type == "error") {
					$msg = "<div class='alert alert-danger display-hide' style='display: block;'>
                                    <button class='close cl_cus' data-close='alert'></button>
                                    <span> {$data}. </span>
                                </div>";
				} else if ($type == "success") {
					$msg = "<div class='alert alert-success display-hide' style='display: block;'>
                                    <button class='close cl_cus' data-close='alert'></button>
                                    <span> {$data}. </span>
                                </div>";
				}
			}
		}
		return $msg;
	}

}

?>