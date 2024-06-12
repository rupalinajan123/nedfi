<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
//  echo "Hiigdg";
	public function __construct() {
        parent::__construct();
        $this->load->model('Master_model'); 
    }

    public function index()
	{
        if(isset($_POST['submit'])){
            $this->form_validation->set_rules('emailId', 'email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if($this->form_validation->run() == TRUE){
                //  echo "Hello";exit;
				$email = $this->input->post('emailId');
				$password = sha1($this->input->post('password'));
				$token = JWT::encode(['emailId' => $email], '123email456');
				// print($token);exit;
				$Userdata=$this->master_model->getRecords('jobseeker_registration', array('emailId' => $token, 'password' => $password));
            //   print_r($Userdata);exit;
				if($Userdata)
				{
					$this->session->set_userdata('jobdata',$Userdata);
					
					redirect(base_url()."Jobseeker/jobs");
				}
                else
				{
					$this->session->set_flashdata('error_message',"Please Enter Valid Email and Password");
				}
			} 
			else
		    {
			// echo "Something Went Wrong";
            $this->session->set_flashdata('error_message',"Please Enter Email and Password");
		    }   
			
        }
		
        $this->data['middle_content']   = 'Jobseeker/jobs_login';
		$this->load->view('common_view',$this->data);
    }

    public function registration()
    {
		$secret="123email456";
		if(isset($_POST['submit']))
		{
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('emailId', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('Cpassword', 'Confirmed Password', 'required|matches[password]');
			$this->form_validation->set_rules('state', 'State', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('date', 'Date', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('state', 'State', 'required');
			$this->form_validation->set_rules('district', 'District', 'required');
			$this->form_validation->set_rules('language', 'Language', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('subCategory', 'Subcategory', 'required');
			$this->form_validation->set_rules('qualification', 'Qualifiction', 'required');
			$this->form_validation->set_rules('experience', 'Experience', 'required');
			$this->form_validation->set_rules('training', 'Training', 'required');

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
				$this->session->set_flashdata('error_message',"reCAPTCHA verification failed");
				// echo "reCAPTCHA verification failed";
				
			}  else{
			
		if($this->form_validation->run() == TRUE){

			$name = $this->input->post('name');
			$emailId = $this->input->post('emailId');
			$password = sha1($this->input->post('password'));
			$gender = $this->input->post('gender');
			$date = $this->input->post('date');
			$address = $this->input->post('address');
			$state = $this->input->post('state');
			$district = $this->input->post('district');
			$language = $this->input->post('language');
			$category = $this->input->post('category');
			$subCategory = $this->input->post('subCategory');
			$qualification = $this->input->post('qualification');
			$experience = $this->input->post('experience');
			$training = $this->input->post('training');
			
			$token = JWT::encode(['emailId' => $emailId], $secret);
			// print_r($token);exit;
			$arr_data = array(
				'name' => $name,
				'emailId' => $token,
				'password' => $password,
				'gender' => $gender,
				'date' => $date,
				'address' => $address,
				'state' => $state,
				'district' => $district,
				'language' => $language,
				'category' => $category,
				'subCategory' => $subCategory,
				'qualification' => $qualification,
				'experience' => $experience,
				'training' => $training
			);
			$this->master_model->insertRecord("jobseeker_registration",$arr_data);
			$this->session->set_flashdata('success_message','Jobseeker Data Added successfully');
			redirect(base_url()."jobseeker/login");
		}
		else{
			
			$this->session->set_flashdata('error_message'," Something Went Wrong While Updating The ");
		}
    	}
		}
		
		$query = $this->db->get('states');
        $state_info = $query->result();
		$this->data['state_info'] = $state_info;
        $this->data['middle_content']   = 'Jobseeker/jobs_register';
        $this->load->view('common_view',$this->data);
    }

	public function fetch_districts() {
		$state_id = $this->input->post('state_id');
		$districts_query = $this->db->where('state_id', $state_id)
									->get('districts');
		$response = array();
		foreach ($districts_query->result() as $district) {
			$response[] = array(
				'id' => $district->District_Id,
				'name' => $district->District_name
			);
		}
		// Send JSON response
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function logout()
	{
		$this->session->unset_userdata('jobdata');
		redirect("jobseeker/login");
	}

}