<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email',
            [
                'valid_email' => 'Email tidak benar'
            ]
        );
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Log In | Jatisaba';
            $this->load->view('login', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['email' => $email])->row_array();
            // cek akun
            if ($user) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email']
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="aler"><strong>Selamat Datang Di Menu Admin</strong> </div>');
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="aler"><strong>password salah!!!</strong> </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="aler"> Akun <strong>Tidak Terdaftar!</strong> </div>');
                redirect('auth');
            }
        }
    }


    public function r()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email telah terdaftar!!!',
            'valid_email' => 'Email tidak benar'
        ]);
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[6]',
            [
                'min_length' => 'password terlalu pendek!!! minimal 6 karakter'
            ]
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Log In | Jatisaba';
            $this->load->view('register', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'gambar' => 'undraw_profile.svg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="aler"> Akun sudah terdaftar silahkan Log In </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="aler"> Anda Telah <strong>Log Out</strong> </div>');
        redirect('auth');
    }
}
