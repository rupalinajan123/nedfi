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
		if($this->session->userdata('id')!="") 
		{ redirect(base_url().'Employer/login/registration'); }

		
        if(isset($_POST['submit'])){
            $this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			// $decoded_token = JWT::decode($token, '123email456', array('HS256'));

			if($this->form_validation->run() == TRUE){
                //  echo "Hello";exit;
				$email = $this->input->post('email');
				$password = sha1($this->input->post('password')); // Hash the password with SHA-1
				$remember_me = $this->input->post('remember_me');
				$token = JWT::encode(['email' => $email], '123email456');
				$Userdata=$this->master_model->getRecords('employer_registration', array('email' => $token, 'password' => $password));
            //   print_r($Userdata);exit;
				if(!empty($Userdata[0]))
				{
					    // print_r($Userdata); exit;
						$this->session->set_userdata('user',$Userdata);
						// if($remember_me) {
						// 	// echo $Userdata[0]['id'];exit;
						// 	$this->input->set_cookie('remember_me', $Userdata[0]['id'], 86500 * 30); // 30 days
						// }
						
					    redirect(base_url()."employer/user");
					
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
		
        $this->data['middle_content']   = 'employer/emp_login';
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
	

	public function registration()
	{
		$secret="123email456";
		if(isset($_POST['submit'])){
			// echo "Hii";exit;
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('otp', 'OTP', 'required');
			$this->form_validation->set_rules('sector', 'Sector', 'required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('Cpassword', 'Confirmed Password', 'required|matches[password]');
			$this->form_validation->set_rules('nodal_officer', 'Nodal_officer', 'required');
			$this->form_validation->set_rules('state', 'State', 'required');
			$this->form_validation->set_rules('district', 'District', 'required');
			$this->form_validation->set_rules('company_addr', 'Company_addr', 'required');

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
			// echo"HiiHello";exit;
			$email = $this->input->post('email');
			$otp = $this->generate_otp(); // Generate OTP
            // if ($this->send_otp_email($email, $otp)) {
			// 	echo "Hii";exit;
            //     // Email sent successfully, proceed with registration
            //     // Store the OTP in the session or in the database
            // } else {
			// 	echo"Hello";exit;
            //     // Email sending failed, handle the error
            // }
			$sector = $this->input->post('sector');
			$department = $this->input->post('department');
			$mobile = $this->input->post('mobile');
			$password = sha1($this->input->post('password')); // Hash the password with SHA-1
			$nodal_officer = $this->input->post('nodal_officer');
			$state = $this->input->post('state');
			$district = $this->input->post('district');
			$company_addr = $this->input->post('company_addr');

			$token = JWT::encode(['email' => $email], $secret);
			$arr_data = array(
				'email' => $token,
				'otp' => $otp,
				'sector' => $sector,
				'department' => $department,
				'mobile' => $mobile,
				'password' => $password,
				'nodal_officer' => $nodal_officer,
				'state' => $state,
				'district' => $district,
				'company_addr' => $company_addr
			);
            
			$this->master_model->insertRecord("employer_registration",$arr_data);
			$this->session->set_flashdata('success_message','Employer Data Added successfully');
			redirect(base_url()."employer/login");
		}   
		else{
			
			$this->session->set_flashdata('error_message'," Something Went Wrong While Updating The ");
		}
	}
}
		$query = $this->db->get('states');
        $state_info = $query->result();
		$this->data['state_info'] = $state_info;
		$this->data['middle_content']   = 'employer/emp_register';
		$this->load->view('common_view',$this->data);
	}


	// Function to send OTP through email
    // private function send_otp_email($email, $otp) {
    //     $this->email->from('rupalinajan01@gmail.com', 'Rupali');
	// 	$this->email->to($email);
    //     $this->email->subject('Your OTP for Registration');
    //     $this->email->message('Your OTP is: ' . $otp);
    //     // echo ($this->email->send());exit;
    //     if ($this->email->send()) {
	// 		echo "Email sent successfully.";exit;
    //         return true; // Email sent successfully
    //     } else {
	// 		echo "Email sending failed: " . $this->email->print_debugger();exit;
    //         return false; // Email sending failed
    //     }
    // }

    // Function to generate OTP
    private function generate_otp() {
        return mt_rand(100000, 999999); // Generate a 6-digit random number
    }

	public function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url().'employer/login');
	}


}
