<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Product_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function get_by_id($id) {
    return $this->db->get_where('products', array('id' => $id))->row_array();
  }

  function insert($params) {
    $this->db->insert('products', $params);
    return $this->db->insert_id();
  }

  function get_all_product() {
    $this->db->order_by('id', 'desc');
    return $this->db->get('products')->result_array();
  }

  function delete($id) {
    return $this->db->delete('products', array('id' => $id));
  }

  function insert_booking($data) {
    $this->db->insert('booking', $data);
    return$this->db->insert_id();
  }

  function order_detail($order) {
    $this->db->insert('order_detail', $order);
    return $this->db->insert_id();
  }
  function cart_vacant($id){
    $this->db->select('remaining_quantity');
    $this->db->from('products');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $result = $query->row_array();
    return $result;    
  }
  function update_product($id,$remain){
    $this->db->where('id',$id);
   return $this->db->update('products',$remain);
  }
  function get_booking_detail($id){
    return $this->db->get_where('booking' ,array('u_id' => $id, 'status' => 'BOOKED'))->result_array();
  }
  function get_deliverd_detail($id){
    return $this->db->get_where('booking' ,array('u_id' => $id, 'status' => 'DELIVERD'))->result_array();
  }
  function get_canceled_detail($id){
    return $this->db->get_where('booking' ,array('u_id' => $id, 'status' => 'PENDING'))->result_array();
  }
  function get_order_detail($id){
    return $this->db->get_where('order_detail',array('b_id' => $id))->result_array();
  }
 
  function update_order($status,$id){
    $this->db->set('status',$status);
    $this->db->where('id',$id);    
    return $this->db->update('booking');        
    }
  

}
