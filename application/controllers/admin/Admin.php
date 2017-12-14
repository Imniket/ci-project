<?php


class Admin extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('User_model');
  }

  public function login() {
    if (isset($_POST) && count($_POST) > 0) {
      $email = $this->input->post('email');
      $pass =md5($this->input->post('password'));
      $exist = $this->User_model->validateadmin($email, $pass);
      if($uname == $email && $ps == $pass){
        $remember = $this->input->post('remember_me');
        if($remember){
          $this->session->set_userdata('remember_me',TRUE);
        }
      }
      if (count($exist) > 0) {
       $userdata = array(
            'id' => $exist[0]['id'],
            'email' => $email,
            'name' => $exist[0]['name'],
            'password' => $pass,
            'role' => 'ADMIN',                  
          'is_logged' =>TRUE
        );
        
        $this->session->set_userdata('backend',$userdata);
        $this->session->set_flashdata("success",'DONE');
        redirect('admin/admin/home');
      } else {
        $this->session->set_flashdata("error", 'Something is Wrong');
        redirect('admin/admin/login');
      }
    } else {
      $data['_view'] = 'admin/pages/login';
      $this->load->view('admin/layouts/main1', $data);
    }
  }

  function reg() {
    if (isset($_POST) && count($_POST) > 0) {
      $email = $this->input->post('email');
      $valid = $this->User_model->valid_email($email);
      if (count($valid) > 0) {
        $this->session->set_flashdata("error", 'Email allready exist');
        redirect('admin/admin/reg');
      } else {
        $params = array(
            'role' => 'ADMIN',
            'email' => $email,
            'name' => $this->input->post('name'),
            'password' => $this->input->post('password'),
                //'photo' => $_FILES['photo']['name'],
        );
        $data = $this->User_model->add_user($params);
        $this->session->set_flashdata("success", 'Registration Complate ');
        redirect('admin/admin/reg');
      }
    } else {
      $data['_view'] = 'admin/pages/reg';
      $this->load->view('admin/layouts/main1', $data);
    }
  }

  public function home() {
    $admin_session = $this->session->userdata('backend');
    if($admin_session['id']){
    $data['_view'] = 'admin/pages/home';
    $this->load->view('admin/layouts/main', $data);  
    }  else {
      $this->session->set_flashdata("error","DON'T TRY IT SIGN IN FIRST");
      redirect('admin/admin/login');
    }
    
  }
  public function logout(){
   /* $data = array(
      'id' => '',
        'name'=>'',
        'email' => '',
        'password'=>'',
        'role' => ''
    );*/
    $this->session->unset_userdata('backend');
    //$this->session->sess_destroy();
    redirect('admin/admin/login');
    
  }

}
