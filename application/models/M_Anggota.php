<?php
class M_Anggota extends CI_Model {
    public function Tampil(){
        $query = $this->db->get('tblanggota');
        $data = $query->result_array();
        return $data;
    }
}
?>