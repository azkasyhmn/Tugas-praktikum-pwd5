<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "db_makanan";

    public function connect(){
        $koneksi = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
        if ($koneksi->connect_error){
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    return $koneksi;

    }  
}

?>