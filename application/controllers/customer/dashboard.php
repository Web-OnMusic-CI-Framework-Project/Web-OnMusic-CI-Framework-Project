<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['alatmusikjasa'] = $this->model_alat_musik->get_data('alatmusikjasa')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates_customer/footer');
    }
}
