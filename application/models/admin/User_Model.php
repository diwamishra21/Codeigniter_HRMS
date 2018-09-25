<?php

/*
 * User (Admin) Model
 * Authour : Maneesh Tiwari || Shiv Tiwari
 *
 */

class User_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
	}

	public function authenticate($username, $password) {
		$this->db->select('email_id,id,password,e_code,access_type,image_name,code');
		$this->db->from('users');
		$this->db->where('email_id', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get()->result();
                //print_r($query);die;
		return $query;
		$this->insert_ip('', '', $username);
	}

	public function insert_ip_model($argUpdateData = '', $date = '', $username = '') {
		$queryData = $this->db->query("SELECT * FROM users WHERE DATE(last_login) = '$date' AND email_id='$username'")->result();

		if (count($queryData) == 0) {
			$this->db->where('email_id', $username);
			$this->db->update('users', $argUpdateData);
		}

		$query        = $this->db->query("SELECT e_code,email_id FROM users where email_id='$username'");
		$UserInsert   = $query->row_array();
		$arrLoginData = array(
			'e_code'     => $UserInsert['e_code'],
			'email_id'   => $UserInsert['email_id'],
			'last_login' => $argUpdateData['last_login'],
		);
		$this->db->insert('login_details', $arrLoginData);
		$this->full_report_model($arrLoginData, $date, $username);
	}

	public function total_working_hours($arrtotal, $date, $email_id) {
		$totalData = $this->db->query("SELECT * FROM total_working_hours WHERE DATE(last_login) = '$date' AND email_id='$email_id'")->result();
		if (empty($totalData)) {
			$this->db->insert('total_working_hours', $arrtotal);
		} elseif (count($totalData) == 0) {
			$this->db->where('email_id', $email_id);
			$this->db->update('total_working_hours', $arrtotal);
		}
		$queryData = $this->db->query("SELECT last_login FROM total_working_hours WHERE DATE(last_login) = '$date' AND email_id='$email_id'")->result();
		if (count($queryData) == 0) {
			$this->db->insert('total_working_hours', $arrLoginData);
		}
	}

	public function full_report_model($arrLoginData, $date = '', $email_id) {
		$queryData = $this->db->query("SELECT last_login FROM full_report WHERE DATE(last_login) = '$date' AND email_id='$email_id'")->result();
		if (count($queryData) == 0) {
			$this->db->insert('full_report', $arrLoginData);
		}
	}

	public function fetch_report_model($emp, $firstDate, $lastDate) {
		$query         = $this->db->query("SELECT * FROM full_report WHERE DATE(last_login)>='$firstDate' and DATE(last_login)<='$lastDate' AND email_id='$emp'");
		return $report = $query->result();
	}

	public function month_data_daily_wise($code) {
		$query         = $this->db->query("select * from total_working_hours where code='$code'");
		return $report = $query->result();
	}

	public function fetch_month_report_model($varMonth, $year) {
		$total = $this->db->query("SELECT total_working_hours.code,email_id,SEC_TO_TIME(SUM(TIME_TO_SEC(logout_time) - TIME_TO_SEC(last_login))) AS working_hours,users_detail.first_name,users_detail.last_name from total_working_hours LEFT JOIN users_detail ON users_detail.code=total_working_hours.code WHERE MONTH(last_login)='$varMonth' And YEAR(last_login)='$year' group by email_id");
		return $total->result();
	}

	// ( CASE WHEN invitee_status=1 THEN "attending" WHEN invitee_status=2 THEN "unsure" WHEN invitee_status=3 THEN "declined" WHEN invitee_status=0 THEN "notreviwed" END)
	//SEC_TO_TIME(SUM(TIME_TO_SEC(logout_time) - TIME_TO_SEC(last_login)))
	public function get_names() {
		$query = $this->db->query("select first_name,last_name,code from users_detail");
		return $query->result();
	}

	public function getUserDetail($id) {
		$this->db->select('id,access_type,email_id,e_code,code,ip_address,last_login,logout_time,image_name,fullpath');
		$this->db->from('users');
		$this->db->where('id', $id);
		$query = $this->db->get()->result();
		// var_dump($query);
		// exit;
		return $query;
	}

	/**     * */
	public function getProfileDetails($email_id) {
		$this->db->select('users.id as uid,users.e_code,users_detail.first_name,users_detail.last_name,contact_info.contact,contact_info.address,contact_info.city');
		$this->db->from('users_detail');
		$this->db->where('users.email_id', $email_id);
		$this->db->join('users', 'users.code=users_detail.code', 'left');
		$this->db->join('contact_info', 'users.code=contact_info.code', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	public function logout_model($arrTimeOut, $email_id) {
		$arrData = array('logout_time' => $arrTimeOut);
		//var_dump($email_id);
		// exit;
		$this->db->where('email_id', $email_id);
		$this->db->order_by('id', 'desc');
		$this->db->limit(1);
		$this->db->update('login_details', $arrData['logout_time']);
	}

	public function timeout_model($arrTimeOut, $TimeOut, $e_code, $code) {
		$this->db->where('e_code', $e_code);
		$this->db->update('users', $arrTimeOut);
		$this->timeout_insert_model($arrTimeOut, $TimeOut, $e_code, $code);
	}

	public function timeout_insert_model($arrTimeOut, $TimeOut, $e_code, $code) {
		$logout  = $arrTimeOut['logout_time'];
		$timeout = $TimeOut['logout_time'];
		$where   = array('e_code' => $e_code, );
		$varDate = $this->db->query("SELECT DATE_FORMAT(full_report.last_login, '%Y-%m-%d') FROM full_report WHERE DATE(last_login) = CURDATE() AND e_code='$e_code' ");
		$query   = $this->db->query("UPDATE full_report SET logout_time='$logout' WHERE e_code='$e_code' AND DATE_FORMAT(full_report.last_login, '%Y-%m-%d')=CURDATE()");
		$varDate = $this->db->query("SELECT DATE_FORMAT(total_working_hours.last_login, '%Y-%m-%d') FROM total_working_hours WHERE DATE(last_login) = CURDATE() AND code='$code' ");
		$query1  = $this->db->query("UPDATE total_working_hours SET logout_time='$timeout' WHERE code='$code' AND DATE_FORMAT(total_working_hours.last_login, '%Y-%m-%d')=CURDATE()");

		/* query goes here for total workings hours of an employee */
		$data     = $this->db->query("SELECT last_login FROM total_working_hours WHERE code='$code' AND DATE_FORMAT(total_working_hours.last_login, '%Y-%m-%d')=CURDATE()");
		$Data     = $data->result();
		$lastTime = $Data[0]->last_login;
		if (!empty($lastTime && $timeout)) {
			$working = $this->db->query("UPDATE total_working_hours SET working_hours = TIMEDIFF('$timeout', '$lastTime') WHERE DATE(last_login) = CURDATE() AND code='$code' ");
		} else {
			$this->db->query("UPDATE total_working_hours SET logout_time = 'N/A', working_hours = 'N/A' WHERE DATE(last_login) = CURDATE() AND code='$code' ");
		}

		/* query goes here for total workings seconds of an employee */
		$query = $this->db->query("UPDATE total_working_hours SET total_working_second = TIMESTAMPDIFF(SECOND,last_login,'$timeout')  WHERE DATE(last_login) = CURDATE() AND code='$code'");
	}

	public function updateProfileData($arrUserData) {
		$this->db->insert('edit_profile_history', $arrUserData);
	}

	public function updateProfilePic($arrEditProfile, $id) {
		$this->db->where('code', $id);
		$this->db->update('users', $arrEditProfile);
	}

	public function updateProfileSuper($arrUserData, $code) {
		//var_dump($code);
		// exit;
		$data    = $this->db->query("select * from users_detail where code='$code'")->result();
		$contact = array('contact' => $arrUserData['contact'], 'code' => $code, 'address' => $arrUserData['address'], 'city' => $arrUserData['city']);
		if (!empty($data)) {
			$this->db->set('first_name', $arrUserData['first_name']);
			$this->db->set('last_name', $arrUserData['last_name']);
			$this->db->where('code', $code);
			$this->db->update('users_detail');
			$this->updateProfileSuper2($contact, $code);
		} else {
			$this->db->insert('users_detail', $contact);
		}
	}

	public function updateProfileSuper2($contact, $code) {
		$data = $this->db->query("select * from contact_info where code='$code'")->result();
		// var_dump($data);
		// exit;
		if (!empty($data)) {
			$this->db->set('contact', $contact['contact']);
			$this->db->set('address', $contact['address']);
			$this->db->set('city', $contact['city']);
			$this->db->where('code', $code);
			$this->db->update('contact_info');
		} else {
			$this->db->insert('contact_info', $contact);
		}
	}

	public function education_model() {
		$query = $this->db->query('select * from course order by id');
		return $query->result();
	}

	public function exp_model() {
		$query = $this->db->query('select exp from experience order by id');
		return $query->result();
	}

	public function notification_count_model() {
		$query = $this->db->query('select count(*) from edit_profile_history where status = 0 order by id');
		return $query->row_array();
	}

	//    public function total_employee_model() {
	//        return $table_row_count = $this->db->count_all('users');
	//    }

	/*     * to add a admin or employee* */

	public function add_user_model($argArrData, $course, $exp, $year) {
		// var_dump($argArrData);
		// exit;
		$this->db->trans_start();
		$code      = $this->db->query("select code from users order by id desc limit 1");
		$ecodeData = $code->row_array();
		//var_dump($ecodeData);
		// exit;

		$codeData    = (int) $ecodeData['code']+1;
		$e_code      = 'codeyiizen-'.$year.'-'.$codeData;
		$arrUserData = array(
			'email_id'    => $argArrData['email'],
			'password'    => md5($argArrData['password']),
			'access_type' => $argArrData['access_type'],
			'e_code'      => $e_code,
			'code'        => $codeData,
		);
		//var_dump($arrUserData);
		// exit;
		$this->db->insert('users', $arrUserData);

		$varUserId     = $this->db->insert_id();
		$personal_info = array(
			'code'           => $codeData,
			'first_name'     => $argArrData['first_name'],
			'last_name'      => $argArrData['last_name'],
			'gender'         => $argArrData['gender'],
			'dob'            => $argArrData['dob'],
			'marital_status' => $argArrData['marital_status'],
			'blood_group'    => $argArrData['blood_group'],
		);
		//var_dump($personal_info);
		// exit;
		$this->db->insert('users_detail', $personal_info);

		$prev_exp = array('code' => $codeData,
			'exp'                   => $argArrData['exp'],
			'company1'              => $argArrData['company1'],
			'address1'              => $argArrData['address1'],
			'company2'              => $argArrData['company2'],
			'address2'              => $argArrData['address2'],
		);
		//var_dump($argArrData['exp']);
		// exit;
		$this->db->insert('prev_company', $prev_exp);

		$contactInfo = array(
			'code'      => $codeData,
			'contact'   => $argArrData['contact'],
			'e_contact' => empty($argArrData['e_contact'])?"":$argArrData['e_contact'],
			'address'   => $argArrData['address'],
			'city'      => $argArrData['city'],
			'state'     => $argArrData['state'],
		);
		//var_dump($contactInfo);
		// exit;
		$this->db->insert('contact_info', $contactInfo);

		$educational_info = array('code' => $codeData,
			'highest_qualification'         => $argArrData['education'],
			'passing_year'                  => $argArrData['year'],
		);
		//var_dump($argArrData['highest_qualification']);
		// exit;
		$this->db->insert('educational_info', $educational_info);

		$this->db->trans_complete();
		return $this->db->insert_id();
	}

	/*     * end of add admin or employee * */

	/** total employee list* */
	public function emp_list_model($type) {
		$this->db->select('users.*, users_detail.*');
		if ($type == 'super admin') {

			$this->db->order_by('users.code', "asc");
			$this->db->from('users');
			$this->db->join('users_detail', 'users_detail.code =users.code', 'left');
			$query = $this->db->get();
			// var_dump($query);
			// exit;
			return $query->result();
		} elseif ($type == 'admin') {
			//$this->db->like('email_id','sun');
			$this->db->where('access_type', 'employee');
			$this->db->order_by('id', "asc");
			$this->db->from('users');
			$query = $this->db->get();
			return $query->result();
		}
	}

	/*     * end of employee list* */

	/** todays attendance report* */
	// public function reports_model() {
	// 	$query           = $this->db->query('select u.e_code ,u.ip_address,u.last_login,u.logout_time,ud.first_name,ud.last_name from users u left join users_detail ud on u.code=ud.code group by u.last_login');
	// 	return $joinData = $query->result();
	// }

	public function Attendance() {
		$query       = $this->db->query('SELECT users.e_code, users.ip_address, users.last_login, users.logout_time, users_detail.first_name, users_detail.last_name FROM users LEFT JOIN users_detail ON users.code=users_detail.code ORDER BY users.last_login');
		return $data = $query->result();
	}

	/** end of todays attendance report* */
	public function get_update_model($code) {
		$queryData       = $this->db->query("select u.access_type,ud.first_name,ud.last_name,ud.gender,ud.dob,ud.marital_status,ud.blood_group,pc.exp,pc.company1,pc.address1,pc.company2,pc.address2,u.email_id,u.password,ci.contact,ci.e_contact,ci.address,ci.city,ci.state,ei.highest_qualification,ei.passing_year from users u left join users_detail ud on u.code=ud.code left join contact_info ci on u.code=ci.code left join educational_info ei on u.code=ei.code left join prev_company pc on u.code=pc.code where u.code='$code'");
		return $joinData = $queryData->result();
	}

	/** delete employee by   super admin* */
	public function delete_model($code) {
		$this->db->delete('users', array('code'            => $code));
		$this->db->delete('users_detail', array('code'     => $code));
		$this->db->delete('contact_info', array('code'     => $code));
		$this->db->delete('educational_info', array('code' => $code));
		$this->db->delete('prev_company', array('code'     => $code));
	}

	public function update_data_by_super_admin1($arrUsers, $code) {
		// var_dump($arrUsers);
		// exit;
		$this->db->where('code', $code);
		$this->db->update('users', $arrUsers);
	}

	public function update_data_by_super_admin2($arrUsersDetail, $code) {
		// var_dump($arrUsersDetail);
		//exit;
		$this->db->where('code', $code);
		$this->db->update('users_detail', $arrUsersDetail);
		//$this->update_status_model($arrInfo['code']);
	}

	public function update_data_by_super_admin3($arrCompanyDetail, $code) {
		// var_dump($arrCompanyDetail);
		// exit;
		$this->db->where('code', $code);
		$this->db->update('prev_company', $arrCompanyDetail);
		//$this->update_status_model($arrInfo['code']);
	}

	public function update_data_by_super_admin4($arrContactInfo, $code) {
		// var_dump($code);
		// exit;
		$this->db->where('code', $code);
		$this->db->update('contact_info', $arrContactInfo);
		$this->update_status_model($code);
	}

	public function update_data_by_super_admin5($arrEduInfo, $code) {

		$this->db->where('code', $code);
		$this->db->update('educational_info', $arrEduInfo);
		$query = $this->db->affected_rows();
		// var_dump($query);
		// exit;
		// $this->update_status_model($arrInfo['code']);
	}

	public function update_data_of_user($arrUsersDetail, $code) {
		$data    = $this->db->query("select * from users_detail where code='$code'")->result();
		$contact = array('first_name' => $arrUsersDetail['first_name'], 'code' => $code, 'last_name' => $arrUsersDetail['last_name']);
		if (!empty($data)) {
			//var_dump($arrUsersDetail);
			// exit;
			$this->db->where('code', $code);
			$this->db->update('users_detail', $arrUsersDetail);
		} else {
			$this->db->insert('users_detail', $contact);
		}
	}

	public function update_data_of_user2($arrContactInfo, $code) {
		$data    = $this->db->query("select * from contact_info where code='$code'")->result();
		$contact = array('contact' => $arrContactInfo['contact'], 'code' => $code, 'address' => $arrContactInfo['address'], 'city' => $arrContactInfo['city']);
		// var_dump($data);
		// exit;
		if (!empty($data)) {
			//var_dump($arrContactInfo);
			// exit;
			$this->db->where('code', $code);
			$this->db->update('contact_info', $arrContactInfo);
			$this->update_status_model($code);
		} else {
			$this->db->insert('contact_info', $contact);
			$this->update_status_model($code);
		}
	}

	public function update_status_model($code) {
		//var_dump($code);
		// exit;
		$this->db->set('status', 1);
		$this->db->where('code', $code);
		$result = $this->db->update('edit_profile_history');
		//var_dump($result);
		// exit;
	}

	public function fetch_edit_profile_details_for_update() {
		$query = $this->db->query('select * from edit_profile_history where status=0 order by id');
		return $query->result();
	}

	public function update_edit_profile_by_super_admin($code) {

		$row_count = $this->admin_model->notification_count_model();
		// var_dump($row_count);
		// exit;
		$access['count'] = $row_count['count(*)'];

		if (!empty($code)) {
			$updateProfile = $this->admin_model->fetch_edit_profile_details_for_update();
			//var_dump($updateProfile);
			// exit;
			$arrDetails = array('code' => $updateProfile[0]->code,
				'first_name'              => $updateProfile[0]->first_name,
				'last_name'               => $updateProfile[0]->last_name);
			$arrInfo = array('code'    => $updateProfile[0]->code,
				'contact'                 => $updateProfile[0]->contact,
				'address'                 => $updateProfile[0]->address,
				'city'                    => $updateProfile[0]->city);
			//$status = array('status' => 0);
			// var_dump($status);
			// exit;
		}
		$this->admin_model->update_data_by_super_admin1($arrDetails);
		$this->admin_model->update_data_by_super_admin2($arrInfo);
		//var_dump($st);
		// exit;
		//$this->admin_model->update_status_model($code);

		redirect('admin_controller/profile');

	}

	public function get_status_model() {
		//var_dump($code);
		// exit;
		$this->db->select('status');
		$this->db->from('edit_profile_history');
		$this->db->where('status', '0');
		$query = $this->db->get();
		return $query->result();
	}

	public function request_reject_model($code) {
		$this->db->where('code', $code);
		$this->db->delete('edit_profile_history');
	}

	public function select_employee_model() {
		$query = $this->db->query('select id,  from users order by id');
		return $query->result();
	}

	public function leave_model() {
		$query = $this->db->query('select * from leave_type order by id');
		return $query->result();
	}

	public function taken_leave_model($arrLeave) {
		// var_dump(explode('-' , $arrLeave['e_code'][2]));
		// exit();
		return $leave = $this->db->insert('taken_leave', $arrLeave);
	}

	public function view_leave_model($e_code) {
		$query = $this->db->query("select * from taken_leave where e_code='$e_code'");
		return $query->result();
	}

	public function employees_leaves_model() {

		$this->db->select('taken_leave.*, users_detail.first_name,users_detail.last_name');
		$this->db->from('taken_leave');
		$this->db->join('users_detail', 'users_detail.code=taken_leave.code', 'left');
		$this->db->where('taken_leave.status=0 ');
		$query = $this->db->get();

		// $query = $this->db->query("select * from taken_leave order by id");
		// echo'<pre>';
		return $query->result();
	}

	public function employees_name_model() {
		// var_dump($page);
		// exit;
		$query = $this->db->query("select * from users_detail ");

		// $query = $this->db->query("select * from taken_leave order by id");
		// var_dump($query);
		return $query->result();
	}

	public function change_pass_model($id) {
		$pass = $this->db->query("select password from users where id='$id'");
		return $pass->result();
	}

	public function update_pass_model($pass, $id) {
		$this->db->set('password', $pass);
		$this->db->where('id', $id);
		$this->db->update('users');
	}

	public function add_notice_model($arrNotice) {
		$this->db->insert('notice_board', $arrNotice);
	}

	//    public function get_announcement() {
	//        $get_announce = $this->db->query("select top (1) * from notice_board order by id DESC");
	//        return $get_announce->result();
	//    }

	public function add_notification($arrNotification) {
		$this->db->insert('notification', $arrNotification);
	}

	public function notices_model($id) {
		$get_announce = $this->db->query('select * from notice_board order by id desc limit 1; ');
		return $get_announce->result();
		//        $this->db->select('*');
		//        $this->db->from('notice_board');
		//        $this->db->where('user_id', $id);
		//        $query = $this->db->get();
		//        return $query->result();
	}

	public function view_notice_model($id) {
		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->from('notification');
		$query = $this->db->get();
		$this->notification_status($id);
		return $query->result();
	}

	public function notification_status($id) {
		$this->db->set('status', 1);
		$this->db->where('id', $id);
		$this->db->update('notification');
	}

	public function notice_notification_count_model($id) {
		$query = $this->db->query("select count(*) from notification where status=0 AND user_id='$id'");
		return $query->row_array();
	}

	public function employee_id() {
		$this->db->select('id');
		$this->db->from('users');
		$query = $this->db->get();
		return $query->result();
	}

	public function month_model($limit, $page) {
		// var_dump($page);
		// exit;
		$query = $this->db->query("select * from month order by id");
		// $query =  $this->db->limit($limit);
		return $query->result();
	}

	public function year_model($limit, $page) {
		$query = $this->db->query("select * from passing_year order by id desc ");
		return $query->result();
	}

	public function leave_detail($month, $year, $emp, $leave_detail) {
		//	$month = trim($year);
		$whereeMP          = (!empty($emp))?" AND users_detail.code= $emp":'';
		$whereMonth        = (!empty($month))?" AND month(taken_leave.from_when) = '$month'":'';
		$whereYear         = (!empty($year))?" AND year(taken_leave.from_when) = $year":'';
		$whereleave_detail = (!empty($leave_detail))?" AND taken_leave.status = $leave_detail":'';

		// echo "Select taken_leave.*,users_detail.first_name,users_detail.last_name,users_detail.code FROM taken_leave AS taken_leave LEFT JOIN users_detail AS users_detail ON users_detail.code = taken_leave.code WHERE  month(from_when) = '".$month."' And  year(from_when) = '".$year."' AND users_detail.code= '".$emp."'";
		//exit();
		$query = $this->db->query("Select taken_leave.*,users_detail.first_name,users_detail.last_name,users_detail.code FROM taken_leave AS taken_leave LEFT JOIN users_detail AS users_detail ON users_detail.code = taken_leave.code WHERE 1=1 $whereMonth $whereYear $whereeMP $whereleave_detail ");
		// var_dump($query);
		//exit();
		return $data = $query->result();
	}

	public function update_leave_detail($code, $get_data) {

		// var_dump($code,$get_data);
		$leave_type  = $get_data['leave_type'];
		$from_when   = $get_data['from_when'];
		$till_when   = $get_data['till_when'];
		$reason      = $get_data['reason'];
		$update_date = $get_data['update_date'];

		// echo "UPDATE taken_leave set leave_type = '".$leave_type."', from_when = '".$from_when."', till_when = '".$till_when."' , reason = '".$reason."', update_date = '".$update_date."' where id ='".$code."'";

		$query = $this->db->query("UPDATE taken_leave set leave_type = '".$leave_type."', from_when = '".$from_when."', till_when = '".$till_when."' , reason = '".$reason."', update_date = '".$update_date."' where id ='".$code."'");
		return $query;
		//return $data = $query->result();
		// var_dump($query);
	}

	public function get_leave_detail($code) {
		// echo "SELECT * from taken_leave where id = '".$id."'";
		// echo "<pre>".
		$query       = $this->db->query("SELECT * from taken_leave where id = '$code' ");
		return $data = $query->result();
		//var_dump($query);
	}

	public function approved_leave($code) {
		$query = $this->db->query("UPDATE taken_leave SET status=1 where id =$code");
		return $query;
	}

	public function reject_leave($code) {
		$query = $this->db->query("UPDATE taken_leave SET status=2 where id =$code");
		return $query;
	}

	public function total_working($limit, $page) {

		// echo "SELECT total_working_hours.* , users_detail.first_name,users_detail.last_name,users_detail.code FROM total_working_hours AS total_working_hours LEFT JOIN users_detail
		//  			AS users_detail ON users_detail.code = total_working_hours.code ORDER BY total_working_hours.id ";exit();
		$query = $this->db->query("SELECT total_working_hours.* ,users_detail.first_name, users_detail.last_name,users_detail.code FROM total_working_hours AS total_working_hours LEFT JOIN users_detail
 				AS users_detail ON users_detail.code = total_working_hours.code ORDER BY total_working_hours.id Limit $page, $limit  ");

		return $query->result();
	}

	public function total_working1($month, $year, $emp, $limit, $page) {

		$whereeMP   = (!empty($emp))?" AND users_detail.code= $emp":'';
		$whereMonth = (!empty($month))?" AND month(total_working_hours.last_login) = '$month'":'';
		$whereYear  = (!empty($year))?" AND year(total_working_hours.last_login) = $year":'';

		// echo "SELECT total_working_hours.* ,users_detail.first_name, users_detail.last_name,users_detail.code FROM total_working_hours AS total_working_hours LEFT JOIN users_detail
		// 		AS users_detail ON users_detail.code = total_working_hours.code WHERE 1=1 $whereMonth $whereYear $whereeMP ORDER BY total_working_hours.id";exit();

		$query = $this->db->query("SELECT total_working_hours.* ,users_detail.first_name, users_detail.last_name,users_detail.code FROM total_working_hours AS total_working_hours LEFT JOIN users_detail
 				AS users_detail ON users_detail.code = total_working_hours.code WHERE 1=1 $whereMonth $whereYear $whereeMP ORDER BY total_working_hours.id Limit $page,$limit ");

		return $query->result();
	}

	public function total_employee() {
		$query            = $this->db->query('SELECT * FROM users');
		return $total_emp = $query->num_rows();
	}

	public function total_leaves_model() {
		$query = $this->db->query("select sum(days) AS total FROM `taken_leave` where MONTH(from_when) = MONTH(CURRENT_DATE())");
		return $query->result();
	}

	/* query goes here to calculate working Hours of one month */

	public function work_hour($month) {
		$query = $this->db->query("SELECT sum(total_working_second) AS totalWork FROM `total_working_hours` WHERE MONTH(last_login) = MONTH(CURRENT_DATE())");
		// $query = $this->db->query("SELECT TIMESTAMPDIFF(SECOND,last_login, logout_time) AS totalW FROM `total_working_hours` WHERE MONTH(last_login) = MONTH(CURRENT_DATE())");
		//  var_dump($query->result());
		// exit;
		return $query->result();
	}

	/* query goes here for to sum total leave */

	public function sum_leaves() {
		$query = $this->db->query("SELECT sum(days) AS totalD FROM `taken_leave`");
		return $query->result();
	}

	public function week_days() {
		$query = $this->db->query("SELECT sum(working_hours) AS working_hours,date(last_login) AS days FROM total_working_hours WHERE date(last_login) >= ( CURDATE() - INTERVAL 15 DAY ) AND date(last_login)!= date(NOW()) group by date(last_login) order by date(last_login) desc limit 7
");
		// $query = $this->db->query("SELECT date(last_login) AS week_days FROM total_working_hours WHERE date(last_login) >= ( CURDATE() - INTERVAL 15 DAY ) AND date(last_login)!= date(NOW()) group by date(last_login) order by date(last_login) desc limit 7");
		return $query->result();
	}

	/*Query to make upadte in total_working_hours if the employe forgots for timeout*/
	public function updateNottimeOut_byUser() {
		$query = $this->db->query("SELECT last_login, date(last_login) as loginDate, logout_time FROM total_working_hours WHERE DATE(last_login) < DATE(CURRENT_DATE()) AND logout_time = '0000-00-00 00:00:00' limit 10");
		$query = $query->result();
		// var_dump($query);
		// exit;
		if (!empty($query)) {
			foreach ($query as $value) {
				$last_login    = $value->last_login;
				$logout_time   = $value->logout_time;
				$logoutNewTime = $value->loginDate." 20:00:00";
				// var_dump($value);
				// exit;
				$update = $this->db->query("UPDATE total_working_hours SET logout_time = '$logoutNewTime' WHERE logout_time = '$logout_time' AND DATE(last_login) < DATE(CURRENT_DATE()) ");
				// $this->db->query("UPDATE total_working_hours SET working_hours = TIMEDIFF('$logoutNewTime', '$last_login') WHERE DATE(last_login) = DATE($last_login) ");
			}
		}
	}

	/*Query to count total number of rows in total working table*/
	public function total_rowsCount() {
		return $this->db->count_all("total_working_hours");
	}
}
