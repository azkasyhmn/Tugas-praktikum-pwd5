<?php
    $host = mysqli_connect("localhost", "root", "");
    if($host){
        echo "Koneksi host berhasil.<br/>";
    } else {
        echo "Koneksi gagal.<br/>";
    }

    $db = mysqli_select_db($host, "db_makanan");
    if($db){
        echo "Koneksi database berhasil.";
    } else {
        echo "Koneksi database gagal.";
    }
?>