<style>
.error-msg {
    color: red;
}
</style>
<div class="inner-banner">
<div class="container">
<div class="banner-title">
<h3>Govt. Job Alert</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Employment</a></li>
<li class="breadcrumb-item"><a href="#">Govt. Job Alert</a></li>

</ul>
</div>
<div class="banner-content">
<div class="row">
<div class="col-md-4 banner-img pr-0"><img src="<?php echo base_url(); ?>uploads/register/bann-img.png"></div>
<div class="col-md-8  pl-0">
<div class="bannerbg nf-gradient-1 justify-content-start p-3 nf-height-100">
<h4 class="nf-f-size-24 pl-0">Meat Production</h4>
<p class="text-white pr-md-5">Brief ...</p>
<img src="<?php echo base_url(); ?>uploads/register/layers-bg.png" alt="layers background" class="nf-layes-bg">

</div>
</div>
</div>
</div>
</div>
</div>

<div class="inner-body">
<div class="container">
<div class="row">
 <?php 
                  if ( validation_errors()!="" )
                       { ?> 
               <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h6><i class="icon fa fa-ban"></i> Alert!</h36>
                  <?php echo validation_errors();  ?>
               </div>
               <?php }  ?>
<div class="col-lg-12 ">
<div class="wizard tab-main">
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active">
<a href="#step" class="nav-link" data-toggle="tab"><img src="<?php echo base_url(); ?>uploads/register/mail-message-icon.svg" class="img-fluid mr-2" alt title="User">Enter Email ID</a>
</li>
<li role="presentation" class="disabled">
<a href="#step" class="nav-link" data-toggle="tab"><img src="<?php echo base_url(); ?>uploads/register/message-icon.svg" class="img-fluid mr-2" alt title="User">Enter OTP</a>
</li>
<li role="presentation" class="disabled">
<a href="#step" class="nav-link" data-toggle="tab"><img src="<?php echo base_url(); ?>uploads/register/ph_user.svg" class="img-fluid mr-2" alt title="User">Tell Us About Yourself</a>
</li>
</ul>
<form role="form" action="" class="common-form" method="post">
<div class="tab-content main-form" id="main_form">
<div class="tab-pane active" id="step1" role="tabpanel">

<div class="container">
<div class="row">
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control mb-0" type="email" name="email" id="email" placeholder="Enter email ID">
<span class="field-info">We will send you OTP on this email</span>
<span class="error-msg" id="email-error-msg"></span>

</div>
</div>
</div>
<ul class="list-inline">
<li><button id="step1-next-btn" type="button" class="default-btn next">Next</button></li>
</ul>
</div>

</div>
<div class="tab-pane" id="step2" role="tabpanel">

<div class="container ">

<div class="row">
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control mb-0" type="text" name="otp"placeholder="Enter OTP" id="otp">
<span class="field-info">OTP is valid for 5 minutes</span>
<span class="field-info">Did not received OTP?&nbsp <a href="#"> Click here to Resend</a></span>
<span class="error-msg" id="otp-error-msg"></span>
<?php echo form_error('otp', '<div class="text-danger">', '</div>'); ?>

</div>
</div>
</div>
<ul class="list-inline">
<li><button type="button" class="default-btn prev-step">Cancel</button></li>
<li><button type="button" id="step2-next-btn" class="default-btn next">Next</button></li>
</ul>
</div>

</div>
<div class="tab-pane" id="step3" role="tabpanel">

<div class="container ">
<div class="row">
<div class="col-lg-12 mb-4 national-level">
<div class="nf-form-wrap">
<div class="d-flex mb-0">
<div class="nf-radio-wrap">
<div class="custom-control custom-radio custom-control-inline pl-0">
<input type="radio" id="customRadioInline1" name="sector" value="Government Organization" class="custom-control-input" checked>
<label class="custom-control-label" for="customRadioInline1">Government Organization</label>
</div>
</div>
<div class="nf-radio-wrap">
<div class="custom-control custom-radio custom-control-inline pl-0">
<input type="radio" id="customRadioInline3" name="sector" value="Private" class="custom-control-input">
<label class="custom-control-label" for="customRadioInline3">Private</label>
</div>
</div>
<div class="nf-radio-wrap">
<div class="custom-control custom-radio custom-control-inline pl-0">
<input type="radio" id="customRadioInline2" name="sector" value="Others" class="custom-control-input">
<label class="custom-control-label" for="customRadioInline2">Others</label>
</div>
<?php echo form_error('sector', '<div class="text-danger">', '</div>'); ?>

</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group" id="department-field">
<input class="form-control" type="text" placeholder="Department*" name="department" maxlength="50" onkeypress="return /[a-zA-Z]/.test(event.key)">
<?php echo form_error('department', '<div class="text-danger">', '</div>'); ?>
<span class="error-msg" id="department-error-msg"></span>
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

