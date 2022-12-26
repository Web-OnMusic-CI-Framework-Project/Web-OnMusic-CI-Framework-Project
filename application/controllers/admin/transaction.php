<?php
class Transaction extends CI_Controller
{
    public function index()
    {
        $data['transaction'] = $this->db->query("SELECT * FROM transaction tr, property pr, customer cs, rental rt WHERE tr.id_property=pr.id_property AND tr.id_customer=cs.id_customer AND tr.id_rental=rt.id_rental")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaction', $data);
        $this->load->view('templates_admin/footer');
    }
}
