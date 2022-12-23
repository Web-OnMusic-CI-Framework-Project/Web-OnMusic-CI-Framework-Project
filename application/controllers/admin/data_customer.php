<?php
class Data_Customer extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->data_user->get_data('user')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_customer', $data);
        $this->load->view('templates_admin/footer');
    }
}
