<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-users font-dark"></i>
            <span class="caption-subject font-dark bold uppercase">Full Attendance Reports</span></div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                    <tr>
                        <th>Employee Code</th>
                        <th> Email ID </th>
                        <th> Login Time</th>
                        <th> Logout Time </th>
                        <th> Actions </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($report as $list) { ?>
                        <tr class="odd gradeX">
                            <td><?php echo $list->code; ?></td>
                            <td>
                                <?php echo $list->email_id; ?>
                            </td>
                            <td>
                                <?php echo $list->last_login; ?>
                            </td>
                            <td class="center">  <?php echo $list->logout_time; ?> </td>
                            <td>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

