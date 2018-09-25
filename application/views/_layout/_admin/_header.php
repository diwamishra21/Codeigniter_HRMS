    <?php
    //$this->load->library('notification');
    $count        = $this->notification->notification_count();
    $notice_count = $this->notification->notice_notification();
    ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/code/highcharts.js" ></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/code/themes/gray.js"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="<?php echo base_url('admin/home');?>">
                    <img src="<?php echo base_url();?>assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" / style="height:50px; margin-top: -0%" id="image"> </a>
                    <p id="text" style="color:#81d2e0;"> &nbsp;
     HRMS</p>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="icon-bell"></i>
                            <span class="badge badge-default"><?php
    $userData    = array('data' => $this->auth->formatted_userdata('user_admin'));
    $access_type = $userData['data']->access_type;
    if ($access_type == 'super admin') {
    	echo $count;
    } else {
    	echo $notice_count;
    }
    ?></span>


                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>
                                    <span class="bold"><?php
    $userData    = array('data' => $this->auth->formatted_userdata('user_admin'));
    $access_type = $userData['data']->access_type;
    if ($access_type == 'super admin') {
    	echo $count;
    	?> pending</span> notifications</h3>
    								                                <a href="<?php echo base_url('admin/home/edit_profile_approval');?>">view all</a>
    								                            </li>
    								                            <li>
    								                                <!--                                <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
    								                                                                    <li>
    								                                                                        <a href="">
    								                                                                            <span class="time">just now</span>
    								                                                                            <span class="details">
    								                                                                                <span class="label label-sm label-icon label-success">
    								                                                                                    <i class="fa fa-plus"></i>
    								                                                                                </span> New user registered. </span>
    								                                                                        </a>
    								                                                                    </li>
    								                                                                    <li>
    								                                                                        <a href="javascript:;">
    								                                                                            <span class="time">3 mins</span>
    								                                                                            <span class="details">
    								                                                                                <span class="label label-sm label-icon label-danger">
    								                                                                                    <i class="fa fa-bolt"></i>
    								                                                                                </span> Server #12 overloaded. </span>
    								                                                                        </a>
    								                                                                    </li>
    								                                                                </ul>-->
    								                            </li>
    	<?php } else {?>
    								                            <a href="<?php echo base_url('admin/home/notice_board');?>">See New Notice</a>
    	<?php }
    ?>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" height="30" width="30" src="<?php echo base_url('uploads').'/admin/users/'.$userdata->image_name;?>"/>
                            <span class="username username-hide-on-mobile"> <?php echo $userdata->email_id;?> </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="<?php echo base_url('admin/profile');?>">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <!--                            <li>
                                                            <a href="app_calendar.html">
                                                                <i class="icon-calendar"></i> My Calendar </a>
                                                        </li>-->
                            <li>
                                <a href="<?php echo base_url('admin/logout');?>">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
