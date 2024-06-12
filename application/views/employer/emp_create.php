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
<form role="form" action="" class="common-form" method="post">
<div class="tab-content main-form" id="main_form">
<div class="tab-pane active" role="tabpanel" id="step1">
<div class="row">
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" id="job_title" name="job_title" placeholder="Job Title" maxlength="50" onkeypress="return /[a-zA-Z]/.test(event.key)">
<span class="error-msg" id="job_title-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<select  class="form-control w-100" id="job_category" name="job_category">
<option selected value>Select Job Category</option>
<option value="Category 1">Category 1</option>
<option value="Category 2">Category 1</option>
</select>
<span class="error-msg" id="job_category-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4 national-level icon-text-box">
<label class="form-label lable mb-1">Nature of Job</label>
<div class="d-flex">
<div class="nf-radio-wrap">
<div class="custom-control custom-radio custom-control-inline pl-0">
<input type="radio" id="customRadioInline1" name="nature_of_job" value="Direct" class="custom-control-input" checked>
<label class="custom-control-label" for="customRadioInline1">Direct</label>

</div>
</div>
<div class="nf-radio-wrap">
<div class="custom-control custom-radio custom-control-inline pl-0">
<input type="radio" id="customRadioInline2" name="nature_of_job" value="SubContractor" class="custom-control-input" checked>
<label class="custom-control-label" for="customRadioInline2">Sub-Contractor</label>
</div>
</div>
</div>
<span class="error-msg" id="nature-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<select  class="form-select w-100 p-1" name="sub_Category" id="subCategory">
<option selected value>Job Sub-Category</option>
<option value="Sub Category 1">Sub Category 1</option>
<option value="Sub Category 2">Sub Category 2</option>
</select>
<span class="error-msg" id="subCategory-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" name="job_opening" placeholder="Number Of Job Opening" id="job_opening" onkeypress="return /[0-9]/.test(event.key)" maxlength="50">
<span class="error-msg" id="job_opening-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Address" name = "address" id="address" maxlength="100" onkeypress="return /[0-9a-zA-Z]/.test(event.key)">
<span class="error-msg" id="address-error-msg"></span>
</div>
</div>
</div>
<ul class="list-inline">
<li><button id="step1-next-btn" type="button" class="default-btn next">Next</button></li>
</ul>
</div>
<div class="tab-pane" role="tabpanel" id="step2">
<div class="row">
<div class="col-md-6 col-lg-4">
<select  class="form-select w-100 p-1" name="gender" id="gender">
<option selected value>Gender Preference</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<span class="error-msg" id="gender-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Qualification" name="qualification" id="qualification" maxlength="50" onkeypress="return /[0-9a-zA-Z]/.test(event.key)">
<span class="error-msg" id="qualification-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Minimum Percentage %*" name="min_percentage" id="min_percentage" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').slice(0, 10)" pattern="\d+(\.\d{1,2})?">
<span class="error-msg" id="min_percentage-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<select  class="form-select w-100 p-1" name="experience" id="experience" maxlength="50" onkeypress="return /[0-9a-zA-Z]/.test(event.key)">
<option selected value>Minimum Experience*</option>
<option value="0-1">0-1</option>
<option value="1-3">1-3</option>
<option value="3-5">3-5</option>
<option value="5-10">5-10</option>
</select>
<span class="error-msg" id="experience-error-msg"></span>
</div>
<div class="col-md-6 col-lg-12">
<div class="form-group">
<label class="form-label lable mb-1">Skill Details</label>
<input class="form-control" type="text" name="skills" placeholder="Add Skills *" id="skills" onkeypress="this.value=this.value.replace(/\s/g,'').slice(0,50)" maxlength="60"> 
<span class="field-info">You can add upto 50 characters</span>
<span class="error-msg" id="skills-error-msg"></span>
</div>
</div>
</div>
<ul class="list-inline">
<li><button type="button" class="default-btn prev-step">Cancel</button></li>
<li><button type="button" id="step2-next-btn" class="default-btn next">Next</button></li>
</ul>
</div>
<div class="tab-pane" role="tabpanel" id="step3">
<div class="row">
<div class="col-md-6 col-lg-4">
<select required class="form-select w-100 p-1" name="sector" id="sector">
<option selected value>Select Sector*</option>
<option value="Sector 1">Sector 1</option>
<option value="Sector 2">Sector 2</option>
</select>
<span class="error-msg" id="sector-error-msg"></span>
</div>

