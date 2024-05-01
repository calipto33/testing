<?php
session_start();

$servername = "localhost";
$username_db = "id21620734_kelompoksatu";
$password_db = "kelompok1.PBW";
$dbname = "id21620734_barber_shop";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Periksa apakah user sudah login
if (!isset($_SESSION['username'])) {
    echo '<script>alert("Anda belum login."); window.location.href = "halaman-masuk.php";</script>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $namaBaru = isset($_POST["namaBaru"]) ? $_POST["namaBaru"] : "";
    $usernameBaru = isset($_POST["usernameBaru"]) ? $_POST["usernameBaru"] : "";
    $namalama=  $_SESSION['nama'];
    $usernamelama=   $_SESSION['username'];
    
    if (!empty($namaBaru)) {
        $sql = "UPDATE tbl_daftar SET nama = '$namaBaru' WHERE nama = '$namalama'";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['nama'] = $namaBaru;
        } else {
            echo '<script>alert("Gagal mengubah nama: ' . $conn->error . '"); window.location.href = "halaman-ubah-profil.php";</script>';
        }
    }

    if (!empty($usernameBaru)) {
        $sql = "UPDATE tbl_daftar SET username = '$usernameBaru' WHERE username = '$usernamelama'";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['username'] = $usernameBaru;
        } else {
            echo '<script>alert("Gagal mengubah username: ' . $conn->error . '"); window.location.href = "halaman-ubah-profil.php";</script>';
        }
    }
       
    echo '<script>alert("Profil berhasil diubah."); window.location.href = "index.php";</script>';
}

$conn->close();
?>