<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?php echo base_url("admin/home");?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Update Employee</span>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo base_url('admin/home/edit_user_by_admin/'.$code);?>" id="register_form" class="form-horizontal" method="post">
                <div class="form-body">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
<?php
//$i = 0;
//foreach ($joinData as $value) {
      //echo "<pre>";var_dump($value);
      //exit;
    $value = $joinData[0];
        ?>
                    <div class="form-group ">
                        <label for="access_type" class="control-label col-md-3">Access Type <span class="required"> * </span></label>

                        <div class="col-md-4">
                            <select class="form-control" name="access_type">

                    <option value=""><?php
        if ($value->access_type === 'super admin') {
            echo 'super admin';
        } elseif ($value->access_type === 'admin') {

            // var_dump($value->access_type);exit();
             echo 'admin';
        } else {
            echo 'employee';
        }
        ?></option>

        <?php
        $userData = array('data' => $this->auth->formatted_userdata('user_admin'));

        $access_type['access_type'] = $userData['data']->access_type;

        if ($access_type['access_type'] == 'super admin') {
            ?>
             <option value="super admin" <?php if($value->access_type =="super admin") { ?> selected= "selected" <?php }?>>Super Admin</option>
            <option value="admin" <?php if($value->access_type =="admin") { ?> selected= "selected" <?php }?>>Admin</option>
            <option value="employee" <?php if($value->access_type =="employee") { ?> selected= "selected" <?php }?>>Employee</option>

            <?php } else {
            ?>
            <option value="employee" <?php if($value->access_type =="employee") { ?> selected= "selected" <?php }?>>Employee</option>

            <?php }
        ?>

                                </select>

                                        </div>

                                            </div>
                                                <div class="portlet box green">
        <div class="portlet-title">
        <div class="caption">
        <span class="caption-subject font-dark bold uppercase">Personal Information</span>
                                                            </div>
                        </div>
                    </div>
                        <div class="form-group">

    <label class="control-label col-md-3">First Name
<span class="required"> * </span>
                                </label>
                            <div class="col-md-4">
<input type="text" name="first_name" value="<?php echo $value->first_name;?>" placeholder="First Name" id="first_name" data-required="1" class="form-control" /> </div>
                                                                    </div>
<div class="form-group">
    <label class="control-label col-md-3">Last Name <span class="required"> * </span>
            </label>
            <div class="col-md-4">
    <input type="text" name="last_name" value="<?php echo $value->last_name;?>" placeholder="Last Name" data-required="1" class="form-control" /> </div>
                            </div>
            <div class="form-group">
            <label for="gender" class="control-label col-md-3">Gender</label>
                                                <div class="col-lg-4">


    <input type="radio" name="gender" value="male" <?php echo ($value->gender == "male")?'checked=checked':'';
        ?>">Male
        <input type="radio" name="gender" value="female" <?php echo ($value->gender == "female")?'checked=checked':'';
        ?>">Female
                            </div>
                </div>

                            <div class="form-group">        
            <label class="control-label col-md-3">Date Of Birth</label>
                                    <div class="col-md-4">
    <div class="input-group input-medium date date-picker" data-date="12-02-2016" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
    <input type="text" class="form-control" value="<?php echo $value->dob;?>" name="dob" readonly>
<span class="input-group-btn">
    <button class="btn default" type="button">
    <i class="fa fa-calendar"></i>
                                </button>
                        </span>
                                  </div>
                </div>
                    </div>
        <div class="form-group">
    <label for="marital" class="control-label col-md-3">Marital Status</label>
                        <div class="col-lg-4">
<input type="radio" name="marital" value="Single" <?php echo ($value->marital_status == "Single")?'checked=checked':'';?>">Single</input>

<input type="radio" name="marital" value="Married" <?php echo ($value->marital_status == "Married")?'checked=checked':'';?>">Married</input>
                    </div>
                    </div>
            <div class="form-group ">
    <label for="blood_group" class="control-label col-md-3">Blood Group</label>
            <div class="col-md-4">
    <input class="form-control " id="blood_group" value="<?php echo $value->blood_group;?>" name="blood_group" placeholder="Blood Group" type="text" />
                </div>
                </div>
            <div class="portlet box green">
        <div class="portlet-title">
        <div class="caption">
    <span class="caption-subject font-dark bold uppercase">Previous Experience</span>
                                </div>
</div>
                                                        </div>
                        <div class="form-group">
                            <label for="exp" class="control-label col-md-3">Experience</label>
                                            <div class="col-md-4">
                                            <select name="exp" id="exp" class="form-control">
    <option value="">Experience</option>
    <?php foreach ($exp as $experience) {
            ?>
    <option value="<?php echo $value->exp;?>" <?php echo ($value->exp == $experience->exp)?'selected=selected':'';
            ?>><?php echo $experience->exp;
            ?></option>
            <?php }
        ?>

                    </select>
                    </div>
                                    </div>
            <div class="form-group">
    <label for="company1" class="control-label col-md-3">1.Company Name</label>
                    <div class="col-md-4">
