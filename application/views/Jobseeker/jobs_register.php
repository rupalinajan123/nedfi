<div class="inner-banner">
<div class="container">
<div class="banner-title">
<h3>Govt. Job Alert</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Jobseeker</a></li>
<li class="breadcrumb-item"><a href="#">Govt. Job Alert</a></li>
<?php 
if ($this->session->flashdata('error_message')) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
    echo $this->session->flashdata('error_message');
    echo '<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>';
    echo '</div>';
}
?>

</ul>
</div>
<div class="banner-content">
<div class="row">
<div class="col-md-12 banner-img pr-0"><img src="<?php echo base_url(); ?>uploads/register/job-listing.png"></div>
</div>
</div>
</div>
</div>
<div class="inner-body">

<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="wizard tab-main">
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active">
<a href="#step1" class="nav-link" data-toggle="tab"><img src="../img/emp-job/ph_user.svg" class="img-fluid mr-2" alt title="User">Basic Details</a>
</li>
<li role="presentation" class="disabled">
<a href="#step2" class="nav-link" data-toggle="tab"><img src="../img/emp-job/area-intrest-icon.svg" class="img-fluid" alt title="User">Area of Interest</a>
</li>
<li role="presentation" class="disabled">
<a href="#step3" class="nav-link" data-toggle="tab"><img src="../img/emp-job/education-icon.svg" class="img-fluid mr-2" alt title="User">Educational Details & Work Experience</a>
</li>
</ul>
<form role="form" action="" class="common-form" method="post">
<div class="tab-content main-form" id="main_form">
<div class="tab-pane active" id="step1" role="tabpanel">

<div class="container ">

<div class="row">
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Full Name" name="name" id="name" onkeypress="return /[a-zA-Z\s]/.test(event.key)">
<span class="error-msg" id="name-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4 ">
<div class="form-group">
<input class="form-control" type="email" placeholder="Email ID" id="emailId" name="emailId">  
<span class="error-msg" id="emailId-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
    <div class="form-group">
        <div class="input-group">
            <input class="form-control" type="password" id="password" name="password" placeholder="Password*" maxlength="50">
            <div class="input-group-append" style="height: 45px;">
                <span class="input-group-text">
                    <i class="fas fa-eye toggle-password" toggle="#password"></i>
                </span>
            </div>
        </div>
        <span class="error-msg" id="password-error-msg"></span>
    </div>
</div>
<div class="col-md-6 col-lg-4">
    <div class="form-group">
        <div class="input-group">
            <input class="form-control" type="password" id="cpassword" name="Cpassword" placeholder="Confirmed Password*" maxlength="50">
            <div class="input-group-append" style="height: 45px;">
                <span class="input-group-text">
                    <i class="fas fa-eye toggle-password" toggle="#cpassword"></i>
                </span>
            </div>
        </div>
        <span class="error-msg" id="cpassword-error-msg"></span>
    </div>
</div>

<div class="col-md-6 col-lg-4 ">
<select required class="form-select w-100 p-1" id="gender" name=gender>
<option selected value>Gender</option>
<option value="1">Male</option>
<option value="2">Female</option>
</select>
<span class="error-msg" id="gender-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4 ">
<div class="form-group">
<!-- <img src="../img/emp-job/CalendarPlus.svg" class="img-fluid icon" alt="Calender-icon" title="calender icon"> -->
<input class="form-control" type="date" placeholder="Date of Birth" id="date" name="date">
<span class="error-msg" id="date-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4 ">
<div class="form-group">
<input class="form-control" type="text" placeholder="Address" name="address" id="address" onkeypress="return /[0-9a-zA-Z\s]/.test(event.key)">
<span class="error-msg" id="address-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4 ">
<div class="form-group">
<select  class="form-select w-100 p-1" id="state" name="state">
<option value="">Select State *</option>
<?php foreach ($state_info as $state) { ?>
<option value="<?php echo $state->State_Id; ?>"><?php echo $state->State_name; ?></option>
<?php } ?>
</select>
<?php echo form_error('state', '<div class="text-danger">', '</div>'); ?>
<span class="error-msg" id="state-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4 ">
<select  class="form-select w-100 p-1" id="district" name="district">
<option selected value>Select District *</option>
</select>
<?php echo form_error('district', '<div class="text-danger">', '</div>'); ?>
<span class="error-msg" id="district-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Language*" name="language" id="language" onkeypress="return /[a-zA-Z\s]/.test(event.key)">
<span class="error-msg" id="language-error-msg"></span>
</div>
</div>
</div>
<ul class="list-inline">
<li><button type="button" id="step1-next-btn" class="default-btn next">Next</button></li>
</ul>
</div>

</div>
<div class="tab-pane fade" id="step2" role="tabpanel">

