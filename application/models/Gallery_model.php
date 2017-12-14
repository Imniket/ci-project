<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Gallery_model extends CI_Model{
  function __construct() {
    parent::__construct();
  }
  function get_by_id($id){
    return $this->db->get_where('gallery', array('id' => $id))->row_array();
  }

  public function get_all(){
  $this->db->order_by('id','desc');
  return $this->db->get('gallery')->result_array();
  }
  public function add_image($params){
    $this->db->insert('gallery',$params);
    return $this->db->insert_id();
  }
  public function delete($id){
    return($this->db->delete('gallery',array('id'=>$id)));
  }
  
}