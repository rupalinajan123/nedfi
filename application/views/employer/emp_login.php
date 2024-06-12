<div class="emplogin-wrapper" > 
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="login-img">
<img src="<?php echo base_url(); ?>uploads/emp-login.png" alt="login">
</div>
</div>
<div class="col-lg-6 d-flex align-items-center">
<div class="emplogin-form">
<h2>Employer Login</h2>
 <?php 
if ($this->session->flashdata('error_message')) {
    echo '<div class="alert alert-danger">' . $this->session->flashdata('error_message') . '</div>';
}
?>
<h6>Welcome! Enter Your Details & Stay updated with your Professional World.</h6>
<form action="" method="post" >
<div class="form-group">
<label for="email">Email address</label>

<input type="text" name="email" class="form-control" id="email" placeholder="email" value="<?php echo set_value('email'); ?>">
</div>
<div class="form-group">
      <label for="password">Password</label>
      <div class="password-input">
        <input type="password" name="password" class="form-control" id="password" placeholder="password">
        <span toggle="#password" class="eye-icon fas fa-eye"></span>
      </div>
    </div>
    
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me" onclick=setcookie();>
<label class="form-check-label" for="exampleCheck1">Remember me</label>
</div>
<div class="login-button">
<button type="submit" name="submit" class="btn btn-login">Login</button>
</div>
<p class="emp-acc">Don't have an account? <a href="<?php echo base_url(); ?>employer/login/registration">Create account</a></p>
</form>
</div>
</div>
</div>
</div>
</div>

<script>
    document.querySelector('.eye-icon').addEventListener('click', function() {
      const password = document.querySelector(this.getAttribute('toggle'));
      this.classList.toggle('fa-eye-slash');
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
    });


    function setcookie(){
      
       var u = document.getElementById('email').value;
       var p = document.getElementById('password').value;

       document.cookie="myemail="+u+";path=http://localhost/nedfi_uat";
       document.cookie="mypassword="+p+";path=http://localhost/nedfi_uat";
    }
     function getcookiedata()
     {
        //  alert("Hii");
         console.log(document.cookie);

         var user = getCookie('myemail');
         var pswd = getCookie('mypassword');
        //  console.log(pswd);
         document.getElementById('email').value = user;
         document.getElementById('password').value = pswd;

     }


     function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }
  </script>