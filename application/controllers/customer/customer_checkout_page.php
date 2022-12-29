<?php
class Customer_Checkout_Page extends CI_Controller
{
    public function index()
    {
        $all_id = $this->input->post('item-rent');
        $extract_id = implode(', ', $all_id);
        $data['item_id'] = $extract_id;
        $data['detail'] = $this->db->query("SELECT * FROM alatmusikjasa")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_checkout_page', $data);
        $this->load->view('templates_customer/footer');
    }
}
