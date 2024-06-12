<?php
// Load CodeIgniter framework
require_once 'system/core/CodeIgniter.php';

// Create a new controller to test email sending
class EmailTest extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->library('email');
    }

    public function send_test_email() {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.example.com', // Replace with your SMTP server
            'smtp_port' => 587,
            'smtp_user' => 'rupalinajan01@gmail.com', // Replace with your SMTP username
            'smtp_pass' => 'ugqa vcny jfyb qrpy', // Replace with your SMTP password
            'mailtype'  => 'html', 
            'charset'   => 'utf-8',
            'wordwrap'  => TRUE
        );

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");

        $this->email->from('rupalinajan01@gmail.com', 'Your Name');
        $this->email->to('rupalinajan123@gmail.com');
        $this->email->subject('Email Test');
        $this->email->message('<p>This is a test email.</p>');

        if ($this->email->send()) {
            echo "Email sent successfully.";
        } else {
            echo "Failed to send email.";
            echo $this->email->print_debugger(array('headers'));
        }
    }
}

// Create an instance and call the send_test_email method
$emailTest = new EmailTest();
$emailTest->send_test_email();
?>
