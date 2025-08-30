<?php
class Anggota extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Anggota');
    }

    public function index(){
        echo 'data anggota';
    }

    public function insert(){
        $anggota = $this->input->post('anggota');
        $alamat = $this->input->post('alamat');
        
        $this->M_Anggota->save($anggota, $alamat);
        redirect('index.php/anggota/select');
    }

    public function tambah(){
        $data['judul'] = 'Tambah Data Anggota Perpustakaan';
        $this->load->view('template/header.php', $data);
        $this->load->view('anggota/form_tambah');
        $this->load->view('template/footer.php');
    }
    
    public function select(){
        $data['judul'] = 'Data Anggota Perpustakaan';
        $data['anggota'] = $this->M_Anggota->Tampil();
        $this->load->view('template/header.php', $data);
        $this->load->view('anggota/view_data.php', $data);
        $this->load->view('template/footer.php');
    }

    public function get_edit(){
        $id = $this->uri->segment(3);
        $hasil = $this->M_Anggota->pilih_anggota($id);
        $i = $hasil->row_array();
        $data = array(
            'idanggota' => $i['idanggota'],
            'anggota' => $i['anggota'],
            'alamat' => $i['alamat']
        );
        $data['judul'] = 'Edit data Anggota Perpustakaan';
        $this->load->view('template/header.php', $data);
        $this->load->view('anggota/form_ubah.php', $data);
        $this->load->view('template/footer.php');
    }

    public function update(){
        $idanggota = $this->input->post('idanggota');
        $anggota = $this->input->post('anggota');
        $alamat = $this->input->post('alamat');

        $this->M_Anggota->edit($idanggota, $anggota, $alamat);
        redirect('index.php/anggota/select');
    }

    public function delete($id=1){
        echo "delete $id";
    }

}
?>