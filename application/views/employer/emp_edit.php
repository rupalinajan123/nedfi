<div class="inner-banner">
<div class="container">
<div class="banner-title">
<h3>Post/Create Job</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Employment</a></li>
<li class="breadcrumb-item"><a href="#">Create Job</a></li>
</ul>
</div>
<div class="banner-content">
<div class="banner-img pr-0"><img src="<?php echo base_url(); ?>uploads/register/job-listing.png"></div>
</div>
</div>
</div>
<div class="inner-body">

<div class="container">
<div class="wizard tab-main">
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active">
<a href="#step1" class="nav-link" data-toggle="tab"><img src="<?php echo base_url();?>uploads/img/emp-job/education-icon.svg" class="img-fluid mr-2">Post a Job</a>
</li>
<li role="presentation" class="disabled">
<a href="#step2" class="nav-link" data-toggle="tab"><img src="<?php echo base_url();?>uploads/img/emp-job/area-intrest-icon.svg" class="img-fluid mr-2">Candidate Details</a>
</li>
<li role="presentation" class="disabled">
<a href="#step3" class="nav-link" data-toggle="tab"><img src="<?php echo base_url();?>uploads/img/emp-job/ph_user.svg" class="img-fluid mr-2">Job Details</a>
</li>
</ul>
<form role="form" action="" class="common-form" enctype="multipart/form-data" method="post">
<div class="tab-content main-form" id="main_form">
<div class="tab-pane active" role="tabpanel" id="step1">
<div class="row">
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" id="job_title" name="job_title" placeholder="Job Title" maxlength="50" value="<?php echo !empty($arr_data)&&$arr_data[0]['job_title']!=''?$arr_data[0]['job_title']:set_value('job_title'); ?>" onkeypress="return /[a-zA-Z]/.test(event.key)">
<span class="error-msg" id="job_title-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<select  class="form-control w-100" id="job_category" name="job_category">
<option selected value>Select Job Category</option>
<option value="Category 1" <?php if($arr_data[0]['job_category']=='Category 1') {echo 'selected="selected"' ; }?>>Category 1</option>
<option value="Category 2" <?php if($arr_data[0]['job_category']=='Category 2') {echo 'selected="selected"' ; }?>>Category 2</option>
</select>
<span class="error-msg" id="job_category-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4 national-level icon-text-box">
<label class="form-label lable mb-1">Nature of Job</label>
<div class="d-flex">
    <div class="nf-radio-wrap">
        <div class="custom-control custom-radio custom-control-inline pl-0">
            <input type="radio" id="customRadioInline1" name="nature_of_job" value="Direct" class="custom-control-input" <?php echo !empty($arr_data) && isset($arr_data[0]['nature_of_job']) && $arr_data[0]['nature_of_job'] == 'Direct' ? 'checked' : ''; ?>>
            <label class="custom-control-label" for="customRadioInline1">Direct</label>
        </div>
    </div>
    <div class="nf-radio-wrap">
        <div class="custom-control custom-radio custom-control-inline pl-0">
            <input type="radio" id="customRadioInline2" name="nature_of_job" value="SubContractor" class="custom-control-input" <?php echo !empty($arr_data) && isset($arr_data[0]['nature_of_job']) && $arr_data[0]['nature_of_job'] == 'SubContractor' ? 'checked' : ''; ?>>
            <label class="custom-control-label" for="customRadioInline2">Sub-Contractor</label>
        </div>
    </div>
</div>

