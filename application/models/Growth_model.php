<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Growth_model extends CI_Model {

  function insert($data) {
    $this->db->trans_begin();
    $this->db->insert('tbl_chart', $data);
    if ($this->db->trans_status() === true) {
      $this->db->trans_commit();
      return true;
    }
    $this->db->trans_rollback();
    return false;
  }

  function fetch($gender = null) {
    if ($gender != null) {
      $this->db->where('gender', $gender);
    }
    $this->db->order_by('agem');
    $result = $this->db->get('tbl_chart');
    if ($result->num_rows() > 0) {
      return $result->result();
    }
    return false;
  }

  function delete($id) {
    $this->db->trans_begin();
    $this->db->where('id', $id);
    $this->db->delete('tbl_chart');
    if ($this->db->trans_status() === true) {
      $this->db->trans_commit();
      return true;
    }
    $this->db->trans_rollback();
    return false;
  }

  function bracket($gender, $ageinmos) {
    $this->db->where('gender', $gender);
    $this->db->where('agem', $ageinmos);
    $result = $this->db->get('tbl_chart');
    if ($result->num_rows() > 0) {
      return $result->result();
    }
    return false;
  }

}
