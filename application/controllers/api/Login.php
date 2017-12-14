<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require (APPPATH . '/libraries/REST_Controller.php');

class Login extends REST_Controller {

  function index() {
    if (isset($_POST) && count($_POST) > 0) {
      $email = $this->input->post('email');
      $pass = $this->input->post('pass');
      //mail is exist..
      $validate = $this->Common_model->validate($email, $pass);
    
      if(count($validate) > 0){
        $data = array(
            'id' => $validate[0]['id'],
            'name' => $validate[0]['name'],
            'email' => $email,
            'password' => $pass,
            'role' => $validate[0]['role'],
            'is_logged' => TRUE
        );
        
        $success = array('status' => 'success', 'errorcode' => '1' , 'data' => $data );
        echo json_encode($success);
        exit;
      }  elseif(empty ($email && $pass)) {
        $failed = array('status' => 'Failed', 'errorcode' => '0', 'msg' => 'enter email and pass');
        echo json_encode($failed);
        exit;
            
      }
    }
  }

}