<div class="container ">
<div class="row">
<div class="col-md-6 col-lg-4 ">
<select required class="form-select w-100 p-1" id="category" name="category"> 
<option selected value>Job Category</option>
<option value="Job 1">Job 1</option>
<option value="Job 2">Job 2</option>
</select>
<span class="error-msg" id="category-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4 ">
<select required class="form-select w-100 p-1" id="subCategory" name="subCategory">
<option selected value>Job Sub-Category*</option>
<option value="sub Category 1">Job sub Category 1</option>
<option value="sub Category 2">Job sub Category 2</option>
</select>
<span class="error-msg" id="subCategory-error-msg"></span>
</div>
</div>
<ul class="list-inline">
<li><button type="button" class="default-btn prev-step">Cancel</button></li>
<li><button type="button" id="step2-next-btn" class="default-btn next">Next</button></li>
</ul>

</div>

</div>
<div class="tab-pane fade" id="step3" role="tabpanel">

<div class="container ">
<div class="row">
<div class="col-md-6 col-lg-4 ">
<input class="form-control" type="text" placeholder="Highest Qualification*" id="qualification" name="qualification" onkeypress="return /[0-9a-zA-Z\s]/.test(event.key)">
<span class="error-msg" id="qualification-error-msg"></span>

</div>
<div class="col-md-6 col-lg-4 national-level">
<label class="form-label lable">Do You Have Any Work Experience</label>
<div class="d-flex mb-2 ">
<div class="d-flex">
<div class="nf-radio-wrap">
<div class="custom-control custom-radio custom-control-inline pl-0">
<input type="radio" id="customRadioInline3" name="experience" value="yes" class="custom-control-input" checked>
<label class="custom-control-label" for="customRadioInline3">Yes</label>
</div>
</div>
<div class="nf-radio-wrap">
<div class="custom-control custom-radio custom-control-inline pl-0">
<input type="radio" id="customRadioInline4" name="experience" class="custom-control-input" value="no" checked>
<label class="custom-control-label" for="customRadioInline4">No</label>
</div>
</div>
</div>
</div>
<span class="error-msg" id="experience-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4  national-level">
<label class="form-label lable">Done any short term training</label>
<div class="nf-form-wrap">
<div class="d-flex">
<div class="nf-radio-wrap ">
<div class="custom-control custom-radio custom-control-inline pl-0">
<input type="radio" id="customRadioInline1" name="training" value="yes" class="custom-control-input" checked >
<label class="custom-control-label" for="customRadioInline1">Yes</label>
</div>
</div>
<div class="nf-radio-wrap ">
<div class="custom-control custom-radio custom-control-inline pl-0">
<input type="radio" id="customRadioInline2" name="training" value="no" class="custom-control-input" >
<label class="custom-control-label" for="customRadioInline2">No</label>
</div>
</div>
</div>
</div>
<span class="error-msg" id="training-error-msg"></span>
</div>
<div class="col-md-6 col-lg-4 ">
<div class="g-recaptcha" id="g-recaptcha" data-sitekey="6Lc0xMopAAAAAGEwHfk0RSyzB9ihW3a3bAS1jwaR"></div>
<span class="error-msg" id="recaptcha-error-msg"></span>
</div>
</div>
<ul class="list-inline">
<li><button type="button" class="default-btn prev-step">Cancel</button></li>
<li><button type="submit" name="submit" id="step3-next-btn" class="default-btn next" >Submit</button></li>
</ul>
</div>

</div>
</div>
</form>
</div>
</div>
</div>

