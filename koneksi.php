<?php
$servername = "localhost";
$username_db = "id21620734_kelompoksatu";
$password_db = "kelompok1.PBW";
$dbname = "id21620734_barber_shop";

$conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

if (!$conn) {
    die("Koneksi Gagal :") . mysqli_connect_error();
} else {
    echo "Koneksi Berhasil";
}
?>