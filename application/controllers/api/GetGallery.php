<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require(APPPATH . '/libraries/REST_Controller.php');
class GetGallery extends REST_Controller{
  function index(){
    $gallery = $this->Common_model->get_all_gallery();
    
    if(!empty($gallery)){
      $success = array('status'=> 'success','errorcode' => '1', 'data' =>$gallery);
      echo json_encode($success);
      exit;
    }else{
      $success = array('status'=> 'faild','errorcode' => '0','msg' => 'No any image found');
      echo json_encode($success);
      exit;
    }
  }
}
