<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
//  echo "Hiigdg";
  public function __construct() {
        parent::__construct();
        
    }

    public function index()
  {
        $this->load->view('test');
    
    }
}