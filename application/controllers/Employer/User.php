<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Master_model'); 
        //  echo"Hii";exit;
		// print_r($this->session->userdata('user'));exit;
		if (!$this->session->userdata('user')) {
            // If user session data doesn't exist, redirect to login page
            redirect('employer/login'); // Change 'login' to your actual login page route
        }
    }

	
	public function index()
	{
		// print_r($this->session->userdata('user'));exit;
		$search_params = array(
            'jobId' => $this->input->post('jobId'),
            'jobTitle' => $this->input->post('jobTitle'),
            'jobStatus' => $this->input->post('jobStatus')
        );

        $this->db->where('is_deleted', '0');
        
        // Apply search filters if provided
        if (!empty($search_params['jobId'])) {
            $this->db->where('id', $search_params['jobId']);
        }
        if (!empty($search_params['jobTitle'])) {
            $this->db->like('job_title', $search_params['jobTitle']);
        }
        if (!empty($search_params['jobStatus'])) {
            $this->db->where('status', $search_params['jobStatus']);
        }
		
		$jobdata=$this->master_model->getRecords('emp_job');
		$this->data['jobdata']=$jobdata;
        $this->data['middle_content']   = 'employer/emp_list';
		$this->load->view('common_view',$this->data);
	}

	public function create()
	{
		
		if(isset($_POST['submit']))
		{
			$this->form_validation->set_rules('job_title', 'Email', 'required');
			$this->form_validation->set_rules('job_category', 'OTP', 'required');
			$this->form_validation->set_rules('nature_of_job', 'Sector', 'required');
			$this->form_validation->set_rules('sub_Category', 'Mobile', 'required');
			$this->form_validation->set_rules('job_opening', 'Password', 'required');
			$this->form_validation->set_rules('address', 'Confirmed Password', 'required');
			$this->form_validation->set_rules('gender', 'Nodal_officer', 'required');
			$this->form_validation->set_rules('qualification', 'State', 'required');
			$this->form_validation->set_rules('min_percentage', 'District', 'required');
			$this->form_validation->set_rules('experience', 'Company_addr', 'required');
			$this->form_validation->set_rules('skills', 'Email', 'required');
			$this->form_validation->set_rules('sector', 'OTP', 'required');
			$this->form_validation->set_rules('organization', 'Organization', 'required');
			$this->form_validation->set_rules('employment_type', 'Sector', 'required');
			$this->form_validation->set_rules('sallary_range', 'Mobile', 'required');
			$this->form_validation->set_rules('start_date', 'Password', 'required');
			$this->form_validation->set_rules('end_date', 'Confirmed Password', 'required');
			$this->form_validation->set_rules('workingDay', 'Nodal_officer', 'required');
			$this->form_validation->set_rules('incentive', 'State', 'required');
			$this->form_validation->set_rules('location', 'District', 'required');
			$this->form_validation->set_rules('country', 'Company_addr', 'required');
			$this->form_validation->set_rules('state', 'Company_addr', 'required');

			if($this->form_validation->run() === TRUE){
			$job_title = $this->input->post('job_title');
			$job_category = $this->input->post('job_category');
			$nature_of_job = $this->input->post('nature_of_job');
			$sub_Category = $this->input->post('sub_Category');
			$job_opening = $this->input->post('job_opening');
			$address = $this->input->post('address');
			$gender = $this->input->post('gender');
			$qualification = $this->input->post('qualification');
			$min_percentage = $this->input->post('min_percentage');
			$experience = $this->input->post('experience');
			$skills = $this->input->post('skills');
			$sector = $this->input->post('sector');
			$organization = $this->input->post('organization');
			$employment_type = $this->input->post('employment_type');
			$sallary_range = $this->input->post('sallary_range');
			$start_date = $this->input->post('start_date');
			$end_date = $this->input->post('end_date');
			$workingDay = $this->input->post('workingDay');
			$incentive = $this->input->post('incentive');
			$location = $this->input->post('location');
			$country = $this->input->post('country');
			$state = $this->input->post('state');

			$arr_data = array(
				'job_title' => $job_title,
				'job_category' => $job_category,
				'nature_of_job' => $nature_of_job,
				'sub_Category' => $sub_Category,
				'job_opening' => $job_opening,
				'address' => $address,
				'gender' => $gender,
				'qualification' => $qualification,
				'min_percentage' => $min_percentage,
				'experience' => $experience,
				'skills' => $skills,
				'sector' => $sector,
				'organization' => $organization,
				'employment_type' => $employment_type,
				'sallary_range' => $sallary_range,
				'start_date' => $start_date,
				'end_date' => $end_date,
				'workingDay' => $workingDay,
				'incentive' => $incentive,
				'location' => $location,
				'country' => $country,
				'state' => $state
			);
			$this->master_model->insertRecord("emp_job",$arr_data);
			$this->session->set_flashdata('success_message','Employer Job Data Added successfully');
			redirect(base_url()."employer/user");
			}
			else{
				$this->session->set_flashdata('error_message'," Something Went Wrong");
			}
		}

		$state_info=$this->master_model->getRecords("states");
        $this->data['state_info'] = $state_info;
		$this->data['middle_content']   = 'employer/emp_create';
		$this->load->view('common_view',$this->data);
	}

    public function edit($id)
	{
		
		if(is_numeric($id))
        {   
			$this->db->where('id',$id);
            $array_data = $this->master_model->getRecords('emp_job');
		if(isset($_POST['submit']))
		{
			
			$this->form_validation->set_rules('job_title', 'Email', 'required');
			$this->form_validation->set_rules('job_category', 'OTP', 'required');
			$this->form_validation->set_rules('nature_of_job', 'Sector', 'required');
			$this->form_validation->set_rules('sub_Category', 'Mobile', 'required');
			$this->form_validation->set_rules('job_opening', 'Password', 'required');
			$this->form_validation->set_rules('address', 'Confirmed Password', 'required');
			$this->form_validation->set_rules('gender', 'Nodal_officer', 'required');
			$this->form_validation->set_rules('qualification', 'State', 'required');
			$this->form_validation->set_rules('min_percentage', 'District', 'required');
			$this->form_validation->set_rules('experience', 'Company_addr', 'required');
			$this->form_validation->set_rules('skills', 'Email', 'required');
			$this->form_validation->set_rules('sector', 'OTP', 'required');
			$this->form_validation->set_rules('employment_type', 'Sector', 'required');
			$this->form_validation->set_rules('sallary_range', 'Mobile', 'required');
			$this->form_validation->set_rules('start_date', 'Password', 'required');
			$this->form_validation->set_rules('end_date', 'Confirmed Password', 'required');
			$this->form_validation->set_rules('workingDay', 'Nodal_officer', 'required');
			$this->form_validation->set_rules('incentive', 'State', 'required');
			$this->form_validation->set_rules('location', 'District', 'required');
			$this->form_validation->set_rules('country', 'Company_addr', 'required');
			$this->form_validation->set_rules('state', 'Company_addr', 'required');

			if($this->form_validation->run() === TRUE){
			$job_title = $this->input->post('job_title');
			$job_category = $this->input->post('job_category');
			$nature_of_job = $this->input->post('nature_of_job');
			$sub_Category = $this->input->post('sub_Category');
			$job_opening = $this->input->post('job_opening');
			$address = $this->input->post('address');
			$gender = $this->input->post('gender');
			$qualification = $this->input->post('qualification');
			$min_percentage = $this->input->post('min_percentage');
			$experience = $this->input->post('experience');
			$skills = $this->input->post('skills');
			$sector = $this->input->post('sector');
			$employment_type = $this->input->post('employment_type');
			$sallary_range = $this->input->post('sallary_range');
			$start_date = $this->input->post('start_date');
			$end_date = $this->input->post('end_date');
			$workingDay = $this->input->post('workingDay');
			$incentive = $this->input->post('incentive');
			$location = $this->input->post('location');
			$country = $this->input->post('country');
			$state = $this->input->post('state');

			$arr_update = array(
				'job_title' => $job_title,
				'job_category' => $job_category,
				'nature_of_job' => $nature_of_job,
				'sub_Category' => $sub_Category,
				'job_opening' => $job_opening,
				'address' => $address,
				'gender' => $gender,
				'qualification' => $qualification,
				'min_percentage' => $min_percentage,
				'experience' => $experience,
				'skills' => $skills,
				'sector' => $sector,
				'employment_type' => $employment_type,
				'sallary_range' => $sallary_range,
				'start_date' => $start_date,
				'end_date' => $end_date,
				'workingDay' => $workingDay,
				'incentive' => $incentive,
				'location' => $location,
				'country' => $country,
				'state' => $state
			);
			// print_r($arr_update);exit;

			$arr_where = array(
				"id" => $id
			);
			// print_r($arr_where);exit;
			$this->master_model->updateRecord("emp_job",$arr_update, $arr_where);
			$this->session->set_flashdata('success_message','Employer Job Data Updated successfully');
			redirect(base_url()."employer/user");
			}
			else{
				$this->session->set_flashdata('error_message'," Something Went Wrong");
			}
		}
	}
	   
		// print_r($this->data['arr_data']);exit;
		$state_info=$this->master_model->getRecords("states");
		$this->data['arr_data']        = $array_data;
        $this->data['state_info'] = $state_info;
		$this->data['middle_content']   = 'employer/emp_edit';
		$this->load->view('common_view',$this->data);
	}
	public function changeStatus()
	{
		$id = $this->uri->segment(4);
		$status = $this->uri->segment(5);
		$cur_url = $this->uri->segment(6);
	
		if($status=='Active'){$newstatus = 'Inactive'; }
		else if($status=='Inactive'){$newstatus = 'Active';}
	
		if($this->master_model->updateRecord("emp_job",array('status'=>$newstatus),array('id'=>$id)))
		{
			$this->session->set_flashdata('success_message','News status changed successfully.');										         
			redirect(base_url().'employer/user/'.$cur_url);	
		}
		else
		{
			$this->session->set_flashdata('error_message','Error while updating news status.');										         
			redirect(base_url().'employer/user/'.$cur_url);	
		}
	}

	public function delete($id  = 0)
	{
		$cur_url = $this->uri->segment(5);
		$job_info = $this->master_model->getRecords("emp_job",array("id"=>$id));
		// print_r($job_info);exit;
		    if($job_info)
			{
			$arr_update = array('is_deleted' => '1');
			$arr_where     = array(
				"id" => $id
			   );
			$this->master_model->updateRecord("emp_job", $arr_update, $arr_where);
// 	        echo $this->db->last_query();
// exit; 
			$this->session->set_flashdata('success_message', 'Job deleted successfully');
			}
			$this->session->set_flashdata('success_message', 'Oops,Something Went Wrong');
		
		redirect(base_url()."employer/user/".$cur_url);
	}
	

}
