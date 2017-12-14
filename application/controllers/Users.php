<?php

class Users extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('User_model');
  }

  public function login() {
    if ($this->session->userdata('id')) {
      redirect('', "refrash");
    } else {
      if (isset($_POST) && count($_POST) > 0) {
        $email = $this->input->post('email');
        $pass = md5($this->input->post('password'));    
        $exist = $this->User_model->validate($email, $pass);

        if (count($exist) > 0) {
          $userdata = array(
              'id' => $exist[0]['id'],
              'email' => $email,
              'name' => $exist[0]['name'],
              'password' => $pass,
              'photo' => $exist[0]['photo'],
              
              'is_logged' => TRUE
          );
          $this->session->set_userdata('frontend',$userdata);
          $this->session->set_flashdata("success", "DONE");
          redirect('users/profile');
        } else {
          $this->session->set_flashdata("error", 'Something is Wrong');
          redirect('users/login');
        }
      } else {
        $data['_view'] = 'pages/login';
        $this->load->view('template/main1', $data);
      }
    }
  }

  public function reg() {
    if ($this->session->userdata('id')) {
      redirect('', "refrash");
    } else {
      if (isset($_POST) && count($_POST) > 0) {
        $email = $this->input->post('email');
        $valid = $this->User_model->valid_email($email);
        if (count($valid) > 0) {
          $this->session->set_flashdata("error", "Email id Allready Exist");
          redirect('users/reg');
        } else {
          $params = array(
              'email' => $email,
              'name' => $this->input->post('name'),
              'password' => md5($this->input->post('password')),
              'photo' => $this->input->post('photo'),
          );
          $user_id = $this->User_model->add_user($params);
          $this->session->set_flashdata("success", "Your are Register Now Go To Login");
          redirect('users/reg');
        }
      } else {

        $data['_view'] = 'pages/reg';
        $this->load->view('template/main1', $data);
      }
    }
  }

  public function profile() {
    $user_session = $this->session->userdata('frontend');
    if ($user_session['id']) {
      $data['_view'] = 'pages/profile';
      $this->load->view('template/main1', $data);
    } else {
      redirect('', "refrash");
    }
  }

  public function logout() {
    /*$data = array(
        'id' => '',
        'email' => '',
        'name' => '',
        'password' => '',
        'photo' => '',
    );*/

    $this->session->unset_userdata('frontend');
   
    //$this->session->sess_destroy();
    redirect('users/login');
  }

}
