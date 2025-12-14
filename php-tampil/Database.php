<?php 

class Database {
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "crud";

    public $conn;

    function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        
        // if ($this->conn->error) {
        //     echo "Database tidak terhubung";
        // } else {
        //     echo "Database berhasil terhubung.";
        // }
    }

    function tampilData(){
        $data = mysqli_query($this->conn, "SELECT * FROM user");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $rows;
    }

}

