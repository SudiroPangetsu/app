<?php

class Laporan extends CI_Controller
{
    public function dashboard()
    {
        $data['title'] = 'export-excel';
        $data['inventory'] = $this->M_export->getDataAll();

        $this->load->view('excel', $data);
    }

    public function detail($id)
    {
        $mpdf = new \Mpdf\Mpdf();

        $getdata['inventory'] = $this->M_export->detail($id);
        $getname['inventory'] = $this->M_export->getDataAll();
        $name = $getdata['inventory'][0]['nib'];
        $data = $this->load->view('pdf', $getdata, TRUE);
        $mpdf->writeHTML($data);
        $mpdf->Output($name, 'I');
    }

    // KLUSTER DATA
    public function kluster_k1()
    {
        $data['title'] = 'Data_Kluster_1';
        $data['inventory'] = $this->M_export->kluster1();
        $this->load->view('excel', $data);
    }
    public function kluster_k2()
    {
        $data['title'] = 'Data_Kluster_2';
        $data['inventory'] = $this->M_export->kluster2();
        $this->load->view('excel', $data);
    }
    public function kluster_k3()
    {
        $data['title'] = 'Data_Kluster_3';
        $data['inventory'] = $this->M_export->kluster3();
        $this->load->view('excel', $data);
    }
    public function kluster_k4()
    {
        $data['title'] = 'Data_Kluster_4';
        $data['inventory'] = $this->M_export->kluster4();
        $this->load->view('excel', $data);
    }


