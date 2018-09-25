<?php

class Page {

	private $CI;

	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->model('admin/User_Model');
		$this->CI->load->library('pagination');
	}
	public function paging() {
		$config                     = array();
		$config["base_url"]         = base_url()."pagelibrary/";
		$total_row                  = $this->pagination_model->record_count();
		$config["total_rows"]       = $total_row;
		$config["per_page"]         = 1;
		$config['use_page_numbers'] = TRUE;
		$config['num_links']        = $total_row;
		$config['cur_tag_open']     = '&nbsp;<a class="current">';
		$config['cur_tag_close']    = '</a>';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Previous';

		$this->pagination->initialize($config);
		if ($this->uri->segment(3)) {
			$page = ($this->uri->segment(3));
		} else {
			$page = 1;
		}
		$data["results"] = $this->pagination_model->fetch_data($config["per_page"], $page);
		$str_links       = $this->pagination->create_links();
		$data["links"]   = explode('&nbsp;', $str_links);

		// View data according to array.
		// $this->load->view("pagination_view", $data);
	}
}

?>