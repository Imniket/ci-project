<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require (APPPATH . '/libraries/REST_Controller.php');

class GetCategory extends REST_Controller {

  function index() {

    $category = $this->Common_model->get_all_category();

    if (!empty($category)) {
      $success = array('status' => 'success', 'errorcode' => '1', 'data' => $category);
      echo json_encode($success);
      die;
      
    }else{
      $success = array('status' => 'Failed', 'errorcode' => '0', 'msg' => 'No such category Found');
      echo json_encode($success);
      die;
      
    }
  }

}
