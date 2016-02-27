<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function __construct() {
		parent::__construct();
    $this->load->model('reports_model', 'reports');
    $this->load->model('user_model', 'user');
    $this->load->model('workout_model', 'workout');
	}

	public function index() {
		$data['page_title']		= 'Reports';
		$data['page_active']	= 'reports';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('reports');
		$this->load->view('includes/foot');
	}

  public function search() {
    $searchQuery = $this->input->get('searchQuery');
    $response = array();
    $results = $this->reports->search($searchQuery);
    if ($results == null) {
      $response['status'] = 500;
      $response['code'] = 'SERVER_ERROR';
      $response['message'] = 'Something went nuts';
    } else {
      if ($results) {
        $response['status'] = 200;
        $response['code'] = 'RESULTS_FETCHED';
        $response['message'] = 'Fetch successfully';
        $response['results'] = $results;

      } else {
        $response['status'] = 400;
        $response['code'] = 'RESULTS_FETCH_FAILED';
        $response['message'] = 'Fetch failed';
      }
    }
    echo json_encode($response);
  }

  public function student() {
    $id = $this->input->get('id');

    $data['student']	= $this->user->get_by_id($id);
    $data['records']	= $this->user->get_records($id);
    $data['workouts']	= $this->workout->fetch_record(array('user_id' => $id), 'reports');

    $data['page_title']		= 'Student Reports';
		$data['page_active']	= 'reports';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('stud_reports');
		$this->load->view('includes/foot');
  }

}
