<?php
class Customer_Checkout_Page extends CI_Controller
{

    public function index()
    {
        $all_id = $this->input->post('item-rent');
        $extract_id = implode(', ', $all_id);
        $data['item_id'] = $extract_id;
        $data['detail'] = $this->model_transaction->get_data('alatmusikjasa')->result();
    
        $customer_id = $this->session->userdata('id_user');

        $data_keranjang = array(
            'id_user' => $customer_id,
            'id_alat_musik_jasa' => $extract_id,
            'TglAwalSewa' => '',
            'TglAkhirSewa' => '',
            'TotalHarga' => ''
        );
        $this->model_transaction->insert_data($data_keranjang, 'keranjang');

        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_checkout_page', $data);
        $this->load->view('templates_customer/footer');
    }

    public function rentButton()
    {
        
        $customer_id = $this->session->userdata('id_user');
        $total_payment = $this->input->post('total-payment');
        $tgl_awal_sewa =  $this->input->post('TanggalMulaiSewa');
        $tgl_akhir_sewa =  $this->input->post('TanggalAkhirSewa');

        $query_keranjang_id = $this->model_transaction->get_keranjang_id('keranjang',$customer_id)->result();
        
        $data_transaksi = array(
            'id_user' => $customer_id,
            'id_keranjang' => $query_keranjang_id[0]->id_keranjang,
            'TglMulaiSewa' => $tgl_awal_sewa,
            'TglAkhirSewa' => $tgl_akhir_sewa,
            'TotalHarga' => $total_payment,
            'TotalHarga' => $total_payment,
            'DurasiSewa' => 'belum dibuat codingan',
            'BuktiBayar' => 'belum ada',
            'status_transaksi' => 'Renting',
            'status_pembayaran' => '0',
        );



        $this->model_alat_musik->insert_data($data_transaksi, 'transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Transaksi Berhasil, silahkan ke halaman My Transaction untuk melakukan pembayaran!
        <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </div>');
        redirect('customer/dashboard');
    }
}
