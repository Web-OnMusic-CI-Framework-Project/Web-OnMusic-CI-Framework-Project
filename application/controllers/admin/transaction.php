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
}
