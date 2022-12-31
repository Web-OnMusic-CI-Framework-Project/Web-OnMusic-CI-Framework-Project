<?php
class Transaction_See_Detail extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaction_see_detail');
        $this->load->view('templates_admin/footer');
    }

    public function getDataProperties()
    {
        $data['properties'] = $this->db->query("SELECT * FROM alatmusikjasa")->result();
        $data['data_properties'] = $this->input->post('see-detail-transaction');
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
        $this->load->view('admin/transaction_see_detail', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail_property($id)
    {
        $data['detail'] = $this->model_alat_musik->ambil_id($id);
        $data['back_to_transaction'] = $this->input->post('back-to-transaction');

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_property', $data);
        $this->load->view('templates_admin/footer');
    }
}
