<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_penilaian extends CI_Controller
{

    public function index()
    {
        $data['pegawai'] = $this->db->query("SELECT * FROM tb_pegawai")->result();
        $data['penilaian'] = $this->db->query("SELECT * FROM tb_penilaian")->result();
        $data['title'] = 'Halaman Data Penilaian - ADMIN';
        $data['menu'] = '3';
        $data['menu_atas'] = '0';
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_penilaian/V_penilaian', $data);
        $this->load->view('admin/layout/footer');
    }

    public function hapus()
    {
        $this->Mhapus->reset_table();
        $this->session->set_flashdata('berhasil', 'true');
        redirect('admin/C_penilaian');
    }

    public function Detail($id)
    {
        $data['detail'] = $this->db->query("SELECT * FROM tb_pegawai pg, tb_penilaian pn  WHERE  pg.id_pegawai=pn.id_pegawai && $id=pg.id_pegawai")->result();
        $data['pegawai'] = $this->db->query("SELECT * FROM tb_pegawai tp WHERE tp.id_pegawai=$id")->result();

        $data['title'] = 'Detail Penilaian - ADMIN';
        $data['menu'] = '3';
        $data['menu_atas'] = '0';

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_penilaian/V_detail_penilaian', $data);
        $this->load->view('admin/layout/footer');
    }
}