</div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
        const fields = ['name', 'emailId', 'password', 'cpassword', 'gender', 'date', 'address', 'state', 'district', 'language'];
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

        if (document.getElementById('password').value !== document.getElementById('cpassword').value) {
            document.getElementById('cpassword-error-msg').textContent = 'Passwords do not match';
            isValid = false;
        } else {
            document.getElementById('cpassword-error-msg').textContent = '';
        }

        document.getElementById('step1-next-btn').disabled = !isValid;
        return isValid;
    }

    function validateStep2() {
        let isValid = true;
        const fields = ['category', 'subCategory'];
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
        const fields = ['qualification', 'experience', 'training'];
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

        // const recaptcha = document.getElementById('.g-recaptcha');
        // if (!recaptcha) {
        //     document.getElementById('recaptcha-error-msg').textContent = 'Please complete the captcha';
        //     isValid = false;
        // } else {
        //     document.getElementById('recaptcha-error-msg').textContent = '';
        // }

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
    document.querySelectorAll('#step2 select').forEach(element => {
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

$(document).on('click', '.toggle-password', function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

     // Password validation function
function validatePassword() {
    var password = $('#password').val();
    var cpassword = $('#cpassword').val();
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (!passwordRegex.test(password)) {
        $('#password-error-msg').text('Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.');
        return false;
    } else {
        $('#password-error-msg').text('');
    }

    if (password !== cpassword) {
        $('#cpassword-error-msg').text('Passwords do not match');
        return false;
    } else {
        $('#cpassword-error-msg').text('');
    }

    return true;
}

$(document).ready(function() {
    $('#password').on('keyup', function() {
        validatePassword();
    });

    $('#cpassword').on('keyup', function() {
        validatePassword();
    });
});
</script>



<!-- <script>
    $(document).ready(function() {
        function checkStep1Form() {
            var isValid = true;
            // Check Step 1 fields
            
            if ($('#name').val() === '') {
                $('#name-error-msg').text('Please enter your full name');
                isValid = false;
            } else {
                $('#name-error-msg').text('');
            }
           

            var emailId = $('#emailId').val();
                if (emailId === '') {
                    $('#emailId-error-msg').text('Please enter an email address');
                    isValid = false;
                } else if (!isValidEmail(emailId)) { // Check if email is valid
                    $('#emailId-error-msg').text('Please enter a valid email address');
                    isValid = false;
                } else {
                    $('#emailId-error-msg').text('');
            }
           
            var password = $('#password').val();
            if (password === '') {
                $('#password-error-msg').text('Please Enter your password');
                isValid = false;
            } else {
                $('#password-error-msg').text('');
            }

            var cpassword = $('#cpassword').val();
            if (cpassword === '') {
                $('#cpassword-error-msg').text('Please Enter your Confirm password');
                isValid = false;
            } else {
                $('#cpassword-error-msg').text('');
            }
            
            var gender = $('#gender').val();
            if (gender === '') {
                $('#gender-error-msg').text('Please select your gender');
                isValid = false;
            } else {
                $('#gender-error-msg').text('');
            }
            
            var date = $('#date').val();
            if (date === '') {
                $('#date-error-msg').text('Please enter your date of birth');
                isValid = false;
            } else {
                $('#date-error-msg').text('');
            }
            
            var address = $('#address').val();
            if (address === '') {
                $('#address-error-msg').text('Please enter your address');
                isValid = false;
            } else {
                $('#address-error-msg').text('');
            }
           
            var state = $('#state').val();
            if (state === '') {
                $('#state-error-msg').text('Please enter your state');
                isValid = false;
            } else {
                $('#state-error-msg').text('');
            }
            
            var district = $('#district').val();
            if (district === '') {
                $('#district-error-msg').text('Please enter your district');
                isValid = false;
            } else {
                $('#district-error-msg').text('');
            }
            
            var language = $('#language').val();
            if (language === '') {
                $('#language-error-msg').text('Please enter your language');
                isValid = false;
            } else {
                $('#language-error-msg').text('');
            }
            
            if (isValid) {
                $('#step1-next-btn').prop('disabled', false);
            } else {
                $('#step1-next-btn').prop('disabled', true);
            }
        }

        function checkStep2Form() {
            // Validation logic for step 2 fields
            var isValid = true;
            // Add validation logic here
            var category = $('#category').val();
            if (category === '') {
                $('#category-error-msg').text('Please select a job category');
                isValid = false;
            } else {
                $('#category-error-msg').text('');
            }
            // Job Sub-Category
            var subCategory = $('#subCategory').val();
            if (subCategory === '') {
                $('#subCategory-error-msg').text('Please select a job sub-category');
                isValid = false;
            } else {
                $('#subCategory-error-msg').text('');
            }


            if (isValid) {
                $('#step2-next-btn').prop('disabled', false);
            } else {
                $('#step2-next-btn').prop('disabled', true);
            }
        }

        function checkStep3Form() {
            // Validation logic for step 3 fields
            var isValid = true;
            var qualification = $('#qualification').val();
            if (qualification === '') {
                $('#qualification-error-msg').text('Please enter your highest qualification');
                isValid = false;
            } else {
                $('#qualification-error-msg').text('');
            }
            // Work Experience
            var experience = $('input[name="experience"]:checked').val();
            // Short Term Training
            var training = $('input[name="training"]:checked').val();

            if (isValid) {
                $('#step3-next-btn').prop('disabled', false);
            } else {
                $('#step3-next-btn').prop('disabled', true);
            }
        }

        
        checkStep1Form();

        
        checkStep2Form();

        
        checkStep3Form();

        $('#step1 input, #step1 select').on('keyup change', function() {
            checkStep1Form();
        });

        $('#step2 input, #step2 select').on('keyup change', function() {
            checkStep2Form();
        });

        $('#step3 input, #step3 select').on('keyup change', function() {
            checkStep3Form();
        });
        
        
        // Initially disable next buttons for step 2 and step 3
        $('#step2-next-btn').prop('disabled', true);
        // $('#step3-next-btn').prop('disabled', true);

        function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
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


$(document).on('click', '.toggle-password', function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    // Password validation function
function validatePassword() {
    var password = $('#password').val();
    var cpassword = $('#cpassword').val();
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (!passwordRegex.test(password)) {
        $('#password-error-msg').text('Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.');
        return false;
    } else {
        $('#password-error-msg').text('');
    }

    if (password !== cpassword) {
        $('#cpassword-error-msg').text('Passwords do not match');
        return false;
    } else {
        $('#cpassword-error-msg').text('');
    }

    return true;
}

$(document).ready(function() {
    $('#password').on('keyup', function() {
        validatePassword();
    });

    $('#cpassword').on('keyup', function() {
        validatePassword();
    });
});

</script> -->






