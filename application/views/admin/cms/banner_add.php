<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="portlet-body">
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">Add New Banner For Home Page</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <form action="" method="post" id="banner_form" enctype="multipart/form-data">
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <div class="form-group" id="errors2"></div>
                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="name" id="form_control_1">
                                <label for="form_control_1">Banner Name</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" name="memo" rows="3"></textarea>
                                <label for="form_control_1">Banner Description <small>(Show with banner image on home page)</small></label>
                                <span class="help-block">Some help goes here...</span>
                            </div>
                            <div class="form-group">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div data-container="body" data-trigger="hover" data-placement="right"  data-content="Please select image with 1300 X 500!" data-original-title="Image Notice" class="fileinput-new thumbnail popovers" style="width: 500px; height: 200px;">
                                        <img src="<?php echo base_url() . 'assets/img/no-image_big.png'; ?>" alt="" /> </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail popovers" style="max-width: 500px; max-height: 200px;" data-container="body" data-trigger="hover" data-placement="right" data-content="Please select image with 1300 X 500!" data-original-title="Image Notice"> </div>
                                    <div>
                                        <span class="btn default btn-file">
                                            <span class="fileinput-new"> Select Banner Image </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file" name="files"> </span>
                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                    </div>
                                </div>
                                <div class="clearfix margin-top-10">
                                    <span class="label label-danger">NOTE! </span>
                                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn dark">Submit</button>
                                <button type="reset" class="btn default">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END CONTENT BODY -->

            <!-- END FORM-->
        </div>
    </div>
    <!-- END VALIDATION STATES-->
</div>