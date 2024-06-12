<link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
<div class="inner-banner">
<div class="container">
<div class="banner-title">
<h3>Post/Job Listings</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Employment</a></li>
<li class="breadcrumb-item active">Job Listing</li>
</ul>
</div>
<div class="banner-content">
<div class="banner-img pr-0" ><img src="<?php echo base_url(); ?>uploads/register/job-listing.png"></div>
</div>
</div>
</div>


<div class="inner-body">
<div class="container">
<!-- <div class="filter-form empform">
<form method="post" action="<?php echo base_url('employer/user/index'); ?>">
<div class="row">
<div class="col-md-3">
<input type="text" name="jobId" class="form-control" placeholder="Job Id">
</div>
<div class="col-md-3">
<input type="text" name="jobId" class="form-control" placeholder="Job Title">
</div>
<div class="col-md-3">
<input type="text" name="jobId" class="form-control" placeholder="Job Status">
</div>
<div class="col-md-3 empf-btn">
<button type="submit" class="nf-button-v-small">Search</button>
<button type="button" class="nf-white-button">Clear</button>
</div>
</div>
</form>
</div> -->
<div class="card card-body">
<div class="createJob">
<a href="<?php echo base_url()?>employer/user/create" class="nf-button-v-small"><i class="fa fa-plus mr-2"></i> Create Job</a>
</div>
<div class="table-responsive">
<?php  if(count($jobdata) > 0 ) 
										 			{ ?>
<table id="jobTable1" class="table table-striped" style="width:100%">
<thead>
<tr>
<th>Sr No.</th>
<th>Job Id</th>
<th>Job Title</th>
<th>Start Date</th>
<th>End Date</th>
<th>Application Received</th>
<th>Status</th>
<th>Action</th>
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
<td><?php echo isset($info['start_date'])&&$info['start_date']!=''?$info['start_date']:''; ?></td>
<td><?php echo isset($info['end_date'])&&$info['end_date']!=''?$info['end_date']:''; ?></td>
<td><?php echo "comming soon"; ?></td>
<td> 
	<?php if($info['status']=="Active"){ ?>
	<a href="<?php echo base_url(); ?>employer/user/changeStatus/<?php echo $info['id'].'/'.$info['status'].'/'.$this->uri->segment(3); ?>"><button class="badge badge-success">Active </button> </a><?php }
						
	else if($info['status']=="Inactive"){ ?>
 	<a href="<?php echo base_url(); ?>employer/user/changeStatus/<?php echo $info['id'].'/'.$info['status'].'/'.$this->uri->segment(3); ?>"><button class="badge badge-danger">Block</button> </a><?php } ?>
</td>

<td>
    <a href="<?php echo base_url();?>employer/user/edit/<?php echo $info['id'];  ?>" ><button class="badge badge-success">Edit</button></a>
    &nbsp;
    <!-- <a href="<?php echo base_url();?>employer/user/details/<?php echo $info['id'].'/'.$back;  ?>" ><button class="btn btn-info btn-sm">Details</button></a> -->
    &nbsp;
    <a href="<?php echo base_url();?>employer/user/delete/<?php echo $info['id'].'/'.$this->uri->segment(3);  ?>" onclick="return confirm_action(this,event)"  class="con_delete"><button class="badge badge-danger">Delete</button></a>
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
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
<script type="text/javascript">
let table = new DataTable('#jobTable1');

// $(document).ready(function() {
//     $('#jobTable').DataTable();
// });
</script>
<script type="text/javascript">
    function confirm_action(ref,evt,msg)
    {
       
           var msg = msg || false;

        //    alert(msg);exit

            evt.preventDefault();  
           
            swal.fire({
                  title: "Are you sure ?",
                  text: msg,
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#0aa89e",
                  confirmButtonText: "Yes",
                  cancelButtonText: "No",
                  closeOnConfirm: false,
                  closeOnCancel: true
                }).then((result) => {
        if (result.isConfirmed) {
            window.location = $(ref).attr('href');
        }
    });

            } 
</script>


