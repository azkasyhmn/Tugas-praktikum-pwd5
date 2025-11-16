<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel perkalian</title>
    <style>

        .biru {
            background-color: #03f8fc;
        }

        .kuning {
            background-color: yellow;
        }

        .hijau {
            background-color: lightgreen;
        }

        .nn {
            text-decoration: none;
            color: black;
        }

    </style>
</head>
<body>

    <center>
        <table border="1px solid black" class="table">

            <?php 
            echo "<tr><td>bilangan</td>";
            for ($k = 1; $k < 11; $k++) {
                echo "<td class='hijau'>$k</td>";
            }
            echo "</tr>";

            for ($i = 1; $i < 11; $i++) {
                echo "<tr>";
                echo "<td class='hijau'>$i</td>";
                for ($j = 1; $j < 11; $j++) {                
                    $hasil = $i * $j;
                    if ($hasil % 2 == 1) {
                        $bg = "kuning";
                    } else {
                        $bg = "biru";
                    }
                    echo "<td class='$bg'><a href='a' class='nn'>$hasil</a></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </center>

</body>
</html>