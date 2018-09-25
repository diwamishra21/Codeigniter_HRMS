<link href="<?php echo base_url(); ?>assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?php echo base_url("admin/home"); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Profile</span>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <?php echo $msg; ?>
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="<?php echo $user_details['userAvatar']; ?>" class="img-responsive" alt=""> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"><?php echo (!empty($data->name)) ? $data->email_id : ''; ?></div>
                    <div class="profile-usertitle-job"></div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                    <button type="button" class="btn btn-circle red btn-sm">Message</button>

                </div>&nbsp;
                &nbsp;
                <div>
                    <center><a href="<?php echo base_url('admin/home/timeout'); ?>"><button type="button" class="btn btn-circle btn-warning">Timeout</button></a></center>
                </div>
                <!-- END SIDEBAR BUTTONS -->


            </div>
            <!-- END PORTLET MAIN -->


        </div>
        <?php
        $userData = array('data' => $this->auth->formatted_userdata('user_admin'));
        $access_type = $userData['data']->access_type;
        if (!($access_type == 'super admin')) {
            foreach ($status as $value) {
                if (!empty($value) && $value[0]->status == '0') {
                    ?> 
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-circle green btn-sm">Wait For Approval</button>
                    </div>
                    <div class="row">
                    <?php } elseif (!empty($value) && $value[0]->status == '1') {
                        ?><div class="profile-userbuttons">
                            <button type="button" class="btn btn-circle green btn-sm">Approved</button>
                        </div>                       
                        <?php
                    } else {
                        
                    }
                    ?>

                <?php }
                ?> 
            <?php } ?>
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">

                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <form role="form" action="<?php echo base_url('admin/home/profile'); ?>" method="POST">
                                            <?php
                                            if (isset($detail)) {
                                                foreach ($detail as $user_list) {
                                                    //var_dump($user_list);exit;
                                                    ?>
                                                    <div class="form-group">
                                                        <label class="control-label">First Name</label>
                                                        <input name="first_name" type="text" placeholder="First Name" value="<?php echo (!empty($user_list->first_name)) ? $user_list->first_name : ''; ?>" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Last Name</label>
                                                        <input name="last_name" type="text" placeholder="Last Name" value="<?php echo (!empty($user_list->last_name)) ? $user_list->last_name : ''; ?>" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Contact Number</label>
                                                        <input name="contact" type="text" placeholder="Mobile No." value="<?php echo (!empty($user_list->contact)) ? $user_list->contact : ''; ?>" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Address</label>
                                                        <input name="address" type="text" placeholder="Address" value="<?php echo (!empty($user_list->address)) ? $user_list->address : ''; ?>" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">City</label>
                                                        <input name="city" type="text" placeholder="City" value="<?php echo (!empty($user_list->city)) ? $user_list->city : ''; ?>" class="form-control" /> </div>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <!--                                        <div class="form-group">
                                                                                        <label class="control-label">About</label>
                                                                                        <textarea name="about" class="form-control" rows="3" placeholder="Tell something about self !!!"><?php //echo (!empty($data->about)) ? $data->about : '';          ?></textarea>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Website Url</label>
                                                                                        <input name="website" type="text" placeholder="<?php //echo (!empty($data->website)) ? $data->website : 'http://www.example.com';          ?>" value="<?php //echo (!empty($data->website)) ? $data->website : '';          ?>" class="form-control" /> </div>-->
                                            <div class="margiv-top-10">
                                                <button name="submit" type="submit" class="btn green">Save Changes</button>
                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END PERSONAL INFO TAB -->
                                    <!-- CHANGE AVATAR TAB -->
                                    <div class="tab-pane" id="tab_1_2">
                                        <form role="form" action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="<?php echo $user_details['userAvatar']; ?>" alt="" /> </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                    <div>
                                                        <span class="btn default btn-file">
                                                            <span class="fileinput-new"> Select image </span>
                                                            <span class="fileinput-exists"> Change </span>
                                                            <input type="file" name="avatar_admin"> </span>
                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                    </div>
                                                </div>
                                                <div class="clearfix margin-top-10">
                                                    <span class="label label-danger">NOTE! &nbsp;</span>
                                                    <span class="bold">Upload only image files (gif|jpg|png|jpeg|bmp) and upto 2 MB in size</span>
                                                </div>
                                            </div>
                                            <div class="margin-top-10">
                                                <button name="submit" type="submit" class="btn green">Save Changes</button>
                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END CHANGE AVATAR TAB -->
                                    <!-- CHANGE PASSWORD TAB -->
                                    <div class="tab-pane" id="tab_1_3">
                                        <form role="form" action="<?php echo base_url('admin/home/profile'); ?>" method="POST">
                                             <div class="form-group">
                                                <label class="control-label">Old Password</label>
                                                <input name="oldpass" type="password" class="form-control" /> </div>
                                            <div class="form-group">
                                                <label class="control-label">New Password</label>
                                                <input name="pass" type="password" class="form-control" /> </div>
                                            <div class="form-group">
                                                <label class="control-label">Re-type New Password</label>
                                                <input name="conf_pass" type="password" class="form-control" /> </div>
                                            <div class="margin-top-10">
                                                <button name="submit" type="submit" class="btn green">Save Changes</button>
                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END CHANGE PASSWORD TAB -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>