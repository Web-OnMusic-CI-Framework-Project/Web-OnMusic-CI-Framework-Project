<?php
class Register_Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('register_page');
    }

    public function register_action()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->_rules();

        if ($this->form_validation->run() === FALSE)
        {
            $this->index();
        }
        else
        {
            $Nama               = $this->input->post('Nama');
            $Username              = $this->input->post('Username');
            $Password          = $this->input->post('Password');
            $Email             = $this->input->post('Email');
            $NoTelp             = $this->input->post('NoTelp');
            $Alamat             = $this->input->post('Alamat');
            $role_id            = '2';

            $data = array(
                'Nama'                  => $Nama,
                'Username'                 => $Username,
                'Password'             => $Password,
                'Email'                => $Email,
                'NoTelp'                => $NoTelp,
                'Alamat'                => $Alamat,
                'role_id'               => $role_id
            );

            $this->data_user->insert_data($data, 'user');
            
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Registration success!.
            <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </div>');
            redirect('login_page');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('Username', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');
        $this->form_validation->set_rules('NoTelp', 'NoTelp', 'required');
        $this->form_validation->set_rules('Alamat', 'Alamat', 'required');
    }
}
