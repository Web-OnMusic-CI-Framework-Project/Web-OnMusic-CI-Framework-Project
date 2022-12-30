<?php
class Customer_My_Transaction_Page_Detail_Property extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_my_transaction_page_detail_property');
        $this->load->view('templates_customer/footer');
    }

    public function getDataProperties()
    {
        $get_id_keranjang = $this->input->post('see-detail-transaction');
        $data['keranjang'] = $this->db->query("SELECT * FROM keranjang kr WHERE kr.id_keranjang='$get_id_keranjang'")->result();
        $data['alatmusikjasa'] = $this->db->query("SELECT * FROM alatmusikjasa")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_my_transaction_page_detail_property', $data);
        $this->load->view('templates_customer/footer');
    }
}
