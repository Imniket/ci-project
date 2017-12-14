<?php

class Product extends CI_Controller {

  function __construct() {
    parent::__construct();
     $this->load->helper(array('form', 'url'));
    $this->load->library('cart');
    $this->load->model('Product_model');
    $this->load->model('User_model');
    $this->load->model('Category_model');
    $this->load->model('dropdown_demo_model');
    $this->load->model('Slider_model');
  }

//front side controller
  public function index() {
    $data['title'] = "Products";
    $data['sliders'] = $this->Slider_model->get_slider();
    $data['category'] = $this->Category_model->get_all_category();
    $data['products'] = $this->Product_model->get_all_product();
    $data['_view'] = 'products/view';
    $this->load->view('template/main1', $data);
  }
  public function viewid(){
    $user_session = $this->session->userdata('frontend');
    $data['canceled'] = $this->Product_model->get_canceled_detail($user_session['id']);
    $data['deliverd'] = $this->Product_model->get_deliverd_detail($user_session['id']);
    $data['info'] = $this->Product_model->get_booking_detail($user_session['id']);
    //$data =$this->Product_model->get_order_detail($data['id']);
    $data['_view'] = 'products/view_id';
    $this->load->view('template/main1', $data);
  
  }

  public function add_cart($id) {
    $user_session = $this->session->userdata('frontend');
    $data = $this->Product_model->get_by_id($id);
    //$data = $user_session['id'];
    $qty = $this->Product_model->cart_vacant($id);
    $in = array(
        'id' => $data['id'],
        'name' => $data['name'],
        'qty' => 1,
        'price' => $data['price'],
        'image' => $data['image1']
    );
    $remain = array(
        'remaining_quantity' => $qty['remaining_quantity'] - $in['qty']
    );

    $some = $this->Product_model->update_product($id, $remain);
    $this->cart->insert($in);
    redirect('product/cart/');
  }

  public function cart() {
    $data['_view'] = 'products/cart';
    $this->load->view('template/main1', $data);
  }

  public function update_cart() {
    $cart_info = $_POST['cart'];
           
    foreach ($cart_info as $id => $cart) {

      $rowid = $cart['rowid'];
      $price = $cart['price'];
      $amount = $price * $cart['qty'];
      $qty = $cart['qty'];
      
      $data = array(
          'rowid' => $rowid,
          'qty' => $qty,
          'price' => $price,
          'amount' => $amount
      );
      $this->cart->update($data);
    
            
    }

    redirect('product/cart/');
  }


  public function remove_cart($id, $rowid, $qty) {
    $quantity = $this->Product_model->cart_vacant($id);
    if ($rowid == "all") {
      $this->cart->destroy();
    } else {
      $remain = array(
          'remaining_quantity' => $quantity['remaining_quantity'] + $qty
      );      
      $data = array(
          'id' => $id,
          'rowid' => $rowid,
          'qty' => 0
      );
      $this->Product_model->update_product($id,$remain);
      $this->cart->update($data);
      redirect('product/cart');
    }
  }

  public function order_detail() {
    $user_session = $this->session->userdata('frontend');
    if ($user_session['id']) {
      //dependent dropdwon
      $data = $this->User_model->get_users($user_session['id']);
      $data['country'] = $this->dropdown_demo_model->get_country();
      $data['state'] = $this->dropdown_demo_model->get_state();
      $data['city'] = $this->dropdown_demo_model->get_city();      
      $data['_view'] = 'products/order_detail';
      $this->load->view('template/main1', $data);
    } else {
      $report = $this->session->set_flashdata("error", "Please login First");
      redirect('users/login', $report);
    }
  }

  function populate_state()
    {
        $id = $this->input->post('id');
        echo(json_encode($this->dropdown_demo_model->get_state($id)));
    }

    function populate_city()
    {
        $id = $this->input->post('id');
        echo(json_encode($this->dropdown_demo_model->get_city($id)));
    }

 

  public function booking() {
    $user_session = $this->session->userdata('frontend');

    if ($user_session['id']) {
      $data = array(
          'u_id' => $user_session['id'],
          'email' => $user_session['email'],
          'name' => $user_session['name'],
          'last_name' => $this->input->post('last_name'),
           'address' =>$this->input->post('address'),
          'country' =>$this->input->post('country'),
          'state' => $this->input->post('state'),
          'city' => $this->input->post('city'),
          'phone' => $this->input->post('phone'),
          'total' => $this->input->post('total')
      );

      $booking = $this->Product_model->insert_booking($data);


      if ($cart = $this->cart->contents()) {
        foreach ($cart as $detail) {
          $id = $detail['id'];
          $name = $detail['name'];
          $quantity = $detail['qty'];
          $price = $detail['price'];
        
          $order = array(
              'p_id' => $detail['id'],
              'product_name' => $detail['name'],
              'quantity' => $detail['qty'],
              'b_id' => $booking,
              'baseprice' => $detail['price']
          );
          $order_detail = $this->Product_model->order_detail($order);
            $qty = $this->Product_model->cart_vacant($id);
          if($quantity>1){
            $remain = array(
                'id' => $id,
             'remaining_quantity' => $qty['remaining_quantity'] - ($quantity - 1)     
            );
          }  elseif($quantity = 1) {
            $remain = array(
                'id' => $id,
             'remaining_quantity' => $qty['remaining_quantity'] - $quantity      
            );
            
          }
          //print_r($remain);
          $data = $this->Product_model->update_product($id,$remain);       
           
        }
      
        //die();
          }
    }

    $this->cart->destroy();
    redirect('product/viewid');
  }

  function cancel($id,$status){
    if($status == 'BOOKED'){
      $status = 'PENDING';
      $data = $this->Product_model->update_order($status,$id);
      redirect('product/viewid');
    }else{
      $status = 'BOOKED';
      $data = $this->Product_model->update_order($status,$id);
      redirect('product/viewid');
    }
    
  }

}
