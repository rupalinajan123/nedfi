<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['middle_content']   = 'home';
		$this->load->view('common_view',$this->data);
	}
}
