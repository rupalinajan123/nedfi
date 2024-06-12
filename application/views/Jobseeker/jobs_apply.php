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
<div class="col-md-12 banner-img pr-0"><img src="<?php echo base_url(); ?>uploads/register/job-listing.png"></div>
</div>
</div>
</div>
</div>
<div class="inner-body">

<div class="container common-form tab-main mt-4">
<form role="form" class="main-form" method="post" enctype="multipart/form-data">
<div class="container section1">
<div class="row">
<div class="col-lg-12 ">
<div class="form-title">
<p>Basic details</p> 
</div>
</div>
</div> 
<div class="row mt-4">
<div class="col-md-6 col-lg-6 mb-4">
<select required class="form-select w-100 p-1" name="job">
<option selected value>Application for the post of</option>
<option value="Job 1">Job 1</option>
<option value="Job 2">Job 2</option>
</select>
</div>
<div class="col-md-6 col-lg-6 mb-4">
<select required class="form-select w-100 p-1" name="job_title">
<option selected value>Job Title</option>
<option value="Job Title 1">Job Title 1</option>
<option value="Job Title 2">Job Title 2</option>
</select>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="text" placeholder="First Name" id="firstname" name="firstname" maxlength="50" onkeypress="return /[a-zA-Z\s]/.test(event.key)">
<span id="firstnameError" style="color: red;"></span>
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="text" placeholder="Last Name" id="" name="lastname" maxlength="50" onkeypress="return /[a-zA-Z\s]/.test(event.key)">
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="text" placeholder="Father’s Name" id="" name="fname" maxlength="50" onkeypress="return /[a-zA-Z\s]/.test(event.key)">
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="text" placeholder="Mother’s Name" id="" name="mname" maxlength="50" onkeypress="return /[a-zA-Z\s]/.test(event.key)">
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="date" placeholder="Date of Birth" id="" name="dateOfBirth">
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<select required class="form-select w-100 p-1" id="" name="religion">
<option selected value>Religion</option>
<option value="Religion 1">Religion</option>
<option value="Religion 2">Religion</option>
</select>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="email" placeholder="Email ID" maxlength="50" onblur="validateEmail()" id="email" name="email">
<!-- <input class="form-control" type="email" placeholder="Email ID" maxlength="50"  id="email" name=""> -->
<span id="emailError" style="color: red;"></span>
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<select required class="form-select w-100 p-1" id="" name="maritalStatus">
<option selected value>Marital Status</option>
<option value="Married">Married</option>
<option value="Unmarried">Unmarried</option>
</select>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="text" placeholder="Mobile Number" onblur="validateMobile()" maxlength="10" id="mobile" name="mobile" onkeypress="return /[0-9]/.test(event.key)" >
<span id="mobileError" style="color: red;"></span>
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="text" placeholder="Aadhar Card Number" onblur="validateAdhar()" maxlength="12" id="adhar" name="adhar" onkeypress="return /[0-9]/.test(event.key)" >
<span id="adharError" style="color: red;"></span>
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="text" placeholder="PAN Number" onblur="validatePan()" id="panNumber" name="panNumber" onkeypress="return /[0-9a-zA-Z\s]/.test(event.key)">
<!-- <input class="form-control" type="text" placeholder="PAN Number"  id="panNumber" name=""> -->
<span id="panError" style="color: red;"></span>
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1 national-level">
    <label class="form-label lable">Are you a person with disability?</label>
    <div class="nf-form-wrap">
        <div class="d-flex">
            <div class="nf-radio-wrap mb-4">
                <div class="custom-control custom-radio custom-control-inline pl-0">
                    <input type="radio" id="disabilityYes" value="Yes" name="disability" class="custom-control-input" >
                    <label class="custom-control-label" for="disabilityYes">Yes</label>
                </div>
            </div>
            <div class="nf-radio-wrap mb-4">
                <div class="custom-control custom-radio custom-control-inline pl-0">
                    <input type="radio" id="disabilityNo" value="No"  name="disability" class="custom-control-input" checked>
                    <label class="custom-control-label" for="disabilityNo">No</label>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="container section2 disabled">