<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Organization*" name="organization" id="organization" maxlength="100" >
<span class="error-msg" id="organization-error-msg"></span>
</div>
</div>

<div class="col-md-6 col-lg-4">
<select required class="form-select w-100 p-1" name="employment_type" id="employment_type">
<option selected value>Employment Type*</option>
<option value="Employment Type 1">Employment Type</option>
<option value="Employment Type 2">Employment Type</option>
</select>
<span class="error-msg" id="employment_type-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<select required class="form-select w-100 p-1" name="sallary_range" id="sallary">
<option selected value>Salary Range*</option>
<option value="3-5Lpa">3-5Lpa</option>
<option value="5-8Lpa">3-5Lpa</option>
</select>
<span class="error-msg" id="sallary-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<!-- <img src="<?php echo base_url();?>uploads/img/emp-job/CalendarPlus.svg" class="img-fluid icon" alt="Calender-icon" title="calender icon"> -->
<input class="form-control" type="date" placeholder="Start Date*" id="start_date" name="start_date"> 
<span class="error-msg" id="start_date-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<!-- <img src="<?php echo base_url();?>uploads/img/emp-job/CalendarPlus.svg" class="img-fluid icon" alt="Calender-icon" title="calender icon"> -->
<input class="form-control" type="date" placeholder="End Date*" id="end_date" name="end_date">
<span class="error-msg" id="end_date-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Weekly Working Day*" name="workingDay" id="workingDay" onkeypress="return /[0-9]/.test(event.key)" maxlength="50">
<span class="error-msg" id="workingDay-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Extra incentives" name ="incentive" id="incentive" onkeypress="return /[0-9]/.test(event.key)" maxlength="50">
<span class="error-msg" id="incentive-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group mb-1">
<input class="form-control mb-0" type="text" placeholder="Location*" name="location" id="location" onkeypress="return /[0-9a-zA-Z]/.test(event.key)" maxlength="50">
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
<input type="radio" id="customRadioInline3" name="country" value="India" class="custom-control-input" checked>
<label class="custom-control-label" for="customRadioInline3">India</label>

</div>
</div>
<div class="nf-radio-wrap">
<div class="custom-control custom-radio custom-control-inline pl-0">
<input type="radio" id="customRadioInline4" name="country" class="custom-control-input" value="International" checked>
<label class="custom-control-label" for="customRadioInline4">International</label>
</div>
</div>
</div>

