<?php
class Transaction_See_Detail extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaction_see_detail');
        $this->load->view('templates_admin/footer');
    }

    public function getDataProperties()
    {
        $data['transaction'] = $this->db->query("SELECT * FROM property")->result();
        $data['data_properties'] = $this->input->post('see-detail-transaction');

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaction_see_detail', $data);
        $this->load->view('templates_admin/footer');
    }
}
