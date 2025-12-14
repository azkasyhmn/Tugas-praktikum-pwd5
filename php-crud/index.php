<?php 

include "Database.php";
$db = new Database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Data Pengguna</title>
</head>
<body>
    <div class="container">
        <h1>Data Pengguna</h1>
        <a href="tambah.php" class="btn btn-primary btn-sm">Tambah Data</a>
        <table border="1" class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No. Handphone</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($db->tampilData() as $siswa) {
    ?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $siswa['nama']; ?></td>
      <td><?php echo $siswa['alamat']; ?></td>
      <td><?php echo $siswa['no_hp']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $siswa['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="proses.php?id=<?php echo $siswa['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
      </td>
    </tr>

    <?php } ?>
  </tbody>
</table>
    </div>

</body>
</html>