<span class="error-msg" id="country-error-msg"></span>
</div>
<select required class="form-select w-100 p-1" name="state" id="state"  ?>">
<option selected value>State*</option>
<?php foreach ($state_info as $state) { ?>
<option value="<?php echo $state['State_Id']; ?>"><?php echo $state['State_name']; ?></option>
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

<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('step1-next-btn').addEventListener('click', function () {
        if (validateStep1()) {
            showTab('step2');
        }
    });

    document.getElementById('step2-next-btn').addEventListener('click', function () {
        if (validateStep2()) {
            showTab('step3');
        }
    });

    document.getElementById('step3-next-btn').addEventListener('click', function () {
        if (validateStep3()) {
            document.getElementById('jobForm').submit();
        }
    });

    function validateStep1() {
        let isValid = true;
        const fields = ['job_title', 'job_category',  'subCategory', 'job_opening', 'address'];
        fields.forEach(field => {
            const element = document.getElementById(field);
            const errorMsg = document.getElementById(field + '-error-msg');
            if (element.value.trim() === '') {
                errorMsg.textContent = 'This field is required';
                isValid = false;
            } else {
                errorMsg.textContent = '';
            }
        });

        document.getElementById('step1-next-btn').disabled = !isValid;
        return isValid;
    }

    function validateStep2() {
        let isValid = true;
        const fields = ['gender', 'qualification', 'min_percentage', 'experience', 'skills'];
        fields.forEach(field => {
            const element = document.getElementById(field);
            const errorMsg = document.getElementById(field + '-error-msg');
            if (element.value.trim() === '') {
                errorMsg.textContent = 'This field is required';
                isValid = false;
            } else {
                errorMsg.textContent = '';
            }
        });

        document.getElementById('step2-next-btn').disabled = !isValid;
        return isValid;
    }

    function validateStep3() {
        let isValid = true;
        const fields = ['sector', 'organization', 'employment_type','sallary','start_date','end_date','workingDay','incentive','location','country','state'];
        fields.forEach(field => {
            const element1 = document.getElementById(field);
            const element = document.querySelector(`input[name="${field}"]:checked`);
            const errorMsg = document.getElementById(field + '-error-msg');
            if (!element && element1.value.trim() === '') {
                errorMsg.textContent = 'This field is required';
                isValid = false;
            } else {
                errorMsg.textContent = '';
            }
        });


        document.getElementById('step3-next-btn').disabled = !isValid;
        return isValid;
    }

    function showTab(tabId) {
        const tabs = document.querySelectorAll('.tab-pane');
        tabs.forEach(tab => {
            tab.classList.remove('active', 'fade');
            if (tab.id === tabId) {
                tab.classList.add('active');
            } else {
                tab.classList.add('fade');
            }
        });
    }

    // Real-time validation for Step 1
    document.querySelectorAll('#step1 input, #step1 select').forEach(element => {
        element.addEventListener('input', validateStep1);
        element.addEventListener('change', validateStep1);
    });

    // Real-time validation for Step 2

    document.querySelectorAll('#step2 input, #step2 select').forEach(element => {
        element.addEventListener('input', validateStep2);
        element.addEventListener('change', validateStep2);
    });

    // Real-time validation for Step 3
    document.querySelectorAll('#step3 input, #step3 select').forEach(element => {
        element.addEventListener('input', validateStep3);
        element.addEventListener('change', validateStep3);
    });

    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(toggle => {
        toggle.addEventListener('click', function () {
            const input = document.querySelector(this.getAttribute('toggle'));
            if (input.type === 'password') {
                input.type = 'text';
                this.classList.add('fa-eye-slash');
                this.classList.remove('fa-eye');
            } else {
                input.type = 'password';
                this.classList.add('fa-eye');
                this.classList.remove('fa-eye-slash');
            }
        });
    });
});

$(document).ready(function() {
    $('#state').change(function() {
        var stateId = $(this).val();
        // alert(stateId);exit;
        if (stateId !== '') {
            $.ajax({
                url: '<?php echo base_url('Jobseeker/login/fetch_districts'); ?>',
                type: 'post',
                data: {state_id: stateId},
                dataType: 'json',
                success: function(response) {
                    var districtsDropdown = $('#district');
                    districtsDropdown.empty();
                    districtsDropdown.append('<option value="">Select District *</option>');
                    $.each(response, function(index, district) {
                        districtsDropdown.append('<option value="' + district.id + '">' + district.name + '</option>');
                    });
                }
            });
        } else {
            // Clear districts dropdown if no state is selected
            $('#district').empty().append('<option value="">Select District *</option>');
        }
    });
});

</script>



