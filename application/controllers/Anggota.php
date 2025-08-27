<?php
class Anggota extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Anggota');
    }

    public function index(){
        echo 'data anggota';
    }

    public function tambah(){
        $data['judul'] = 'Data Anggota Perpustakaan';
        $this->load->view('template/header.php', $data);
        $this->load->view('anggota/form_tambah');
        $this->load->view('template/footer.php');
    }

    public function insert(){
        $anggota = $this->input->post('anggota');
        $alamat = $this->input->post('alamat');
        
        $this->M_Anggota->save($anggota, $alamat);
        redirect('index.php/anggota');
    }
    
    public function select(){
        $data['judul'] = 'Data Anggota Perpustakaan';
        $data['anggota'] = $this->M_Anggota->Tampil();
        $this->load->view('template/header.php', $data);
        $this->load->view('anggota/view_data.php', $data);
        $this->load->view('template/footer.php');
    }

    public function delete($id=1){
        echo "delete $id";
    }

    public function update($id=1, $nama='el'){
        echo "update id = $id dan nama $nama";
    }
}
?>