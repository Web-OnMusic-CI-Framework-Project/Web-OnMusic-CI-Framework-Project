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

    public function create_customer()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_property_music_add_customer');
        $this->load->view('templates_admin/footer');
    }

    public function create_customer_action()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->_rules();

        if ($this->form_validation->run() === FALSE)
        {
            $this->create_customer();
        }
        else
        {
            $Nama               = $this->input->post('Nama');
            $Username              = $this->input->post('Username');
            $Password          = $this->input->post('Password');
            $Email             = $this->input->post('Email');
            $NoTelp             = $this->input->post('NoTelp');
            $Alamat             = $this->input->post('Alamat');

            $data = array(
                'Nama'                  => $Nama,
                'Username'                 => $Username,
                'Password'             => $Password,
                'Email'                => $Email,
                'NoTelp'                => $NoTelp,
                'Alamat'                => $Alamat,
            );

            $this->data_user->insert_data($data, 'user');
            
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data User Berhasil Ditambahkan!.
            <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </div>');
            redirect('admin/data_customer');
        }
    }

    public function update_data($id)
    {
        $where = array('id_user' => $id);
        $data['user'] = $this->data_user->get_data_where('user', $where)->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_customer_update', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_data_action($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data($id);
        } else {
            $Nama               = $this->input->post('Nama');
            $Username              = $this->input->post('Username');
            $Password          = $this->input->post('Password');
            $Email             = $this->input->post('Email');
            $NoTelp             = $this->input->post('NoTelp');
            $Alamat             = $this->input->post('Alamat');

            $data = array(
                'Nama'                  => $Nama,
                'Username'                 => $Username,
                'Password'             => $Password,
                'Email'                => $Email,
                'NoTelp'                => $NoTelp,
                'Alamat'                => $Alamat,
            );

            $where = array(
                'id_user' => $id
            );

            $this->data_user->update_data('user', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data User Berhasil Diupdate!.
            <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_customer');
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
