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
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-users font-dark"></i>
            <span class="caption-subject font-dark bold uppercase">Notice Board</span></div>  

        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
        </div>
    </div>

    <!-- BEGIN SAMPLE TABLE PORTLET-->

    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-striped table-bordered table-advance table-hover">
                <thead>
                    <tr>
                        <th>
                            <i class="fa fa-briefcase"></i> Title </th>
                        <th class="hidden-xs">
                            <i class="fa fa-envelope"></i> Description </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($notice as $value) {
                        
                    }
                    ?>
                    <tr>
                        <td>
                            <?php echo $value->title; ?>
                        </td>

                        <td>
                            <?php
                    echo nl2br($value->description);
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>