<span class="error-msg" id="nature-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<select  class="form-select w-100 p-1" name="sub_Category" id="subCategory">
<option selected value>Job Sub-Category</option>
<option value="Sub Category 1" <?php if($arr_data[0]['sub_Category']=='Sub Category 1') {echo 'selected="selected"' ; }?>>Sub Category 1</option>
<option value="Sub Category 2" <?php if($arr_data[0]['sub_Category']=='Sub Category 2') {echo 'selected="selected"' ; }?>>Sub Category 2</option>
</select>
<span class="error-msg" id="subCategory-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" name="job_opening" value="<?php echo !empty($arr_data)&&$arr_data[0]['job_opening']!=''?$arr_data[0]['job_opening']:set_value('job_opening'); ?>" placeholder="Number Of Job Opening" id="job_opening" onkeypress="return /[0-9]/.test(event.key)" maxlength="50">
<span class="error-msg" id="job_opening-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Address" name = "address" id="address" maxlength="100" value="<?php echo !empty($arr_data)&&$arr_data[0]['address']!=''?$arr_data[0]['address']:set_value('address'); ?>" onkeypress="return /[0-9a-zA-Z]/.test(event.key)">
<span class="error-msg" id="address-error-msg"></span>
</div>
</div>
</div>
<ul class="list-inline">
<li><button id="step1-next-btn" type="button" class="default-btn next-step">Next</button></li>
</ul>
</div>
<div class="tab-pane" role="tabpanel" id="step2">
<div class="row">
<div class="col-md-6 col-lg-4">
<select  class="form-select w-100 p-1" name="gender" id="gender">
<option selected value>Gender Preference</option>
<option value="Male" <?php if($arr_data[0]['gender']=='Male') {echo 'selected="selected"' ; }?>>Male</option>
<option value="Female" <?php if($arr_data[0]['gender']=='Female') {echo 'selected="selected"' ; }?>>Female</option>
</select>
<span class="error-msg" id="gender-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Qualification" name="qualification" id="qualification" value="<?php echo !empty($arr_data)&&$arr_data[0]['qualification']!=''?$arr_data[0]['qualification']:set_value('qualification'); ?>" maxlength="50" onkeypress="return /[0-9a-zA-Z]/.test(event.key)">
<span class="error-msg" id="qualification-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Minimum Percentage %*" name="min_percentage" id="min_percentage" maxlength="3" value="<?php echo !empty($arr_data)&&$arr_data[0]['min_percentage']!=''?$arr_data[0]['min_percentage']:set_value('min_percentage'); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').slice(0, 10)" pattern="\d+(\.\d{1,2})?">
<span class="error-msg" id="min_percentage-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<select  class="form-select w-100 p-1" name="experience" id="experience" maxlength="50" onkeypress="return /[0-9a-zA-Z]/.test(event.key)">
<option selected value>Minimum Experience*</option>
<option value="0-1" <?php if($arr_data[0]['experience']=='0-1') {echo 'selected="selected"' ; }?>>0-1</option>
<option value="1-3" <?php if($arr_data[0]['experience']=='1-3') {echo 'selected="selected"' ; }?>>1-3</option>
<option value="3-5" <?php if($arr_data[0]['experience']=='3-5') {echo 'selected="selected"' ; }?>>3-5</option>
<option value="5-10" <?php if($arr_data[0]['experience']=='5-10') {echo 'selected="selected"' ; }?>>5-10</option>
</select>
<span class="error-msg" id="experience-error-msg"></span>
</div>
<div class="col-md-6 col-lg-12">
<div class="form-group">
<label class="form-label lable mb-1">Skill Details</label>
<input class="form-control" type="text" name="skills" placeholder="Add Skills *" id="skills" value="<?php echo !empty($arr_data)&&$arr_data[0]['skills']!=''?$arr_data[0]['skills']:set_value('skills'); ?>" onkeypress="this.value=this.value.replace(/\s/g,'').slice(0,50)" maxlength="60"> 
<span class="field-info">You can add upto 50 characters</span>
<span class="error-msg" id="skills-error-msg"></span>
</div>
</div>
</div>
<ul class="list-inline">
<li><button type="button" class="default-btn prev-step">Cancel</button></li>
<li><button type="button" id="step2-next-btn" class="default-btn next-step">Next</button></li>
</ul>
</div>
<div class="tab-pane" role="tabpanel" id="step3">
<div class="row">
<div class="col-md-6 col-lg-4">
<select required class="form-select w-100 p-1" name="sector" id="sector">
<option selected value>Select Sector*</option>
<option value="Sector 1" <?php if($arr_data[0]['sector']=='Sector 1') {echo 'selected="selected"' ; }?>>Sector 1</option>
<option value="Sector 2" <?php if($arr_data[0]['sector']=='Sector 2') {echo 'selected="selected"' ; }?>>Sector 2</option>
</select>
<span class="error-msg" id="sector-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<select required class="form-select w-100 p-1" name="employment_type" id="employment_type">
<option selected value>Employment Type*</option>
<option value="Employment Type 1" <?php if($arr_data[0]['employment_type']=='Employment Type 1') {echo 'selected="selected"' ; }?>>Employment Type 1</option>
<option value="Employment Type 2" <?php if($arr_data[0]['employment_type']=='Employment Type 2') {echo 'selected="selected"' ; }?>>Employment Type 2</option>
</select>
<span class="error-msg" id="employment_type-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<select required class="form-select w-100 p-1" name="sallary_range" id="sallary">
<option selected value>Salary Range*</option>
<option value="3-5Lpa" <?php if($arr_data[0]['sallary_range']=='3-5Lpa') {echo 'selected="selected"' ; }?>>3-5Lpa</option>
<option value="5-8Lpa" <?php if($arr_data[0]['sallary_range']=='5-8Lpa') {echo 'selected="selected"' ; }?>>5-8Lpa</option>
</select>
<span class="error-msg" id="sallary-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<!-- <img src="<?php echo base_url();?>uploads/img/emp-job/CalendarPlus.svg" class="img-fluid icon" alt="Calender-icon" title="calender icon"> -->
<input class="form-control" type="date" placeholder="Start Date*" name="start_date" id="start_date" value="<?php echo !empty($arr_data) && $arr_data[0]['start_date'] != '' ? $arr_data[0]['start_date'] : ''; ?>" > 
<span class="error-msg" id="start_date-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
        <!-- <img src="<?php echo base_url();?>uploads/img/emp-job/CalendarPlus.svg" class="img-fluid icon" alt="Calender-icon" title="calender icon"> -->
        <input class="form-control" type="date" placeholder="End Date*" id="end_date" name="end_date" value="<?php echo !empty($arr_data) && isset($arr_data[0]['end_date']) ? $arr_data[0]['end_date'] : ''; ?>">
        <span class="error-msg" id="end_date-error-msg"></span>
    </div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Weekly Working Day*" name="workingDay" value="<?php echo !empty($arr_data)&&$arr_data[0]['workingDay']!=''?$arr_data[0]['workingDay']:set_value('workingDay'); ?>" id="workingDay" onkeypress="return /[0-9]/.test(event.key)" maxlength="50">
