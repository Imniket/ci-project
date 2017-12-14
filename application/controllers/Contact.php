<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Contact extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Con_model');
  }
  public function index(){
    if(isset($_POST) && count($_POST) > 0){
      $params = array(
          'name' => $this->input->post('name'),
          'email'=> $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'message' => $this->input->post('message')
      );
      $data = $this->Con_model->contact($params);
      redirect('home/contact');
    }
 else {
      $data['_view'] = 'pages/contact';
    $this->load->view('template/main1', $data);
    }
  }
}
