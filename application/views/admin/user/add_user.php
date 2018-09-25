<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?php echo base_url("admin/home"); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Add Employee</span>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo base_url('admin/home/add_user'); ?>" id="register_form" class="form-horizontal" method="post">
                <div class="form-body">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                    <div class="form-group ">
                        <label for="access_type" class="control-label col-md-3">Access Type <span class="required"> * </span></label>

                        <div class="col-md-4">
                            <select class="form-control" name="access_type">
                                <option value="">Select Access Type</option>
                                <?php
                                $userData = array('data' => $this->auth->formatted_userdata('user_admin'));
                                $access_type['access_type'] = $userData['data']->access_type;
                                if ($access_type['access_type'] == 'super admin') {
                                    ?>
                                    <option value="admin">Admin</option>
                                    <option value="employee">Employee</option>
                                <?php } else {
                                    ?>
                                    <option value="employee">Employee</option>
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
                            <input type="text" name="first_name" placeholder="First Name" id="first_name" data-required="1" class="form-control" /> </div>
                    </div>
                    <div class="form-group">
                        <label class="  label col-md-3">Last Name
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">
                            <input type="text" name="last_name" placeholder="Last Name" data-required="1" class="form-control" /> </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="control-label col-md-3">Gender</label>
                        <div class="col-lg-4">
                            <input type="radio" name="gender" value="male" checked>Male
                            <input type="radio" name="gender" value="female">Female
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Date Of Birth</label>
                        <div class="col-md-4">
                            <div class="input-group input-medium date date-picker" data-date="01-01-1980" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                <input type="text" class="form-control" name="dob" readonly>
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
                            <input type="radio" name="marital_status" value="male">Single</input>
                            <input type="radio" name="marital_status" value="female">Married</input>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="blood_group" class="control-label col-md-3">Blood Group</label>
                        <div class="col-md-4">
                            <input class="form-control " id="blood_group" name="blood_group" placeholder="Blood Group" type="text" />
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
                        <label for="education" class="control-label col-md-3">Experience</label>
                        <div class="col-md-4">
                            <select name="exp" id="exp" class="form-control">
                                <option value="">Experience</option>
                                <?php foreach ($exp as $experience) { ?>
                                    <option value="<?php echo $experience->exp; ?>"><?php echo $experience->exp; ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" id="company1">
                        <label for="company1" class="control-label col-md-3">1.Company Name</label>
                        <div class="col-md-4">
                            <input class="form-control " id="company1" name="company1" type="text" placeholder="Company Name" />
                        </div>
                    </div>
                    <div class="form-group" id="address1">
                        <label for="address1" class="control-label col-md-3">Address</label>
                        <div class="col-md-4">
                            <input class="form-control " id="address1" name="address1" type="text" placeholder="Company Address" />
                        </div>
                    </div>
                    <div class="form-group" id="company2">
                        <label for="company2" class="control-label col-md-3">2.Company Name</label>
                        <div class="col-md-4">
                            <input class="form-control " id="company2" name="company2" type="text" placeholder="Company Name" />
                        </div>
                    </div>
                    <div class="form-group" id="address2">
                        <label for="address2" class="control-label col-md-3">Address</label>
                        <div class="col-md-4">
                            <input class="form-control " id="address2" name="address2" type="text" placeholder="Company Address" />
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
                            <input name="email" type="text" class="form-control" placeholder="Email" /> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Password
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">
                            <input name="password" type="password" class="form-control" placeholder="Password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Contact Number
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">
                            <input name="contact" type="text" class="form-control" placeholder="Mobile No." /> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Emergency Number
                        </label>
                        <div class="col-md-4">
                            <input name="e_contact" type="text" class="form-control" placeholder="Mobile No."  /> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Address
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">
                            <input name="address" type="text" class="form-control" placeholder="Address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">City</label>
                        <div class="col-md-4">
                            <input name="city" type="text" class="form-control"placeholder="City"  />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="state"  class="control-label col-md-3">State</label>
                        <div class="col-md-4">
                            <select name="state" id="state" class="form-control">
                                <option value="">---------Select State---------</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
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
                            <select name="education" id="education" class="form-control">
                                <option value="">Select Qualification</option>
                                <?php foreach ($course as $value) { ?>
                                    <option value="<?php echo $value->course_name; ?>"><?php echo $value->course_name; ?></option>
                                <?php } ?>
                            </select>
                            &nbsp;
                            &nbsp;
                            <?php
                            echo '<select name="year" id="year" class="form-control">', "\n";
                            echo '<option value="">Passing Year</option>';
                            $year = date("Y");
                            for ($i = $year; $i > $year - 15; $i--) {
                                if ($i == $thisYear) {
                                    $s = ' selected';
                                } else {
                                    $s = '';
                                }
                                echo '<option value="', $i, '"', $s, '>', $i, '</option>', "\n";
                            }
                            echo '</select>', "\n";
                            ?>
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
<!-- END FORM-->