<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var step1NextBtn = document.getElementById("step1-next-btn");
    var step2NextBtn = document.getElementById("step2-next-btn");
    var step2PrevBtn = document.querySelector("#step2 .prev-step");
    var step3SubmitBtn = document.getElementById("step3-next-btn");
    
    // Function to validate step 1 fields
    function validateStep1() {
        var jobTitleField = document.getElementById("job_title");
        var jobCategoryField = document.getElementById("job_category");
        var jobOpeningField = document.getElementById("job_opening");
        var addressField = document.getElementById("address");
        var subCategoryField = document.getElementById("subCategory");
        var directRadio = document.getElementById("customRadioInline1");
        var subContractorRadio = document.getElementById("customRadioInline2");
        var isValid = true;


        
        // Check if any required field is empty
        if (!jobTitleField.value.trim()) {
            document.getElementById("job_title-error-msg").textContent = "Please enter a job title";
            isValid = false;
        } else {
            document.getElementById("job_title-error-msg").textContent = "";
        }

        if (!jobCategoryField.value.trim()) {
            document.getElementById("job_category-error-msg").textContent = "Please select a job category";
            isValid = false;
        } else {
            document.getElementById("job_category-error-msg").textContent = "";
        }

        if (!jobOpeningField.value.trim()) {
            document.getElementById("job_opening-error-msg").textContent = "Please enter the number of job openings";
            isValid = false;
        } else {
            document.getElementById("job_opening-error-msg").textContent = "";
        }

        if (!addressField.value.trim()) {
            document.getElementById("address-error-msg").textContent = "Please enter an address";
            isValid = false;
        } else {
            document.getElementById("address-error-msg").textContent = "";
        }

        if (!subCategoryField.value.trim()) {
            document.getElementById("subCategory-error-msg").textContent = "Please select a sub-category";
            isValid = false;
        } else {
            document.getElementById("subCategory-error-msg").textContent = "";
        }

        if (!directRadio.checked && !subContractorRadio.checked) {
            document.getElementById("nature-error-msg").textContent = "Please select the nature of job";
            isValid = false;
        } else {
            document.getElementById("nature-error-msg").textContent = "";
        }

        return isValid;
    }


    
        
    // Function to handle next button click for step 1
    step1NextBtn.addEventListener("click", function() {
        if (validateStep1()) {
            $('#step1').removeClass('active');
            $('#step2').addClass('active');
        }
    });

    // Function to handle next button click for step 2
    // Function to validate step 2 fields
    function validateStep2() {
        var genderField = document.getElementById("gender");
        var qualificationField = document.getElementById("qualification");
        var percentageField = document.getElementById("min_percentage");
        var experienceField = document.getElementById("experience");
        var skillField = document.getElementById("skills");
        var isValid = true;

        // Check if any required field is empty
        if (!genderField.value.trim()) {
            document.getElementById("gender-error-msg").textContent = "Please select gender preference";
            isValid = false;
        } else {
            document.getElementById("gender-error-msg").textContent = "";
        }

        if (!qualificationField.value.trim()) {
            document.getElementById("qualification-error-msg").textContent = "Please select Qualification field";
            isValid = false;
        } else {
            document.getElementById("qualification-error-msg").textContent = "";
        }

        if (!percentageField.value.trim()) {
            document.getElementById("min_percentage-error-msg").textContent = "Please select Percentage field";
            isValid = false;
        } else {
            document.getElementById("min_percentage-error-msg").textContent = "";
        }
        if (!experienceField.value.trim()) {
            document.getElementById("experience-error-msg").textContent = "Please select experience field";
            isValid = false;
        } else {
            document.getElementById("experience-error-msg").textContent = "";
        }
        if (!skillField.value.trim()) {
            document.getElementById("skills-error-msg").textContent = "Please select skill field";
            isValid = false;
        } else {
            document.getElementById("skills-error-msg").textContent = "";
        }

        // Add similar validations for other fields...

        return isValid;
    }

    // Function to handle form submission for step 3
    function validateStep3() {
        var sectorField = document.getElementById("sector");
        var organizationField = document.getElementById("organization");
        var employmentTypeField = document.getElementById("employment_type");
        var salaryRangeField = document.getElementById("sallary");
        var startDateField = document.getElementById("start_date");
        var endDateField = document.getElementById("end_date");
        var weeklyWorkingDayField = document.getElementById("workingDay");
        var locationField = document.getElementById("location");
        var incentiveField = document.getElementById("incentive");
        var stateField = document.getElementById("state");
        var forIndiaRadio = document.getElementById("customRadioInline3");
        var internationalRadio = document.getElementById("customRadioInline4");
        var isValid = true;

        // Check if any required field is empty
        
        if (!sectorField.value.trim()) {
            document.getElementById("sector-error-msg").textContent = "Please select sector field";
            isValid = false;
        } else {
            document.getElementById("sector-error-msg").textContent = "";
        }

        if (!organizationField.value.trim()) {
            document.getElementById("organization-error-msg").textContent = "Please Enter organization";
            isValid = false;
        } else {
            document.getElementById("organization-error-msg").textContent = "";
        }

        if (!employmentTypeField.value.trim()) {
            document.getElementById("employment_type-error-msg").textContent = "Please select employment_type field";
            isValid = false;
        } else {
            document.getElementById("employment_type-error-msg").textContent = "";
        }
        if (!salaryRangeField.value.trim()) {
            document.getElementById("sallary-error-msg").textContent = "Please select sallary field";
            isValid = false;
        } else {
            document.getElementById("sallary-error-msg").textContent = "";
        }
        if (!startDateField.value.trim()) {
            document.getElementById("start_date-error-msg").textContent = "Please select start_date field";
            isValid = false;
        } else {
            document.getElementById("start_date-error-msg").textContent = "";
        }
        if (!endDateField.value.trim()) {
            document.getElementById("end_date-error-msg").textContent = "Please select end_date field";
            isValid = false;
        } else {
            document.getElementById("end_date-error-msg").textContent = "";
        }
        if (!weeklyWorkingDayField.value.trim()) {
            document.getElementById("workingDay-error-msg").textContent = "Please select workingDay field";
            isValid = false;
        } else {
            document.getElementById("workingDay-error-msg").textContent = "";
        }
        if (!locationField.value.trim()) {
            document.getElementById("location-error-msg").textContent = "Please select location field";
            isValid = false;
        } else {
            document.getElementById("location-error-msg").textContent = "";
        }
        if (!stateField.value.trim()) {
        document.getElementById("state-error-msg").textContent = "Please select state field";
        isValid = false;
        } else {
            document.getElementById("state-error-msg").textContent = "";
        }

        if (!incentiveField.value.trim()) { // Corrected field validation
        document.getElementById("incentive-error-msg").textContent = "Please enter incentive field"; // Corrected error message
        isValid = false;
        } else {
            document.getElementById("incentive-error-msg").textContent = ""; // Corrected error message
        }
        if (!forIndiaRadio.checked && !internationalRadio.checked) {
            document.getElementById("country-error-msg").textContent = "Please select the Country of job";
            isValid = false;
        } else {
            document.getElementById("country-error-msg").textContent = "";
        }
   
        
       
        // Add similar validations for other fields...

        return isValid;
    }


    // Function to disable next button if any required fields are empty
    function disableNextButton() {
        if (!validateStep1()) {
            step1NextBtn.disabled = true;
        } else {
            step1NextBtn.disabled = false;
        }
    }

    disableNextButton();
