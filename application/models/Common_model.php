<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Common_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function get_by_id($id) {
    return $this->db->get_where('products', array('id' => $id))->row_array();
  }

  function get_all_product() {
    $this->db->order_by('id', 'desc');
    return $this->db->get('products')->result_array();
  }
  public function get_all_gallery(){
  $this->db->order_by('id','desc');
  return $this->db->get('gallery')->result_array();
  }
  public function get_all_blog() {
    $this->db->order_by('id', 'desc');
    return $this->db->get('blog')->result_array();
  }
  public function get_all_users(){
    $this->db->order_by('id','desc');
    return $this->db->get('users')->result_array();
  }
  public function get_usersby_id($id)
  {
    $this->db->select('*');
    $this->db->from('users',1);
    $this->db->where('id', $id);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;

  }
  public function get_all_category(){
    $this->db->order_by('id','desc');
    return $this->db->get('category')->result_array();
  }
  public function get_cid($id){
    return $this->db->get_where('category',array('id'=>$id))->row_array();
  }
  public function get_by_cid($id){
    $this->db->select('*');
    $this->db->from('products');
    $this->db->where('category_id',$id);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
    
  }
  public function validate($email,$pass){
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email',$email);
    $this->db->where('password', $pass);
    $this->db->where('role','USER');
    $query = $this->db->get();
    $result =$query->result_array();
    return $result;
  }

}
