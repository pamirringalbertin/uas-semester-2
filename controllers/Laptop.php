<?php
class laptop extends Controller {

    public function __construct(){

        if($_SESSION['session_login'] != 'sudah_login') {
            
        Flasher::setMessage('Login','Tidak ditemukan.','danger');
        header('location: '. base_url . '/login');
        exit;
        
        }
    }

    public function index(){
        $data['title']='Data Jenis Laptop';
        $data['laptop']=$this->model('LaptopModel')->getAllLaptop();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('laptop/index', $data);
        $this->view('templates/footer');
    }

    public function tambahLaptop(){
        $data['title'] = 'Tambah Data Kependudukan';
        $data['merek']=$this->model('MerekModel')->getAllMerek();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('laptop/create', $data);
        $this->view('templates/footer');
    }
    public function simpanLaptop(){
        if( $this->model('LaptopModel')->tambahLaptop($_POST) > 0 ){
            Flasher::setMessage('Berhasil','ditambahkan', 'success');
            header('location: ' . base_url . '/laptop');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/laptop');
            exit;
        }
    }  



    
    public function editLaptop($id){
        $data['title'] = 'Detail Data Jenis Laptop';
        $data['merek']=$this->model('MerekModel')->getAllMerek();
        $data['laptop'] = $this->model('LaptopModel')->getLaptopById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('laptop/edit', $data);
        $this->view('templates/footer');
    }
    public function updateLaptop(){
        if( $this->model('LaptopModel')->updateDataLaptop($_POST) > 0 ){
            Flasher::setMessage('Berhasil','diupdate', 'success');
            header('location: ' . base_url . '/laptop');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/laptop');
            exit;
        }
    }  


    

    public function cariLaptop(){
        $data['title'] = 'Data Jenis Laptop ';
        $data['laptop'] = $this->model('LaptopModel')->cariLaptop();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('laptop/index', $data);
        $this->view('templates/footer');
    }
    public function hapusLaptop($id){
        if( $this->model('LaptopModel')->deleteLaptop($id) > 0 ){
            Flasher::setMessage('Berhasil','dihapus', 'success');
            header('location: ' . base_url . '/laptop');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/laptop');
            exit;
        }
    }  



}
