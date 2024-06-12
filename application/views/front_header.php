<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>NEDFi</title>
<meta name="description" content>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="site.html">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>uploads/img/favicon.png">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/lib.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
<!-- <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body  onload="getcookiedata()"> 

<header id="home">
<div class="header-area">

<div class="header-top primary-bg">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<div class="header-contact-info d-flex">
<div class="header-contact">
<span class="emblem"><img src="<?php echo base_url(); ?>uploads/emblem.png" alt="emblem of india"></span>
<h4>NOrth eastern council <span> Ministry of Development of North Eastern Region | Government OF INDIA</span></h4>
</div>
</div>
</div>
<div class="col-md-6 top-right">
<div class="nf-social-links-top">
<ul>
<li>
<a href="#">
<img src="<?php echo base_url(); ?>uploads/s-icon-1.png" alt="facebook">
</a>
</li>
<li>
<a href="#">
<img src="<?php echo base_url(); ?>uploads/s-icon-2.png" alt="twitter">
</a>
</li>
<li>
<a href="#">
<img src="<?php echo base_url(); ?>uploads/s-icon-3.png" alt="instagram">
</a>
</li>
<li>
<a href="#">
<img src="<?php echo base_url(); ?>uploads/s-icon-4.png" alt="youtube">
</a>
</li>
</ul>
</div>
<div class="header-contact">
<div class="phone-number dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown"><span class="user"><img src="<?php echo base_url(); ?>uploads/user.png"></span></div>
<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="#">Contact Us</a>
<a class="dropdown-item" href="#">Profile</a>
<a class="dropdown-item" href="login/logout">Logout </a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="header-bottom-area header-sticky" style="transition: .6s;">
<div class="container">
<div class="row">
<div class="col-md-6 menu-left">
<div class="logo">
<a href="index.php">ACT NORTH EAST LOGO</a>
</div>
<div class="lang">
<select id="lang" class="lang-dropdown">
<option>English</option>
<option>Hindi</option>
</select>
</div>
</div>
<div class="col-md-6 menu-right">
<div class="header-bottom-icon f-right">
<div class="toggle-search-box">
<form action="#" id="searchbox">
<input placeholder="Search here" type="text">
<button class="button-search"><span class="ti-search"></span></button>
</form>
</div>
</div>
</div>
</div>

<div id="menuzord" class="menuzord">
<ul class="menuzord-menu">
<li><a href="<?php echo base_url(); ?>">About</a></li>
<li><a href="javascript:void(0)">Jobs at NCS</a></li>
<li><a href="<?php echo base_url(); ?>Employer/login">Post a Job</a></li>
<li><a href="<?php echo base_url(); ?>Jobseeker/login">Apply for Job</a>
<li><a href="javascript:void(0)">Explore CV database</a>
<li><a href="#">Resources</a></li>
</ul>
</div>
</div>

</div>
</header>
