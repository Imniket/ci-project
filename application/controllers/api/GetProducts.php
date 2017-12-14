<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require(APPPATH . '/libraries/REST_Controller.php');
class GetProducts extends REST_Controller {

  function index() {
    /*     * *** Get products list **** */
    //$productid = $this->input->post('id');
    $products = $this->Common_model->get_all_product();
   // $userDetails = $this->Product_model->get_by_id($id);
    //print_r($products);

    foreach ($products as $p ) {
      $pro['id'] = $p['id'];
      $pro['name'] = $p['name'];
      $pro['image'] = base_url().'asset/images/products/'.$p['image1'];
     
      $finalArr[] = $pro;
      //print_r($product);
    }
    //die;
    if (!empty($finalArr)) {
      $succes = array('status' => 'succes', 'errorcode' => '1', 'data' => $finalArr);
      echo json_encode($succes);
      exit;
    } else {
      $succes = array('status' => 'Failed', 'errorcode' => '0', 'msg' => 'No any product found');
      echo json_encode($succes);
      exit;
    }

    $error = array('status' => 'Failed', 'errorcode' => '-11', 'msg' => 'Required Parameter Missing');
    echo json_encode($error);
    exit;
  }

}
