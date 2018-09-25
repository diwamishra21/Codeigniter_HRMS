<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?php echo base_url("admin/home"); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Notice</span>
        </li>
    </ul>
</div>
<?php
$userData = array('data' => $this->auth->formatted_userdata('user_admin'));
$access_type = $userData['data']->access_type;
if ($access_type == 'super admin') {
    ?>
    <div><a style="float: right;" class="btn btn-primary" href="<?php echo base_url('admin/Home/add_notice'); ?>">Add New Notice</a></div>
<?php } ?>

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">

            <i class="icon-users font-dark"></i>
            <span class="caption-subject font-dark bold uppercase">Notice Board</span></div>  

        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
        </div>

    </div>

    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>

                        <th>Title</th>
                        <th>Description</th>
                        <th>On Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($notice as $list) {
                        $applied_date = date("d-M-Y", strtotime($list->on_date));
                        ?>
                        <tr class="danger">

                            <td><?php echo $list->title; ?></td>
                            <td><?php echo $list->description; ?></td>
                            <td><?php echo $applied_date; ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/home/view_notice/' . $list->id); ?>" class="btn dark btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-share"></i> Read </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>