<?php
class Transaction extends CI_Controller
{
    public function index()
    {
        $data['transaction'] = $this->db->query("SELECT * FROM transaksi tr, user u, keranjang kr WHERE tr.id_user=u.id_user AND tr.id_keranjang=kr.id_keranjang")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaction', $data);
        $this->load->view('templates_admin/footer');
    }

    public function transaction_canceled($id)
    {
        $id_user = $this->input->post('id_user');

        $where = array('id_transaksi'=>$id, 'id_user'=>$id_user);

        $this->model_transaction->delete_data('transaksi', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Transaction cancelled.
            <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/transaction');
    }

    public function transaction_completed($id)
    {
        $id_transaksi = $this->input->post('id_transaksi');

        $data = array(
            'status_transaksi' => 'Finished'
        );

        $where = array(
            'id_transaksi' => $id_transaksi
        );

        $this->model_transaction->update_data('transaksi', $data, $where);
        redirect('admin/transaction');
    }
}
