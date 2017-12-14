<?php

class User_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_users($id) {
    return $this->db->get_where('users', array('id' => $id))->row_array();
  }

  function valid_email($email) {
    $this->db->select('email');
    $this->db->from('users');
    $this->db->where('email', $email);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }

  function add_user($params) {
    $this->db->insert('users', $params);
    return $this->db->insert_id();
  }

  function validateadmin($email, $pass) {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email', $email);
    $this->db->where('password', $pass);
    $this->db->where('role', 'ADMIN');
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }

  function validate($email, $pass) {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email', $email);
    $this->db->where('password', $pass);
    $this->db->where('role', 'USER');
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }

  function login($id, $params) {
    $this->db->where('id', $id);
    $this->db->select('users', $params);
  }

}
