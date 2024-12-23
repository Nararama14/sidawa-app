<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PersyaratanModel extends CI_Model
{
    private $table = 'persyaratan';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function insert()
    {
        $data = [
            'nama_persyaratan' => $this->input->post('nama_persyaratan'),
            'keterangan'       => $this->input->post('keterangan')
        ];
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function update($id)
    {
        $data = [
            'nama_persyaratan' => $this->input->post('nama_persyaratan'),
            'keterangan'       => $this->input->post('keterangan')
        ];
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
