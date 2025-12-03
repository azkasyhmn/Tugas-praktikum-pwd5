<?php

require_once "controller.php";

$controller = new Controller();

$data = $controller->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
            background-color: #1f2681ff;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            color: #fff;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        td {
            padding: 15px;
            text-align: left;
        }

        .head {
            font-weight: bold;
            background-color: #005995ff;
            color: #fff;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        tr:hover {
            background: #1c3b56ff;
            color: #fff;
        }
    </style>
    <h1>Daftar Makanan</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr class="head">
            <td>No</td>
            <td>Nama Makanan</td>
            <td>Kategori</td>
        </tr>

        <?php while ($row = $data->fetch_assoc()) : ?>
            <tr>
                <td><?= $row['id_makanan']?></td>
                <td><?= $row['nama_makanan']?></td>
                <td><?= $row['ketegori_makanan']?></td>
            </tr>

        <?php endwhile; ?>
    </table>
</head>
<body>
    
</body>
</html>