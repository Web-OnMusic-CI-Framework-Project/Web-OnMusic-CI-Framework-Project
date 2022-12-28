<?php
class Transaction_Payment_Check extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaction_payment_check');
        $this->load->view('templates_admin/footer');
    }

    public function getDataProperties()
    {
        $data['properties'] = $this->db->query("SELECT * FROM alatmusikjasa")->result();
        $data['data_properties'] = $this->input->post('detail-transaction');

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaction_payment_check', $data);
        $this->load->view('templates_admin/footer');
    }
}