<span class="error-msg" id="workingDay-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Extra incentives" name ="incentive" value="<?php echo !empty($arr_data)&&$arr_data[0]['incentive']!=''?$arr_data[0]['incentive']:set_value('incentive'); ?>" id="incentive" onkeypress="return /[0-9]/.test(event.key)" maxlength="50">
<span class="error-msg" id="incentive-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group mb-1">
<input class="form-control mb-0" type="text" placeholder="Location*" name="location" value="<?php echo !empty($arr_data)&&$arr_data[0]['location']!=''?$arr_data[0]['location']:set_value('location'); ?>" id="location" onkeypress="return /[0-9a-zA-Z]/.test(event.key)" maxlength="50">
<span class="error-msg" id="location-error-msg"></span>
</div>
<span class="field-info">You can add upto 50 characters</span>
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-4">
<div class="d-flex mb-2 national-level">
<div class="d-flex">
    <div class="nf-radio-wrap">
        <div class="custom-control custom-radio custom-control-inline pl-0">
            <input type="radio" id="customRadioInline3" name="country" value="India" class="custom-control-input" <?php echo !empty($arr_data) && isset($arr_data[0]['country']) && $arr_data[0]['country'] == 'India' ? 'checked' : ''; ?>>
            <label class="custom-control-label" for="customRadioInline3">India</label>
        </div>
    </div>
    <div class="nf-radio-wrap">
        <div class="custom-control custom-radio custom-control-inline pl-0">
            <input type="radio" id="customRadioInline4" name="country" class="custom-control-input" value="International" <?php echo !empty($arr_data) && isset($arr_data[0]['country']) && $arr_data[0]['country'] == 'International' ? 'checked' : ''; ?>>
            <label class="custom-control-label" for="customRadioInline4">International</label>
        </div>
    </div>
</div>


<span class="error-msg" id="country-error-msg"></span>
</div>
<select required class="form-select w-100 p-1" name="state">
    <option selected value>State*</option>
    <?php foreach ($state_info as $state) { ?>
        <option value="<?php echo $state['State_Id']; ?>" <?php echo !empty($arr_data) && isset($arr_data[0]['state']) && $arr_data[0]['state'] == $state['State_Id'] ? 'selected' : ''; ?>><?php echo $state['State_name']; ?></option>
    <?php } ?>
