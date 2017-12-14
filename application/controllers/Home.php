<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('Slider_model');
    $this->load->model('Projects_model');
  }


  public function index() {
    $data['project'] = $this->Projects_model->get_projects();    
    $data['_view'] = 'pages/homeview';
    $this->load->view('template/main', $data);
    //$this->load->view('pages/homeview');
  }

  public function about() {
    $data['_view'] = 'pages/about';
    $this->load->view('template/main1', $data);
  }

  public function services() {
    $data['_view'] = 'pages/services';
    $this->load->view('template/main1', $data);
  }

  public function codes() {
    $data['_view'] = 'pages/codes';
    $this->load->view('template/main1', $data);
  }

  public function gallery() {
    $data['_view'] = 'pages/gallery';
    $this->load->view('template/main1', $data);
  }

  public function contact() {
    $data['_view'] = 'pages/contact';
    $this->load->view('template/main1', $data);
  }
  public function projects($id){
  $project = $this->Projects_model->get_by_id($id);
  $data['data'] = $project;
   $data['_view'] = 'pages/project';
   $this->load->view('template/main1', $data);
    
  }

}
