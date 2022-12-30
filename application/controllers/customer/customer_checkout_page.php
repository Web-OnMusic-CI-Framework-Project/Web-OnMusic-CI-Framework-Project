<?php
class Customer_Checkout_Page extends CI_Controller
{
    public function index()
    {
        $all_id = $this->input->post('item-rent');
        $extract_id = implode(', ', $all_id);
        $data['item_id'] = $extract_id;
        $data['detail'] = $this->db->query("SELECT * FROM alatmusikjasa")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_checkout_page', $data);
        $this->load->view('templates_customer/footer');
    }

    public function rentButton()
    {
        $id_customer = $this->session->userdata('id_user');
        $all_id_string = $this->input->post('id-string');
        $total_payment = $this->input->post('total-payment');
        $tgl_awal_sewa =  $this->input->post('TanggalMulaiSewa');
        $tgl_akhir_sewa =  $this->input->post('TanggalAkhirSewa');

        $data_keranjang = array(
            'id_user' => $id_customer,
            'id_alat_musik_jasa' => $all_id_string,
            'TglAwalSewa' => $tgl_awal_sewa,
            'TglAkhirSewa' => $tgl_akhir_sewa,
            'TotalHarga' => $total_payment
        );

        $data_transaksi = array(
            'id_user' => $id_customer,
            'TglMulaiSewa' => $tgl_awal_sewa,
            'TglAkhirSewa' => $tgl_akhir_sewa,
            'TotalHarga' => $total_payment,
            'TotalHarga' => $total_payment,
            'DurasiSewa' => 'belum dibuat codingan',
            'BuktiBayar' => 'belum ada',
            'status_transaksi' => 'Renting',
            'status_pembayaran' => '0',
        );



        $this->model_alat_musik->insert_data($data_keranjang, 'keranjang');
        $this->model_alat_musik->insert_data($data_transaksi, 'transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Transaksi Berhasil, silahkan ke halaman My Transaction untuk melakukan pembayaran!
        <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </div>');
        redirect('customer/dashboard');
    }
}
