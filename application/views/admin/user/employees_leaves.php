<!-- BEGIN SAMPLE TABLE PORTLET-->


<form action="  <?php echo base_url('admin/home/leave_detail/');?>" id="full_report" method="post">
	<table class="table table-striped table-bordered table-hover table-checkable" id="datatable_ajax">
		<thead>

			<tr role="row" class="heading">

				<th width="20%">Employees </th>
				<th width="20%">Month</th>
				<th width="20%">Year</th>
				<th width="20%">Leave Status</th>


				<th width="20%"> Actions </th>
			</tr>
			<tr role="row" class="filter">
				<td>
					<div class="form-group" id="abc">
						<select name="employee" id="employee" data-required="1" class="form-control">
							<option value="0">Select Employee Name</option>

<?php foreach ($emp_name as $emp) {

	$f_name = $emp->first_name;
	$l_name = $emp->last_name;
	$name   = $f_name." ".$l_name;

	?>
										<option value="<?php echo $emp->code;?>" <?php if ($emp->code == $_post['employee']) {?> selected= "selected" <?php }?> > <?php echo $name;
	?></option>
	<?php
}

?>
</select>
						</div>

						<td>


							<div class="form-group" id="abc">
								<select name="month" data-required="1" id="month" class="form-control">
									<option value="">    Select Month    </option>
									<option value="01"   >January        </option>
									<option value="02"   >February       </option>
									<option value="03"   >March          </option>
									<option value="04"   >April          </option>
									<option value="05"   >May            </option>
									<option value="06"   >June           </option>
									<option value="07"   >July           </option>
									<option value="08"   >August         </option>
									<option value="09"   >September      </option>
									<option value="10"   >October        </option>
									<option value="11"   >November       </option>
									<option value="12"   >December       </option>

								</select>


							</div>
						</td>

						<td>
							<div class="form-group" id="abc">
								<select name="year" data-required="1"  id="year" class="form-control">
									<option value="">Select Year</option>
<?php
for ($i = 2016; $i < date("Y")+1; $i++) {
	echo '<option value="'.$i.'">'.$i.'</option>';
}
?>

								</select>


							</div>
						</td>

						<td>


							<div class="form-group" id="abc">
								<select name="leave_status" data-required="1" id="leave_status" class="form-control">
									<option value="">    Select Status    </option>
									<option value="1"   >Approved        </option>
									<option value="2"   >Rejected       </option>
									<option value="0"   >Pending       </option>

								</select>


							</div>
						</td>



						<td>
							<div class="margin-bottom-5">
								<a href="<?php echo base_url('admin/home/leave_detail/');?>"><button class="btn btn-sm green btn-outline filter-submit margin-bottom" name="search">


									<i class="fa fa-search"></i> Search</button></a>
									<!-- <button class="btn btn-sm red btn-outline filter-cancel"> -->
									<!--   <i class="fa fa-times"></i> Reset</button> -->
								</div>

							</td>
						</tr>
					</thead>
				</table>
			</form>


			<div class="portlet box green">
				<div class="portlet-title">

					<div class="caption">
						<i class="icon-users font-dark"></i>
						<span class="caption-subject font-dark bold uppercase">View Employees Leaves List</span></div>

						<div class="tools">
							<a href="javascript:;" class="collapse"> </a>
						</div>

					</div>

					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-striped table-hover">
								<thead>
									<tr>

										<th>S.no.</th>
										<th>Employee Name</th>
										<!-- <th>Leave Type</th> -->
										<th>From When</th>
										<th>Till When</th>

										<!-- <th>Days</th> -->
										<th>Reason</th>
										<th>Applied Date</th>
										<th>Total leave </th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

<?php

