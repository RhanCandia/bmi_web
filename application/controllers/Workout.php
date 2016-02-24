<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workout extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('workout_model', 'workout');
  }

  public function index() {
    $personal_info = $this->session->userdata('user');
		$data['personal_info']	= $personal_info[0];
    $data['page_title']		= 'Workout';
		$data['page_active']	= 'workout';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('workout');
		$this->load->view('includes/foot');
  }

  public function work() {
    $rid = $this->input->get('rid');
    $where = array(
      'id' => $rid
    );
    $data['page_title']		= 'Do Workout';
		$data['page_active']	= 'doworkout';
    $data['record']       = $this->workout->fetch_record($where, 'workout');
    $data['workout']      = $this->workout->fetch($data['record'][0]->workout_id);
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('work');
		$this->load->view('includes/foot');
  }

  public function add() {
    $url = $this->input->post('workout-embed');
    parse_str(parse_url( $url, PHP_URL_QUERY ), $vars );
    $embed_code = $vars['v'];
    $workout = array(
      'title'         => $this->input->post('workout-name'),
      'embed'         => $embed_code,
      'date_tracked'  => time()
    );
    $response = array();
    if ($this->workout->insert($workout)) {
      $response['status']   = 200;
      $response['code']     = 'INSERT_SUCCESS';
      $response['message']  = 'Insert success';
    } else {
      $response['status']   = 400;
      $response['code']     = 'INSERT_FAILED';
      $response['message']  = 'Insert failed';
    }
    echo json_encode($response);
  }

  public function fetch() {
    $workouts = $this->workout->fetch($this->input->get('id'));
    $response = array();
    if ($workouts) {
      $response['status']   = 200;
      $response['code']     = 'FETCH_SUCCESS';
      $response['message']  = 'Fetch success';
      $response['workouts'] = $workouts;
    } else {
      $response['status']   = 400;
      $response['code']     = 'FETCH_FAILED';
      $response['message']  = 'Fetch failed';
    }
    echo json_encode($response);
  }

  public function record() {
    $user = $this->session->userdata('user');
    $wid  = $this->input->post('wid');
    $bpm  = $this->input->post('bpm');
    $record = array(
      'user_id'     => $user[0]->id,
      'workout_id'  => $wid,
      'bpm_before'  => $bpm,
      'date_tracked'=> time()
    );
    $response = array();
    $record_id = $this->workout->record($record);
    if ($record_id) {
      $response['status'] = 200;
      $response['code'] = 'RECORD_SUCCESS';
      $response['message'] = 'Record success';
      $response['record'] = $record_id;
    } else {
      $response['status'] = 400;
      $response['code'] = 'RECORD_FAILED';
      $response['message'] = 'Record failed';
    }
    echo json_encode($response);
  }

  public function update_record() {
    $rid = $this->input->post('rid');
    $abpm = $this->input->post('abpm');
    $response = array();
    if ($this->workout->update_record($rid, $abpm)) {
      $response['status'] = 200;
      $response['code'] = 'UPDATE_SUCCESS';
      $response['message'] = 'Update success';
    } else {
      $response['status'] = 400;
      $response['code'] = 'UPDATE_FAILED';
      $response['message'] = 'Update failed';
    }
    echo json_encode($response);
  }

  public function delete() {
    $wid = $this->input->post('wid');
    $response = array();
    if ($this->workout->disable($wid)) {
      $response['status'] = 200;
      $response['code'] = 'UPDATE_SUCCESS';
      $response['message'] = 'Update success';
    } else {
      $response['status'] = 400;
      $response['code'] = 'UPDATE_FAILED';
      $response['message'] = 'Update failed';
    }
    echo json_encode($response);
  }

}