<input class="form-control " id="company1" value="<?php echo $value->company1;?>" name="company1" type="text" placeholder="Company Name" />
                                </div>
                                                            </div>
            <div class="form-group">
        <label for="address1" class="control-label col-md-3">Address</label>
            <div class="col-md-4">
    <input class="form-control " id="address1" value="<?php echo $value->address1;?>" name="address1" type="text" placeholder="Company Address" />
                                        </div>
                </div>
    <div class="form-group">
                <label for="company2" class="control-label col-md-3">2.Company Name</label>
                <div class="col-md-4">
    <input class="form-control" value="<?php echo $value->company2;?>" id="company2" name="company2" type="text" placeholder="Company Name" />
            </div>
            </div>
<div class="form-group">
    <label for="address2" class="control-label col-md-3">Address</label>
<div class="col-md-4">
<input class="form-control " id="address2" name="address2" value="<?php echo $value->address2;?>" type="text" placeholder=  "Company Address" />
                            </div>
</div>
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                    <span class="caption-subject font-dark bold uppercase">Contact Information</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Email
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input name="email" type="text" value="<?php echo $value->email_id;?>" class="form-control" placeholder="Email" /> </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Password
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input name="password" type="password" value="<?php echo ($value->password);?>" class="form-control" placeholder="Password" />
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Contact Number
    <span class="required"> * </span>
</label>
<div class="col-md-4">
    <input name="contact" type="text" class="form-control" value="<?php echo $value->contact;?>" placeholder="Mobile No." /> </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Emergency Number
</label>
<div class="col-md-4">
    <input name="e_contact" value="<?php echo $value->e_contact;?>" type="text" class="form-control" placeholder="Mobile No."  /> </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Address
    <span class="required"> * </span>
</label>


<div class="col-md-4">
    <input name="address" type="text" value="<?php echo $value->address;?>" class="form-control" placeholder="Address" />
</div>
</div>




<div class="form-group">
<label class="control-label col-md-3">City</label>
<div class="col-md-4">
    <input name="city" type="text" class="form-control"placeholder="City" value="<?php echo $value->city;?>"  />
</div>
</div>
<div class="form-group ">
<label for="state"  class="control-label col-md-3">State</label>
<div class="col-md-4">
    <select name="state" id="state" class="form-control">
        <option value="">---------Select State---------</option>

        <option value="Andaman and Nicobar Islands" <?php if( $value->state == "Andaman and Nicobar Islands" ) { ?> selected="selected" <?php } ?>>Andaman and Nicobar Islands</option>

<option value="Andhra Pradesh" <?php if($value->state == "Andhra Pradesh") { ?> selected="selected" <?php }?>>Andhra Pradesh</option>

