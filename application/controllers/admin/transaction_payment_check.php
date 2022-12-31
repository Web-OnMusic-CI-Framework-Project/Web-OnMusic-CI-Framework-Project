<?php
class Transaction_Payment_Check extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaction_payment_check');
        $this->load->view('templates_admin/footer');
    }

    public function getDataProperties()
    {
        $data['properties'] = $this->db->query("SELECT * FROM alatmusikjasa")->result();
        $data['data_properties'] = $this->input->post('detail-transaction');
        $data['id_user'] = $this->input->post('id-user');
        $data['name_user'] = $this->input->post('name-user');
        $data['user_phone'] = $this->input->post('phone');
        $data['id_transaksi'] = $this->input->post('id-transaksi');
        $data['total_harga'] = $this->input->post('total-harga');
        $data['tgl_mulai_sewa'] = $this->input->post('tgl-mulai-sewa');
        $data['tgl_akhir_sewa'] = $this->input->post('tgl-akhir-sewa');

        $date1      = date_create($this->input->post('tgl-mulai-sewa'));
        $date2      = date_create($this->input->post('tgl-akhir-sewa'));
        $diff       = date_diff($date1,$date2);
        $total_day  = $diff->format("%a");
        $data['total_day'] = $total_day;

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaction_payment_check', $data);
        $this->load->view('templates_admin/footer');
    }

    public function confirmPayment()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $status_pembayaran = $this->input->post('status_pembayaran');

        $data = array(
            'status_pembayaran' => $status_pembayaran,
            'status_transaksi' => 'Finished'
        );

        $where = array(
            'id_transaksi' => $id_transaksi
        );

        $this->model_transaction->update_data('transaksi', $data, $where);
        redirect('admin/transaction');
    }
}
