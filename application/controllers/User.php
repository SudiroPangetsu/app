<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }
    public function profil()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'My Profil';
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('profil', $data);
        $this->load->view('tamplate/footer');
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profil';

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('tamplate/header', $data);
            $this->load->view('tamplate/sidebar', $data);
            $this->load->view('profil-edit', $data);
            $this->load->view('tamplate/footer');
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');

            // jika ada gambar
            $upload = $_FILES['gambar'];

            if ($upload) {
                $config['allowed_types'] = 'gif|jpg|png|svg';
                $config['max_siza'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {

                    $old_img = $data['user']['gambar'];

                    if ($old_img != 'undraw_profile.svg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_img);
                    }
                    $new_img = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_img);
                } else {

                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="aler"> profil <strong>berhasil diedit </strong> </div>');
            redirect('user/profil');
        }
    }
}
