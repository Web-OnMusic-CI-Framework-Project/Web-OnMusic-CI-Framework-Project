<?php
class Customer_My_Transaction_Page extends CI_Controller
{
    public function index()
    {
        $customer = $this->session->userdata('id_user');
        $data['transaction'] = $this->db->query("SELECT * FROM transaksi tr, user u, keranjang kr WHERE tr.id_user=u.id_user AND tr.id_keranjang=kr.id_keranjang AND u.id_user='$customer' ORDER BY id_transaksi ASC")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_my_transaction_page', $data);
        $this->load->view('templates_customer/footer');
    }
}
