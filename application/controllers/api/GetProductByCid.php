<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require (APPPATH.'/libraries/REST_Controller.php');
class GetProductByCid extends REST_Controller{
  
  function index(){
      
      $categoryid = $this->input->post('id');
     
      $products = $this->Common_model->get_by_cid($categoryid);
      
      foreach ($products as $p){
        $pro['id'] = $p['id'];
        $pro['c_id'] = $p['category_id'];
        $pro['name'] = $p['name'];
        $pro['image'] = base_url().'asset/images/products/'.$p['image1'];
        $pro['price'] = $p['price'];
        
        $finalarr[] = $pro;
      }
      
      if(!empty($finalarr)){
        $success = array('status' => 'success','errorcode'=> '1','data'=> $finalarr);
        echo json_encode($success);
        die;
      }else{
        $success = array('status' => 'Failed', 'errorcode' => '0','msg' => 'No such product Found by category ');
        echo json_encode($success);
        die;
        
      }
  }
}