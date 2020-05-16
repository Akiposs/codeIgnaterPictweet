<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 */
	public function input()
	{
		$this->load->view('welcome_message');
    }


    /**
	 */
	public function confirm()
	{
		$this->load->view('welcome_message');
    }
        
    /**
	 */
	public function complete()
	{
		$this->load->view('welcome_message');
	}

	/**
	 */
	public function login()
	{
		$this->load->view('welcome_message');
	}
}