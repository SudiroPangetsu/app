<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Dashboard | Admin';

        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('nib', $data['keyword']);
        $this->db->or_like('kluster', $data['keyword']);
        $this->db->from('inventory');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 8;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['total_page'] = $config['total_rows'];
        $data['inventory'] = $this->M_inventory->getData($config['per_page'], $data['start'], $data['keyword']);
        $data['total'] = $this->M_inventory->pagination();

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function create()
    {
        $data['title'] = 'Create Data | Admin';

        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kluster'] = [
            'k1', 'k2', 'k3', 'k4'
        ];
        $data['blok'] = [
            'Blok 1', 'Blok 2', 'Blok 3', 'Blok 4', 'Blok 5', 'Blok 6', 'Blok 7', 'Blok 8', 'Blok 9', 'Blok 10',
            'Blok 11', 'Blok 12', 'Blok 13', 'Blok 14', 'Blok 15', 'Blok 16', 'Blok 17', 'Blok 18', 'Blok 19', 'Blok 10',
            'Blok 21', 'Blok 22', 'Blok 23', 'Blok 24', 'Blok 25', 'Blok 26', 'Blok 27', 'Blok 28', 'Blok 29', 'Blok 20',
            'Blok 31', 'Blok 32', 'Blok 33', 'Blok 34', 'Blok 35', 'Blok 36', 'Blok 37', 'Blok 38', 'Blok 39', 'Blok 40',
            'Blok 41', 'Blok 42', 'Blok 43', 'Blok 44', 'Blok 45', 'Blok 46', 'Blok 47', 'Blok 48', 'Blok 49', 'Blok 50'
        ];

        $this->form_validation->set_rules('nomerBerkas', 'Nama Berkas', 'required');
        $this->form_validation->set_rules('nib', 'NIB', 'required|is_unique[inventory.nib]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('tamplate/header', $data);
            $this->load->view('tamplate/sidebar');
            $this->load->view('admin/create', $data);
            $this->load->view('tamplate/footer');
        } else {
            $this->M_inventory->createData($data, 'inventory');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="aler">Data Telah Ditambahkan</div>');
            redirect('dashboard');
        }
    }

    public function detail($id)
    {
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $detail = $this->M_inventory->detail($id);
        $data['detail'] = $detail;
        $data['title'] = 'Detail Data | Admin';
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('admin/detail', $data);
        $this->load->view('tamplate/footer');
    }


    public function delet($id)
    {
        $where = array('id' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="aler">Data Telah Dihapus</div>');

        $this->M_inventory->deleteData($where, 'inventory');
        redirect('dashboard');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data | Admin';

        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kluster'] = [
            'k1', 'k2', 'k3', 'k4'
        ];
        $data['blok'] = [
            'Blok 1', 'Blok 2', 'Blok 3', 'Blok 4', 'Blok 5', 'Blok 6', 'Blok 7', 'Blok 8', 'Blok 9', 'Blok 10',
            'Blok 11', 'Blok 12', 'Blok 13', 'Blok 14', 'Blok 15', 'Blok 16', 'Blok 17', 'Blok 18', 'Blok 19', 'Blok 10',
            'Blok 21', 'Blok 22', 'Blok 23', 'Blok 24', 'Blok 25', 'Blok 26', 'Blok 27', 'Blok 28', 'Blok 29', 'Blok 20',
            'Blok 31', 'Blok 32', 'Blok 33', 'Blok 34', 'Blok 35', 'Blok 36', 'Blok 37', 'Blok 38', 'Blok 39', 'Blok 40',
            'Blok 41', 'Blok 42', 'Blok 43', 'Blok 44', 'Blok 45', 'Blok 46', 'Blok 47', 'Blok 48', 'Blok 49', 'Blok 50'
        ];

        $this->form_validation->set_rules('nomerBerkas', 'Nama Berkas', 'required');
        $this->form_validation->set_rules('nib', 'NIB', 'required|is_unique[inventory.nib]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        $data['update'] = $this->M_inventory->getPerId($id);

        if ($this->form_validation->run() == false) {
            $this->load->view('tamplate/header', $data);
            $this->load->view('tamplate/sidebar');
            $this->load->view('admin/edit', $data);
            $this->load->view('tamplate/footer');
        } else {
            $this->M_inventory->createData($data, 'inventory');
            $this->session->set_flashdata('pesan', '<div class="alert alert-waning" role="aler">Edit Data Berhasil</div>');
            redirect('dashboard');
        }
    }

    public function update()
    {

        $data = [
            'nomer_berkas'    => $this->input->post('nomerBerkas', true),
            'kluster'         => $this->input->post('kluster', true),
            'nib'             => $this->input->post('nib', true),
            'luas'            => $this->input->post('luas', true),
            'blanko'          => $this->input->post('blanko', true),
            'alasan_k3'       => $this->input->post('ak3', true),
            'nomer_alas_hak'  => $this->input->post('nah', true),
            'alamat_obyek'    => $this->input->post('ao', true),
            'alamat_tambahan' => $this->input->post('blok', true),
            'su'              => $this->input->post('su', true),
            'no_shm'          => $this->input->post('shm', true),
            'desa'            => $this->input->post('desa', true),
            'kecamatan'       => $this->input->post('kecamatan', true),
            'nama'            => $this->input->post('nama', true),
            'nik'             => $this->input->post('nik', true),
            'alamat'          => $this->input->post('alamat', true),
            'pekerjaan'       => $this->input->post('pekerjaan', true),
            'tempat_lahir'    => $this->input->post('tmtLahir', true),
            'tanggal_lahir'   => $this->input->post('tgl', true),
            'pbt'             => $this->input->post('pbt', true),
            'di201b'          => $this->input->post('N_DI201B', true),
            'tgl_di201b'      => $this->input->post('DI201B', true),
            'no_202'          => $this->input->post('nmr202', true),
            'tgl_202'         => $this->input->post('no_202', true),
            'di305'           => $this->input->post('di3', true),
            'tgl_di305'       => $this->input->post('tgl_DI305', true),
            'di301'           => $this->input->post('DI301', true),
            'tgl_di301'       => $this->input->post('tgl_DI301', true),
            'di302'           => $this->input->post('DI302', true),
            'tgl_di302'       => $this->input->post('tgl_DI302', true),
            'di307_su'        => $this->input->post('DI307_SU', true),
            'tgl_di307_su'    => $this->input->post('tgl_DI307_SU', true),
            'di307_hak'       => $this->input->post('DI307_HAK', true),
            'tgl_di307_hak'   => $this->input->post('tgl_DI307_HAK', true),
            'di208'           => $this->input->post('DI208', true),
            'tgl_di208'       => $this->input->post('tgl_DI208', true),
            'di301a'          => $this->input->post('DI301A', true),
            'tgl_di301a'      => $this->input->post('tgl_DI301A', true)
        ];
        $id              = $this->input->post('id');

        $where = array(
            'id' => $id
        );
        $this->M_inventory->updateData($where, $data, 'inventory');
        $this->session->set_flashdata('pesan', '<div class="alert alert-waning" role="aler">Edit Data Berhasil</div>');

        redirect('dashboard');
    }
}
