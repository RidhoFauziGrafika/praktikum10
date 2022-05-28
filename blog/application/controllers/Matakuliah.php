<?php

class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        // selanjutnya tinggal kita render data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layout/footer');
    }

    public function form()
    {
        // render view 
        $this->load->view('layout/header');
        $this->load->view('matakuliah/form');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        //akses ke matakuliah_model
        $this->load->model('matakuliah_model', 'matakuliah');
        $_nama = $this->input->post('nama');
        $_sks = $this->input->post('sks');
        $_kode = $this->input->post('kode');

        $data_matkul['nama'] = $_nama;
        $data_matkul['sks'] = $_sks;
        $data_matkul['kode'] = $_kode;

        if ((!empty($_idedit)))
        //update
        {
            $data_matkul['id'] = $_idedit;
            $this->matakuliah->update($data_matkul);
        } else {
            //data baru
            $this->matakuliah->simpan($data_matkul);
        }
        redirect('matakuliah', 'refresh');
    }

    public function edit($id)
    {
        // akses model matakuliah
        $this->load->model('matakuliah_model', 'matakuliah');
        $obj_matkul = $this->matakuliah->getById($id);
        $data['obj_matkul'] = $obj_matkul;
        $this->load->view('layout/header');
        $this->load->view('matakuliah/edit', $data);
        $this->load->view('layout/footer');
    }

    public function delete($id)
    {
        $this->load->model('matakuliah_model', 'matakuliah');
        //mengecek data mahasiswa berdasarkan id
        $data_matkul['id'] = $id;
        $this->matakuliah->delete($data_matkul);
        redirect('matakuliah', 'refresh');
    }

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('/login');
        }
    }
}
