<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-users font-dark"></i>
            <span class="caption-subject font-dark bold uppercase">My Leaves List</span></div>

        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
        </div>

    </div>

    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Email Id</th>
                        <th>Leave Type</th>
                        <th>From When</th>
                        <th>Till When</th>
                        <th>Days</th>
                        <th>Reason</th>
                        <th>Applied Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($viewleave as $list) {
                        $days = $list->days;
                        $from = date("d-M-Y", strtotime($list->from_when));
                        $till = date("d-M-Y", strtotime($list->till_when));
                        $applied_date = date("d-M-Y", strtotime($list->apply_date));
                        ?>
                        <tr>
                            <td><?php echo $list->email_id; ?> </td>
                            <td><?php echo $list->leave_type; ?></td>
                            <td><?php echo $from; ?></td>
                            <td><?php echo $till; ?></td>
                            <td><?php echo $days; ?></td>
                            <td><?php echo $list->reason; ?></td>
                            <td><?php echo $applied_date; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
