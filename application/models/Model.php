<?php
class Model extends CI_Model
{
    public function cek_login($username, $password)
    {
        $result = $this->db
            ->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function get_detail($table, $id)
    {
        return $this->db->query("SELECT * FROM $table WHERE $table.id='$id'");
    }
    public function get_berita_selain($id)
    {
        return $this->db->query("SELECT * FROM berita WHERE berita.id<>'$id'");
    }
    public function insert_data($table, $data)
    {
        $this->db->insert($table, $data);
    }
    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
    public function delete_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
