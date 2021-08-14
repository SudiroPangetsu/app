<?php

class Home extends CI_Controller
{

    public function index()
    {
        $data['blok1'] = $this->M_statistik->blok1();
        $data['blok2'] = $this->M_statistik->blok2();
        $data['blok3'] = $this->M_statistik->blok3();
        $data['blok4'] = $this->M_statistik->blok4();
        $data['blok5'] = $this->M_statistik->blok5();
        $data['blok6'] = $this->M_statistik->blok6();
        $data['blok7'] = $this->M_statistik->blok7();
        $data['blok8'] = $this->M_statistik->blok8();
        $data['blok9'] = $this->M_statistik->blok9();
        $data['blok10'] = $this->M_statistik->blok10();
        $data['blok11'] = $this->M_statistik->blok11();
        $data['blok12'] = $this->M_statistik->blok12();
        $data['blok13'] = $this->M_statistik->blok13();
        $data['blok14'] = $this->M_statistik->blok14();
        $data['blok15'] = $this->M_statistik->blok15();
        $data['blok16'] = $this->M_statistik->blok16();
        $data['blok17'] = $this->M_statistik->blok17();
        $data['blok18'] = $this->M_statistik->blok18();
        $data['blok19'] = $this->M_statistik->blok19();
        $data['blok20'] = $this->M_statistik->blok20();
        $data['blok21'] = $this->M_statistik->blok21();
        $data['blok22'] = $this->M_statistik->blok22();
        $data['blok23'] = $this->M_statistik->blok23();
        $data['blok24'] = $this->M_statistik->blok24();
        $data['blok25'] = $this->M_statistik->blok25();
        $data['blok26'] = $this->M_statistik->blok26();
        $data['blok27'] = $this->M_statistik->blok27();
        $data['blok28'] = $this->M_statistik->blok28();
        $data['blok29'] = $this->M_statistik->blok29();
        $data['blok30'] = $this->M_statistik->blok30();
        $data['blok31'] = $this->M_statistik->blok31();
        $data['blok32'] = $this->M_statistik->blok32();
        $data['blok33'] = $this->M_statistik->blok33();
        $data['blok34'] = $this->M_statistik->blok34();
        $data['blok35'] = $this->M_statistik->blok35();
        $data['blok36'] = $this->M_statistik->blok36();
        $data['blok37'] = $this->M_statistik->blok37();
        $data['blok38'] = $this->M_statistik->blok38();
        $data['blok39'] = $this->M_statistik->blok39();
        $data['blok40'] = $this->M_statistik->blok40();
        $data['blok41'] = $this->M_statistik->blok41();
        $data['blok42'] = $this->M_statistik->blok42();
        $data['blok43'] = $this->M_statistik->blok43();
        $data['blok44'] = $this->M_statistik->blok44();
        $data['blok45'] = $this->M_statistik->blok45();
        $data['blok46'] = $this->M_statistik->blok46();
        $data['blok47'] = $this->M_statistik->blok47();
        $data['blok48'] = $this->M_statistik->blok48();
        $data['blok49'] = $this->M_statistik->blok49();
        $data['blok50'] = $this->M_statistik->blok50();

        $data['k1'] = $this->M_statistik->k1();
        $data['k2'] = $this->M_statistik->k2();
        $data['k3'] = $this->M_statistik->k3();
        $data['k4'] = $this->M_statistik->k4();
        $data['title'] = 'Jatisaba | Home';
        $this->load->view('index', $data);
    }

    public function sejarah()
    {
        $data['title'] = 'Sejarah | Jatisaba';
        $this->load->view('profil/sejarah', $data);
    }
    public function umum()
    {
        $data['title'] = 'Umum | Jatisaba';
        $this->load->view('profil/biografi', $data);
    }
    public function organisasi()
    {

        $data['title'] = 'Organisasi | Jatisaba';
        $this->load->view('organisasi');
    }
}
