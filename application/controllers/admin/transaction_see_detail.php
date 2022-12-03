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
}
