<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/**
	 */
	public function edit()
	{
		$this->load->view('welcome_message');
    }


    /**
	 */
	public function show()
	{
		$this->load->view('welcome_message');
    }

}