<?php

class M_inventory extends CI_Model
{
    public function getData($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('nib', $keyword);
            $this->db->or_like('kluster', $keyword);
        }
        return $this->db->get('inventory', $limit, $start)->result_array();
    }
    public function pagination()
    {
        return $this->db->get('inventory')->num_rows();
    }

    public function createData($data, $table)
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

        $this->db->insert($table, $data);
    }

    public function detail($id = NULL)
    {
        $query = $this->db->get_where('inventory', array('id' => $id))->row();

        return $query;
    }

    public function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function editData($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function getPerId($id)
    {
        return $this->db->get_where('inventory', array('id' => $id))->row_array();
    }

    public function detail1($id = NULL)
    {
        $query = $this->db->get_where('inventory', array('id' => $id))->result_array();

        return $query;
    }
}