<div class="row">
<div class="col-lg-12">
<div class="form-title" >
<p>Employment details</p>
</div>
</div>
</div>
<div class="row mt-4">
<div class="col-md-6 col-lg-6 mb-1 national-level">
    <label class="form-label lable">Are you in Service?</label>
    <div class="nf-form-wrap">
        <div class="d-flex">
            <div class="nf-radio-wrap mb-4">
                <div class="custom-control custom-radio custom-control-inline pl-0">
                    <input type="radio" id="serviceYes" value="Yes" name="service" class="custom-control-input" >
                    <label class="custom-control-label" for="serviceYes">Yes</label>
                </div>
            </div>
            <div class="nf-radio-wrap mb-4">
                <div class="custom-control custom-radio custom-control-inline pl-0">
                    <input type="radio" id="serviceNo" value="No" name="service" class="custom-control-input">
                    <label class="custom-control-label" for="serviceNo">No</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="text" placeholder="Name of Present Organization" id="organization" name="organization" onkeypress="return /[0-9a-zA-Z\s]/.test(event.key)">
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">

<input class="form-control" type="date" placeholder="Date of Joining" id="" name="dateOfJoining">
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="text" placeholder="Communication Address of Present Organization" id="" name="communicationOrganization" onkeypress="return /[0-9a-zA-Z\s]/.test(event.key)"> 
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group">
<input class="form-control" type="text" placeholder="Designation in Present Organization" id="" name="designationOrganization" onkeypress="return /[0-9a-zA-Z\s]/.test(event.key)">
</div>
</div>

<div>

</div>

<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group upload-file-main">
<label  class="form-label lable" for="myfile">Upload Your Photograph</label><br>
  <input type="file" id="photo-upload" name="photoImage"><br>
</label>
<span>Image size should be less than 300KB.</span>
</div>
</div>

<div class="col-md-6 col-lg-6 mb-1">
<div class="form-group upload-file-main">
<label class="form-label lable" for="myfile">Upload Your Signature</label><br>
  <input type="file" id="myfile" name="SignImage"><br>
</label>
<span class="file">Image size should be less than 200KB.</span>
</div>
</div>
</div>
</div>
<div class="container section3 disabled">
<div class="row">
<div class="col-lg-12">
<div class="form-title">
<p>Place & Date</p>
</div>
</div>
</div>
<div class="row mt-4">
<div class="col-md-6 col-lg-6 mb-1 mt-4">
<div class="form-group">
<input class="form-control" type="text" placeholder="Place" id="" name="place" onkeypress="return /[0-9a-zA-Z\s]/.test(event.key)">
</div>
</div>
<div class="col-md-6 col-lg-6 mb-1 mt-4">
<div class="form-group">

<input class="form-control" type="date" placeholder="Date" id="" name="date">
</div>
</div>
<div class="col-md-6 col-lg-4 mb-4">
<label class="form-label lable w-100">Captcha</label>
<div class="g-recaptcha" data-sitekey="6Lc0xMopAAAAAGEwHfk0RSyzB9ihW3a3bAS1jwaR"></div>
<span class="error-msg" id="recaptcha-error-msg"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 ">
<ul class="list-inline">
<li><button type="button" class="default-btn prev-step">Cancel</button></li>
<li><button type="submit" name="submit" class="default-btn next-step" >Submit</button></li>
</ul>
</div>
</div>
</form>
</div>

</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>

