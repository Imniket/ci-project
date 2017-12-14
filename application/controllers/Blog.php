<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Blog extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Blog_model');
  }

// view all the blog
  public function index() {
    $user_session = $this->session->userdata('frontend');
    if ($user_session['id']) {
      redirect('home/');
    } else {
      $data['blogs'] = $this->Blog_model->get_all_blog();
      $data['_view'] = 'blog/viewall';
      $this->load->view('template/main1', $data);
      
    }
  }

//view blog by id
  public function views() {

    $user_session = $this->session->userdata('frontend');
    if ($user_session) {
      $uid = $user_session['id'];
      $data['blog'] = $this->Blog_model->get_by_id($uid);
      $data['_view'] = 'blog/view';
      $this->load->view('template/main1', $data);
    } else {
      redirect('home/');
    }
  }

  public function edit($id) {

    $user_session = $this->session->userdata('frontend');
    if ($user_session) {
      //blog from id 
      $data['blog'] = $this->Blog_model->get_blog_id($id);

      //chack the blog is there

      if (isset($_POST) && count($_POST) > 0) {
        $params = array(
            'name' => $this->input->post('name'),
            'title' => $this->input->post('title'),
            'discription' => $this->input->post('discription'),
        );
        $this->Blog_model->edit_blog($id, $params);
        redirect('blog/views');
      } else {
        $data['_view'] = 'blog/edit';
        $this->load->view('template/main1', $data);
      }
    } else {
      redirect('home/');
    }
  }

  public function insert_blog() {
    if (isset($_POST) && count($_POST) > 0) {
      $user_session = $this->session->userdata('frontend');
      $params = array(
          'u_id' => $user_session['id'],
          'name' => $user_session['name'],
          'title' => $this->input->post('title'),
          'discription' => $this->input->post('discription')
      );
      $user_id = $this->Blog_model->add_blog($params);
      redirect('blog/views');
    } else {
      $data['_view'] = 'blog/add';
      $this->load->view('template/main1', $data);
    }
  }

//delete controller
  public function remove($id) {
    $data = $this->Blog_model->get_blog_id($id);

    if (isset($data['id'])) {
      $this->Blog_model->delete_blog($id);
      redirect('blog/views');
    }
  }

}
