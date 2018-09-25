<form action="<?php echo base_url('admin/home/fetch_report/'); ?>" id="full_report" method="post">
    <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_ajax">
        <thead>
            <tr role="row" class="heading">

                <th width="20%">Employees </th>
                <th width="20%">Start Date</th>
                <th width="20%">Last Date</th>
                <th width="20%"> Actions </th>
            </tr>
            <tr role="row" class="filter">
                <td>
                    <div class="form-group" id="abc">
                        <select name="employee" id="employee" class="form-control">
                            <option value="">Employee Name</option>
                            <?php foreach ($employee as $emp) { ?>
                                <option value="<?php echo $emp->email_id; ?>"><?php echo $emp->email_id; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div> 
                </td>

                <td>
                    <div class="input-group date date-picker margin-bottom-5" id="date_from" data-date-format="yyyy-mm-dd">
                        <input type="text" class="form-control form-filter input-sm" readonly name="date_from" placeholder="From">
                        <span class="input-group-btn">
                            <button class="btn btn-sm default" type="button">
                                <i class="fa fa-calendar"></i>
                            </button>
                        </span>
                    </div>
                </td>
                <td>
                    <div class="input-group date date-picker" id="date_to" data-date-format="yyyy-mm-dd">
                        <input type="text" class="form-control form-filter input-sm" readonly name="date_to" placeholder="To">
                        <span class="input-group-btn">
                            <button class="btn btn-sm default" type="button">
                                <i class="fa fa-calendar"></i>
                            </button>
                        </span>
                    </div>
                </td>

                <td>
                    <div class="margin-bottom-5">
                        <a href="<?php echo base_url('admin/home/fetch_full_report/'); ?>"><button class="btn btn-sm green btn-outline filter-submit margin-bottom" name="search">
                                <i class="fa fa-search"></i> Search</button></a>
                        <button class="btn btn-sm red btn-outline filter-cancel">
                            <i class="fa fa-times"></i> Reset</button>
                    </div>

                </td>
            </tr>
        </thead>
    </table>
</form>