<?php

require_once "database.php";
require_once "makanan.php";

class Controller {
    private $model;
    public function __construct() {
        $db = new Database();
        $koneksi = $db->connect();
        if (!$koneksi) { 
            die("Connection failed: " . mysqli_connect_error()); 
        }
        $this->model = new Makanan($koneksi);
    }

    public function index(){
        return $this->model->getAllMakanan();
    }
}

?>