<?php
class Customer_My_Transaction_Page_Detail_Property extends CI_Controller
{
    // public function index()
    // {
    //     $this->load->view('templates_customer/header');
    //     $this->load->view('templates_customer/navbar');
    //     $this->load->view('customer/customer_my_transaction_page_detail_property');
    //     $this->load->view('templates_customer/footer');
    // }
    public function getDataProperties($id_transaksi, $id_keranjang)
    {
        $where_transaksi = array('id_transaksi'=>$id_transaksi, 'id_keranjang'=>$id_keranjang);
        $where_keranjang =array('id_keranjang'=>$id_keranjang);
        $data['transaksi'] = $this->model_transaction->get_data_where('transaksi', $where_transaksi)->result();
        $data['keranjang'] = $this->model_transaction->get_data_where('keranjang', $where_keranjang)->result();
        $data['alatmusikjasa'] = $this->model_transaction->get_data('alatmusikjasa')->result();
      
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navbar');
        $this->load->view('customer/customer_my_transaction_page_detail_property', $data);
        $this->load->view('templates_customer/footer');
        
    }

    public function remove_button($id_item, $id_keranjang, $id_transaksi)
    {
        // $customer_id = $this->session->userdata('id_user');
        $where_keranjang_id = array('id_keranjang'=>$id_keranjang);
        $query_keranjang_id = $this->model_transaction->get_data_where('keranjang',$where_keranjang_id)->result();
        
        $get_item_column = $query_keranjang_id[0]->id_alat_musik_jasa;

        $get_items = explode(", ", $get_item_column);
        $updated_items =array();
        foreach ($get_items as $item) {
            if ($item != $id_item) {
                array_push($updated_items, $item);
            }
        }

        $string_updated_items = implode(", ", $updated_items);
        
        $updated_id_alat_musik_jasa = array('id_alat_musik_jasa' => $string_updated_items);

        $where_update = array(
            'id_keranjang'=>$query_keranjang_id[0]->id_keranjang
        );
        
        $this->model_transaction->update_data('keranjang', $updated_id_alat_musik_jasa, $where_update);
        redirect('customer/customer_my_transaction_page_detail_property/getDataProperties/' . $id_transaksi . '/'. $id_keranjang);

    }

    public function save_button($id_keranjang)
    {
        $customer_id = $this->session->userdata('id_user');
        $total_payment = $this->input->post('total-payment');
        $tgl_awal_sewa =  $this->input->post('TanggalMulaiSewa');
        $tgl_akhir_sewa =  $this->input->post('TanggalAkhirSewa');
        $date1      = date_create($this->input->post('TanggalMulaiSewa'));
        $date2      = date_create($this->input->post('TanggalAkhirSewa'));
        $diff       = date_diff($date1,$date2);
        $total_day  = $diff->format("%a");
        $where_keranjang_id = array('id_keranjang'=>$id_keranjang);

        $query_keranjang_id = $this->model_transaction->get_data_where('keranjang',$where_keranjang_id)->result();;
        

        $data_keranjang = array(
            'TglAwalSewa' => $tgl_awal_sewa,
            'TglAkhirSewa' => $tgl_akhir_sewa,
            'TotalHarga' => $total_payment
        );

        $data_transaksi = array(
            'TglMulaiSewa' => $tgl_awal_sewa,
            'TglAkhirSewa' => $tgl_akhir_sewa,
            'TotalHarga' => $total_payment,
            'DurasiSewa'=> $total_day
        );

        $where_update_keranjang = array(
            'id_keranjang'=>$query_keranjang_id[0]->id_keranjang
        );

        $where_update_transaksi = array(
            'id_keranjang'=>$id_keranjang
        );

        $this->model_transaction->update_data('keranjang', $data_keranjang, $where_update_keranjang);
        $this->model_transaction->update_data('transaksi', $data_transaksi, $where_update_transaksi);

        // $this->model_alat_musik->insert_data($data_transaksi, 'transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Order changes has been made, continue your rent order by finishing your payment :)
        <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </div>');
        redirect('customer/customer_my_transaction_page');
    
    }

    // public function getDataProperties2()
    // {
    //     $get_id_keranjang = $this->input->post('see-detail-transaction');
    //     $data['keranjang'] = $this->db->query("SELECT * FROM keranjang kr WHERE kr.id_keranjang='$get_id_keranjang'")->result();
    //     $data['alatmusikjasa'] = $this->db->query("SELECT * FROM alatmusikjasa")->result();
    //     $this->load->view('templates_customer/header');
    //     $this->load->view('templates_customer/navbar');
    //     $this->load->view('customer/customer_my_transaction_page_detail_property', $data);
    //     $this->load->view('templates_customer/footer');
    // }
}
