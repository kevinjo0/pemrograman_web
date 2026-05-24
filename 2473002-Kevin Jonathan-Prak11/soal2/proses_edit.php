<!--
Nama        : Kevin Jonathan
NRP         : 2473002
PRAKTIKUM   : SOAL 2 / 19 Mei 2026 - Prak 11
-->

<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $id = $conn->real_escape_string($id);
    $nama = $conn->real_escape_string($nama);
    $kelas = $conn->real_escape_string($kelas);

    $sql = "UPDATE siswa SET nama='$nama', kelas='$kelas' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>