<div class="col-md-6 col-lg-4">
<div class="form-group" id="mobile-field">
<input class="form-control" type="number" name="mobile" placeholder="Alternate Mobile No*" maxlength="50" onkeypress="return /[0-9]/.test(event.key)">
<?php echo form_error('mobile', '<div class="text-danger">', '</div>'); ?>
<span class="error-msg" id="mobile-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" name="nodal_officer" placeholder="Nodal Contact Officer*" maxlength="50" onkeypress="return /[a-zA-Z]/.test(event.key)">
<?php echo form_error('nodal_officer', '<div class="text-danger">', '</div>'); ?>
<span class="error-msg" id="nodal-officer-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<select  class="form-select w-100 p-1" id="state" name="state">
<option value="">Select State *</option>
<?php foreach ($state_info as $state) { ?>
<option value="<?php echo $state->State_Id; ?>"><?php echo $state->State_name; ?></option>
<?php } ?>
</select>
<?php echo form_error('state', '<div class="text-danger">', '</div>'); ?>
<span class="error-msg" id="state-error-msg"></span>
</div>


<div class="col-md-6 col-lg-4">
<select  class="form-select w-100 p-1" id="district" name="district">
<option selected value>Select District *</option>
</select>
<?php echo form_error('district', '<div class="text-danger">', '</div>'); ?>
<span class="error-msg" id="district-error-msg"></span>
</div>


