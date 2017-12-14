<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Blog_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function get_blog_id($id) {
    return $this->db->get_where('blog', array('id' => $id))->row_array();
  }

  public function get_id($uid) {
    $this->db->get_where('blog', array('u_id' => $uid))->row_array();
  }

  public function get_by_id($uid) {
    $this->db->select('*');
    $this->db->from('blog');
    $this->db->where('u_id', $uid);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }

  public function add_blog($params) {
    $this->db->insert('blog', $params);
    return $this->db->insert_id();
  }

  //edit blog
  public function edit_blog($id, $params) {
    $this->db->where('id',$id);
    return $this->db->update('blog',$params);
  }

//get all data
  public function get_all_blog() {
    $this->db->order_by('id', 'desc');
    return $this->db->get('blog')->result_array();
  }

//delete blog
  public function delete_blog($id) {
    return $this->db->delete('blog', array('id' => $id));
  }

}