<option value="Arunachal Pradesh" <?php if( $value->state == "Arunachal Pradesh") ?>>Arunachal Pradesh</option>

        <option value="Assam" <?php if( $value->state == "Assam"){ ?> selected="selected" <?php } ?> >Assam</option>

        <option value="Bihar" <?php if( $value->state == "Bihar") { ?> selected="selected" <?php } ?> >Bihar</option>
       <option value="Chandigarh" <?php if( $value->state == "Chandigarh") { ?> selected="selected" <?php } ?> >Chandigarh</option>
        <option value="Chandigarh" <?php if( $value->state == "Chandigarh") { ?> selected="selected" <?php } ?> >Chandigarh</option>


        <option value="Chhattisgarh" <?php if( $value->state == "Chhattisgarh") { ?> selected="selected" <?php }?>>Chhattisgarh</option>

        <option value="Dadra and Nagar Haveli" <?php if( $value->state == "Dadra and Nagar Haveli") { ?> selected="selected" <?php } ?>>Dadra and Nagar Haveli</option>

        <option value="Daman and Diu" <?php if( $value->state == "Daman and Diu") { ?> selected="selected" <?php } ?>>Daman and Diu</option>


        <option value="Delhi" <?php if( $value->state == "Delhi"){ ?> selected="selected" <?php } ?>>Delhi</option>
        
        <option value="Goa" <?php if( $value->state == "Goa") { ?> selected="selected" <?php } ?>>Goa</option>
        
        <option value="Gujarat" <?php if( $value->state == "Gujarat") { ?> selected="selected" <?php } ?>>Gujarat</option>
        
        <option value="Haryana" <?php if( $value->state == "Haryana") { ?> selected="selected" <?php } ?>>Haryana</option>
        
        <option value="Himachal Pradesh" <?php if( $value->state == "Himachal Pradesh") { ?> selected="selected" <?php } ?>>Himachal Pradesh</option>
        
        <option value="Jammu and Kashmir" <?php if( $value->state == "Jammu and Kashmir") { ?> selected="selected" <?php } ?>>Jammu and Kashmir</option>
        
        <option value="Jharkhand" <?php if( $value->state == "Jharkhand") { ?> selected="selected" <?php } ?>>Jharkhand</option>                                        
        
        <option value="Karnataka"  <?php if( $value->state == "Karnataka") { ?> selected="selected" <?php } ?>>Karnataka</option>
        
        <option value="Kerala" <?php if( $value->state == "Kerala") { ?> selected="selected" <?php } ?>>Kerala</option>
        
        <option value="Lakshadweep"  <?php if( $value->state == "Lakshadweep") { ?> selected="selected" <?php } ?>>Lakshadweep</option>

        <option value="Madhya Pradesh"  <?php if( $value->state == "Madhya Pradesh") { ?> selected="selected" <?php } ?>>Madhya Pradesh</option>
        
        <option value="Maharashtra"  <?php if( $value->state == "Maharashtra") { ?> selected="selected" <?php } ?>>Maharashtra</option>
        
        <option value="Manipur"  <?php if( $value->state == "Manipur") { ?> selected="selected" <?php } ?>>Manipur</option>
        
        <option value="Meghalaya"  <?php if( $value->state == "Meghalaya") { ?> selected="selected" <?php } ?>>Meghalaya</option>
        
        <option value="Mizoram"  <?php if( $value->state == "Mizoram") { ?> selected="selected" <?php } ?>>Mizoram</option>
        
        <option value="Nagaland"  <?php if( $value->state == "Nagaland") { ?> selected="selected" <?php } ?>>Nagaland</option>
        
        <option value="Orissa"  <?php if( $value->state == "Nagaland") { ?> selected="selected" <?php } ?>>Orissa</option>
        
        <option value="Pondicherry"  <?php if( $value->state == "Pondicherry") { ?> selected="selected" <?php } ?>>Pondicherry</option>
        
        <option value="Punjab"  <?php if( $value->state == "Punjab") { ?> selected="selected" <?php } ?>>Punjab</option>
        
        <option value="Rajasthan"  <?php if( $value->state == "Rajasthan") { ?> selected="selected" <?php } ?>>Rajasthan</option>
        
        <option value="Sikkim"  <?php if( $value->state == "Sikkim") { ?> selected="selected" <?php } ?>>Sikkim</option>
        
        <option value="Tamil Nadu"  <?php if( $value->state == "Tamil Nadu") { ?> selected="selected" <?php } ?>>Tamil Nadu</option>
        
        <option value="Tripura"  <?php if( $value->state == "Tripura") { ?> selected="selected" <?php } ?>>Tripura</option>
        
        <option value="Uttaranchal"  <?php if( $value->state == "Uttaranchal") { ?> selected="selected" <?php } ?>>Uttaranchal</option>
        
        <option value="Uttar Pradesh"  <?php if( $value->state == "Uttar Pradesh") { ?> selected="selected" <?php } ?>>Uttar Pradesh</option>        
        <option value="West Bengal"  <?php if( $value->state == "West Bengal") { ?> selected="selected" <?php } ?> >West Bengal</option>

       

      
        
        </select>
        
                </div>
        
            </div>
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject font-dark bold uppercase">Educational Information</span>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label for="education" class="control-label col-md-3">Highest Qualification</label>
                <div class="col-md-4">
                    <select name="highest_qualification" id="highest_qualification" class="form-control">
                        <option value="">Select Qualification</option>
<?php
foreach ($course as $course_name) {
//var_dump($course_name);

?>   <option value="<?php echo $course_name->course_name;?>" <?php echo ($value->highest_qualification == $course_name->course_name)?'selected=selected':'';
?>><?php echo $course_name->course_name; ?> 
</option>


<?php }?>
</select>
                    &nbsp;
                    &nbsp;



        </div>
                    </div>
                                            
        <?php
    //}
//}
?>

<div class="form-group ">
                <label for="education" class="control-label col-md-3">Passing Year</label>
                <div class="col-md-4">
                    <select name="year" id="year" class="form-control">
                        <option value="">Passing Year</option>
<?php
foreach ($year as $year) {
//var_dump($course_name);

?>   <option value="<?php echo $year->year;?>" <?php echo ($value->passing_year == $year->year)?'selected=selected':'';
?>><?php echo $year->year; ?> 
</option>


<?php }?>
</select>
                    &nbsp;
                    &nbsp;



        </div>
                    </div>


</div>

                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" name="submit" id="register-submit-btn" class="btn green">Submit</button>
                            <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>