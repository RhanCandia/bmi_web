<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  function insert($data) {
    $this->db->trans_begin();
    $this->db->insert('tbl_user', $data);
    if ($this->db->trans_status() === true) {
      $this->db->trans_commit();
      return true;
    }
    $this->db->trans_rollback();
    return false;
  }

  function validate($data) {
    $this->db->where($data);
    $result = $this->db->get('tbl_user');
    if ($result->num_rows() > 0) {
      return true;
    }
    return false;
  }

  function get($email) {
    $this->db->select('id, fname, lname, email, level, birthdate, gender, user_group');
    $this->db->where('email', $email);
    $user = $this->db->get('tbl_user');
    if ($user->num_rows() > 0) {
      return $user->result();
    }
    return false;
  }

  function add_record($data) {
    $this->db->trans_begin();
    $this->db->insert('tbl_records', $data);
    if ($this->db->trans_status() === true) {
      $this->db->trans_commit();
      $this->db->where('user_id', $data['user_id']);
      $count = $this->db->get('tbl_records');
      return $count->num_rows();
    }
    $this->db->trans_rollback();
    return false;
  }

  function get_records($user_id) {
    $this->db->where('user_id', $user_id);
    $result = $this->db->get('tbl_records');
    if ($result->num_rows() > 0) {
      return $result->result();
    }
    return false;
  }

  function insert_intake($intake) {
    $this->db->trans_begin();
    $this->db->insert('tbl_intakes', $intake);
    if ($this->db->trans_status() === true) {
      $this->db->trans_commit();
      return true;
    }
    $this->db->trans_rollback();
    return false;
  }

  function update_intake($user_id, $day, $data) {
    $this->db->trans_begin();
    $this->db->where('user_id', $user_id);
    $this->db->where('day', $day);
    $this->db->update('tbl_intakes', $data);
    if ($this->db->trans_status() === true) {
      $this->db->trans_commit();
      return true;
    }
    $this->db->trans_rollback();
    return false;
  }

  function exists_intake($user_id, $day) {
    $this->db->where('user_id', $user_id);
    $this->db->where('day', $day);
    $result = $this->db->get('tbl_intakes');
    if ($result->num_rows() > 0) {
      return true;
    }
    return false;
  }

  function get_intake($user_id, $day) {
    $this->db->where('user_id', $user_id);
    $this->db->where('day', $day);
    $result = $this->db->get('tbl_intakes');
    if ($result->num_rows() > 0) {
      return $result->result();
    }
    return false;
  }

}
