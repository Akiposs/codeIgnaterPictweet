<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 */
	public function input()
	{
		$data['page'] = "新規登録";
		$data['publicPath'] = "user/register/input";

		$this->load->view('template/header', $data);
		$this->load->view('user/register/input');
		$this->load->view('template/footer');
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