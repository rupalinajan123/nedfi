<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
//  echo "Hiigdg";
	public function __construct() {
        parent::__construct();
        $this->load->model('Master_model'); 
        $this->load->library('upload');
        if(!$this->session->userdata('jobdata'))
        {
            redirect("jobseeker/login");
        }
        
    }


    public function index()
	{
       if(isset($_POST['search'])){
        $keyword = $this->input->post('keyword');
        $location = $this->input->post('location');
        // print_r($keyword);exit;
        if ($keyword) {
            $this->db->like('job_title', $keyword);  
        }
        if($location)
        {
            $this->db->like('location', $location);
        }
        
    //    echo $this->db->last_query();exit;
      }

        $this->db->where('is_deleted', '0');
        $emp = $this->master_model->getRecords('emp_job');

        $this->db->where('is_deleted', '0');
        $jobdata=$this->master_model->getRecords('job_application');


		$this->data['jobdata']=$jobdata;

        
        
        $count = count($emp);
        $query = $this->db->get('states');
        $state_info = $query->result();
		$this->data['state_info'] = $state_info;
        $this->data['count']=$count;
        $this->data['emp']=$emp;
        $this->data['middle_content']   = 'Jobseeker/jobs_list';
		$this->load->view('common_view',$this->data);
    }

    public function search() {
        // Get search parameters from the form submission
        

        // Load a view to display search results
        $this->load->view('search_results', $data);
    }
    

    public function applyToJob()
    {
        $error="";
        if(isset($_POST['submit']))
        {
            $this->form_validation->set_rules('job', 'Email', 'required');
            $this->form_validation->set_rules('job_title', 'Email', 'required');
			$this->form_validation->set_rules('firstname', 'OTP', 'required');
			$this->form_validation->set_rules('lastname', 'Sector', 'required');
			$this->form_validation->set_rules('fname', 'Mobile', 'required');
			$this->form_validation->set_rules('mname', 'Password', 'required');
			$this->form_validation->set_rules('dateOfBirth', 'Confirmed Password', 'required');
			$this->form_validation->set_rules('religion', 'Nodal_officer', 'required');
			$this->form_validation->set_rules('email', 'State', 'required|valid_email');
			$this->form_validation->set_rules('maritalStatus', 'District', 'required');
			$this->form_validation->set_rules('mobile', 'Company_addr', 'required');
			$this->form_validation->set_rules('adhar', 'Email', 'required');
			$this->form_validation->set_rules('panNumber', 'OTP', 'required');
			$this->form_validation->set_rules('disability', 'Organization', 'required');
			$this->form_validation->set_rules('service', 'Sector', 'required');
			$this->form_validation->set_rules('organization', 'Mobile', 'required');
			$this->form_validation->set_rules('dateOfJoining', 'Password', 'required');
			$this->form_validation->set_rules('communicationOrganization', 'Confirmed Password', 'required');
			$this->form_validation->set_rules('designationOrganization', 'Nodal_officer', 'required');
            $this->form_validation->set_rules('place', 'State', 'required');
            $this->form_validation->set_rules('date', 'State', 'required');

            $recaptchaResponse = $this->input->post('g-recaptcha-response');
			$recaptchaSecretKey = '6Lc0xMopAAAAAEk40jfp1_2fqcs4R-0KXvpZ4K2f'; // Replace with your actual reCAPTCHA secret key
			
			$recaptchaVerifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
			$recaptchaVerifyData = array(
				'secret' => $recaptchaSecretKey,
				'response' => $recaptchaResponse
			);
			
			$recaptchaVerifyOptions = array(
				'http' => array(
					'method' => 'POST',
					'header' => 'Content-type: application/x-www-form-urlencoded', // Specify the content type
					'content' => http_build_query($recaptchaVerifyData)
				)
			);
			
			$recaptchaVerifyContext = stream_context_create($recaptchaVerifyOptions);
			$recaptchaVerifyResult = file_get_contents($recaptchaVerifyUrl, false, $recaptchaVerifyContext);
			$recaptchaVerifyJson = json_decode($recaptchaVerifyResult, true);
			
			if (!$recaptchaVerifyJson['success']) {
				// reCAPTCHA verification failed
				// Handle the error (e.g., display an error message)
				echo "reCAPTCHA verification failed";
				
			}  else{

            if($this->form_validation->run() == TRUE){
                // echo "Hii";exit;
                $job = $this->input->post('job');
			    $job_title = $this->input->post('job_title');
				$firstname = $this->input->post('firstname');
				$lastname = $this->input->post('lastname');
                $fname = $this->input->post('fname');
			    $mname = $this->input->post('mname');
				$dateOfBirth = $this->input->post('dateOfBirth');
				$religion = $this->input->post('religion');
                $email = $this->input->post('email');
			    $maritalStatus = $this->input->post('maritalStatus');
				$mobile = $this->input->post('mobile');
				$adhar = $this->input->post('adhar');
                $panNumber = $this->input->post('panNumber');
			    $disability = $this->input->post('disability');
				$service = $this->input->post('service');
                $organization = $this->input->post('organization');
			    $dateOfJoining = $this->input->post('dateOfJoining');
				$communicationOrganization = $this->input->post('communicationOrganization');
				$designationOrganization = $this->input->post('designationOrganization');
                $place = $this->input->post('place');
			    $date = $this->input->post('date');
            //For photo 
                $this->load->library('upload');
                $config['upload_path'] 	 = './uploads/jobs/photo';
                $config['allowed_types'] = 'jpg/png/jpeg/pdf'; 	
                $config['allowed_types'] = '*';
                $config['max_size']	 = 2048;
                $config['overwrite']	 = TRUE;
                // $test=$_FILES["photoImage"]['name']!='';
                // print_r($test);exit;
                if($_FILES["photoImage"]['name']!='')
                        {
                            $file_dets1 = $_FILES["photoImage"]['name'];
                            $photo_file = str_replace(" ","_",$file_dets1);
                        }
                        else
                        {
                            $photo_file ='';
                        }
                        $this->upload->initialize($config); // Important
                        if($_FILES['photoImage']['name']!="")
                        {
                        if(!$this->upload->do_upload( 'photoImage' ))
                            {     					
                                $error.= $this->upload->display_errors(); 
                            }
                        }


            // For Sign 
                $this->load->library('upload');
                $config['upload_path'] 	 = './uploads/jobs/sign';
                $config['allowed_types'] = 'jpg/png/jpeg/pdf'; 	
                $config['allowed_types'] = '*';
                $config['max_size']	 = 2048;
                $config['overwrite']	 = TRUE;
                if($_FILES["SignImage"]['name']!='')
                        {
                            $file_dets1 = $_FILES["SignImage"]['name'];
                            $sign_file = str_replace(" ","_",$file_dets1);
                        }
                        else
                        {
                            $sign_file ='';
                        }
                        $this->upload->initialize($config); // Important
                        if($_FILES['SignImage']['name']!="")
                        {
                        if(!$this->upload->do_upload( 'SignImage' ))
                            {     					
                                $error.= $this->upload->display_errors(); 
                            }
                        }
                        $last_modified = date("Y-m-d H:i:s");
                        $insert_data = array(
                            'job' => $job,
                            'job_title' => $job_title,
                            'firstname' => $firstname,
                            'lastname' => $lastname,
                            'fname' => $fname,
                            'mname' => $mname,
                            'dateOfBirth' => $dateOfBirth,
                            'religion'=>$religion,
                            'email' => $email,
                            'maritalStatus' => $maritalStatus,
                            'mobile' => $mobile,
                            'adhar' => $adhar,
                            'panNumber' => $panNumber,
                            'disability' => $disability,
                            'service' => $service,
                            'organization' => $organization,
                            'dateOfJoining'=>$dateOfJoining,
                            'communicationOrganization' => $communicationOrganization,
                            'designationOrganization' => $job,
                            'place' => $place,
                            'date' => $date,
                            'photoImage' =>$photo_file,
                            'SignImage' =>$sign_file,
                            'last_modified'=>$last_modified,
                        );
                        $this->master_model->insertRecord("job_application",$insert_data);
                        $this->session->set_flashdata('success_message','Employer Data Added successfully');
                        redirect(base_url()."Jobseeker/Jobs");
            }
            else{
			
                $this->session->set_flashdata('error_message'," Something Went Wrong While Updating The ");
            }
         }
        }
        $this->data['middle_content']   = 'Jobseeker/jobs_apply';
		$this->load->view('common_view',$this->data);
    }


    public function changeStatus()
	{
		$id = $this->uri->segment(4);
		$status = $this->uri->segment(5);
		$cur_url = $this->uri->segment(6);
	
		if($status=='Active'){$newstatus = 'Inactive'; }
		else if($status=='Inactive'){$newstatus = 'Active';}
	
		if($this->master_model->updateRecord("job_application",array('status'=>$newstatus),array('id'=>$id)))
		{
			$this->session->set_flashdata('success_message','Job Application status changed successfully.');										         
			redirect(base_url().'Jobseeker/jobs/'.$cur_url);	
		}
		else
		{
			$this->session->set_flashdata('error_message','Error while updating job application status.');										         
			redirect(base_url().'Jobseeker/jobs/'.$cur_url);	
		}
	}
}  