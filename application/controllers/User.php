<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model', 'user');
		$this->load->model('workout_model', 'workout');
	}

	public function index() {
		$personal_info = $this->session->userdata('user');
		$data['personal_info']	= $personal_info[0];
		$data['user_summary']	= $this->user->get_records($personal_info[0]->id);
		$data['user_workouts']	= $this->workout->fetch_record(array('user_id' => $personal_info[0]->id), 'profile');
		$data['page_title']			= 'Profile';
		$data['page_active']		= 'profile';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('profile');
		$this->load->view('includes/foot');
	}

	public function signin() {
		if ($this->session->userdata('logged')) {
			redirect(base_url() . 'growth/bmi');
		}
		$data['page_title']		= 'Sign in';
		$data['page_active']	= 'signin';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('signin');
		$this->load->view('includes/foot');
	}

	public function signup() {
		if ($this->session->userdata('logged')) {
			redirect(base_url() . 'growth/bmi');
		}
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
			$this->session->set_userdata('user', $this->user->get($signup['email']));
			$this->session->set_userdata('logged', 1);
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

	public function save_intake() {
		$user   = $this->session->userdata('user');
		$intake = $this->input->post();
		$intake['date_tracked'] = time();
		$intake['user_id'] = $user[0]->id;
		$response = array();
		if ($this->user->exists_intake($user[0]->id, $intake['day'])) {
			if ($this->user->update_intake($user[0]->id, $intake['day'], $intake)) {
				$response['status']		= 200;
				$response['code']			= 'UPDATE_SUCCESS';
				$response['message']	= 'Successfully updated intake';
			} else {
				$response['status']		= 400;
				$response['code']			= 'UPDATE_FAILED';
				$response['message']	= 'Failed to update intake';
			}
		} else {
			if ($this->user->insert_intake($intake)) {
				$response['status']		= 200;
				$response['code']			= 'INSERT_SUCCESS';
				$response['message']	= 'Successfully inserted intake';
			} else {
				$response['status']		= 400;
				$response['code']			= 'INSERT_FAILED';
				$response['message']	= 'Failed to insert intake';
			}
		}
		$temp = $this->user->get_intake($user[0]->id, $intake['day']);
		$response['intake'] = $temp[0];
		echo json_encode($response);
	}

	public function fetch_intakes() {
		$user   = $this->session->userdata('user');
		$day = $this->input->get('day');
		$response = array();
		$temp = $this->user->get_intake($user[0]->id, $day);
		if ($temp) {
			$response['status'] = 200;
			$response['intake'] = $temp[0];
		} else {
			$response['status'] = 400;
			$response['intake'] = false;
		}
		echo json_encode($response);
	}

}