if ($empleave && count($empleave)>0) {
	$i = 1;
	foreach ($empleave as $list) {
		$days = $list->days;
		// $date  = explode('-', $a, 6);
		// $year  = $date[0];
		// $month = $date[1];

		// "<pre>".var_dump($year)."</pre>".'<br>';
		// exit();

		// "<pre>".var_dump($year."  ".$month)."</pre>";
		// exit();

		$from = date("d M", strtotime($list->from_when));
		$till = date("d M", strtotime($list->till_when));
		$date = $list->apply_date;
		// $dd=(explode( " ", $date));
		$applied_date = date("d M", strtotime($date));
		?>
		<tr>

		<?php
		$f_name = $list->first_name;
		$l_name = $list->last_name;

		?>

							<!-- empname -->
							<td><?php echo $i++;?></td>

							<td> <?php echo $f_name." ".$l_name;?></td>

							<!-- <td> <?php echo $list->leave_type;?></td> -->
							<td><?php echo $from;?></td>
							<td><?php echo $till;?></td>
							<!-- <td><?php// echo $days; ?></td> -->

							<td style="width: 180px; height: 20px;"><?php echo $list->reason;
		?></td>
								<td><?php echo $applied_date;?></td>
								<td><?php echo $days.' '.Days?></td>

								<td>


									<a href=" <?php echo base_url('admin/home/reject_leave/'.$list->id);?> " onclick="return confirm('Are you sure you want to delete this item?');" class="glyphicon glyphicon-remove "  ></a>

									<a href=" <?php echo base_url('admin/home/approved_leave/'.$list->id);?>" class="glyphicon glyphicon-thumbs-up"  ></a>


									<a href= " <?php echo base_url('admin/home/update_leave_apply/'.$list->id);?>" class=" glyphicon glyphicon-check"  ></a>
								</td>
							</tr>
		<?php }} else {

	$i = 1;
	foreach ($data as $key) {
		// $a = $key->from_when;
		// $b = $key->till_when;
		//
		// $days = (strtotime($b)-strtotime($a))/(60*60*24);

		$date  = explode('-', $a, 6);
		$year  = $date[0];
		$month = $date[1];

		$from         = date("d M", strtotime($key->from_when));
		$till         = date("d M", strtotime($key->till_when));
		$applied_date = date("d M", strtotime($key->apply_date));
		$abb          = explode('-', $applied_date);
		$fdd          = $abb[0];
		// var_dump($abb);

		// /**
		// calulating number of days of leave taken
		//  **/
		// $timeDiff   = abs(strtotime($b)-strtotime($a));
		// $numberDays = $timeDiff/86400;
		// if ($numberDays == 0 || $numberDays > 0) {
		// 	$totalDays = $numberDays+1;
		// }
		// /**
		// End of calculation
		//  **/

		?>
		<tr>

		<?php
		$f_name = $key->first_name;
		$l_name = $key->last_name;

		?>

							<!-- empname -->
							<td><?php echo $i++;?></td>

							<td> <?php echo $f_name." ".$l_name;?></td>


							<!-- <td> <?php echo $list->leave_type;?></td> -->

							<td><?php echo $from;?></td>
							<td><?php echo $till;?></td>


							<!-- <td><?php// echo $days; ?></td> -->

							<td style="width: 180px; height: 20px;"><?php echo stripslashes($key->reason);
		?></td>
								<td><?php echo $fdd;?></td>
								<td><?php echo $key->days.' '.Days;?></td>

								<td>


									<a href=" <?php echo base_url('admin/home/reject_leave/'.$key->id);?> " onclick="return confirm('Are you sure you want to delete this item?');" class="glyphicon glyphicon-remove "  ></a>

									<a href=" <?php echo base_url('admin/home/approved_leave/'.$key->id);?>" class="glyphicon glyphicon-thumbs-up"  ></a>


									<a href= " <?php echo base_url('admin/home/update_leave_apply/'.$key->id);?>"  class=" glyphicon glyphicon-check"  ></a>
								</td>


		<?php
	}

}
?>
</tbody>
</table>
</div>
<div style="background-color:#088da5;height:40px;"><span style="color:#f7f7f7;font-size:30px;font-style:bold;margin-left:10px;">TOTAL LEAVES:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f7f7f7;font-size:30px;font-style:bold;"><?php echo $leave." ".Days;?></span</div>

</div>
