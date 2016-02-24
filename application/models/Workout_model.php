<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workout_model extends CI_Model {

  function insert($data) {
    $this->db->trans_begin();
    $this->db->insert('tbl_workouts', $data);
    if ($this->db->trans_status() === true) {
      $this->db->trans_commit();
      return true;
    }
    $this->db->trans_rollback();
    return false;
  }

  function fetch($id = null) {
    if ($id != null) {
      $this->db->where('id', $id);
    }
    $this->db->where('active', 1);
    $workouts = $this->db->get('tbl_workouts');
    if ($workouts->num_rows() > 0) {
      return $workouts->result();
    }
    return false;
  }

  function disable($id) {
    $this->db->trans_begin();
    $this->db->where('id', $id);
    $update = array(
      'active'  => 0
    );
    $this->db->update('tbl_workouts', $update);
    if ($this->db->trans_status() == true) {
      $this->db->trans_commit();
      return true;
    }
    $this->db->trans_rollback();
    return false;
  }

  function record($data) {
    $this->db->trans_begin();
    $this->db->insert('tbl_user_workouts', $data);
    $record = $this->db->insert_id();
    if ($this->db->trans_status() === true) {
      $this->db->trans_commit();
      return $record;
    }
    $this->db->trans_rollback();
    return false;
  }

  function fetch_record($where, $ref) {
    $this->db->where($where);
    if ($ref == 'workout') {
      $this->db->order_by('date_tracked', 'DESC');
    } else {
      $this->db->order_by('tbl_user_workouts.date_tracked', 'DESC');
      $this->db->join('tbl_workouts', 'tbl_workouts.id = tbl_user_workouts.workout_id');
    }
    $workouts = $this->db->get('tbl_user_workouts');
    if ($workouts->num_rows() > 0) {
      return $workouts->result();
    }
    return false;
  }

  function update_record($id, $abpm) {
    $this->db->trans_begin();
    $this->db->where('id', $id);
    $updates = array(
      'bpm_after' => $abpm
    );
    $this->db->update('tbl_user_workouts', $updates);
    if ($this->db->trans_status() == true) {
      $this->db->trans_commit();
      return true;
    }
    $this->db->trans_rollback();
    return false;
  }

}
