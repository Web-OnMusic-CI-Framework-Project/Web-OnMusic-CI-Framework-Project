<?php
class Customer_My_Transaction_Check_Payment_Page_Upload_Payment_Proff extends CI_Controller
{
    public function index()
    {
        $get_id_keranjang = $this->input->post('get-detail-properties');
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, keranjang kr WHERE tr.id_keranjang=kr.id_keranjang AND kr.id_keranjang='$get_id_keranjang'")->result();
        $data['alatmusikjasa'] = $this->db->query("SELECT * FROM alatmusikjasa")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_my_transaction_check_payment_page_upload_payment_proff', $data);
        $this->load->view('templates_customer/footer');
    }

    public function uploadBtn()
    {
        $id_transaksi                  = $this->input->post('id_transaksi');
        $BuktiBayar                    = $_FILES['BuktiBayar']['name'];
        if ($BuktiBayar) {
            $config['upload_path']     = './assets/upload';
            $config['allowed_types']   = 'pdf|jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('BuktiBayar')) {
                $BuktiBayar = $this->upload->data('file_name');
                $this->db->set('BuktiBayar', $BuktiBayar);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'BuktiBayar' => $BuktiBayar,
        );

        $where = array(
            'id_transaksi' => $id_transaksi,
        );

        $this->data_user->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Bukti Pembayaran Anda Berhasil Di-upload!.
        <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('customer/customer_my_transaction_page');
    }
}
