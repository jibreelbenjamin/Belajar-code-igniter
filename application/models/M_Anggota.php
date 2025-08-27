<?php
class M_Anggota extends CI_Model {
    public function Tampil(){
        $query = $this->db->get('tblanggota');
        $data = $query->result_array();
        return $data;
    }

    public function save($anggota, $alamat){
        $data = array(
            'anggota' => $anggota,
            'alamat' => $alamat
        );
        $this->db->insert('tblanggota', $data);

    }
}
?>