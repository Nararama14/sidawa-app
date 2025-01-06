<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PersyaratanModel extends CI_Model
{
    private $table = 'persyaratan';

    /**
     * Fetch all records from the table
     *
     * @return array
     */
    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    /**
     * Insert a new record into the table
     *
     * @param array $data
     * @return bool
     */
    public function insert($data = null)
    {
        if ($data === null) {
            $data = [
                'nama_persyaratan' => $this->input->post('nama_persyaratan', true),
                'keterangan'       => $this->input->post('keterangan', true),
            ];
        }
        return $this->db->insert($this->table, $data);
    }

    /**
     * Get a single record by ID
     *
     * @param int $id
     * @return object|null
     */
    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    /**
     * Update a record by ID
     *
     * @param int   $id
     * @param array $data
     * @return bool
     */
    public function update($id, $data = null)
    {
        if ($data === null) {
            $data = [
                'nama_persyaratan' => $this->input->post('nama_persyaratan', true),
                'keterangan'       => $this->input->post('keterangan', true),
            ];
        }
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    /**
     * Delete a record by ID
     *
     * @param int $id
     * @return bool
     */
    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
