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
        <h4>Tambah Data Pengguna</h4>
    <form action="proses.php?aksi=tambah" method="POST">
            
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No. HP</label>
            <input type="text" class="form-control" id="nohp" name="nohp">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>