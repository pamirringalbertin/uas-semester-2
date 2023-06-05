<?php

class LaptopModel {

    private $table = "laptop";
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllLaptop() {
        $this->db->query("SELECT laptop.*, merek.nama_merek FROM " . $this->table . " JOIN merek ON merek.nama_merek = laptop.merek_nama");
        return $this->db->resultSet();
    }

    public function tambahLaptop($data) {
        $this->db->query("INSERT INTO laptop (merek_nama, nama_model, nama_prosesor, nama_ram, nama_penyimpanan, harga) 
            VALUES (:merek_nama, :nama_model, :nama_prosesor, :nama_ram, :nama_penyimpanan, :harga)");
        $this->db->bind('merek_nama', $data['merek_nama']);
        $this->db->bind('nama_model', $data['nama_model']);
        $this->db->bind('nama_prosesor', $data['nama_prosesor']);
        $this->db->bind('nama_ram', $data['nama_ram']);
        $this->db->bind('nama_penyimpanan', $data['nama_penyimpanan']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function getLaptopById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    

    public function updateDataLaptop($data) {
        $this->db->query("UPDATE laptop SET merek_nama=:merek_nama, `nama_model`=:nama_model, nama_prosesor=:nama_prosesor, nama_ram=:nama_ram, nama_penyimpanan=:nama_penyimpanan, harga=:harga WHERE id=:id");
        $this->db->bind('id', $data['id']);
        $this->db->bind('merek_nama', $data['merek_nama']);
        $this->db->bind('nama_model', $data['nama_model']);
        $this->db->bind('nama_prosesor', $data['nama_prosesor']);
        $this->db->bind('nama_ram', $data['nama_ram']);
        $this->db->bind('nama_penyimpanan', $data['nama_penyimpanan']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    

    public function cariLaptop() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE merek_nama LIKE :key 
                          OR nama_model LIKE :key 
                          OR nama_prosesor LIKE :key 
                          OR nama_ram LIKE :key 
                          OR nama_penyimpanan LIKE :key
                          OR harga LIKE :key");
        $this->db->bind(':key', "%$key%", PDO::PARAM_STR);
        return $this->db->resultSet();
    }
    
    

    public function deleteLaptop($id){
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
    
        return $this->db->rowCount();
    }


    
    



}



?>
