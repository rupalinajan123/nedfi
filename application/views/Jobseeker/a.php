<link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
<div class="inner-banner">
<div class="container">
<div class="banner-title">
<h3>Government Job</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Employment</a></li>
<li class="breadcrumb-item active">Government Job</li>
</ul>
</div>
<div class="banner-content jobSeeker-tabs">
<div class="banner-img pr-0"><img src="<?php echo base_url(); ?>uploads/register/job-listing.png"></div>
<ul class="nav nav-pills" id="pills-tab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link" data-toggle="pill" data-target="#myprofile">My Profile</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link active show" data-toggle="pill" data-target="#jobs">Jobs</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" data-toggle="pill" data-target="#internships">Internships</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" data-toggle="pill" data-target="#courses">Certificate Courses</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" data-toggle="pill" data-target="#resources">Resources</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" data-toggle="pill" data-target="#events">Events</button>
</li>
</ul>
</div>
</div>
</div>


<div class="inner-body">
<div class="container">
<div class="tab-content jobSeeker-content" id="pills-tabContent">
<div class="tab-pane" id="myprofile">
<div class="table-responsive">
<?php  if(count($jobdata) > 0 ) 
										 			{ ?>
<table id="jobTable1" class="table table-striped" style="width:100%">
<thead>
<tr>
<th>Sr No.</th>
<th>Job Id</th>
<th>Job Title</th>
<th>Applied Date</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php  
                   $i=1; 
                   
                   foreach($jobdata as $info) 
                   { 
                     ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo isset($info['id'])&&$info['id']!=''?$info['id']:''; ?></td>
<td><?php echo isset($info['job_title'])&&$info['job_title']!=''?$info['job_title']:''; ?></td>
<td><?php echo isset($info['last_modified'])&&$info['last_modified']!=''?$info['last_modified']:''; ?></td>
<td> 
	<?php if($info['status']=="Active"){ ?>
	<a href="<?php echo base_url(); ?>Jobseeker/jobs/changeStatus/<?php echo $info['id'].'/'.$info['status'].'/'.$this->uri->segment(3); ?>"><button class="badge badge-success">Active </button> </a><?php }
						
	else if($info['status']=="Inactive"){ ?>
 	<a href="<?php echo base_url(); ?>Jobseeker/jobs/changeStatus/<?php echo $info['id'].'/'.$info['status'].'/'.$this->uri->segment(3); ?>"><button class="badge badge-danger">Block</button> </a><?php } ?>
</td>
                  
</tr>
<?php $i++; } ?>
</tbody>
</table>
<?php } else
											 {echo '<div class="alert alert-danger alert-dismissable">
														<i class="fa fa-ban"></i>
														<b>Alert!</b>
														Sorry No records available
														</div>' ; } ?>

</div>
</div>


<div class="tab-pane fade active show" id="jobs">
<form id="form_id" method="post">
<div class="empsearch-wrapper empform">

<div class="emp-search empbox">
<img src="<?php echo base_url();?>uploads/search.svg " alt="f-img">
<input type="text" id="keyword" name="keyword" class="form-control" value="<?php echo (isset($_POST['keyword']))?$_POST['keyword']:'';?>" placeholder="What position are you looking for ?">
</div>
<div class="emp-location empbox">
<img src="<?php echo base_url();?>uploads/mappin.svg" alt="f-img">
<input type="text" id="location" name="location" class="form-control" value="<?php echo (isset($_POST['location']))?$_POST['location']:'';?>" placeholder="Location">
</div>
<div class="emp-btn empbox">
<button type="submit" name="search" class="nf-button-v-small">Search Job</button>
</div>
</div>
<div class="empjob-wrapper">
<div class="row">
<div class="col-lg-3">
<div class="sidebar-wrapper">
<h4>All Filter</h4>
<div class="box">
<h5>Location</h5>

<li>
<?php foreach ($state_info as $state) { ?>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="check1">
<label class="custom-control-label" for="check1"><?php echo $state->State_name; ?></label>
</div>
<?php } ?>
</li>

<!-- <ul>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="check1">
<label class="custom-control-label" for="check1">All India </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="check2">
<label class="custom-control-label" for="check2">Hyderabad </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="check3">
<label class="custom-control-label" for="check3">Maharashtra </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="check4">
<label class="custom-control-label" for="check4">Assam </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="check5">
<label class="custom-control-label" for="check5">Chennai </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="check6">
<label class="custom-control-label" for="check6">Kolkata </label>
</div>
</li>
</ul>
</div>
<div class="box">
<h5>Sector</h5>
<ul>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="sector1">
<label class="custom-control-label" for="sector1">Manufacturing </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="sector2">
<label class="custom-control-label" for="sector2">Agriculture and Related </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="sector3">
<label class="custom-control-label" for="sector3">Education </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="sector4">
<label class="custom-control-label" for="sector4">Public Administration and Defense </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="sector5">
<label class="custom-control-label" for="sector5">Operations and Support </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="sector6">
<label class="custom-control-label" for="sector6">Power and Energy </label>
</div>
</li>
</ul> -->
</div>
<!-- <div class="box">
<h5>Work experience</h5>
<ul>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="exp1">
<label class="custom-control-label" for="exp1">Any experience </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="exp2">
<label class="custom-control-label" for="exp2">Internship </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="exp3">
<label class="custom-control-label" for="exp3">Work remotely </label>
</div>
</li>
</ul>
</div>
<div class="box">
<h5>Nature of Job</h5>
<ul>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="job1">
<label class="custom-control-label" for="job1">Full-time </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="job2">
<label class="custom-control-label" for="job2">Temporary </label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="job3">
<label class="custom-control-label" for="job3">Part-time </label>
</div>
</li>
</ul>
</div> -->
</div>
</div>
<div class="col-lg-9">
<div class="empmiddle-wrapper">
<h3><?php  echo "Total Jobs - ".$count; ?></h3>
<?php  
                   $i=1; 
                   foreach($emp as $info) 
                   { 
                     ?>


<div class="card card-body">
<div class="emp-head">
<div class>
<p><?php echo $info['organization']; ?></p>
<h3><?php echo $info['job_title']; ?></h3>
</div>
<div class="d-flex align-items-center">
<button type="button" class="nf-white-button">Save</button>
<a href="<?php echo base_url(); ?>jobseeker/jobs/applyToJob" class="nf-button-v-small ml-2" >Apply Job</a>
</div>
</div>
<ul class="job-details">
<li>
<i class="fa fa-map-marker"></i>
<span><strong>Location :</strong><?php echo $info['location']; ?></span>
</li>
<li>
<i class="fa fa-briefcase"></i>
<span><strong>Nature of Job :</strong><?php echo $info['nature_of_job']; ?></span>
</li>
<li>
<i class="fa fa-credit-card"></i>
<span><strong>Salary :</strong><?php echo $info['sallary_range']; ?></span>
</li>
<li>
<i class="fa fa-calendar-o"></i>
<span><strong>Posted On :</strong> <?php echo $info['start_date']; ?></span>
</li>
</ul>
<p>Mollit in laborum tempor Lorem incididunt irure. Aute eu ex ad sunt. Pariatur sint culpa do incididunt eiusmod eiusmod culpa. laborum tempor Lorem incididunt.</p>
</div>
<?php $i++; } ?>
<div class="card card-body">
<div class="emp-head">
<div class>
</div>
<nav aria-label="...">
<ul class="pagination justify-content-center">
<li class="page-item">
<a class="page-link">Previous</a>
</li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item active" aria-current="page">
<a class="page-link" href="#">2</a>
</li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
<a class="page-link" href="#">Next</a>
</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
<script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
<script type="text/javascript">
let table = new DataTable('#jobTable1');
<script>