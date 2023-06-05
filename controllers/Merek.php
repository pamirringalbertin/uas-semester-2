<?php
class merek extends Controller {

    public function __construct(){

        if($_SESSION['session_login'] != 'sudah_login') {
            
        Flasher::setMessage('Login','Tidak ditemukan.','danger');
        header('location: '. base_url . '/login');
        exit;
        
        }
    }

    public function index(){
        $data['title']='Data Merek Laptop';
        $data['merek']=$this->model('MerekModel')->getAllMerek();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('merek/index', $data);
        $this->view('templates/footer');
    }




    public function tambahMerek(){
        $data['title'] = 'Tambah Data Merek Laptop';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('merek/create', $data);
        $this->view('templates/footer');
    }
    public function simpanMerek(){
        if( $this->model('MerekModel')->tambahMerek($_POST) > 0 ){
            Flasher::setMessage('Berhasil','ditambahkan', 'success');
            header('location: ' . base_url . '/merek');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/merek');
            exit;
        }
    }  



    
    public function editMerek($id){
        $data['title'] = 'Detail Data Merek Laptop';
        $data['merek'] = $this->model('MerekModel')->getMerekById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('merek/edit', $data);
        $this->view('templates/footer');
    }
    public function updateMerek(){
        if( $this->model('MerekModel')->updateDataMerek($_POST) > 0 ){
            Flasher::setMessage('Berhasil','diupdate', 'success');
            header('location: ' . base_url . '/merek');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/merek');
            exit;
        }
    }  


    

    public function cariMerek(){
        $data['title'] = 'Data Merek Laptop';
        $data['merek'] = $this->model('MerekModel')->cariMerek();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('merek/index', $data);
        $this->view('templates/footer');
    }
    public function hapusMerek($id){
        if( $this->model('MerekModel')->deleteMerek($id) > 0 ){
            Flasher::setMessage('Berhasil','dihapus', 'success');
            header('location: ' . base_url . '/merek');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/merek');
            exit;
        }
    }  



}