</select>
<span class="error-msg" id="state-error-msg"></span>
</div>
</div>
<ul class="list-inline">
<li><button type="button" class="default-btn prev-step">Cancel</button></li>
<li><button type="submit"  name="submit" id="step3-next-btn" class="default-btn next-step">Submit</button></li>
</ul>
</div>
</div>
</form>
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Function to check if all required fields are filled
        function checkFields() {
            var fieldsFilled = true;

            // Step 1 Fields
            var jobTitle = $('#job_title').val();
            if (jobTitle === '') {
                $('#job_title-error-msg').show().text('Please enter a job title.');
                fieldsFilled = false;
            } else {
                $('#job_title-error-msg').hide();
            }

            var jobCategory = $('#job_category').val();
            if (jobCategory === '') {
                $('#job_category-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#job_category-error-msg').hide();
            }

            // Radio Button Validation for Step 1
            var natureOfJob = $('input[name="nature_of_job"]:checked').val();
            if (!natureOfJob) {
                $('#nature-error-msg').show().text('Please select nature of job.');
                fieldsFilled = false;
            } else {
                $('#nature-error-msg').hide();
            }
            
            var jobCategory = $('#subCategory').val();
            if (jobCategory === '') {
                $('#subCategory-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#subCategory-error-msg').hide();
            }

            var jobCategory = $('#job_opening').val();
            if (jobCategory === '') {
                $('#job_opening-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#job_opening-error-msg').hide();
            }

            var jobCategory = $('#address').val();
            if (jobCategory === '') {
                $('#address-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#address-error-msg').hide();
            }

            

            // Step 2 Fields
            var gender = $('#gender').val();
            if (gender === '') {
                $('#gender-error-msg').show().text('Please select a gender preference.');
                fieldsFilled = false;
            } else {
                $('#gender-error-msg').hide();
            }

            var qualification = $('#qualification').val();
            if (qualification === '') {
                $('#qualification-error-msg').show().text('Please enter a qualification.');
                fieldsFilled = false;
            } else {
                $('#qualification-error-msg').hide();
            }

            var jobCategory = $('#min_percentage').val();
            if (jobCategory === '') {
                $('#min_percentage-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#min_percentage-error-msg').hide();
            }

            var jobCategory = $('#experience').val();
            if (jobCategory === '') {
                $('#experience-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#experience-error-msg').hide();
            }

            var jobCategory = $('#skills').val();
            if (jobCategory === '') {
                $('#skills-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#skills-error-msg').hide();
            }

            

            // Add similar checks for Step 2 fields...

            // Step 3 Fields
            var sector = $('#sector').val();
            if (sector === '') {
                $('#sector-error-msg').show().text('Please select a sector.');
                fieldsFilled = false;
            } else {
                $('#sector-error-msg').hide();
            }

            var employmentType = $('#employment_type').val();
            if (employmentType === '') {
                $('#employment_type-error-msg').show().text('Please select an employment type.');
                fieldsFilled = false;
            } else {
                $('#employment_type-error-msg').hide();
            }

            var jobCategory = $('#sallary').val();
            if (jobCategory === '') {
                $('#sallary-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#sallary-error-msg').hide();
            }

            var jobCategory = $('#start_date').val();
            if (jobCategory === '') {
                $('#start_date-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#start_date-error-msg').hide();
            }

            var jobCategory = $('#end_date').val();
            if (jobCategory === '') {
                $('#end_date-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#end_date-error-msg').hide();
            }

            var jobCategory = $('#workingDay').val();
            if (jobCategory === '') {
                $('#workingDay-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#workingDay-error-msg').hide();
            }

            var jobCategory = $('#incentive').val();
            if (jobCategory === '') {
                $('#incentive-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#incentive-error-msg').hide();
            }

            var jobCategory = $('#location').val();
            if (jobCategory === '') {
                $('#location-error-msg').show().text('Please select a job category.');
                fieldsFilled = false;
            } else {
                $('#location-error-msg').hide();
            }

            var selectedState = $('select[name="state"]').val();
            if (selectedState === '') {
                $('#state-error-msg').show().text('Please select a state.');
                fieldsFilled = false;
            } else {
                $('#state-error-msg').hide();
            }

            // Add similar checks for Step 3 fields...

            // Check if all fields are filled and enable/disable next button accordingly
            if(fieldsFilled) {
                $('#step1-next-btn, #step2-next-btn, #step3-next-btn').prop('disabled', false);
            } else {
                $('#step1-next-btn, #step2-next-btn, #step3-next-btn').prop('disabled', true);
            }
        }

        // Call checkFields function on input change for Step 1 fields
        $('#job_title, #job_category, input[name=nature_of_job], #subCategory, #job_opening, #address').on('input change', function(){
            checkFields();
        });

        // Call checkFields function on input change for Step 2 fields
        $('#gender, #qualification, #min_percentage, #experience, #skills').on('input change', function(){
            checkFields();
        });

        // Call checkFields function on input change for Step 3 fields
        $('#sector, #employment_type, #sallary, #start_date, #end_date, #workingDay, #incentive, #location, input[name=country], select[name=state]').on('input change', function(){
            checkFields();
        });

        // Call checkFields function on page load
        checkFields();
    });
</script>
