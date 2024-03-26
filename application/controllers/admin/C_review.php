<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_review extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Halaman Isi Nama - Pembeli';
        $this->load->view('admin/layout/header2', $data);
        // $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/review/isi_nama');
        $this->load->view('admin/layout/footer2');
    }

    public function Tambah_nama()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
            'required' => 'Anda Belum Mengisi Nama ANda',
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error');
            $this->index();
        } else {

            $nama_pm  = $this->input->post('nama');
            //$data['nama'] = $nama_pm;
            redirect('admin/C_review/Pilih_pegawai/' . $nama_pm);
        }
    }


    public function Pilih_pegawai($nama)
    {
        $data['pegawai'] = $this->db->query("SELECT * FROM tb_pegawai")->result();
        $data['title'] = 'Halaman Pilih Pegawai - Pembeli';
        $data['nama'] = $nama;

        $this->load->view('admin/layout/header2', $data);
        $this->load->view('admin/review/pilih_pegawai', $data);
        $this->load->view('admin/layout/footer2');
    }

    public function Bintang($nama, $id)
    {
        $data['pegawai'] = $this->db->query("SELECT * FROM tb_pegawai as pg where $id=pg.id_pegawai")->result();

        $data['title'] = 'Halaman Pilih Pegawai - Pembeli';
        $data['nama'] = $nama;
        $data['id'] = $id;

        //$this->load->view('admin/layout/header2', $data);
        $this->load->view('admin/review/bintang', $data);
        //$this->load->view('admin/layout/footer2');
    }


    public function Tambah()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
            'required' => 'Anda Belum Mengisi Nama ANda',
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error');
            $this->index();
        } else {
            $id_pg  = $this->input->post('id');
            $tgl  = $this->input->post('tanggal');
            $nama_pm  = $this->input->post('nama');
            $rating  = $this->input->post('rating');
            $opini  = $this->input->post('opinion');

            $data = array(
                'tanggal'                =>    $tgl,
                'nama'                     =>    $nama_pm,
                'nilai'                  =>    $rating,
                'komentar'             =>    $opini,
                'id_pegawai'                   =>    $id_pg,
            );

            $tambah2 = $this->Mtambah->tambah('tb_penilaian', $data);
            if ($tambah2 > 0) {
                $this->session->set_flashdata('berhasil', 'true');
                redirect('admin/C_review');
            }
        }
    }
}
