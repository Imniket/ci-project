<?php

/**
 * 
 */
class Slider_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }
  public function get_by_id($id){
    return $this->db->get_where('slider',array('image_id'=>$id))->row_array();
  }
  public function get_slider() {
    $this->db->order_by('image_id', 'desc');
    return $this->db->get('slider')->result_array();
  }

  public function insert_slider($params) {
    $this->db->insert('slider', $params);
    return $this->db->insert_id();
  }
  public function delete($id){
    return $this->db->delete('slider', array('image_id'=> $id));
  }

  public function update($id,$params){
    $this->db->where('image_id',$id);
    return $this->db->update('slider',$params);
  }

}
