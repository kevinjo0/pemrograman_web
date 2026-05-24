<!--
Nama        : Kevin Jonathan
NRP         : 2473002
PRAKTIKUM   : SOAL 2 / 19 Mei 2026 - Prak 11
-->

<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $nama = $conn->real_escape_string($nama);
    $kelas = $conn->real_escape_string($kelas);

    $sql = "INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
