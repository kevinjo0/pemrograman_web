<?php
$username = $_POST['username'];
$password = $_POST['password'];
?>

<!DOCTYPE html>
<!--
Nama        : Kevin Jonathan
NRP         : 2473002
PRAKTIKUM   : SOAL 1 / 19 Mei 2026 - Prak 11
-->

<html>
    <head>
        <title>2473002 - Kevin Jonathan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            body {
                font-family: "Times New Roman", Times, serif;
                padding: 15px;
            }

            h2 {
                font-size: 24px;
                margin-bottom: 15px;
            }

            .welcome {
                font-size: 28px;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .admin {
                color: blue;
                font-size: 40px;
                font-weight: bold;
            }

            .error {
                color: red;
                font-size: 22px;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .black {
                color: black;
            }

            a {
                font-size: 24px;
            }
        </style>
    </head>

    <body>
        <?php
            if ($username == "admin" && $password == "admin") {
                echo "<h2>Login berhasil!</h2>";
                echo "<div class='welcome'>Selamat datang, <span class='admin'>admin</span>.</div>";
                echo "<a href='soal1.php'>kembali ke halaman login</a>";
            } else {
                echo "<div class='error'>Username : <span class='black'>$username</span> Tidak Terdaftar!</div>";
                echo "<a href='soal1.php'>kembali ke halaman login</a>";
            }
        ?>
    </body>
</html>