<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail_model extends CI_Model {

    private $mail;
  
    public function __construct() {
        print_r($mail);exit;
        parent::__construct();
        $this->load->database();
        // $this->load->config('email');

        // Load PHPMailer
        require FCPATH . 'vendor/autoload.php';
        echo $this->mail = new PHPMailer(true);exit;

        // Configure the mailer
        $this->mail->isSMTP();
        $this->mail->Host       = 'smtp.example.com';
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = 'your_email@example.com';
        $this->mail->Password   = 'your_password';
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port       = 587;
        $this->mail->setFrom('from@example.com', 'Your Name');
    }

    public function send_email($to, $subject, $body, $altBody = '', $attachments = []) {
        try {
            // Recipients
            $this->mail->addAddress($to);

            // Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
            $this->mail->AltBody = $altBody;

            // Attachments
            foreach ($attachments as $attachment) {
                $this->mail->addAttachment($attachment);
            }

            // Send email
            return $this->mail->send();
        } catch (Exception $e) {
            log_message('error', "Mailer Error: {$this->mail->ErrorInfo}");
            return false;
        }
    }
}
