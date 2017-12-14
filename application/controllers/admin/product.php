<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Product extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Product_model');
    $this->load->model('Category_model');
    $this->load->library('upload');
    

  }
  function index() {
    $admin_session = $this->session->userdata('backend');
    if ($admin_session['id']) {
      $data['category'] = $this->Category_model->get_all_category();
      $data['products'] = $this->Product_model->get_all_product();
      $data['_view'] = 'admin/products/view';
      $this->load->view('admin/layouts/main', $data);
    } else {
      $this->session->set_flashdata("error", "Don't Try It");
      redirect('admin/admin/login');
    }
  }

  function add() {
    $admin_session = $this->session->userdata('backend');
    if($admin_session['id']){
      if (isset($_POST) && count($_POST) > 0) {
        //print_r($_POST);
        //exit;
        
      if (!empty($_FILES['image1']['name'])) {
        $upload_conf = array(
            'upload_path' => realpath('./uploads/images/products/'),
            'allowed_types' => 'gif|jpg|jpeg|png',
            //'max_size' => '30000',
            'encrypt_name' => true,
            'width' => 315,
            'height' => 315
        );

        $this->upload->initialize($upload_conf);
        //$field_name = 'profile';

        if (!$this->upload->do_upload('image1')) {
          $error['upload'] = $this->upload->display_errors();
        } else {
          $upload_data = $this->upload->data();
          $resize_conf = array(
              'upload_path' => realpath('./uploads/images/products/thumb.'),
              'source_image' => $upload_data['full_path'],
              'new_image' => $upload_data['file_path'] . '../products/thumb/' . $upload_data['file_name'],
              'width' => 150,
              'height' => 150
          );

          $this->load->library('image_lib');
          // initializing
          $this->image_lib->initialize($resize_conf);
          // do it!
          if (!$this->image_lib->resize()) {
            // if got fail.
            $error['resize'] = $this->image_lib->display_errors();
          } else {
            $upload_img = $upload_data['file_name'];
          }

          $picture = $upload_img;
        }
      } else {
        $picture = 'avtar.png';
      }
      $params = array(
          'category_id' => $this->input->post('category'),
          'name' => $this->input->post('name'),
          'detail' => $this->input->post('detail'),
          'mfg_date' => $this->input->post('mfg_date'),
          'quantity' => $this->input->post('quantity'),
          'image1' => $picture,
          'remaining_quantity' => $this->input->post('quantity'),
          'price' => $this->input->post('price')
      );
      
      
      $data = $this->Product_model->insert($params);
      //print_r($data);
      redirect('admin/product/');
    } else {
      $data['category'] = $this->Category_model->get_all_category();
      $data['_view'] = 'admin/products/add';
      $this->load->view('admin/layouts/main', $data);
    }
    }  else {
      $this->session->set_flashdata("error", "Don't Try It");
      redirect('admin/admin/login');
    }
    
  }

  public function remove($id) {
    $data = $this->Product_model->get_by_id($id);
    if (isset($data['id'])) {
      $filename = realpath('./uploads/images/products/' . $data['image1']);
      if (unlink($filename)) {
        $this->Product_model->delete($id);
        redirect('admin/product/');
      } else {
        $this->Product_model->delete($id);
        redirect('admin/product/');
      }
    }
  }
  

}
