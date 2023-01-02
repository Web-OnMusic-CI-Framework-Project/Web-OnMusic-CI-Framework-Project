<?php
class Customer_Checkout_Page extends CI_Controller
{

    public function index()
    {
        
        $data['keranjang'] = $this->model_transaction->get_data('keranjang')->result();
        $data['detail'] = $this->model_transaction->get_data('alatmusikjasa')->result();
    
        $customer_id = $this->session->userdata('id_user');

        $data['keranjang_id'] = $this->model_transaction->get_keranjang_id('keranjang',$customer_id)->result();

        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_checkout_page', $data);
        $this->load->view('templates_customer/footer');
        
    }
    public function checkout()
    {
        $this->form_validation->set_rules('item-rent[]', 'item-rent', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Please select at least an item to proceed.
            <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('customer/dashboard');
        }
        else
        {
            $all_id = $this->input->post('item-rent');
            $extract_id = implode(', ', $all_id);
            // $data['item_id'] = $extract_id;
        
            $customer_id = $this->session->userdata('id_user');

            $data_keranjang = array(
                'id_user' => $customer_id,
                'id_alat_musik_jasa' => $extract_id,
                'TglAwalSewa' => '',
                'TglAkhirSewa' => '',
                'TotalHarga' => ''
            );
            $this->model_transaction->insert_data($data_keranjang, 'keranjang');
            $data['keranjang_id'] = $this->model_transaction->get_keranjang_id('keranjang',$customer_id)->result();
            $data['keranjang'] = $this->model_transaction->get_data('keranjang')->result();
            $data['detail'] = $this->model_transaction->get_data('alatmusikjasa')->result();

            $this->load->view('templates_customer/header');
            $this->load->view('templates_customer/navbar');
            $this->load->view('customer/customer_checkout_page', $data);
            $this->load->view('templates_customer/footer');
        }
    }

    public function rentButton()
    {
        $customer_id = $this->session->userdata('id_user');
        $total_payment_item = $this->input->post('total-payment');
        $tgl_awal_sewa =  $this->input->post('TanggalMulaiSewa');
        $tgl_akhir_sewa =  $this->input->post('TanggalAkhirSewa');
        $date1      = date_create($this->input->post('TanggalMulaiSewa'));
        $date2      = date_create($this->input->post('TanggalAkhirSewa'));
        $diff       = date_diff($date1,$date2);
        $total_day  = $diff->format("%a");
        $total_payment = $total_payment_item * $total_day;
        $query_keranjang_id = $this->model_transaction->get_keranjang_id('keranjang',$customer_id)->result();
        
        $data_transaksi = array(
            'id_user' => $customer_id,
            'id_keranjang' => $query_keranjang_id[0]->id_keranjang,
            'TglMulaiSewa' => $tgl_awal_sewa,
            'TglAkhirSewa' => $tgl_akhir_sewa,
            'TotalHarga' => $total_payment,
            'DurasiSewa' => $total_day,
            'BuktiBayar' => 'belum ada',
            'status_transaksi' => 'Renting',
            'status_pembayaran' => '0',
        );

        $data_keranjang = array(
            'TglAwalSewa' => $tgl_awal_sewa,
            'TglAkhirSewa' => $tgl_akhir_sewa,
            'TotalHarga' => $total_payment
        );

        $where_update = array(
            'id_keranjang'=>$query_keranjang_id[0]->id_keranjang
        );

        $this->model_transaction->update_data('keranjang', $data_keranjang, $where_update);
        $this->model_alat_musik->insert_data($data_transaksi, 'transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Transaksi Berhasil, silahkan ke halaman My Transaction untuk melakukan pembayaran!
        <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </div>');
        redirect('customer/dashboard');
    
    }

    public function cancel_button($id)
    {
        $where = array('id_keranjang'=>$id);

        $this->model_transaction->delete_data('keranjang', $where);
        redirect('customer/dashboard');
    }

    public function remove_button($id)
    {
        $customer_id = $this->session->userdata('id_user');
        $query_keranjang_id = $this->model_transaction->get_keranjang_id('keranjang',$customer_id)->result();

        $get_item_column = $query_keranjang_id[0]->id_alat_musik_jasa;

        $get_items = explode(", ", $get_item_column);
        $updated_items =array();
        foreach ($get_items as $item) {
            if ($item != $id) {
                array_push($updated_items, $item);
            }
        }

        $string_updated_items = implode(", ", $updated_items);
        
        $updated_id_alat_musik_jasa = array('id_alat_musik_jasa' => $string_updated_items);

        $where_update = array(
            'id_keranjang'=>$query_keranjang_id[0]->id_keranjang
        );
        
        $this->model_transaction->update_data('keranjang', $updated_id_alat_musik_jasa, $where_update);
        redirect('customer/customer_checkout_page/');

    }

}
