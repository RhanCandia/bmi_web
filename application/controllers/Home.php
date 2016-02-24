<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		if ($this->session->userdata('logged')) {
			redirect(base_url() . 'growth/bmi');
		} else {
			redirect(base_url() . 'user/signin');
		}
		$data['page_title']		= 'Home';
		$data['page_active']	= 'home';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('home');
		$this->load->view('includes/foot');
	}

}
