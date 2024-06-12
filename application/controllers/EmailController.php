<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {
    
    public function __construct() {
    
        parent::__construct();
        $this->load->model('Mail_model');
        // $this->load->helper(array('form', 'url'));
    }

    public function index() {
        echo "Hiiii";exit;
        $this->load->view('email_form');
    }

    public function send() {
        // Load the form helper and library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Set form validation rules
        $this->form_validation->set_rules('to', 'To', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('email_form');
        } else {
            $to = $this->input->post('to');
            $subject = $this->input->post('subject');
            $body = $this->input->post('body');
            $altBody = $this->input->post('altbody');
            $attachments = [];

            if (!empty($_FILES['attachments']['name'][0])) {
                $files = $_FILES['attachments'];
                for ($i = 0; $i < count($files['name']); $i++) {
                    $_FILES['attachment']['name'] = $files['name'][$i];
                    $_FILES['attachment']['type'] = $files['type'][$i];
                    $_FILES['attachment']['tmp_name'] = $files['tmp_name'][$i];
                    $_FILES['attachment']['error'] = $files['error'][$i];
                    $_FILES['attachment']['size'] = $files['size'][$i];

                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 2000;
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('attachment')) {
                        $data = $this->upload->data();
                        $attachments[] = $data['full_path'];
                    }
                }
            }

            if ($this->Mail_model->send_email($to, $subject, $body, $altBody, $attachments)) {
                $data['message'] = 'Message has been sent';
            } else {
                $data['message'] = 'Message could not be sent.';
            }

            $this->load->view('email_form', $data);
        }
    }
}
