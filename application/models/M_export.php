<?php

class M_export extends CI_Model
{
    public function getDataAll()
    {
        return $this->db->get('inventory')->result_array();
    }

    public function detail($id = NULL)
    {
        $query = $this->db->get_where('inventory', array('id' => $id))->result_array();

        return $query;
    }


    // Kluster
    public function kluster1()
    {
        return $this->db->get_where('inventory', ['kluster' => 'k1'])->result_array();
    }
    public function kluster2()
    {
        return $this->db->get_where('inventory', ['kluster' => 'k2'])->result_array();
    }
    public function kluster3()
    {
        return $this->db->get_where('inventory', ['kluster' => 'k3'])->result_array();
    }
    public function kluster4()
    {
        return $this->db->get_where('inventory', ['kluster' => 'k4'])->result_array();
    }

    // Blok
    public function blok1()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 1'])->result_array();
    }
    public function blok2()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 2'])->result_array();
    }
    public function blok3()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 3'])->result_array();
    }
    public function blok4()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 4'])->result_array();
    }
    public function blok5()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 5'])->result_array();
    }
    public function blok6()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 6'])->result_array();
    }
    public function blok7()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 7'])->result_array();
    }
    public function blok8()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 8'])->result_array();
    }
    public function blok9()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 9'])->result_array();
    }
    public function blok10()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 10'])->result_array();
    }
    public function blok11()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 11'])->result_array();
    }
    public function blok12()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 12'])->result_array();
    }
    public function blok13()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 13'])->result_array();
    }
    public function blok14()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 14'])->result_array();
    }
    public function blok15()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 15'])->result_array();
    }
    public function blok16()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 16'])->result_array();
    }
    public function blok17()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 17'])->result_array();
    }
    public function blok18()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 18'])->result_array();
    }
    public function blok19()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 19'])->result_array();
    }
    public function blok20()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 20'])->result_array();
    }
    public function blok21()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 21'])->result_array();
    }
    public function blok22()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 22'])->result_array();
    }
    public function blok23()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 23'])->result_array();
    }
    public function blok24()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 24'])->result_array();
    }
    public function blok25()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 25'])->result_array();
    }
    public function blok26()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 26'])->result_array();
    }
    public function blok27()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 27'])->result_array();
    }
    public function blok28()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 28'])->result_array();
    }
    public function blok29()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 29'])->result_array();
    }
    public function blok30()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 30'])->result_array();
    }
    public function blok31()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 31'])->result_array();
    }
    public function blok32()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 32'])->result_array();
    }
    public function blok33()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 33'])->result_array();
    }
    public function blok34()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 34'])->result_array();
    }
    public function blok35()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 35'])->result_array();
    }
    public function blok36()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 36'])->result_array();
    }
    public function blok37()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 37'])->result_array();
    }
    public function blok38()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 38'])->result_array();
    }
    public function blok39()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 39'])->result_array();
    }
    public function blok40()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 40'])->result_array();
    }
    public function blok41()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 41'])->result_array();
    }
    public function blok42()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 42'])->result_array();
    }
    public function blok43()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 43'])->result_array();
    }
    public function blok44()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 44'])->result_array();
    }
    public function blok45()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 45'])->result_array();
    }
    public function blok46()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 46'])->result_array();
    }
    public function blok47()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 47'])->result_array();
    }
    public function blok48()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 48'])->result_array();
    }
    public function blok49()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 49'])->result_array();
    }
    public function blok50()
    {
        return $this->db->get_where('inventory', ['alamat_tambahan' => 'BLOK 50'])->result_array();
    }
}
