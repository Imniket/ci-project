<?php

/**
 * 
 */
class Category extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Category_model');
  }

  public function index() {
    $admin_session = $this->session->userdata('backend');
    if ($admin_session['id']) {
      $data['category'] = $this->Category_model->get_all_category();
      $data['_view'] = 'admin/category/view';
      $this->load->view('admin/layouts/main', $data);
    } else {
      redirect('admin/admin/login');
    }
  }

  public function insert() {
    $admin_session = $this->session->userdata('backend');
    if ($admin_session['id']) {
      if (isset($_POST) && count($_POST) > 0) {
        if (!empty($this->input->post('name'))) {
          $params = array(
              'name' => $this->input->post('name')
          );
          $this->Category_model->insert_category($params);
          redirect('admin/category/');
        } else {
          redirect('admin/category/insert');
        }
      } else {
        $data['_view'] = 'admin/category/insert';
        $this->load->view('admin/layouts/main', $data);
      }
    }else{
      redirect('admin/admin/login');
    }
  }

}

?>