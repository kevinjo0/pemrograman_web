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
                    background-color: white; 
                }

                .box { 
                    background: white; 
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
                $("#tambah").submit(function(event) {
                    var nama = $("#nama").val();
                    var kelas = $("#kelas").val();
                
                    if(nama.trim() === "" || kelas.trim() === "") {
                        alert("Nama dan Kelas tidak boleh kosong!");
                        event.preventDefault();
                    } else {
                        var jsonData = {
                            "nama": nama,
                            "kelas": kelas
                        };
                        console.log("Data Tambah Siswa (JSON):", JSON.stringify(jsonData));
                    }
                });
            });
        </script>
    </head>

    <body>
        <div class="box">
            <h3>Tambah Data Siswa</h3>
            <form id="tambah" action="proses_tambah.php" method="POST">
                <div class="form">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama">
                </div>
                <div class="form">
                    <label for="kelas">Kelas:</label>
                    <input type="text" id="kelas" name="kelas">
                </div>
                <button type="submit" class="btn btn-green">Simpan</button>
                    <a href="index.php" class="btn btn-blue">Kembali</a>
            </form>
        </div>
    </body>
</html>
