<?php
class Customer_My_Transaction_Page extends CI_Controller
{
    public function index()
    {
        $customer = $this->session->userdata('id_user');
        $data['transaction'] = $this->model_transaction->get_data_where('transaksi', array('id_user'=>$customer))->result();
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_my_transaction_page', $data);
        $this->load->view('templates_customer/footer');
    }

    public function cancel_transaction($id)
    {
        $customer = $this->session->userdata('id_user');

        $where = array('id_transaksi'=>$id, 'id_user'=>$customer);

        $this->model_transaction->delete_data('transaksi', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Transaction cancelled.
            <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('customer/customer_my_transaction_page');
    }
}
