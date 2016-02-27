<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_model extends CI_Model {

  function search($searchQuery) {
    $this->db->select('fname, lname, id, level');
    $this->db->like('fname', $searchQuery);
    $this->db->or_like('lname', $searchQuery);
    $this->db->or_like('level', $searchQuery);
    $this->db->where('user_group', 0);
    $results = $this->db->get('tbl_user');
    if ($results->num_rows() > 0) {
      return $results->result();
    }
    return false;
  }

}