document.addEventListener("DOMContentLoaded", function() {
  const form = document.querySelector('.main-form');
  const section1Fields = form.querySelectorAll('.section1 input, .section1 select');
  const section2Fields = form.querySelectorAll('.section2 input, .section2 select, .section2 input[type="file"]');
  const section3Fields = form.querySelectorAll('.section3 input, .section3 select');
  const section2 = document.querySelector('.section2');
  const section3 = document.querySelector('.section3');
  const submitButton = form.querySelector('.next-step');

  // Function to check if all fields in a section are filled
  function areFieldsFilled(fields) {
    return Array.from(fields).every(field => {
      if (field.type === 'radio') {
        const radioGroup = document.getElementsByName(field.name);
        return Array.from(radioGroup).some(radio => radio.checked);
      } else if (field.type === 'file') {
        return field.files.length > 0;
      } else {
        return field.value.trim() !== '';
      }
    });
  }

  // Function to enable or disable a section
  function toggleSection(section, enable) {
    const fields = section.querySelectorAll('input, select');
    fields.forEach(field => {
      field.disabled = !enable;
    });
    if (enable) {
      section.classList.remove('disabled');
    } else {
      section.classList.add('disabled');
    }
  }

  // Function to check and enable/disable sections
  function checkSections() {
    const section1Filled = areFieldsFilled(section1Fields);
    const section2Filled = areFieldsFilled(section2Fields);
    const section3Filled = areFieldsFilled(section3Fields);

    toggleSection(section2, section1Filled);
    toggleSection(section3, section2Filled);
    submitButton.disabled = !section3Filled;
  }
  // Add event listeners to form fields to check sections on change
  form.addEventListener('input', checkSections);

  // Initial check
  checkSections();

  
});



function validatePan() {
    var panInput = document.getElementById("panNumber");
    var panError = document.getElementById("panError");
    var panNumber = panInput.value.trim();
    var panRegex = /[A-Z]{5}[0-9]{4}[A-Z]{1}/;
    
    if (panRegex.test(panNumber)) {
        panError.textContent = "";
    } else {
        panError.textContent = "Invalid PAN format. Please enter a valid PAN.";
    }
}

function validateAdhar() {
    var adharInput = document.getElementById("adhar");
    var adharError = document.getElementById("adharError");
    var adharValue = adharInput.value.trim();
    var adharRegex = /^\d{12}$/;

    if (adharRegex.test(adharValue)) {
        adharError.textContent = "";
    } else {
        adharError.textContent = "Aadhar number must be 12 digits.";
       
    }
}

function validateMobile() {
  var mobileInput = document.getElementById("mobile");
  var mobileError = document.getElementById("mobileError");
  var mobileValue = mobileInput.value.trim();
  var mobileRegex =  /^\d{10}$/;

  if (mobileRegex.test(mobileValue)) {
        mobileError.textContent = "";
    } else {
        mobileError.textContent = "Mobile number must be 10 digits.";
    }
}

function validateEmail() {
    var emailInput = document.getElementById("email");
    var emailError = document.getElementById("emailError");
    var emailValue = emailInput.value.trim();
    var emailRegex = /\S+@\S+\.\S+/;

    if (emailRegex.test(emailValue)) {
        emailError.textContent = "";
    } else {
        emailError.textContent = "Invalid email format. Please enter a valid email.";
       
    }
}

// function validate() {
//     var firstNameInput = document.getElementById("firstname");
//     var adharInput = document.getElementById("adhar");

//     var firstNameError = document.getElementById("firstnameError");
//     var adharError = document.getElementById("adharError");
  

//     var firstname = firstNameInput.value.trim();
//     var adharValue = adharInput.value.trim();
   

//     var Regex = /^[a-zA-Z\s]+$/;
    
//     if (Regex.test(firstname)) {
//         firstNameError.textContent = "";
//     } else {
//         firstNameError.textContent = "Invalid first name format. Please enter a valid first name.";
//     }

//     if (/^\d{12}$/.test(adharValue)) {
//         adharError.textContent = "";
//     } else {
//         adharError.textContent = "Aadhar number must be 12 digits.";
//     }

//     // Validation for Mobile Number
   
// }




</script>
