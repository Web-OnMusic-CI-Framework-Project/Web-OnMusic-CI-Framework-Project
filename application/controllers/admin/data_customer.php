<?php
class Data_Customer extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_customer');
        $this->load->view('templates_admin/footer');
    }
}
