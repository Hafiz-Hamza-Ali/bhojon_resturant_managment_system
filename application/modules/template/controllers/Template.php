<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->db->query('SET SESSION sql_mode = ""');
		$this->load->model(array(
			'template_model'
		));
	}
 
	public function layout($data)
	{  
		$id = $this->session->userdata('id');
		$data['notifications'] = $this->template_model->notifications($id);
		$data['quick_messages'] = $this->template_model->messages($id);
		$data['setting'] = $this->template_model->setting();
		$data['sdsetting'] = $this->template_model->read('*', 'tbl_soundsetting', array('soundid' => 1));
		$data['versioncheck'] = $this->template_model->read('*', 'tbl_version_checker', array('vid' => 1));
		$this->load->view('layout', $data);
	}
 	
	public function login($data)
	{ 
		$data['setting'] = $this->template_model->setting();
		$this->load->view('login', $data);
	}

	public function register($data)
	{ 
		$data['setting'] = $this->template_model->setting();
		$this->load->view('register', $data);
	}

	public function subscribe($data)
	{ 
		$data['setting'] = $this->template_model->setting();
		$this->load->view('subscribe', $data);
	}

	public function customer_trans($data)
	{ 
		$data['setting'] = $this->template_model->setting();
		$this->load->view('customer_trans', $data);
	}
 
}
