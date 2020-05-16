<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

	/**
	 */
	public function __construct()
	{
        parent::__construct();
        //コマンドラインから呼び出されたかを確認する
        if(! is_cli()){
            show_404();
            exit;
        }
        $this->load->library('migration');
    }

    /**
	 */
	public function current()
	{
        if($this->migration->current()){
            log_message('info', 'migration Success!');
        }else{
            log_message('info', $this->migration->error_string());
        };
    }

    /**
	 */
	public function rollback($version)
	{
        if($this->migration->version($version)){
            log_message('info', 'Rollback Success!');
        }else{
            log_message('info', $this->migration->error_string());
        }
    }

    /**
	 */
	public function latest()
	{
        if($this->migration->latest()){
            log_message('info', 'migration Success!');
        }else{
            show_error($this->migration->error_string());
        }
    }

}