<!--
Nama        : Kevin Jonathan
NRP         : 2473002
PRAKTIKUM   : SOAL 2 / 19 Mei 2026 - Prak 11
-->

<?php
include 'koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$id = $conn->real_escape_string($id);

$sql = "DELETE FROM siswa WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
