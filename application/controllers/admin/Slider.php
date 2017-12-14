<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Slider extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Slider_model');
    $this->load->library('upload');
  }

  public function index() {
    $data['sliders'] = $this->Slider_model->get_slider();
    $data['_view'] = 'admin/slider/view';
    $this->load->view('admin/layouts/main', $data);
  }

  public function add() {
    if (isset($_POST) && count($_POST) > 0) {
 
      if (!empty($_FILES['image1']['name'])) {
        $upload_conf = array(
            'upload_path' => realpath('./uploads/images/sliders/'),
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
              'upload_path' => realpath('./uploads/images/sliders/thumb.'),
              'source_image' => $upload_data['full_path'],
              'new_image' => $upload_data['file_path'] . '../sliders/thumb/' . $upload_data['file_name'],
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
          'image_id' => $this->input->post('image_id'),
          'image_name' => $this->input->post('image_name'),
          'image_detail' => $this->input->post('image_detail'),
          'image' => $picture,
      );
      $slider_id = $this->Slider_model->insert_slider($params);
      redirect('admin/slider/');
    } else {
      $data['_view'] = 'admin/slider/add';
      $this->load->view('admin/layouts/main', $data);
    }
  }

  public function delete($id){
    $data = $this->Slider_model->get_by_id($id);

    if(isset($data['image_id'])){
      $filename = realpath('./uploads/images/sliders/'.$data['image']);
      $filename1 = realpath('./uploads/images/sliders/thumb'.$data['image']);
      if(unlink($filename)){
        if(unlink($filename1)){
        $this->Slider_model->delete($id);    
        }         
      }else{
          $this->Slider_model->delete($id);
      }
    }
    redirect('admin/slider/');
  }

  public function edit($id){
    $data['sliderdata'] = $this->Slider_model->get_by_id($id);
    // print_r($data);
    // die;
    if (isset($_POST) && count($_POST) > 0) {
 
      if (!empty($_FILES['image1']['name'])) {
        $upload_conf = array(
            'upload_path' => realpath('./uploads/images/sliders/'),
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
              'upload_path' => realpath('./uploads/images/sliders/thumb.'),
              'source_image' => $upload_data['full_path'],
              'new_image' => $upload_data['file_path'] . '../sliders/thumb/' . $upload_data['file_name'],
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
          // 'image_id' => $this->input->post('image_id'),
          'image_name' => $this->input->post('image_name'),
          'image_detail' => $this->input->post('image_detail'),
          'image' => $picture,
      );
      $slider_id = $this->Slider_model->update($id, $params);
      redirect('admin/slider/');
    } else{
    $data['_view'] = 'admin/slider/edit';
    $this->load->view('admin/layouts/main',$data);
    
    }
    }
}
