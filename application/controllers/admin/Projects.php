<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Projects extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Projects_model');
    $this->load->library('upload');
    

  }
  public function index() {
      $data['projects'] = $this->Projects_model->view();
      $data['_view'] = 'admin/projects/view';
      $this->load->view('admin/layouts/main', $data);
  
  }

  function add() {
    $admin_session = $this->session->userdata('backend');
    if($admin_session['id']){
      if (isset($_POST) && count($_POST) > 0) {
        //print_r($_POST);
        //exit;
        
      if (!empty($_FILES['project_pic']['name'])) {
        $upload_conf = array(
            'upload_path' => realpath('./uploads/images/projects/'),
            'allowed_types' => 'gif|jpg|jpeg|png',
            //'max_size' => '30000',
            'encrypt_name' => true,
            'width' => 315,
            'height' => 315
        );

        $this->upload->initialize($upload_conf);
        //$field_name = 'profile';

        if (!$this->upload->do_upload('project_pic')) {
          $error['upload'] = $this->upload->display_errors();
        } else {
          $upload_data = $this->upload->data();
          $resize_conf = array(
              'upload_path' => realpath('./uploads/images/projects/thumb.'),
              'source_image' => $upload_data['full_path'],
              'new_image' => $upload_data['file_path'] . '../projects/thumb/' . $upload_data['file_name'],
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
          'project_name' => $this->input->post('project_name'),
          'sort_detail' => $this->input->post('sort_detail'),
          'project_detail' => $this->input->post('project_detail'),
          'project_pic' => $picture,
          );
      
      
      $data = $this->Projects_model->add_project($params);
      //print_r($data);
      redirect('admin/projects/');
    } else {
      $data['_view'] = 'admin/projects/add';
      $this->load->view('admin/layouts/main', $data);
    }
    }  else {
      $this->session->set_flashdata("error", "Don't Try It");
      redirect('admin/admin/login');
    }
    
  }

  public function remove($id) {
    $data = $this->Projects_model->get_by_id($id);
    if (isset($data['project_id'])) {
      $filename = realpath('./uploads/images/projects/' . $data['project_pic']);
      if (unlink($filename)) {
        $this->Projects_model->delete($id);
        redirect('admin/projects/');
      } else {
        $this->Projects_model->delete($id);
        redirect('admin/projects/');
      }
    }
  }
  public function changestatus($id,$status){
    //echo $status;
    if($status == 'active'){
      $status = 'inactive';  
         // echo $status;
      $data = $this->Projects_model->change_status($status,$id);
      //print_r($data);
      redirect('admin/projects/');
      }else{
        $status = 'active';
         $data = $this->Projects_model->change_status($status,$id);
         redirect('admin/projects/');
       //echo $status;
      }

  }
  public function edit($id){
    $data['projects'] = $this->Projects_model->get_by_id($id);
    //upadte data

    if(isset($_POST) && count($_POST) > 0){

      //image upload code and store
      if (!empty($_FILES['project_pic']['name'])) {
        $upload_conf = array(
            'upload_path' => realpath('./uploads/images/projects/'),
            'allowed_types' => 'gif|jpg|jpeg|png',
            //'max_size' => '30000',
            'encrypt_name' => true,
            'width' => 315,
            'height' => 315
        );

        $this->upload->initialize($upload_conf);
        //$field_name = 'profile';

        if (!$this->upload->do_upload('project_pic')) {
          $error['upload'] = $this->upload->display_errors();
        } else {
          $upload_data = $this->upload->data();
          $resize_conf = array(
              'upload_path' => realpath('./uploads/images/projects/thumb.'),
              'source_image' => $upload_data['full_path'],
              'new_image' => $upload_data['file_path'] . '../projects/thumb/' . $upload_data['file_name'],
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
      //image upload code and store 
      $params = array(
        'project_name' => $this->input->post('project_name'),
          'sort_detail' => $this->input->post('sort_detail'),
          'project_detail' => $this->input->post('project_detail'),
          'project_pic' => $picture,
        );
      $this->Projects_model->editproject($id,$params);
      redirect('admin/Projects/');

    }


    $data['_view'] = 'admin/projects/edit';
    $this->load->view('admin/layouts/main',$data);
    //print_r($data);

  }
  

}
