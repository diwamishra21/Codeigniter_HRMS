<!-- BEGIN SAMPLE TABLE PORTLET-->
<?php
// foreach($get_details as $key){
//   $date = $key->working_hours;
// }
?>

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <span class="caption-subject font-dark bold uppercase">Month Wise Report</span>
        </div>
    </div>
</div>

<!--END SAMPLE TABLE PORTLET-->
<!-- add on 11 nov2016 at 12 pm- -->
<form action="<?php echo base_url("admin/home/month_report/");?>" id="full_report" method="post">
    <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_ajax">
        <thead>
            <tr role="row" class="heading">
                <th width="20%">Employees </th>
                <th width="20%">Month</th>
                <th width="20%">Year</th>
                <th width="20%"> Actions </th>
            </tr>
            <tr role="row" class="filter">
                <td>
                    <div class="form-group" id="abc">

                        <select name="employee" id="employee" data-required="1" class="form-control">
                            <option value="0">Select Employee Name</option>
<?php //var_dump($_post['employee']);
// exit();
?>

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
       <option value="0"  >Select Month</option>
<?php foreach ($month as $months) {
	// var_dump($months);
	?>
	           <option value="<?php echo $months->id;?>" ><?php echo $months->month;
	?></option>
	<?php }
?>
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
    <div class="margin-bottom-5">
       <button type="submit" class="btn btn-sm green btn-outline filter-submit margin-bottom" name="search">
        <i class="fa fa-search"></i> Search</button></a>
        <!-- <button class="btn btn-sm red btn-outline filter-cancel"> -->
        <!--   <i class="fa fa-times"></i> Reset</button> -->
    </div>
</td>
</tr>
</thead>

</table>

</form>

<!-- on 11 nov2016 at 12:30 -->

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-users font-dark"></i>
            <span class="caption-subject font-dark bold uppercase">View Employees Working Hours List</span>
          </div>
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
                           <th>Date </th>
                           <th>Login Hours</th>
                           <th>Logout</th>
                           <th>Total Working Hours</th>
                       </tr>
                   </thead>
                   <tbody>

<?php

// var_dump($get_data);
// exit();

if ($get_details) {

	$i = 1;
	foreach ($get_details as $key) {

		$f_name = $key->first_name;
		$l_name = $key->last_name;
		$name   = $f_name." ".$l_name;

    $datev = $key->working_hours;
    $hour = date("h",strtotime($datev));
    $min  = date("i",strtotime($datev));
    $time = $hour." hrs ".$min." min ";

    $from = date("h:m:s", strtotime($key->last_login));
		$till = date("h:m:s", strtotime($key->logout_time));
		$date = date("Y-m-d", strtotime($key->last_login));
		?>

		                          <tr>
		                            <!-- empname -->
		                            <td><?php echo $i++;?></td>
		                            <td> <?php echo $name;?></td>
		                            <td><?php echo $date;?></td>
		                            <td><?php echo $from;?></td>
		                            <td><?php echo $till;?></td>
		                            <td><?php echo $time;?></td>
                                </tr>

		<?php

	}
} else {

	$i = $page;
  $i = $i+1;
  // var_dump($i);exit;
	foreach ($get_data as $key) {

		$f_name = $key->first_name;
		$l_name = $key->last_name;
		$name   = $f_name." ".$l_name;
    if(!empty($key->working_hours)){
      $datev = explode(':',$key->working_hours);
      $time = $datev[0]." hrs ".$datev[1]." min ";
    }
    else{
      $time = "Not  timeout";
    }

    // var_dump($time);exit;
		$from = date("h:m:s", strtotime($key->last_login));
		$till = date("h:m:s", strtotime($key->logout_time));

		$date = date("Y-m-d", strtotime($key->last_login));

		// $applied_date = date("Y-m-d", strtotime($key->last_login));

		?>

		                          <tr>
		                            <!-- empname -->
		                            <td><?php echo $i++;?></td>
		                            <td> <?php echo $name;?></td>
		                            <td><?php echo $date;?></td>
		                            <td><?php echo $from;?></td>
		                            <td><?php echo $till;?></td>
		                            <td><?php echo $time;?></td>
		                            <td>


		<?php
	}
}

?>

</tbody>
</table>
</div>

<!-- Note:&nbsp;
 &nbsp;
 <a  " class="glyphicon glyphicon-check "  > :  VIEWS</a> -->

</div>
<div id="pagination">
<ul class="tsc_pagination">

<!-- Show pagination links -->
<?php foreach ($links as $link) {
echo "<li>". $link. "</li>";
} ?>
</div>
</div>

<style>
#pagination{
  margin: 10 10 0;
}
ul.tsc_pagination li a{
  border: solid 1px;
  boredr-radius: 3px;
  -moz-border-radius:3px;
  -webkit-border-radius:3px;
  padding:6px 9px 6px 9px;
}
ul.tsc_pagination li
{
padding-bottom:1px;
}
ul.tsc_pagination li a:hover,
ul.tsc_pagination li a.current
{
color: #372e29;
box-shadow:0px 1px #EDEDED;
-moz-box-shadow:0px 1px #EDEDED;
-webkit-box-shadow:0px 1px #EDEDED;
}
ul.tsc_pagination{
  margin: 4px 0;
  padding:0px;
  overflow:hidden;
  font:12px 'Tahoma';
  list-style-type:none;
}
ul.tsc_pagination li{
  float:left;
  margin:0px;
  padding:0px;
  /*margin-left: 20%;*/
}
ul.tsc_pagination li a{
  color:black;
  display:inline-block;
  text-decoration:none;
  padding:7px 10px 7px 10px;
}
ul.tsc_pagination li a img
{
border:none;
}
ul.tsc_pagination li a{
color:#cc0000;
border-color:#007777;
background:#f9d62e;
}
ul.tsc_pagination li a:hover,
ul.tsc_pagination li a.current{
text-shadow:0px 1px  	#607d8b;
border-color:#3390CA;
background:#58B0E7;
background:-moz-linear-gradient(top, #B4F6FF 1px, #63D0FE 1px, #58B0E7);
background:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #B4F6FF), color-stop(0.02, #63D0FE), color-stop(1, #58B0E7));
}
</style>
