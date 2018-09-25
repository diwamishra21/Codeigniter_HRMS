<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-comments"></i>Pending Tasks</div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
            <a href="javascript:;" class="reload"> </a>
            <a href="javascript:;" class="remove"> </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-striped table-hover">
                <thead>

                    <tr>
                        <th><i class="icon_profile"></i>Code</th>
                        <th><i class="icon_profile"></i>First Name</th>
                        <th><i class="icon_profile"></i>Last Name</th>
                        <th><i class="icon_contacts"></i>Contact</th>
                        <th><i class="icon_house"></i>Address</th>
                        <th><i class="icon_cogs"></i>City</th>
                        <th><i class="icon_cogs"></i>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($updateDetails as $value) { ?>
                        <tr>
                            <td><?php echo $value->code; ?></td>
                            <td><?php echo $value->first_name; ?></td>
                            <td><?php echo $value->last_name; ?></td>
                            <td><?php echo $value->contact; ?></td>
                            <td><?php echo $value->address; ?></td>
                            <td><?php echo $value->city; ?></td>
                            <td><a href="<?php echo base_url('admin_controller/update_edit_profile_on_request/' . $value->code); ?>"><button id="submit" name="submit" class="submit btn btn-success" type="submit">Approve</button></a>
                                <a href="<?php //echo base_url('admin_controller/update_edit_profile_by_super_admin/' . $value->code);   ?>">    <button id="submit" name="submit" class="submit btn btn-danger" type="submit">Cancel</button></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END SAMPLE TABLE PORTLET-->