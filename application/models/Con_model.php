<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Con_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function contact($params) {
    $this->db->insert('contct', $params);
    $this->db->insert_id();
  }
  public function get_mail($mail){
    return $this->db->get_where('contct', array('email'=>$mail))->row_array();
  }

}
