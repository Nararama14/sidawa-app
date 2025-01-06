<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persyaratan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PersyaratanModel');
    }

    /**
     * Menampilkan daftar persyaratan
     */
    public function index()
    {
        $data = [
            'title'        => "Halaman Persyaratan | SIMDAWA-APP",
            'persyaratan'  => $this->PersyaratanModel->get_all(),
        ];
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('persyaratan/persyaratan_read', $data);
        $this->load->view('template/footer');
    }

    /**
     * Menambah data persyaratan
     */
    public function tambah()
    {
        if ($this->input->post('create')) {
            $data = [
                'nama_persyaratan' => $this->input->post('nama_persyaratan', true),
                'keterangan'       => $this->input->post('keterangan', true),
            ];
            $this->PersyaratanModel->insert($data);
            redirect('persyaratan');
        } else {
            $data['title'] = "Tambah Data Persyaratan | SIMDAWA-APP";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('persyaratan/persyaratan_create');
            $this->load->view('template/footer');
        }
    }

    /**
     * Mengubah data persyaratan
     *
     * @param int $id
     */
    public function ubah($id)
    {
        if ($this->input->post('update')) {
            $data = [
                'nama_persyaratan' => $this->input->post('nama_persyaratan', true),
                'keterangan'       => $this->input->post('keterangan', true),
            ];
            $this->PersyaratanModel->update($id, $data);
            redirect('persyaratan');
        } else {
            $data = [
                'title'       => "Perbarui Data Persyaratan | SIMDAWA-APP",
                'persyaratan' => $this->PersyaratanModel->get_by_id($id),
            ];
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('persyaratan/persyaratan_update', $data);
            $this->load->view('template/footer');
        }
    }

    /**
     * Menghapus data persyaratan
     *
     * @param int $id
     */
    public function hapus($id)
    {
        if ($this->PersyaratanModel->delete($id)) {
            redirect('persyaratan');
        } else {
            show_error("Gagal menghapus data dengan ID $id");
        }
    }
}
