<?php
include "Database.php";

$db = new Database();

if (isset($_GET['aksi']) && $_GET['aksi'] == "tambah") {

    // var_dump($_POST); // DEBUG
    // die; // aktifkan ini kalau perlu

    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp   = $_POST['nohp'];

    $db->tambahData($nama, $alamat, $nohp);
    header("location: index.php");
} elseif (isset($_GET['aksi']) && $_GET['aksi'] == "update") {

    $id = $_POST['id'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp   = $_POST['nohp'];

    $db->updateData($id, $nama, $alamat, $nohp);
    header("location: index.php");
} elseif (isset($_GET['aksi']) && $_GET['aksi'] == "hapus") {
    $id = $_POST['id'];
    $db->hapusData($_GET['id']);
    header("location: index.php");
}
