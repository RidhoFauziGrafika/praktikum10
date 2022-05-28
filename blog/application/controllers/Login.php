<?php

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('login/index');
        $this->load->view('layout/footer');
    }

    public function auth()
    {
        // mengambil data yang telah diinput
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // cek user login apakah sudah benar, jika sudah benar arahkan ke halaman mahasiswa, jika salah kembali ke login
        if ($username == 'admin' && $password == 'admin') {
            $userdata = [
                "username" => $username,
                "logged_in" => true,
            ];
            $this->session->set_userdata($userdata);
            redirect('/mahasiswa');
            redirect('/dosen');
            redirect('/matakuliah');
        } elseif ($username == 'mahasiswa' && $password == 'mahasiswa') {
            $userdata = [
                "username" => $username
            ];
            $this->session->set_userdata($userdata);
            redirect('/matakuliah');
        } else {
            redirect('/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/login');
    }
}
