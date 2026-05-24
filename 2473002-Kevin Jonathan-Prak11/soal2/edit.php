<?php
include 'koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$id = $conn->real_escape_string($id);

$sql = "SELECT * FROM siswa WHERE id='$id'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("Data tidak ditemukan.");
}
?>

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
                    width: 450px; 
                    padding: 20px; 
                    border: 1px solid #ddd; 
                    border-radius: 4px; 
                }

                h3 { 
                    text-align: center; 
                    margin-bottom: 20px; 
                    color: black; 
                }

                .form { 
                    margin-bottom: 15px; 
                }

                .form label { 
                    display: block; 
                    font-size: 13px; 
                    margin-bottom: 5px; 
                    color: black; 
                }

                .form input { 
                    width: 100%; 
                    padding: 8px; 
                    border: 1px solid #ccc; 
                    border-radius: 4px; 
                    box-sizing: border-box; 
                }

                .btn { 
                    padding: 8px 15px; 
                    border-radius: 4px; 
                    color: white; 
                    border: none; 
                    cursor: pointer; 
                    font-size: 14px; 
                    margin-top: 10px; 
                    margin-right: 5px; 
                }

                .btn-green { 
                    background-color: #5cb85c; 
                }

                .btn-blue { 
                    background-color: #337ab7; 
                }
        </style>

        <script type="text/javascript" src="jquery.js"></script>
        <script>
            $(document).ready(function() {
                $("#edit").submit(function(event) {
                    var nama = $("#nama").val();
                    var kelas = $("#kelas").val();
                
                    if(nama.trim() === "" || kelas.trim() === "") {
                        alert("Nama dan Kelas tidak boleh kosong!");
                        event.preventDefault();
                    } else {
                        var jsonData = {
                            "id": $("#id").val(),
                            "nama": nama,
                            "kelas": kelas
                        };
                        console.log("Data Update Siswa (JSON):", JSON.stringify(jsonData));
                    }
                });
            });
        </script>
    </head>

    <body>
        <div class="box">
            <h3>Edit Data Siswa</h3>
            <form id="edit" action="proses_edit.php" method="POST">
            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
        
            <div class="form">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>">
            </div>
            <div class="form">
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" value="<?php echo htmlspecialchars($row['kelas']); ?>">
            </div>
            <button type="submit" class="btn btn-green">Update</button>
            <a href="index.php" class="btn btn-blue">Kembali</a>
            </form>
        </div>
    </body>
</html>
