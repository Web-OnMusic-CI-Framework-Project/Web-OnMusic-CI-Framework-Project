<?php

class Data_User extends CI_Model{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    
    public function get_data_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_property($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
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
