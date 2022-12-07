<?php
class Customer_My_Transaction_Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_my_transaction_page');
        $this->load->view('templates_customer/footer');
    }
}