    // BLOK 
    public function Blok1()
    {
        $data['title'] = 'Data_Blok_1';
        $data['inventory'] = $this->M_export->Blok1();
        $this->load->view('excel', $data);
    }
    public function Blok2()
    {
        $data['title'] = 'Data_Blok_2';
        $data['inventory'] = $this->M_export->Blok2();
        $this->load->view('excel', $data);
    }
    public function Blok3()
    {
        $data['title'] = 'Data_Blok_3';
        $data['inventory'] = $this->M_export->Blok3();
        $this->load->view('excel', $data);
    }
    public function Blok4()
    {
        $data['title'] = 'Data_Blok_4';
        $data['inventory'] = $this->M_export->Blok4();
        $this->load->view('excel', $data);
    }
    public function Blok5()
    {
        $data['title'] = 'Data_Blok_5';
        $data['inventory'] = $this->M_export->Blok5();
        $this->load->view('excel', $data);
    }
    public function Blok6()
    {
        $data['title'] = 'Data_Blok_6';
        $data['inventory'] = $this->M_export->Blok6();
        $this->load->view('excel', $data);
    }
    public function Blok7()
    {
        $data['title'] = 'Data_Blok_7';
        $data['inventory'] = $this->M_export->Blok7();
        $this->load->view('excel', $data);
    }
    public function Blok8()
    {
        $data['title'] = 'Data_Blok_8';
        $data['inventory'] = $this->M_export->Blok8();
        $this->load->view('excel', $data);
    }
    public function Blok9()
    {
        $data['title'] = 'Data_Blok_9';
        $data['inventory'] = $this->M_export->Blok9();
        $this->load->view('excel', $data);
    }
    public function Blok10()
    {
        $data['title'] = 'Data_Blok_10';
        $data['inventory'] = $this->M_export->Blok10();
        $this->load->view('excel', $data);
    }
    public function Blok11()
    {
        $data['title'] = 'Data_Blok_11';
        $data['inventory'] = $this->M_export->Blok11();
        $this->load->view('excel', $data);
    }
    public function Blok12()
    {
        $data['title'] = 'Data_Blok_12';
        $data['inventory'] = $this->M_export->Blok12();
        $this->load->view('excel', $data);
    }
    public function Blok13()
    {
        $data['title'] = 'Data_Blok_13';
        $data['inventory'] = $this->M_export->Blok13();
        $this->load->view('excel', $data);
    }
    public function Blok14()
    {
        $data['title'] = 'Data_Blok_14';
        $data['inventory'] = $this->M_export->Blok14();
        $this->load->view('excel', $data);
    }
    public function Blok15()
    {
        $data['title'] = 'Data_Blok_15';
        $data['inventory'] = $this->M_export->Blok15();
        $this->load->view('excel', $data);
    }
    public function Blok16()
    {
        $data['title'] = 'Data_Blok_16';
        $data['inventory'] = $this->M_export->Blok16();
        $this->load->view('excel', $data);
    }
    public function Blok17()
    {
        $data['title'] = 'Data_Blok_17';
        $data['inventory'] = $this->M_export->Blok17();
        $this->load->view('excel', $data);
    }
    public function Blok18()
    {
        $data['title'] = 'Data_Blok_18';
        $data['inventory'] = $this->M_export->Blok18();
        $this->load->view('excel', $data);
    }
    public function Blok19()
    {
        $data['title'] = 'Data_Blok_19';
        $data['inventor20'] = $this->M_export->Blok19();
        $this->load->view('excel', $data);
    }
    public function Blok20()
    {
        $data['title'] = 'Data_Blok_20';
        $data['inventory'] = $this->M_export->Blok20();
        $this->load->view('excel', $data);
    }
    public function Blok21()
    {
        $data['title'] = 'Data_Blok_21';
        $data['inventory'] = $this->M_export->Blok21();
        $this->load->view('excel', $data);
    }
    public function Blok22()
    {
        $data['title'] = 'Data_Blok_22';
        $data['inventory'] = $this->M_export->Blok22();
        $this->load->view('excel', $data);
    }
    public function Blok23()
    {
        $data['title'] = 'Data_Blok_23';
        $data['inventory'] = $this->M_export->Blok23();
        $this->load->view('excel', $data);
    }
    public function Blok24()
    {
        $data['title'] = 'Data_Blok_24';
        $data['inventory'] = $this->M_export->Blok24();
        $this->load->view('excel', $data);
    }
    public function Blok25()
    {
        $data['title'] = 'Data_Blok_25';
        $data['inventory'] = $this->M_export->Blok25();
        $this->load->view('excel', $data);
    }
    public function Blok26()
    {
        $data['title'] = 'Data_Blok_26';
        $data['inventory'] = $this->M_export->Blok26();
        $this->load->view('excel', $data);
    }
    public function Blok27()
    {
        $data['title'] = 'Data_Blok_27';
        $data['inventor28'] = $this->M_export->Blok27();
        $this->load->view('excel', $data);
    }
    public function Blok28()
    {
        $data['title'] = 'Data_Blok_28';
        $data['inventory'] = $this->M_export->Blok28();
        $this->load->view('excel', $data);
    }
    public function Blok29()
    {
        $data['title'] = 'Data_Blok_29';
        $data['inventory'] = $this->M_export->Blok29();
        $this->load->view('excel', $data);
    }
    public function Blok30()
    {
        $data['title'] = 'Data_Blok_30';
        $data['inventory'] = $this->M_export->Blok30();
        $this->load->view('excel', $data);
    }
    public function Blok31()
    {
        $data['title'] = 'Data_Blok_31';
        $data['inventory'] = $this->M_export->Blok31();
        $this->load->view('excel', $data);
    }
    public function Blok32()
    {
        $data['title'] = 'Data_Blok_32';
        $data['inventory'] = $this->M_export->Blok32();
        $this->load->view('excel', $data);
    }
    public function Blok33()
    {
        $data['title'] = 'Data_Blok_33';
        $data['inventory'] = $this->M_export->Blok33();
        $this->load->view('excel', $data);
    }
    public function Blok34()
    {
        $data['title'] = 'Data_Blok_34';
        $data['inventory'] = $this->M_export->Blok34();
        $this->load->view('excel', $data);
    }
    public function Blok35()
    {
        $data['title'] = 'Data_Blok_35';
        $data['inventory'] = $this->M_export->Blok35();
        $this->load->view('excel', $data);
    }
    public function Blok36()
    {
        $data['title'] = 'Data_Blok_36';
        $data['inventory'] = $this->M_export->Blok36();
        $this->load->view('excel', $data);
    }
    public function Blok37()
    {
        $data['title'] = 'Data_Blok_37';
        $data['inventory'] = $this->M_export->Blok37();
        $this->load->view('excel', $data);
    }
    public function Blok38()
    {
        $data['title'] = 'Data_Blok_38';
        $data['inventory'] = $this->M_export->Blok38();
        $this->load->view('excel', $data);
    }
    public function Blok39()
    {
        $data['title'] = 'Data_Blok_39';
        $data['inventory'] = $this->M_export->Blok39();
        $this->load->view('excel', $data);
    }
    public function Blok40()
    {
        $data['title'] = 'Data_Blok_40';
        $data['inventory'] = $this->M_export->Blok40();
        $this->load->view('excel', $data);
    }
    public function Blok41()
    {
        $data['title'] = 'Data_Blok_41';
        $data['inventory'] = $this->M_export->Blok41();
        $this->load->view('excel', $data);
    }
    public function Blok42()
    {
        $data['title'] = 'Data_Blok_42';
        $data['inventory'] = $this->M_export->Blok42();
        $this->load->view('excel', $data);
    }
    public function Blok43()
    {
        $data['title'] = 'Data_Blok_43';
        $data['inventory'] = $this->M_export->Blok43();
        $this->load->view('excel', $data);
    }
    public function Blok44()
    {
        $data['title'] = 'Data_Blok_44';
        $data['inventory'] = $this->M_export->Blok44();
        $this->load->view('excel', $data);
    }
    public function Blok45()
    {
        $data['title'] = 'Data_Blok_45';
        $data['inventory'] = $this->M_export->Blok45();
        $this->load->view('excel', $data);
    }
    public function Blok46()
    {
        $data['title'] = 'Data_Blok_46';
        $data['inventory'] = $this->M_export->Blok46();
        $this->load->view('excel', $data);
    }
    public function Blok47()
    {
        $data['title'] = 'Data_Blok_47';
        $data['inventory'] = $this->M_export->Blok47();
        $this->load->view('excel', $data);
    }
    public function Blok48()
    {
        $data['title'] = 'Data_Blok_48';
        $data['inventory'] = $this->M_export->Blok48();
        $this->load->view('excel', $data);
    }
    public function Blok49()
    {
        $data['title'] = 'Data_Blok_49';
        $data['inventory'] = $this->M_export->Blok49();
        $this->load->view('excel', $data);
    }
    public function Blok50()
    {
        $data['title'] = 'Data_Blok_50';
        $data['inventory'] = $this->M_export->Blok50();
        $this->load->view('excel', $data);
    }
}
