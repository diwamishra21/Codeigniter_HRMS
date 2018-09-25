<?php

class Notification {

    public $CI;

    public function __construct() {
        $this->CI = &get_instance();
        $this->CI->load->model('admin/User_Model');
    }

    public function notification_count() {
        $row_count = $this->CI->User_Model->notification_count_model();
        return $access['count'] = $row_count['count(*)'];
    }

    public function notice_notification() {
        $userData = array('data' => $this->CI->auth->formatted_userdata('user_admin'));
        $id = $userData['data']->id;
        $notice_count = $this->CI->User_Model->notice_notification_count_model($id);
        return $notice['count'] = $notice_count['count(*)'];
    }

    public function fetch_month_report_lib($report_list) {
        //var_dump($report_list);exit;
        if (!empty($report_list)) {
                $exploded = explode(":", $report_list);
                //var_dump($exploded);exit;
                $hours = $exploded[0];
                $mins = $exploded[1];
                return $arrData = array('hours' => $hours, 'min' => $mins);
                 //var_dump($arrData);exit;
            
        }
    }

}

?>
