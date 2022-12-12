<?php
class Customer_My_Transaction_Check_Payment_Page_Waiting_Payment_Confirmation extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_my_transaction_check_payment_page_waiting_payment_confirmation');
        $this->load->view('templates_customer/footer');
    }
}
