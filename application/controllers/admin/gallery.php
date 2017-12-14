<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Gallery extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Gallery_model');
    $this->load->library('upload');
    
  }

  public function index() {
    $admin_session = $this->session->userdata('backend');
    if ($admin_session['id'] ) {
      $data['gallery'] = $this->Gallery_model->get_all();
      $data['_view'] = 'admin/gallery/view';
      $this->load->view('admin/layouts/main', $data);
    } else {
      $this->session->set_flashdata("error", "Don't Try It");
      redirect('admin/admin/login');
    }
  }

  public function doupload() {
    if ($this->input->post('submit')) {
      if (!empty($_FILES['profile']['name'])) {
        $upload_conf = array(
            'upload_path' => realpath('./uploads/images/original/'),
            'allowed_types' => 'gif|jpg|jpeg|png',
            //'max_size' => '30000',
            'encrypt_name' => true,
            'width' => 315,
            'height' => 315
        );
        //print_r($upload_conf);
        

        $this->upload->initialize($upload_conf);
        //$field_name = 'profile';

        if (!$this->upload->do_upload('profile')) {
          $error['upload'] = $this->upload->display_errors();
        } else {
          $upload_data = $this->upload->data();
          $resize_conf = array(
              'upload_path' => realpath('./uploads/images/thumb/'),
              'source_image' => $upload_data['full_path'],
              'new_image' => $upload_data['file_path'] . '../thumb/' . $upload_data['file_name'],
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
          'name' => $this->input->post('name'),
          'title' => $this->input->post('title'),
          'photo' => $picture,
          'discription' => $this->input->post('discription'),
      );
      $data = $this->Gallery_model->add_image($params);
      redirect('admin/gallery/', "refresh");
    } else {
      $data['_view'] = 'admin/gallery/add';
      $this->load->view('admin/layouts/main', $data);
    }
  }

  public function remove($id) {
    $data = $this->Gallery_model->get_by_id($id);
    if (isset($data['id'])) {
      $filename = realpath('./uploads/images/original/' . $data['photo']);
      if (unlink($filename)) {
        $this->Gallery_model->delete($id);
        redirect('admin/gallery/');
      }else{
        $this->Gallery_model->delete($id);
        redirect('admin/gallery/');
      }
    }
  }



}
