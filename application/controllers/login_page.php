<?php
class Login_Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('login_page');
    }

    public function login_action()
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
            $Username              = $this->input->post('Username');
            $Password          = $this->input->post('Password');

            $where = array(
                'Username'                 => $Username,
                'Password'             => $Password,
            );
            
            if (!empty($this->data_user->get_data_where('user', $where, 1))) {
                $user_credential = $this->data_user->get_data_where('user', $where);
                $first_row = $user_credential->first_row();
            }

            if (empty($this->data_user->get_data_where('user', $where, 1)->result())) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Login failed!, the username or password do not match.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('login_page');
            }elseif ($first_row->role_id === '1') {
                $this->session->set_userdata('username',$first_row->Username);
                redirect('admin/dashboard');
            }else {
                $this->session->set_userdata('username',$first_row->Username);
                $this->session->set_userdata('id_user',$first_row->id_user);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Login success!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('customer/dashboard');
            }
            
            
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('Username', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        
    }
}
