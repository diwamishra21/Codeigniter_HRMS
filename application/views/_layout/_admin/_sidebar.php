<!-- BEGIN SIDEBAR -->
<?php //$reports = $this->notification->fetch_month_report();     ?>
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="nav-item start">
                <a href="<?php echo base_url("admin/home"); ?>" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>

            </li>
            <?php
            $userData = array('data' => $this->auth->formatted_userdata('user_admin'));
            $access_type = $userData['data']->access_type;
            if ($access_type == 'super admin') {
                ?>

                <li class="nav-item start">
                    <a href="<?php echo base_url('admin/home/emp_list'); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-users"></i>
                        <span class="title">Employees</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>

                <li class="nav-item start">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-list"></i>
                        <span class="title">Presence Reports</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item start">
                            <a href="<?php echo base_url('admin/home/attendance_report'); ?>" class="nav-link ">
                                <i class="icon-list"></i>
                                <span class="title">Todays Report</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <!-- <li class="nav-item start">
                            <a href="<?php echo base_url('admin/home/full_report'); ?>" class="nav-link ">
                                <i class="fa fa-list"></i>
                                <span class="title">Full Report</span>
                                <span class="selected"></span>
                            </a>
                        </li> -->
                        <li class="nav-item start">
                            <a href="<?php echo base_url('admin/home/month_report'); ?>" class="nav-link ">
                                <i class="fa fa-list"></i>
                                <span class="title">Month Wise Report</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            <li class="nav-item start">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-eject"></i>
                    <span class="title">Leave</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">

                    <?php
                    $userData = array('data' => $this->auth->formatted_userdata('user_admin'));
                    $access_type = $userData['data']->access_type;
                    if ($access_type != 'super admin') {
                        ?>

                        <li class="nav-item start">
                            <a href="<?php echo base_url('admin/home/leave_apply'); ?>" class="nav-link ">
                                <i class="icon-list"></i>
                                <span class="title">Apply For Leave</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item start">
                            <a href="<?php echo base_url('admin/home/view_leave'); ?>" class="nav-link ">
                                <i class="fa fa-list"></i>
                                <span class="title">View My Leaves</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php
                    $userData = array('data' => $this->auth->formatted_userdata('user_admin'));
                    $access_type = $userData['data']->access_type;
                    if ($access_type == 'super admin') {
                        ?>
                        <li class="nav-item start">
                            <a href="<?php echo base_url('admin/home/employees_leaves'); ?>" class="nav-link ">
                                <i class="fa fa-list"></i>
                                <span class="title">View Employees Leaves</span>
                                <span class="selected"></span>
                            </a>
                        </li>

<?php } ?>

                </ul>
            </li>
            <li class="nav-item start">
                <a href="<?php echo base_url("admin/home/notice_board"); ?>" class="nav-link nav-toggle">
                    <i class="icon-note"></i>
                    <span class="title">Notice Board</span>
                    <span class="selected"></span>
                </a>

            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
