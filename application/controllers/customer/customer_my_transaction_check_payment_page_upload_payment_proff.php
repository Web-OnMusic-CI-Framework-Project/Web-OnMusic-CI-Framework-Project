<?php
class Customer_My_Transaction_Check_Payment_Page_Upload_Payment_Proff extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_my_transaction_check_payment_page_upload_payment_proff');
        $this->load->view('templates_customer/footer');
    }
}
