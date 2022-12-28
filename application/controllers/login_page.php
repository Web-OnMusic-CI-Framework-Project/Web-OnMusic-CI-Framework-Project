<?php
class Login_Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('login_page');
    }
}
