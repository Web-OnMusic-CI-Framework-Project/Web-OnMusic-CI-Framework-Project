<?php
class Data_Property_Music extends CI_Controller
{
    public function index()
    {
        $data['alatmusikjasa'] = $this->model_alat_musik->get_data('alatmusikjasa')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_property_music', $data);
        $this->load->view('templates_admin/footer');
    }
}
