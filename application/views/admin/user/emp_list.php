<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-users font-dark"></i>
            <span class="caption-subject font-dark bold uppercase">Employees List</span></div>

        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
        </div>
        <div><a style="float: right;" class="btn btn-primary" href="<?php echo base_url('admin/Home/add_user');?>">Add Employee</a></div>
    </div>
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Employee Name</th>
                        <th>Employee Code</th>
                        <th>IP Address</th>
                        <th>Access Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
<?php
foreach ($data_list as $list) {
   $f_name=$list->first_name;
   $l_name=$list->last_name;
   $e_name=$f_name." ". $l_name;
	?>
	                        <tr>
	                            <td><?php echo $list->code;?> </td>
	                            <td><?php echo $e_name;?></td>
	                            <td><?php echo $list->e_code;?></td>
	                            <td><?php echo $list->ip_address;?></td>
	                            <td><?php echo $list->access_type;?></td>
	                            <td>
	                                <a class="btn btn-primary" href="<?php echo base_url('admin/Home/edit_user_by_admin/'.$list->code);?>"><i class="glyphicon glyphicon-pencil"></i></a>
	                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Employee?');" data-confirm=""  href="<?php echo base_url('admin/Home/delete_employee/'.$list->code);?>"><i class="glyphicon glyphicon-remove"></i></a>
	                            </td>
	                        </tr>
	<?php }?>
</tbody>
            </table>
        </div>
    </div>
