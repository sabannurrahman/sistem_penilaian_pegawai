<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data_pegawai extends CI_Controller
{

    public function index()
    {
        $data['pegawai'] = $this->db->query("SELECT * FROM tb_pegawai")->result();

        $data['title'] = 'Halaman Data Pegawai - ADMIN';
        $data['menu'] = '1';

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_pegawai/V_data_pegawai', $data);
        $this->load->view('admin/layout/footer');
    }

    public function Tambah_pegawai()
    {
        $this->form_validation->set_rules('nama_pg', 'nama_pg2', 'required|trim|is_unique[tb_pegawai.nama_pegawai]', [
            'required' => 'Anda Belum Mengisi Nama Pegawai',
            'is_unique' => 'nama pegawai sudah ada'
        ]);
        $this->form_validation->set_rules('jabatan', 'jabatan2', 'required|trim', [
            'required' => 'Anda Belum Mengisi jabatan',
        ]);


        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error');
            $this->index();
        } else {

            $config['upload_path'] = '././assets/barang';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('error');
                $this->index();
            } else {
                $gambar2 = $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('gambar_gaya')) {
                $this->session->set_flashdata('error');
                $this->index();
            } else {
                $gambar3 = $this->upload->data('file_name');
            }

            $nama_pg  = $this->input->post('nama_pg');
            $jabatan  = $this->input->post('jabatan');


            $data = array(
                'nama_pegawai'           =>    $nama_pg,
                'jabatan'                =>    $jabatan,
                'gambar_brg'             =>    $gambar2,
                'gambar_profile'             =>    $gambar3,
            );

            $tambah2 = $this->Mtambah->tambah('tb_pegawai', $data);
            if ($tambah2 > 0) {
                $this->session->set_flashdata('berhasil', 'true');
                redirect('admin/C_data_pegawai');
            }
        }
    }

    public function hapus($id)
    {
        $where = array('id_pegawai' => $id);
        $this->Mhapus->hapus_data($where, 'tb_pegawai');
        $this->session->set_flashdata('berhasil', 'true');
        redirect('admin/C_data_pegawai');
    }
}
