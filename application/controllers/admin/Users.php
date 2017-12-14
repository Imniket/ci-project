<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  public function index() {
    $data['_view'] = 'admin/users/';
    $this->load->view('admin/layouts/main');
  }

}
