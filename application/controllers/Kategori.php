<?php

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }
    public function kluster_k1()
    {
        $data['title'] = 'Jatisaba | kluster 1';

        // config
        $config['base_url'] = 'http://localhost/Jatisaba-App/kategori/kluster_k1';

        $config['full_tag_open'] = ' </div><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['frist_link'] = 'frist';
        $config['frist_tag_open'] = '<li class="page-item">';
        $config['frist_tag_close'] = '</li>';

        $config['last_link'] = 'last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link"> ';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        $config['total_rows'] = $this->db->get_where('inventory', ['kluster' => 'k1'])->num_rows();
        $config['per_page'] = 12;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['total_page'] = $config['total_rows'];
        $data['inventory'] = $this->M_kategori->getData($config['per_page'], $data['start']);
        $data['total'] = $this->M_kategori->pagination();

        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['ses'] = 'kluster_k1';

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function kluster_k2()
    {
        $data['title'] = 'Jatisaba | kluster 2';

        // config
        $config['base_url'] = 'http://localhost/Jatisaba-App/kategori/kluster_k2';

        $config['full_tag_open'] = ' </div><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['frist_link'] = 'frist';
        $config['frist_tag_open'] = '<li class="page-item">';
        $config['frist_tag_close'] = '</li>';

        $config['last_link'] = 'last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link"> ';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        $config['total_rows'] = $this->db->get_where('inventory', ['kluster' => 'k2'])->num_rows();
        $config['per_page'] = 12;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['total_page'] = $config['total_rows'];
        $data['inventory'] = $this->M_kategori->getData2($config['per_page'], $data['start']);
        $data['total'] = $this->M_kategori->pagination();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['ses'] = 'kluster_k2';

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function kluster_k3()
    {
        $data['title'] = 'Jatisaba | kluster 3';

        // config
        $config['base_url'] = 'http://localhost/Jatisaba-App/kategori/kluster_k3';

        $config['full_tag_open'] = ' </div><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['frist_link'] = 'frist';
        $config['frist_tag_open'] = '<li class="page-item">';
        $config['frist_tag_close'] = '</li>';

        $config['last_link'] = 'last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link"> ';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        $config['total_rows'] = $this->db->get_where('inventory', ['kluster' => 'k3'])->num_rows();
        $config['per_page'] = 12;

        $this->pagination->initialize($config);
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['start'] = $this->uri->segment(3);
        $data['total_page'] = $config['total_rows'];
        $data['inventory'] = $this->M_kategori->getData3($config['per_page'], $data['start']);
        $data['total'] = $this->M_kategori->pagination();

        $data['ses'] = 'kluster_k3';

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function kluster_k4()
    {
        $data['title'] = 'Jatisaba | kluster 4';

        // config
        $config['base_url'] = 'http://localhost/Jatisaba-App/kategori/kluster_k4';

        $config['full_tag_open'] = ' </div><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['frist_link'] = 'frist';
        $config['frist_tag_open'] = '<li class="page-item">';
        $config['frist_tag_close'] = '</li>';

        $config['last_link'] = 'last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link"> ';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 12;

        $this->pagination->initialize($config);
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['start'] = $this->uri->segment(3);
        $data['total_page'] = $config['total_rows'];
        $data['inventory'] = $this->M_kategori->getData4($config['per_page'], $data['start']);
        $data['total'] = $this->M_kategori->pagination();

        $data['ses'] = 'kluster_k4';

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }


    // BLOK
    public function blok_1()
    {
        $data['ses'] = 'Blok1';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 1';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 1'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok1();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_2()
    {
        $data['ses'] = 'Blok2';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 2';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 2'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok2();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_3()
    {
        $data['ses'] = 'Blok3';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 3';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 3'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok3();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_4()
    {
        $data['ses'] = 'Blok4';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 4';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 4'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok4();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_5()
    {
        $data['ses'] = 'Blok5';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 5';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 5'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok5();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_6()
    {
        $data['ses'] = 'Blok6';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 6';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 6'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok6();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_7()
    {
        $data['ses'] = 'Blok7';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 7';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 7'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok7();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_8()
    {
        $data['ses'] = 'Blok8';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 8';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 8'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok8();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_9()
    {
        $data['ses'] = 'Blok9';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 9';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 9'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok9();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_10()
    {
        $data['ses'] = 'Blok10';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 10';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 10'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok10();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_11()
    {
        $data['ses'] = 'Blok11';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 11';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 11'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok11();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_12()
    {
        $data['ses'] = 'Blok12';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 12';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 12'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok12();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_13()
    {
        $data['ses'] = 'Blok13';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 13';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 13'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok13();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_14()
    {
        $data['ses'] = 'Blok14';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 14';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 14'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok14();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_15()
    {
        $data['ses'] = 'Blok15';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 15';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 15'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok15();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_16()
    {
        $data['ses'] = 'Blok16';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 16';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 16'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok16();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_17()
    {
        $data['ses'] = 'Blok17';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 17';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 17'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok17();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_18()
    {
        $data['ses'] = 'Blok18';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 18';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 18'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok18();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_19()
    {
        $data['ses'] = 'Blok19';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 19';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 19'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok19();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_20()
    {
        $data['ses'] = 'Blok20';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 20';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 20'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok20();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_21()
    {
        $data['ses'] = 'Blok21';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 21';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 21'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok21();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_22()
    {
        $data['ses'] = 'Blok22';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 22';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 22'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok22();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_23()
    {
        $data['ses'] = 'Blok23';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 23';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 23'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok23();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_24()
    {
        $data['ses'] = 'Blok24';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 24';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 24'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok24();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_25()
    {
        $data['ses'] = 'Blok25';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 25';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 25'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok25();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_26()
    {
        $data['ses'] = 'Blok26';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 26';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 26'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok26();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_27()
    {
        $data['ses'] = 'Blok27';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 27';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 27'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok27();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_28()
    {
        $data['ses'] = 'Blok28';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 28';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 28'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok28();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_29()
    {
        $data['ses'] = 'Blok29';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 29';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 29'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok29();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_30()
    {
        $data['ses'] = 'Blok30';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 30';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 30'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok30();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_31()
    {
        $data['ses'] = 'Blok31';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 31';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 31'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok31();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_32()
    {
        $data['ses'] = 'Blok32';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 32';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 32'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok32();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_33()
    {
        $data['ses'] = 'Blok33';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 33';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 33'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok33();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_34()
    {
        $data['ses'] = 'Blok34';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 34';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 34'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok34();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_35()
    {
        $data['ses'] = 'Blok35';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 35';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 35'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok35();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_36()
    {
        $data['ses'] = 'Blok36';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 36';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 36'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok36();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_37()
    {
        $data['ses'] = 'Blok37';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 37';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 37'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok37();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_38()
    {
        $data['ses'] = 'Blok38';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 38';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 38'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok38();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_39()
    {
        $data['ses'] = 'Blok39';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 39';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 39'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok39();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_40()
    {
        $data['ses'] = 'Blok40';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 40';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 40'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok40();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_41()
    {
        $data['ses'] = 'Blok41';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 41';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 41'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok41();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_42()
    {
        $data['ses'] = 'Blok42';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 42';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 42'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok42();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_43()
    {
        $data['ses'] = 'Blok43';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 43';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 43'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok43();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_44()
    {
        $data['ses'] = 'Blok44';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 44';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 44'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok44();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_45()
    {
        $data['ses'] = 'Blok45';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 45';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 45'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok45();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_46()
    {
        $data['ses'] = 'Blok46';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 46';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 46'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok46();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_47()
    {
        $data['ses'] = 'Blok47';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 47';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 47'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok47();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_48()
    {
        $data['ses'] = 'Blok48';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 48';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 48'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok48();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_49()
    {
        $data['ses'] = 'Blok49';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 49';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 49'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok49();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
    public function blok_50()
    {
        $data['ses'] = 'Blok50';
        // user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jatisaba | Blok 50';
        $data['total_page'] = $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 50'])->num_rows();
        $data['start'] = $this->uri->segment(3);
        $data['inventory'] = $this->M_kategori->blok50();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('tamplate/footer');
    }
}
