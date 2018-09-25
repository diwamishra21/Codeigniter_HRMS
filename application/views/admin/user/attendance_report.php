<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-users font-dark"></i>
            <span class="caption-subject font-dark bold uppercase">Attendance Reports</span></div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Employee Code</th>
                        <th>IP Address</th>
                        <th>Login Time</th>
                        <th>Logout Time</th>
                        <th>Last Working Hours</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($report_data as $report_list) {
                        $logindata = date("Y-m-d", strtotime($report_list->last_login));
                        $logoutData = date("Y-m-d", strtotime($report_list->logout_time));
                        $today = date("Y-m-d");

                        //var_dump($report_list->last_login);exit;
                        $date1 = date_create($report_list->last_login);
                        $date2 = date_create($report_list->logout_time);
                        $now = date_create(date('Y-m-d h:i:s'));
                        $interval = $date1->diff($now);
                        $interval->format('%H:%i:%s');
                        ?>
                        <tr>
                            <td><?php
                                echo $report_list->first_name;
                                '.'
                                ?>  <?php echo $report_list->last_name; ?></td>
                            <td><?php echo $report_list->e_code; ?></td>
                            <td><?php echo $report_list->ip_address; ?></td>
                            <td><?php
                                if ($today == $logindata) {
                                    echo date("d M H:i", strtotime($report_list->last_login));
                                } else {
                                    echo "Not logged-in yet";
                                }
                                ?></td>
                            <td><?php
                                if ($today == $logoutData) {
                                    echo date("d M H:i", strtotime($report_list->logout_time));
                                } else {
                                    echo "Still not timed out";
                                }
                                ?></td>
                            <td>
                                <?php
                                if ($today == $logindata) {
                                    $arrTimeInterval = explode(':', $interval->format('%H:%i'));
                                    echo ($arrTimeInterval[0] != "00") ? ($arrTimeInterval[0] . " h" . " " . $arrTimeInterval[1] . " m") : $arrTimeInterval[1] . " m";
                                } else {
                                    echo 'NA';
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--END SAMPLE TABLE PORTLET-->
