<?php
class Customer_My_Transaction_Page extends CI_Controller
{
    public function index()
    {
        $customer = $this->session->userdata('id_user');
        $data['transaction'] = $this->model_transaction->get_data_where('transaksi', array('id_user'=>$customer))->result();
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_my_transaction_page', $data);
        $this->load->view('templates_customer/footer');
    }
}