<div class="col-md-6 col-lg-4">
<div class="form-group">
<input class="form-control" type="text" name="company_addr" maxlength="100" placeholder="Company Address*">
<?php echo form_error('company_addr', '<div class="text-danger">', '</div>'); ?>
<span class="error-msg" id="company-address-error-msg"></span>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="g-recaptcha" data-sitekey="6Lc0xMopAAAAAGEwHfk0RSyzB9ihW3a3bAS1jwaR"></div>
<span class="error-msg" id="recaptcha-error-msg"></span>
</div>
</div>
</div>
<ul class="list-inline">
<li><button type="button" class="default-btn prev-step">Cancel</button></li>
<li><button type="submit"  name="submit" class="default-btn next" >Submit</button></li>
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
 document.addEventListener("DOMContentLoaded", function() {
    var step1NextBtn = document.getElementById("step1-next-btn");
    var step2NextBtn = document.getElementById("step2-next-btn");
    var step2PrevBtn = document.querySelector("#step2 .prev-step");
    var step3SubmitBtn = document.querySelector("#step3 [type='submit']");
    var departmentField = document.querySelector("input[name='department']").parentNode.parentNode;

    // Step 1 Next Button Validation
    step1NextBtn.addEventListener("click", function() {
        var emailField = document.getElementById("email");
        var emailErrorMsg = document.getElementById("email-error-msg");
        if (!emailField.value.trim()) {
            emailErrorMsg.textContent = "Please enter your email ID";
            // Disable the button
            step1NextBtn.disabled = true;
            return;
        }
        
        step1NextBtn.disabled = false;
       
        $('#step1').removeClass('active');
        $('#step2').addClass('active');
    });
// Step 2 Next Button Validation
 step2NextBtn.addEventListener("click", function() {
        var otpField = document.getElementById("otp");
        var otpErrorMsg = document.getElementById("otp-error-msg");
        if (!otpField.value.trim()) {
            otpErrorMsg.textContent = "Please enter the OTP";
            // alert("Please enter the OTP");
            // Disable the button
            step2NextBtn.disabled = true;
            return;
        }
        // Enable the button
        step2NextBtn.disabled = false;
        // Additional validation if needed
        // If validation passes, move to the next step
        $('#step2').removeClass('active');
        $('#step3').addClass('active');
    });

    // var sectorFields = document.querySelectorAll("input[name='sector']");
    // sectorFields.forEach(function(sectorField) {
    //     sectorField.addEventListener("change", function() {
    //         var departmentField = document.querySelector("input[name='department']");
    //         var departmentFormGroup = document.querySelector("input[name='department']").closest(".form-group");

    //         if (sectorField.value === "Private") {
    //             departmentFormGroup.style.display = "none";
    //             departmentField.value = ""; // Clear the field value
    //         } else {
    //             departmentFormGroup.style.display = "block";
    //         }
    //     });
    // });
   
   // Sector Radio Button Change Event Listener
   var sectorRadioButtons = document.querySelectorAll("input[name='sector']");
    sectorRadioButtons.forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.value === "Government Organization") {
                departmentField.style.display = 'block';
            } else {
                departmentField.style.display = 'none';
            }
        });
    });
    // Step 3 Form Submission
    step3SubmitBtn.addEventListener("click", function(event) {
        // Validate Step 3 fields
        var departmentField = document.querySelector("input[name='department']");
        var mobileField = document.querySelector("input[name='mobile']");
        var nodalOfficerField = document.querySelector("input[name='nodal_officer']");
        var stateField = document.querySelector("select[name='state']");
        var districtField = document.querySelector("select[name='district']");
        var companyAddrField = document.querySelector("input[name='company_addr']");
        var sectorFields = document.querySelectorAll("input[name='sector']");

        // Check if any of the sector radio buttons are selected
        var sectorSelected = false;
        for (var i = 0; i < sectorFields.length; i++) {
            if (sectorFields[i].checked) {
                sectorSelected = true;
                break;
            }
        }

        // Perform validation
        var isValid = true;
        var departmentErrorMsg = document.getElementById("department-error-msg");
        if (!departmentField.value.trim()) {
            departmentErrorMsg.textContent = "Please enter Department";
            isValid = false;
            
        }
        var mobileErrorMsg = document.getElementById("mobile-error-msg");
        if (!mobileField.value.trim()) {
            mobileErrorMsg.textContent = "Please enter Mobile Number";
            isValid = false;
            // Display error message or style the field to indicate it's required
        }

        var mobileErrorMsg = document.getElementById("password-error-msg");
        if (!mobileField.value.trim()) {
            mobileErrorMsg.textContent = "Please enter Password";
            isValid = false;
            // Display error message or style the field to indicate it's required
        }

        var mobileErrorMsg = document.getElementById("cpassword-error-msg");
        if (!mobileField.value.trim()) {
            mobileErrorMsg.textContent = "Please enter Confirm Password";
            isValid = false;
            // Display error message or style the field to indicate it's required
        }
        var nodalErrorMsg = document.getElementById("nodal-officer-error-msg");
        if (!nodalOfficerField.value.trim()) {
            nodalErrorMsg.textContent = "Please enter Nodal Contact";
            isValid = false;
            // Display error message or style the field to indicate it's required
        }
        var stateErrorMsg = document.getElementById("state-error-msg");
        if (!stateField.value.trim()) {
            stateErrorMsg.textContent = "Please enter State";
            isValid = false;
            // Display error message or style the field to indicate it's required
        }
        var districtErrorMsg = document.getElementById("district-error-msg");
        if (!districtField.value.trim()) {
            districtErrorMsg.textContent = "Please enter District";
            isValid = false;
            // Display error message or style the field to indicate it's required
        }
        var companyAddErrorMsg = document.getElementById("company-address-error-msg");
        if (!companyAddrField.value.trim()) {
            companyAddErrorMsg.textContent = "Please enter Company Address";
            isValid = false;
            // Display error message or style the field to indicate it's required
        }
        // Continue validating other fields...

        // If sector is not selected, mark validation as failed
        
        if (!sectorSelected) {
            isValid = false;
            // Display error message or style the sector radio buttons to indicate one is required
        }

        // If validation fails, prevent form submission
        if (!isValid) {
            event.preventDefault();
            // Optionally display a general error message indicating incomplete fields
            // or specific messages for each field that failed validation
        }
    });


    var emailField = document.getElementById("email");
    emailField.addEventListener("input", function() {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Email pattern
        var emailErrorMsg = document.getElementById("email-error-msg");
        if (emailPattern.test(emailField.value.trim())) {
            emailErrorMsg.textContent = ""; // Clear error message
            step1NextBtn.disabled = false;
        } else {
            emailErrorMsg.textContent = "Please enter a valid email ID";
            step1NextBtn.disabled = true;
        }
    });


    var otpField = document.getElementById("otp");
    otpField.addEventListener("input", function() {
        var otpPattern = /^\d{6}$/;
        var otpErrorMsg = document.getElementById("otp-error-msg");
        if (otpPattern.test(otpField.value.trim())) {
            otpErrorMsg.textContent = ""; // Clear error message
            step2NextBtn.disabled = false;
        } else {
            otpErrorMsg.textContent = "Please enter valid OTP";
            step2NextBtn.disabled = true;
        }
    });
});


// Add this JavaScript code in your <script> tag or in an external JavaScript file
$(document).ready(function() {
    $('#state').change(function() {
        var stateId = $(this).val();
        // alert(stateId);exit;
        if (stateId !== '') {
            $.ajax({
                url: '<?php echo base_url('employer/login/fetch_districts'); ?>',
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


$('#password').on('input', function() {
            var password = $(this).val();
            var passwordErrorMsg = $('#password-error-msg');

            // Password validation criteria
            var strongRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/;

            if (strongRegex.test(password)) {
                passwordErrorMsg.text('');
            } else {
                passwordErrorMsg.text('Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character');
            }
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

</script>

