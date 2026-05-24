<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<!--
Nama        : Kevin Jonathan
NRP         : 2473002
PRAKTIKUM   : SOAL 2 / 19 Mei 2026 - Prak 11
-->

    <html>
        <head>
            <title>2473002 - Kevin Jonathan</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <style>
                body { 
                    font-family: Arial, sans-serif; 
                    background-color: #f8f9fa;  
                }

                .box { 
                    background: #fff; 
                    width: 600px; 
                    padding: 20px; 
                    border: 1px solid #ddd; 
                    border-radius: 4px; 
                }

                h3 { 
                    text-align: center; 
                    margin-bottom: 20px; 
                    color: black; 
                }

                .btn { 
                    padding: 8px 15px; 
                    border-radius: 4px; 
                    color: white; 
                    border: none; 
                    cursor: pointer; 
                    font-size: 14px; 
                    display: inline-block; 
                }

                .btn-green { 
                    background-color: #5cb85c; 
                }

                .btn-blue { 
                    background-color: #337ab7; 
                }

                .btn-red { 
                    background-color: #d9534f; 
                }

                table { 
                    width: 100%; 
                    border-collapse: collapse; 
                    margin-top: 15px; 
                }

                table, th, td { 
                    order: 1px solid #ddd; 
                }

                th, td { 
                    padding: 10px; 
                    text-align: left; 
                    font-size: 14px; 
                }

                th { 
                    background-color: #f5f5f5; 
                    font-weight: bold; 
                }
            </style>
            
            <script type="text/javascript" src="jquery.js"></script>
            <script>
                $(document).ready(function() {
                    $("tbody tr").hide().fadeIn(500);
                });
            </script>
        </head>

        <body>
            <div class="box">
                <h3>Data Siswa</h3>
                <a href="tambah.php" class="btn btn-green">Tambah Data</a>
    
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if (!$conn->connect_error) {
                            $val = $conn->query("select 1 from `siswa` LIMIT 1");
                                if($val !== FALSE) {
                                    $sql = "SELECT * FROM siswa ORDER BY id ASC";
                                    $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['kelas']) . "</td>";
                                echo "<td>
                                        <a href='edit.php?id=" . $row['id'] . "' class='btn btn-blue'>Edit</a>
                                        <a href='hapus.php?id=" . $row['id'] . "' class='btn btn-red' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                                        </td>";
                                echo "</tr>";
                            }
                            } else {
                                echo "<tr><td colspan='4' style='text-align:center;'>Belum ada data</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4' style='text-align:center; color: red;'>Tabel 'siswa' belum dibuat. Silakan import database.sql terlebih dahulu.</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4' style='text-align:center; color: red;'>Koneksi Database Gagal.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
