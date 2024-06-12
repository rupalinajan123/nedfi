<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
//  echo "Hiigdg";
	public function __construct() {
        parent::__construct();
        $this->load->model('Master_model'); 
    }

    public function index()
	{
         $getdata=$this->master_model->getApiData();
         echo"<pre>";
         print_r($getdata);exit;
    }
}