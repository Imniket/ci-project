<?php

Class Upload extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Gallery_model');
    $this->load->library('upload');
  }

  public function index() {
    
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
      redirect('upload/view', "refresh");
    } else {
      $data['_view'] = 'gallery/add';
      $this->load->view('template/main1', $data);
    }
  }

  public function view() {
    $data['gallery'] = $this->Gallery_model->get_all();
    $data['_view'] = 'gallery/view';
    $this->load->view('template/main1', $data);
  }

}
