<?php
class Data_Property_Music_Add_Property extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_property_music_add_property');
        $this->load->view('templates_admin/footer');
    }
}
