 
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
<div class="portlet">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo base_url('admin/home/add_notice'); ?>" id="add_notice" name="add_notice" class="form-horizontal" method="post">
                <div class="form-body">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-dark bold uppercase">Notice</span>
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="form-group">
                                            <label class="control-label col-md-2">Editor 1</label>
                                            <div class="col-md-10">
                                                <textarea class="wysihtml5 form-control" rows="6"></textarea>
                                            </div>
                                        </div>-->
                    <div class="form-group">
                        <label class="control-label col-md-3">Title
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-8">
                            <input type="text" name="title" value="" placeholder="Title" id="title" data-required="1" class="form-control" /> </div>
                    </div>  
                    <div class="form-group">
                        <label class="control-label col-md-3">Description</label>
                        <div class="col-md-8">
                            <textarea name="description" id="description" data-provide="markdown" rows="10" data-error-container="#editor_error"></textarea>
                            <div id="editor_error"> </div>
                        </div>
                    </div>

                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" id="register-submit-btn" class="btn green">Apply</button>
                            <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>