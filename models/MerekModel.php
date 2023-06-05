<?php

class MerekModel {

    private $table = "merek";
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllMerek() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahMerek($data){
        $this->db->query("INSERT INTO merek (nama_merek) VALUES(:nama_merek)");
        $this->db->bind('nama_merek',$data['nama_merek']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getMerekById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    

    public function updateDataMerek($data){
        $this->db->query("UPDATE merek SET nama_merek=:nama_merek WHERE id=:id");
        $this->db->bind('id',$data['id']);
        $this->db->bind('nama_merek',$data['nama_merek']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariMerek(){
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama_merek LIKE :key");
        $this->db->bind(':key', "%$key%", PDO::PARAM_STR);
        return $this->db->resultSet();
    }

    public function deleteMerek($id){
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
    
        return $this->db->rowCount();
    }


    
    



}



?>
