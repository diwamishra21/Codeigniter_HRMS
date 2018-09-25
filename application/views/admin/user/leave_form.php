    <div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?php echo base_url("admin/home"); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Leave</span>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="row">
        <div class="col-md-12">
            <!-- <?php //echo base_url('admin/home/leave_apply'); ?> -->
            <form action="" id="leave_form" class="form-horizontal" method="post">
                <div class="form-body">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-dark bold uppercase">Leave</span>
                            </div>
                        </div>
                    </div>
 <?php
                           
                           
                             // var_dump($userData);
                               // $aa=$userData['email_id'];
                               // $aa=  $this->userData['email_id']
                               // print_r($userData);
                                foreach ($userData as $key ) {
                                    # code...
                                    // var_dump($key->e_code);exit(); 
                               
                                           
                                       ?>

                    <div class="form-group ">
                        <label for="leave_type" class="control-label col-md-3">Leave Type
                            <span class="required"> * </span></label>
                        <div class="col-md-4">
                            <select class="form-control" name="leave_type">
                                <option value="">Select Leave Type</option>
                                <?php foreach ($leave as $leaves) {



                                 ?>
                                    <option value="<?php echo $leaves->leave_name; ?>" <?php if($leaves->leave_name == $key->leave_type) {?> selected = "selected"; <?php }?>><?php echo $leaves->leave_name; ?></option>
                                <?php }

                                // echo $leaves->leave_name;
                                    echo $key->leave_type; ?>
                             

                                </select>


                            </div>
                        </div>
                        <div class="form-group">

                          

                            <label class="control-label col-md-3">Employee Code
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="e_code" value="<?php echo  $key->e_code; ?>" placeholder="Employee Code" id="e_code" data-required="1" class="form-control" readonly="" /> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email ID
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="email_id" value="<?php echo  $key->email_id; ?>" placeholder="Email ID" data-required="1" class="form-control" readonly="" /> </div>
                        </div>
                   
                    <div class="form-group">
                        <label class="control-label col-md-3">From When
                            <span class="required"> * </span></label>
                        <div class="col-md-4">
                            <!--<div class="input-group input-medium date" data-date-format="yyyy-mm-dd" data-date-viewmode="years">-->
                            <input type="text" name="from_when" id="from_when" value="<?php echo $key->from_when; ?>" data-date-format="yyyy-mm-dd" class="form-control">
                            <span class="input-group-btn">
                                <!--                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>-->
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Till When
                            <span class="required"> * </span></label>
                        <div class="col-md-4">
                            <!--<div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-viewmode="years">-->
                            <input type="text" name="till_when" value="<?php echo $key->till_when; ?>" id="till_when" data-date-format="yyyy-mm-dd" class="form-control">
                            <span class="input-group-btn">
                                <!--                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>-->
                            </span>
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Reason For Leave
                            <span class="required"> * </span></label>
                        <div class="col-md-4">
                            <textarea rows="4" cols="50" name="reason"><?php echo $key->reason; ?></textarea>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                           
                            <button type="submit"  id="register-submit-btn" class="btn green">Apply</button>

                                 
                            <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

