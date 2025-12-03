<?php

class Makanan {
    private $koneksi;
    public function __construct($db) {
        $this->koneksi = $db;
    }
    public function getAllMakanan() {
        $query = "SELECT * FROM makanan";
        $result = $this->koneksi->query($query);
        if (!$result) { 
            die("Query failed: " . $this->koneksi->error); 
        }
        return $result; 
    }
}

?>