// Function to disable next button if any required fields are empty for step 2
function disableStep2NextButton() {
    if (!validateStep2()) {
        step2NextBtn.disabled = true;
    } else {
        step2NextBtn.disabled = false;
    }
}

// Call the function initially to set the initial state of the next button for step 2
disableStep2NextButton();

function disableStep3NextButton() {
    if (!validateStep3()) {
        step3SubmitBtn.disabled = true;
    } else {
        step3SubmitBtn.disabled = false;
    }
}

disableStep3NextButton()

// Add event listeners to input fields to check for changes for step 2
var inputFieldsStep2 = document.querySelectorAll('#step2 input, #step2 select');
inputFieldsStep2.forEach(function(input) {
    input.addEventListener('change', function() {
        disableStep2NextButton();
    });
});

    // Add event listeners to input fields to check for changes
    var inputFields = document.querySelectorAll('input, select');
    inputFields.forEach(function(input) {
        input.addEventListener('change', function() {
            disableNextButton();
        });
    });

    // Add event listeners to input fields to check for changes for step 2
        var inputFieldsStep3 = document.querySelectorAll('#step3 input, #step3 select');
        inputFieldsStep3.forEach(function(input) {
        input.addEventListener('change', function() {
            disableStep3NextButton();
        });
});

});
</script> -->







