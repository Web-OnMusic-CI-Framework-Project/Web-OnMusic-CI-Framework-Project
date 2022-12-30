<?php

class Model_transaction extends CI_Model{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    
    public function get_data_where($table, $where, $limit = NULL)
    {
        return $this->db->get_where($table, $where, $limit);
    }
    
    public function get_keranjang_id($table, $id)
    {
        $this->db->order_by('id_keranjang','DESC');
        $this->db->limit(1);
        return $this->db->get_where($table, array('id_user'=>$id));
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($table, $where)
    {
        $this->db->delete($table, $where);
    }

    public function ambil_id($id)
    {
        $hasil = $this->db->where('id_user', $id)->get('user');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
}
