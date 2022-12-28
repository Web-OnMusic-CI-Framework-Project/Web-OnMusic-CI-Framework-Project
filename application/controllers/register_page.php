<?php
class Register_Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('register_page');
        $this->load->view('templates_customer/footer');
    }
}
