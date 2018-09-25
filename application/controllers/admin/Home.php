<?php

/*
 *
 * This is Admin Home Controller Class
 * Authoutr Maneesh Tiwari || Shiv Tiwari
 *
 */

defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CL_Controller {

	public $page;

	public function __construct() {
		parent::__construct();
		$this->page = 'home';
		$this->load->model('admin/User_Model');
		$this->load->helper("image_helper");
		$this->load->library('Auth');
		$this->load->helper('cookie');
		$this->load->library('pagination');
	}

	public function index() {
		$this->auth->isLoginCheck('', 'user_admin');
		$userData                   = array('data' => $this->auth->formatted_userdata('user_admin'));
		$access_type['access_type'] = $userData['data']->access_type;
		$dataAdmins                 = $this->User_Model->total_employee();
		$month                      = date('m');
		$notices                    = $this->User_Model->notices_model();
		$arrLeaves                  = $this->User_Model->total_leaves_model($month);
		$update                     = $this->User_Model->updateNottimeOut_byUser();
		// var_dump($update);

		$arrHour     = $this->User_Model->work_hour();
		$hour        = $arrHour[0]->totalWork;
		$hour        = gmdate("H:i", $hour);
		$arrWeekDays = $this->User_Model->week_days();
		//echo '<pre>';

		//$arrWeekDays1 = gmdate("H:i",$arrWeekDays[0]['working_hours']);
		//echo '<pre>';

		$arrWeekData = array();
		foreach ($arrWeekDays as $value1) {
			$arrWeekData[]['date']    = $value1->days;
			$arrWeekData[]['d_value'] = $value1->working_hours;
		}
		//var_dump($arrWeekData);

		// var_dump($hour);

		$this->layout->view('admin/home', array('emp' => $dataAdmins, 'access_type' => $access_type['access_type'], 'notice' => $notices, 'total_leaves' => $arrLeaves[0]->total, 'hour' => $hour, 'week_data' => $arrWeekData));
	}

	public function login() {
		$this->auth->isLoginCheck('login', 'user_admin');
		$this->load->view('admin/user/login');
	}

	public function logout() {
		$this->auth->isLoginCheck('', 'user_admin');
		$url      = base_url('admin/home/login');
		$logout   = array('log' => $this->auth->formatted_userdata('user_admin'));
		$email_id = $logout['log']->email_id;
		$this->auth->logout('user_admin', $url, $email_id);
	}

	public function timeout() {
		$this->auth->isLoginCheck('', 'user_admin');
		$userData   = array('data' => $this->auth->formatted_userdata('user_admin'));
		$e_code     = $userData['data']->e_code;
		$code       = $userData['data']->code;
		$arrTimeOut = array();
		$arrTimeOut = array('logout_time' => date("Y-m-d h:i:s:"));
		$TimeOut    = array('logout_time' => date("Y-m-d H:i:s:"));

		$this->User_Model->timeout_model($arrTimeOut, $TimeOut, $e_code, $code);
		$this->custom_session->custom_set_flashdata("You have Timed Out Successfully!!! Now Y0u can logout", "msg");
		redirect_to(base_url('admin/home'));
	}

	public function profile() {
		$this->auth->isLoginCheck('', 'user_admin');
		$arrExtraJsPath         = array('js'   => array('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js'), 'css'   => array());
		$userData               = array('data' => $this->auth->formatted_userdata('user_admin'));
		$email_id               = $userData['data']->email_id;
		$id                     = $userData['data']->id;
		$code                   = $userData['data']->code;
		$access_type            = $userData['data']->access_type;
		$userData['userAvatar'] = getImageUrl(array('type' => 'user_avatar_admin', 'imageName' => $userData['data']->image_name));
		//
		$peofileDetails            = $this->User_Model->getProfileDetails($email_id);
		$user_Details['detail']    = (count($peofileDetails) > 0)?$peofileDetails[0]:'';
		$userDetails['userAvatar'] = getImageUrl(array('type' => 'user_avatar_admin', 'imageName' => $userData['data']->image_name));
		$time                      = date("y-m-d h:i:s:");
		$arrFname                  = $this->input->post('first_name');
		if ($this->input->post() != NULL) {
			if (!empty($arrFname)) {
				$arrUserData = array('code' => $code,
					'first_name'               => $this->input->post('first_name'),
					'last_name'                => $this->input->post('last_name'),
					'contact'                  => $this->input->post('contact'),
					'address'                  => $this->input->post('address'),
					'city'                     => $this->input->post('city'),
					'status'                   => 0,
				);
				if ($access_type == 'super admin') {
					$this->User_Model->updateProfileSuper($arrUserData, $code);
					$this->custom_session->custom_set_flashdata("Profile uploaded successfully.", "msg");
				} else {
					//var_dump($arrUserData);
					// exit;
					$this->User_Model->updateProfileData($arrUserData);
					$this->custom_session->custom_set_flashdata("Profile uploaded successfully.", "msg");
				}
			}
			$varPass = md5($this->input->post('oldpass'));
			if (!empty($varPass)) {
				$oldPass = $this->User_Model->change_pass_model($id);
				if ($varPass == $oldPass[0]->password) {
					$pass      = md5(trim($this->input->post('pass')));
					$conf_pass = md5(trim($this->input->post('conf_pass')));
					if ($pass == $conf_pass) {
						$this->User_Model->update_pass_model($pass, $id);
						$this->custom_session->custom_set_flashdata("Password changed successfully. New password effecctive with next login", "msg");
					} else {
						$this->custom_session->custom_set_flashdata("New Password and Confirm Password does not match.", "msg");
					}
				} else {
					$this->custom_session->custom_set_flashdata("Password does not match.", "msg");
				}
			}

			if (!empty($_FILES)) {
				$fileName = "";
				$this->load->library('Custom_Upload');
				$arrImageData = $this->custom_upload->uploadImage("avatar_admin");
				if (!empty($arrImageData['error'])) {
					$this->custom_session->custom_set_flashdata($arrImageData['error'], "msg");
				} else {
					$fileName    = $arrImageData['file_name'];
					$arrUserData = array('image_name' => $fileName);
					$this->User_Model->updateProfilePic($arrUserData, $code);
					$this->custom_session->custom_set_flashdata("Profile avatar changed successfully.", "msg");
				}
			}
			redirect_to(base_url('admin/profile'));
		}

		$varMessage       = $this->custom_session->loadMsg("msg", "success");
		$userData['msg']  = $varMessage;
		$status['status'] = $this->changing_approval_status();
		//var_dump($status);
		// exit;
		$this->layout->view('admin/user/profile', array('user_details' => $userDetails, 'detail' => $user_Details, 'msg' => $varMessage, 'status' => $status), $arrExtraJsPath);
	}

	public function edit_user_by_admin($code) {
		$userData = array('data' => $this->auth->formatted_userdata('user_admin'));
		$joinData = $this->User_Model->get_update_model($code);
		$course   = $this->User_Model->education_model();
		$exp      = $this->User_Model->exp_model();
		$year     = $this->User_Model->year_model();
		// echo "<pre>";

		if (!empty($_POST)) {
			$arrUsers = array(
				'access_type'                              => $this->input->post('access_type'),
				'code'                                     => $code,
				'email_id'                                 => $this->input->post('email'),
				'password'                                 => md5($this->input->post('password')));
			$arrUsersDetail = array('first_name'        => $this->input->post('first_name'),
				'last_name'                                => $this->input->post('last_name'),
				'gender'                                   => $this->input->post('gender'),
				'dob'                                      => $this->input->post('dob'),
				'marital_status'                           => $this->input->post('marital'),
				'blood_group'                              => $this->input->post('blood_group'));
			$arrCompanyDetail = array('exp'             => $this->input->post('exp'),
				'company1'                                 => $this->input->post('company1'),
				'address1'                                 => $this->input->post('address1'),
				'company2'                                 => $this->input->post('company2'),
				'address2'                                 => $this->input->post('address2'));
			$arrContactInfo = array('contact'           => $this->input->post('contact'),
				'address'                                  => $this->input->post('address'),
				'city'                                     => $this->input->post('city'),
				'state'                                    => $this->input->post('state'));
			$arrEduInfo = array('highest_qualification' => $this->input->post('highest_qualification'),
				'passing_year'                             => $this->input->post('year'));
			// var_dump($arrUsersDetail);

			$this->User_Model->update_data_by_super_admin1($arrUsers, $code);
			$this->User_Model->update_data_by_super_admin2($arrUsersDetail, $code);
			$this->User_Model->update_data_by_super_admin3($arrCompanyDetail, $code);
			$this->User_Model->update_data_by_super_admin4($arrContactInfo, $code);
			$check = $this->User_Model->update_data_by_super_admin5($arrEduInfo, $code);
			//var_dump($check);

			//$this->admin_model->update_profile($arrUsers,$arrUsersDetail,$arrCompanyDetail,$arrContactInfo,$arrEduInfo, $id['id']);

			redirect_to(base_url('admin/home/emp_list'));
		}
		$arrExtraJsPath = array('js' => array(
				'assets/global/plugins/jquery-validation/js/jquery.validate.min.js',
				'assets/pages/scripts/form-validation-md.min.js',
				'assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js',
			),
			'css' => array('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')
		);

		$this->layout->view('admin/user/update_employee', array('joinData' => $joinData, 'userData' => $userData, 'code' => $code, 'course' => $course, 'exp' => $exp, 'year' => $year), $arrExtraJsPath);
	}

	public function delete_employee($code) {
		$userData                   = array('data' => $this->auth->formatted_userdata('user_admin'));
		$access_type['access_type'] = $userData['data']->access_type;
		$this->User_Model->delete_model($code);
		redirect_to(base_url('admin/home/emp_list'));
		$this->custom_session->custom_set_flashdata("You have  delete an employee successfully", "msg");
	}

	public function add_user() {
		$userData     = array('data' => $this->auth->formatted_userdata('user_admin'));
		$code['code'] = $userData['data']->code;
		$course       = $this->User_Model->education_model();
		// var_dump($course);
		// exit;
		$exp  = $this->User_Model->exp_model();
		$year = date('Y');
		// var_dump($_POST);
		// exit;
		if (!empty($_POST)) {
			// var_dump($_POST);
			// exit;
			$argArrData = $_POST;
			// var_dump($argArrData);
			// exit;
			$this->User_Model->add_user_model($argArrData, $course, $exp, $year);
			redirect_to('admin/home/emp_list', 'refresh');
		}
		// var_dump($course);
		// exit;
		$arrExtraJsPath = array('js' => array(
				'assets/js/jquery.validate.min.js',
				'assets/js/custom.js',
				'assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
				'assets/pages/scripts/components-date-time-pickers.min.js',
				'assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js',
			),
			'css' => array('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')
		);
		$this->layout->view('admin/user/add_user', array('course' => $course, 'exp' => $exp), $arrExtraJsPath);
	}

	public function emp_list() {
		$this->auth->isLoginCheck('', 'user_admin');
		$userData = array('data' => $this->auth->formatted_userdata('user_admin'));
		// var_dump($userData);
		// exit;
		$access_type['access_type'] = $userData['data']->access_type;
		$dataAdmins                 = $this->User_Model->emp_list_model($access_type['access_type']);
		// var_dump($dataAdmins);
		// exit;
		$arrExtraJsPath = array('js' => array(
				'assets/global/plugins/jquery-validation/js/jquery.validate.min.js',
				'assets/pages/scripts/form-validation-md.min.js',
				'assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js',
			),
			'css' => array('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')
		);
		$this->layout->view('admin/user/emp_list', array('data_list' => $dataAdmins), $arrExtraJsPath);
	}

	/** daily attendance report of employee    * */
	public function attendance_report() {
		$this->auth->isLoginCheck('', 'user_admin');
		$userData                   = array('data' => $this->auth->formatted_userdata('user_admin'));
		$access_type['access_type'] = $userData['data']->access_type;
		//$data = $session_data['e_code'];
		$reports = $this->User_Model->Attendance();

		$arrExtraJsPath = array('js' => array(
				'assets/global/plugins/jquery-validation/js/jquery.validate.min.js',
				'assets/pages/scripts/form-validation-md.min.js',
				'assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js',
			),
			'css' => array('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')
		);
		$this->layout->view('admin/user/attendance_report', array('report_data' => $reports), $arrExtraJsPath);
	}

	/** end daily attendance report of employee* */
	public function edit_profile_approval() {
		$this->auth->isLoginCheck('', 'user_admin');
		$updateDetails  = $this->User_Model->fetch_edit_profile_details_for_update();
		$arrExtraJsPath = array('js' => array(
				'assets/global/plugins/jquery-validation/js/jquery.validate.min.js',
				'assets/pages/scripts/form-validation-md.min.js',
				'assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js',
			),
			'css' => array('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')
		);
		$this->layout->view('admin/user/edit_profile_approval', array('updateDetails' => $updateDetails), $arrExtraJsPath);
	}

	public function update_edit_profile_on_request($code) {
		if (!empty($code)) {
			$updateProfile = $this->User_Model->fetch_edit_profile_details_for_update();

			//var_dump($updateProfile);
			// exit;
			$arrUsersDetail = array(
				'first_name' => $updateProfile[0]->first_name,
				'last_name'  => $updateProfile[0]->last_name);
			$arrContactInfo = array(
				'contact' => $updateProfile[0]->contact,
				'address' => $updateProfile[0]->address,
				'city'    => $updateProfile[0]->city);
			//var_dump($arrContactInfo);
			//exit;
			$this->User_Model->update_data_of_user($arrUsersDetail, $code);
			$this->User_Model->update_data_of_user2($arrContactInfo, $code);
		}

		redirect_to('admin/home/emp_list');
	}

	public function full_report() {
		$varEmployee = $this->User_Model->select_employee_model();
		//var_dump($varEmployee);
		// exit;
		$arrExtraJsPath = array('js' => array(
				'assets/js/jquery.validate.min.js',
				'assets/js/custom.js'));
		$this->layout->view('admin/user/full_report', array('employee' => $varEmployee), $arrExtraJsPath);
	}

	public function month_report() {
		if (!empty($_POST)) {

			$mon      = $this->input->post('month');
			$year     = $this->input->post('year');
			$emp_name = $this->input->post('employee');

			$config                     = array();
			$config["base_url"]         = base_url()."admin/home/month_report";
			$total_rows                 = $this->User_Model->total_rowsCount();
			$config["total_rows"]       = $total_rows;
			$config["per_page"]         = 5;
			$config['use_page_numbers'] = True;
			$config['num_links']        = $total_rows;
			$config['cur_tag_open']     = '&nbsp;<a class="current">';
			$config['cur_tag_close']    = '</a>';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'previous';
			$this->pagination->initialize($config);
			if ($this->uri->segment(4)) {
				$page = ($this->uri->segment(4));
				$page = ($page-1)*$config["per_page"];
				//  var_dump($page);

			} else {
				$page = 0;
			}
			$data["page"]  = $page;
			$data["month"] = $this->User_Model->month_model($config["per_page"], $page);
			// var_dump($data["month"]);

			$data["get_details"] = $this->User_Model->total_working1($mon, $year, $emp_name, $config["per_page"], $page);
			//var_dump($get_details);
			$data["emp_name"] = $this->User_Model->employees_name_model($config["per_page"], $page);
			$str_links        = $this->pagination->create_links();
			$data["links"]    = explode('&nbsp;', $str_links);
			$this->layout->view('admin/user/report_month_wise', $data);

			// var_dump("sadsdsds");total_working1
		} else {
			$config                     = array();
			$config["base_url"]         = base_url()."admin/home/month_report";
			$total_rows                 = $this->User_Model->total_rowsCount();
			$config["total_rows"]       = $total_rows;
			$config["per_page"]         = 5;
			$config['use_page_numbers'] = True;
			$config['num_links']        = $total_rows;
			$config['cur_tag_open']     = '&nbsp;<a class="current">';
			$config['cur_tag_close']    = '</a>';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'previous';
			$this->pagination->initialize($config);
			if ($this->uri->segment(4)) {
				$page = ($this->uri->segment(4));
				$page = ($page-1)*$config["per_page"];
				//  var_dump($page);

			} else {
				$page = 0;
			}
			$data["page"]  = $page;
			$data["month"] = $this->User_Model->month_model($config["per_page"], $page);
			// var_dump($data["month"]);

			$data["year"]     = $this->User_Model->year_model($config["per_page"], $page);
			$data["get_data"] = $this->User_Model->total_working($config["per_page"], $page);
			$data["emp_name"] = $this->User_Model->employees_name_model($config["per_page"], $page);
			// var_dump(  $data["emp_name"]);

			$str_links     = $this->pagination->create_links();
			$data["links"] = explode('&nbsp;', $str_links);
			$this->layout->view('admin/user/report_month_wise', $data);
		}
	}

	public function fetch_report() {
		$data_arr  = $_POST;
		$emp       = $data_arr['employee'];
		$date1     = $data_arr['date_from'];
		$firstDate = date("Y-d-m", strtotime($date1));
		$date2     = $data_arr['date_to'];
		$lastDate  = date("Y-d-m", strtotime($date2));
		if ($this->input->post()) {

			$report = $this->User_Model->fetch_report_model($emp, $firstDate, $lastDate);
			//echo '<pre>';
			// var_dump($report);
			// die;
			$this->layout->view('admin/user/display_report', array('report' => $report));
		}
	}

	public function fetch_month_report() {
		$data_arr = $_POST;
		$month    = $data_arr['month'];
		$varMonth = date("m", strtotime($month));
		$year     = $data_arr['year'];

		// var_dump($data_arr);

		if ($this->input->post()) {
			$arrTimeData = $this->User_Model->fetch_month_report_model($varMonth, $year);
			$this->layout->view('admin/user/report_month_wise', array('data' => $arrTimeData));
		}
	}

	public function daily_report($code) {
		$report = $this->User_Model->month_data_daily_wise($code);
		$this->layout->view('admin/user/month_daily_report', array('report' => $report));
	}

	public function changing_approval_status() {
		return $status = $this->User_Model->get_status_model();
		//var_dump($status);
		// exit;
	}

	public function request_reject($code) {
		$this->User_Model->request_reject_model($code);
		redirect_to('admin/home/edit_profile_approval');
		//var_dump($status);
		// exit;
	}

	public function leave_apply() {
		$varLeave = $this->User_Model->leave_model();
		$userData = array('data' => $this->auth->formatted_userdata('user_admin'));

		// $u_name = $this->User_Model->user_name();
		// var_dump($u_name);

		// exit;
		if (!empty($_POST)) {

			$data      = $_POST['e_code'];
			$sd        = explode('-', $data);
			$code      = ($sd[2]);
			$a         = $this->input->post('from_when');
			$b         = $this->input->post('till_when');
			$dateDiff  = abs(strtotime($b)-strtotime($a));
			$numOfDays = $dateDiff/86400;
			$totalDays = $numOfDays+1;
			$arrUsers  = array(
				'leave_type'  => $this->input->post('leave_type'),
				'e_code'      => $this->input->post('e_code'),
				'email_id'    => $this->input->post('email_id'),
				'from_when'   => $this->input->post('from_when'),
				'till_when'   => $this->input->post('till_when'),
				'days'        => $totalDays,
				'reason'      => $this->input->post('reason'),
				'code'        => $code,
				'update_date' => date('Y-m-d : H:m:s'),
				'status'      => 0,
			);

			// var_dump($arrUsers);

			$leave = $this->User_Model->taken_leave_model($arrUsers);
			// var_dump($leave);
			// exit;
			redirect_to('admin/home/view_leave', 'refresh');
		}
		$arrExtraJsPath = array('js' => array(
				'assets/js/jquery.validate.min.js',
				'assets/js/custom.js',
			));//var_dump($varLeave);exit;
		$this->layout->view('admin/user/leave_form', array('leave' => $varLeave, 'userData' => $userData), $arrExtraJsPath);
	}

	public function view_leave() {
		$this->auth->isLoginCheck('', 'user_admin');
		$userData  = array('data' => $this->auth->formatted_userdata('user_admin'));
		$e_code    = $userData['data']->e_code;
		$viewLeave = $this->User_Model->view_leave_model($e_code);
		// var_dump($viewLeave);

		$this->layout->view('admin/user/myleave', array('viewleave' => $viewLeave));
	}

	public function employees_leaves() {
		$empLeave = $this->User_Model->employees_leaves_model();
		$emp_name = $this->User_Model->employees_name_model();
		$leave    = $this->User_Model->sum_leaves();
		$leave    = $leave[0]->totalD;
		$this->layout->view('admin/user/employees_leaves', array('empleave' => $empLeave, 'emp_name' => $emp_name, 'leave' => $leave));
	}

	public function notice_board() {
		$userData = array('data' => $this->auth->formatted_userdata('user_admin'));
		$id       = $userData['data']->id;
		$notices  = $this->User_Model->notices_model($id);
		$this->layout->view('admin/user/notice_board', array('notice' => $notices));
	}

	public function add_notice() {
		if (!empty($_POST)) {
			//var_dump($_POST);
			// exit;
			//$employeeId = $this->User_Model->employee_id();
			//var_dump($employeeId);
			// exit;
			//			foreach ($employeeId as $value) {
			//				$arrNotification = array('title' => $_POST['title'],
			//					'description'                   => $_POST['description'],
			//					'user_id'                       => $value->id);
			//				$inserted = $this->User_Model->add_notice_model($arrNotification);
			//			}
			$arrNotice = array('title' => $_POST['title'],
				'description'             => $_POST['description']);
			$this->User_Model->add_notice_model($arrNotice);

			redirect_to('admin/home/notice_board', 'refresh');
		}
		$arrExtraJsPath = array('js' => array(
				'assets/js/jquery.validate.min.js',
				'assets/js/custom.js',
			));
		$this->layout->view('admin/user/add_notice', $arrExtraJsPath);
	}

	public function view_notice($id) {
		if (!empty($id)) {
			$varNotice = $this->User_Model->view_notice_model($id);
		}
		$this->layout->view('admin/user/view_notice', array('notice' => $varNotice));
	}

	public function leave_details() {
		$data = $this->User_Model->leave_detail();
		// $u_name = $this->User_Model->user_name();
		//var_dump($u_name);

		$this->layout->view('admin/user/employees_leaves', array('leave_dt' => $data));
	}

	public function authenticate() {
            
		$dataPost = $this->input->post();
                //print_r($dataPost);die;
		$authData = $this->User_Model->authenticate($dataPost['email_id'], $dataPost['password']);
		if (count($authData) > 0) {
			$authData = $authData[0];
			$postPass = md5($dataPost['password']);
                        //print_r($authData);die;
			if ($postPass == $authData->password) {
				$dataSes = array('user_admin' => array('id' => $authData->id, 'email_id' => $authData->email_id));
				$code    = $authData->code;
				$this->custom_session->custom_set_userdata($dataSes);
				$this->auth->insert_ip($dataPost['email_id'], $code);
				redirect_to(base_url('admin/home'));
			} else {
				$this->custom_session->custom_set_flashdata('Invalid Password you have entered', 'err_msg');
				redirect_to(base_url('admin/login'));
			}
		} else {
			$this->custom_session->custom_set_flashdata('Invalid username or email-id', 'err_msg');
			redirect_to(base_url('admin/login'));
		}
	}

	public function leave_detail() {
		if ($this->input->post() != NULL) {
			$mon  = $this->input->post('month');
			$year = $this->input->post('year');

			$emp_name     = $this->input->post('employee');
			$leave_status = $this->input->post('leave_status');
			$data         = $this->User_Model->leave_detail($mon, $year, $emp_name, $leave_status);
			$empLeave     = $this->User_Model->employees_leaves_model();
			$emp_name     = $this->User_Model->employees_name_model();

			$this->layout->view('admin/user/employees_leaves', array('data' => $data, 'emp_name' => $emp_name, 'leave_status' => $leave_status));
			//echo "<pre>";
			// $this->layout->view('admin/user/employees_leaves', array('notice' => $arrUserData));

		}
	}

	public function update_leave_apply($code) {

		$get_leave_detail = $this->User_Model->get_leave_detail($code);

		if (!empty($this->input->post())) {

			$get_data = array('leave_type' => $this->input->post('leave_type'),
				'from_when'                   => $this->input->post('from_when'),
				'till_when'                   => $this->input->post('till_when'),
				'reason'                      => addslashes($this->input->post('reason')),
				'update_date'                 => date("Y-m-d h:m:s"),
			);
			$varLeave = $this->User_Model->update_leave_detail($code, $get_data);
			// redirect_to('admin/home/employees_leaves' 'refresh');
			//echo "asdfasdfsdafsdf";

			redirect_to(base_url('admin/home/employees_leaves'));
		}

		//var_dump($get_leave_detail);

		$view_leave = $this->User_Model->leave_model();
		// var_dump($view_leave);

		$arrExtraJsPath = array('js' => array(
				'assets/js/jquery.validate.min.js',
				'assets/js/custom.js'));

		$this->layout->view('admin/user/leave_form', array('leave' => $view_leave, 'userData' => $get_leave_detail), $arrExtraJsPath);
		// $this->layout->view('admin/user/employees_leaves', array('leave_id' => $get_leave_detail) ,$arrExtraJsPath);
	}

	public function approved_leave($code) {
		$approved_leave = $this->User_Model->approved_leave($code);
		redirect_to(base_url('admin/home/employees_leaves'));
	}

	public function reject_leave($code) {
		$approved_leave = $this->User_Model->reject_leave($code);
		$this->custom_session->custom_set_flashdata("applied leave has been rejected", "msg");
		redirect_to(base_url('admin/home/employees_leaves'));
	}

	public function Total_workin_hours() {
		$get_data = $this->User_Model->total_working();
		$this->layout->view('admin/user/report_month_wise', array('get_data' => $get_data));
	}

}
