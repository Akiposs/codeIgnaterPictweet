<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		$this->load->library('session');
	}

	/**
	 */
	public function input()
	{
		$this->load->helper('form');

		if(! empty($this->session->flash_data('error'))){
			$data['error'] = $this->session->flash_data('error');
		}

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
		$this->load->helper('form');
		$this->load->library('form_validation');

		//validation
		$this->form_validation->set_rules('email', 'メールアドレス', 'required', 
			array(
				'requeired' => '{field}は必須です'
			)
		);
		$this->form_validation->set_rules('password', 'パスワード', 'requeired', 
			array(
				'requeired' => '{field}は必須です'
			)
		);

		//inputデータ
		$input_data['email'] = $this->input->post('eamil');
		$input_data['password'] = $this->input->post('password');

		//validation_errorなら新規登録画面へリダイレクト
		if ($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('error', validation_errors());
			redirect('/user/register/input');
		}else{
			$data['page'] = "登録情報確認";
			$data['publicPath'] = "user/register/confirm";

			$this->load->view('template/header', $data);
			$this->load->view('confirm', $input_data);
			$this->load->view('template/footer');
		}

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
		$this->load->view('user/register/login');
	}
}