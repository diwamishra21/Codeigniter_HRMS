<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Layout {
	private $data = array();

	public function view($path, $content_data = NULL, $arrJs = array()) {
		$CI = &get_instance();

		var_dump($path);
		exit;
		$this->data['userdata'] = $CI->auth->formatted_userdata('user_admin');

		if ($content_data == NULL) {
			$this->data["content"] = $CI->load->view($path, "", TRUE);
		} else {
			$this->data["content"] = $CI->load->view($path, $content_data, TRUE);
		}
		$this->data["arrJs"] = $arrJs;

		return $CI->load->view("_layout/_admin/_layout", $this->data);
	}
}
?>
