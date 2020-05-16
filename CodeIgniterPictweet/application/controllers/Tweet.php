<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tweet extends CI_Controller {
    
    /**
	 */
	public function reccomend()
	{
		$this->load->view('template/top/header');
		$this->load->view('top');
		$this->load->view('template/footer');
    }
	/**
	 */
	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    /**
	 */
	public function detail()
	{
		$this->load->view('welcome_message');
    }
}