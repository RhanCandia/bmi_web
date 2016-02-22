<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model', 'user');
	}

	public function index() {
		$personal_info = $this->session->userdata('user');
		$data['personal_info']	= $personal_info[0];
		$data['page_title']			= 'Profile';
		$data['page_active']		= 'profile';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('profile');
		$this->load->view('includes/foot');
	}

	public function signin() {
		$data['page_title']		= 'Sign in';
		$data['page_active']	= 'signin';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('signin');
		$this->load->view('includes/foot');
	}

	public function signup() {
		$data['page_title']		= 'Sign up';
		$data['page_active']	= 'signup';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('signup');
		$this->load->view('includes/foot');
	}

	public function intake() {
		$data['page_title']		= 'Dietary Intake';
		$data['page_active']	= 'intake';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('intake');
		$this->load->view('includes/foot');
	}

	public function register() {
		$signup = array(
			'fname'					=> strtoupper($this->input->post('fname')),
			'lname'					=> strtoupper($this->input->post('lname')),
			'level'					=> $this->input->post('level'),
			'gender'				=> (int) $this->input->post('gender'),
			'birthdate'			=> strtotime($this->input->post('bdate')),
			'email'					=> $this->input->post('email'),
			'password'			=> md5($this->input->post('password')),
			'user_group'		=> 0,
			'date_tracked'	=> time()
		);
		$response = array();
		if ($this->user->insert($signup)) {
			$response['status']		= 200;
			$response['code']			= 'REGISTRATION_SUCCESS';
			$response['message']	= 'Registration successful';
		} else {
			$response['status']		= 400;
			$response['code']			= 'REGISTRATION_FAILED';
			$response['message']	= 'Registration failed';
		}
		echo json_encode($response);
	}

	public function login() {
		$signin = array(
			'email'			=> $this->input->post('email'),
			'password'	=> md5($this->input->post('password'))
		);
		$response = array();
		if ($this->user->validate($signin)) {
			$response['status']		= 200;
			$response['code']			= 'LOGIN_SUCCESS';
			$response['message']	= 'Login successful';
			$this->session->set_userdata('user', $this->user->get($signin['email']));
			$this->session->set_userdata('logged', 1);
		} else {
			$response['status']		= 400;
			$response['code']			= 'LOGIN_FAILED';
			$response['message']	= 'Login failed';
		}
		echo json_encode($response);
	}

	public function signout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
