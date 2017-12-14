<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Projects_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  //view all active  projects
  public function get_projects() {
    $this->db->select('*');
    $this->db->from('projects');
    $this->db->where('status','active');
    $this->db->order_by('project_id', 'desc');
    return $this->db->get()->result_array();
  }
  //view all by admin
  public function view(){
    $this->db->order_by('project_id','desc');
    return $this->db->get('projects')->result_array();
  }
  
  //Add New Project
  public function add_project($params){
    $this->db->insert('projects',$params);
    $this->db->insert_id();
  }
  public function get_by_id($id){
    return $this->db->get_where('projects', array('project_id' => $id))->row_array() ;
  }
  function delete($id) {
    return $this->db->delete('projects', array('project_id' => $id));
  }
  function change_status($status,$id){
    $this->db->set('status',$status);
    $this->db->where('project_id',$id);    
    return $this->db->update('projects');        
    }
    function editproject($id,$params){
      $this->db->where('project_id',$id);
      return $this->db->update('projects',$params);
    }

}
