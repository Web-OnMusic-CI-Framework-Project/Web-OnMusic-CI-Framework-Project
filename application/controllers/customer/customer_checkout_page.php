<?php
class Customer_Checkout_Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_checkout_page');
        $this->load->view('templates_customer/footer');
    }
}
