<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Growth extends CI_Controller {

  /*
   * ((BMI / M(t)) ^ (L(t) - 1)) / (S(t) * (L(t)))
   * ((30.0 / 16.9392) ^ (-1.7862) - 1) / (0.11070 * (-1.7862))
   *
   *  Overweight: >+1SD (equivalent to BMI 25 kg/m2 at 19 years)
   *  Obesity: >+2SD (equivalent to BMI 30 kg/m2 at 19 years)
   *  Thinness: <-2SD
   *  Severe thinness: <-3SD
   *
   */

  public function __construct() {
    parent::__construct();
    $this->load->model('growth_model', 'growth');
    $this->load->model('user_model', 'user');
  }

  public function bmi() {
    $data['page_title']		= 'BMI Calculator';
		$data['page_active']	= 'calculator';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('calculator');
		$this->load->view('includes/foot');
  }

  public function boys() {
    $data['page_title']		= 'Boys Growth Chart';
		$data['page_active']	= 'chart_boys';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('chart_boys');
		$this->load->view('includes/foot');
  }

  public function girls() {
    $data['page_title']		= 'Girls Growth Chart';
		$data['page_active']	= 'chart_girls';
		$this->load->view('includes/head', $data);
		$this->load->view('includes/navbar');
		$this->load->view('chart_girls');
		$this->load->view('includes/foot');
  }

  public function add() {
    $chart_entry = array(
      'agem'          => $this->input->post('agem'),
      'val_l'         => $this->input->post('val_l'),
      'val_m'         => $this->input->post('val_m'),
      'val_s'         => $this->input->post('val_s'),
      'gender'        => $this->input->post('gender'),
      'date_tracked'  => time()
    );
    $response = array();
    if ($this->growth->insert($chart_entry)) {
      $response['status']		= 200;
			$response['code']			= 'ENTRY_SUCCESS';
			$response['message']	= 'New entry successful';
    } else {
      $response['status']		= 400;
			$response['code']			= 'ENRTY_FAILED';
			$response['message']	= 'New entry failed';
    }
    echo json_encode($response);
  }

  public function fetch() {
    $gender   = $this->input->get('gender');
    $response = array();
    $chart    = $this->growth->fetch($gender);
    if ($chart) {
      $response['status']		= 200;
			$response['code']			= 'FETCH_SUCCESS';
			$response['message']	= 'Fetch chart successful';
      $response['chart']    = $chart;
    } else {
      $response['status']		= 400;
			$response['code']			= 'FETCH_FAILED';
			$response['message']	= 'Fetch chart failed';
    }
    echo json_encode($response);
  }

  public function remove() {
    $entry_id = $this->input->get('id');
    $response = array();
    if ($this->growth->delete($entry_id)) {
      $response['status']		= 200;
			$response['code']			= 'DELETE_SUCCESS';
			$response['message']	= 'Delete entry successful';
    } else {
      $response['status']		= 400;
			$response['code']			= 'DELETE_FAILED';
			$response['message']	= 'Delete entry failed';
    }
    echo json_encode($response);
  }

  public function calculate() {
    $user     = $this->session->userdata('user');
    $weight   = $this->input->get('weight');
    $height   = $this->input->get('height');
    $bdate    = $user[0]->birthdate;
    $cdate    = time();
    $ageinmos = 0;
    while (($bdate = strtotime('+1 MONTH', $bdate)) <= $cdate) {
      $ageinmos++;
    }
    $growt_bracket = $this->growth->bracket((int) $user[0]->gender, $ageinmos);
    $growt_bracket = $growt_bracket[0];
    if ($growt_bracket) {
      $bmi    = round(($weight / ($height * $height)), 2);
      $zscore = (pow(($bmi / $growt_bracket->val_m), ($growt_bracket->val_l)) - 1) / ($growt_bracket->val_s * ($growt_bracket->val_l));
      $classification = array();
      switch ($zscore) {
        case ($zscore > 1 && $zscore <= 2):
          $classification['code']   = 1;
          $classification['class']  = 'Overweight';
          break;
        case ($zscore > 2):
          $classification['code']   = 2;
          $classification['class']  = 'Obese';
          break;
        case ($zscore < -2 && $zscore >= -3):
          $classification['code']   = 3;
          $classification['class']  = 'Wasted';
          break;
        case ($zscore < -3):
          $classification['code']   = 4;
          $classification['class']  = 'Severely Wasted';
          break;
        case ($zscore >= -2 && $zscore <= 1):
          $classification['code']   = 5;
          $classification['class']  = 'Normal';
          break;
        default:
          $classification['code']   = 6;
          $classification['class']  = 'Unknown';
          break;
      }
    }

    $record_count = $this->user->add_record(array(
      'user_id'       => $user[0]->id,
      'weight'        => $weight,
      'height'        => $height,
      'bmi'           => $bmi,
      'zscore'        => $zscore,
      'class'         => $classification['class'],
      'date_tracked'  => time()
    ));

    echo json_encode(array(
      'status'  => 200,
      'bmi'     => $bmi,
      'zscore'  => $zscore,
      'class'   => $classification,
      'records' => $record_count
    ));
  }

}
