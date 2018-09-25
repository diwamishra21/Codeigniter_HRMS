<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-users font-dark"></i>
            <span class="caption-subject font-dark bold uppercase">Pending Requests</span></div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
        </div>
    </div>
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <div class="table-responsive">
                    <table class="table">
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
                                    <td><a href="<?php echo base_url('admin/home/update_edit_profile_on_request/' . $value->code); ?>"><button id="submit" name="submit" class="submit btn btn-success" type="submit">Approve</button></a>
                                        <a href="<?php echo base_url('admin/Home/request_reject/' . $value->code); ?>"><button id="submit" name="submit" class="submit btn btn-danger" type="submit">Reject</button></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>